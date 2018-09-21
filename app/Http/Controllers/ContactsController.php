<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;

use App\Contact;

class ContactsController extends Controller
{
    protected $contacts;

    public function __construct(Contact $contacts) {
        $this->contacts = $contacts;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return $this->contacts->all();
        try {
            if ($this->contacts->with('messages')->exists()) {
                return $this->contacts->with('messages')->get();
            }
        } catch (\Exception $ex) {
            return response()->json(['error'=>'Não foi encontrado.'], 404);
        } catch (\Throwable $ex) {
            return response()->json(['error'=>'Não foi encontrado.'], 417);
        }
    }


     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required|email',
                'phonenumber' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401);
            } else {
                return $this->contacts->create($request->all());
            }
        } catch (\Exception $ex) {
            return response()->json(['error'=>'Não foi encontrado.'], 404);
        } catch (\Throwable $ex) {
            return response()->json(['error'=>'Não foi encontrado.'], 417);
        }
    }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
    public function show($id)
    {
        try {
            return $this->contacts->findOrfail($id);
        } catch (\Exception $ex) {
            return response()->json(['error'=>'Não foi encontrado.'], 404);
        } catch (\Throwable $ex) {
            return response()->json(['error'=>'Não foi encontrado.'], 417);
        }
    }


     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
    public function update(Request $request, $id)
    {

        try {

            $validator = Validator::make($request->all(), [
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required|email',
                'phonenumber' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401);
            } else {
                //$this->contacts->where('id', $id)->update($request->all());
                $this->contacts->whereId($id)->update($request->all());
                return $this->contacts->findOrfail($id);
            }

        } catch (\Exception $ex) {
            return response()->json(['error'=>'Não foi encontrado.'], 404);
        } catch (\Throwable $ex) {
            return response()->json(['error'=>'Não foi encontrado.'], 417);
        }

    }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
    public function destroy($id)
    {
        try {

            $this->contacts->findOrfail($id)->delete();
            return response()->json(['success'=>'Deletado com sucesso.'], 410);

        } catch (\Exception $ex) {
            return response()->json(['error'=>'Não foi encontrado.'], 404);
        } catch (\Throwable $ex) {
            return response()->json(['error'=>'Não foi encontrado.'], 417);
        }

    }


     /**
      * Show messages from Contacts
      *
      * @return \Illuminate\Http\Response
      */
    public function messages($id)
    {
        try {
            if (!$this->contacts->find($id)->messages->isEmpty()) {
                return $this->contacts->findOrfail($id)->messages;
            } else {
                return response()->json(['error'=>'Não foi encontrado.'], 404);
            }
        } catch (\Exception $ex) {
            return response()->json(['error'=>'Não foi encontrado.'], 404);
        } catch (\Throwable $ex) {
            return response()->json(['error'=>'Não foi encontrado.'], 417);
        }
    }
}
