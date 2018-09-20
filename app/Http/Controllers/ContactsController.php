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
        return $this->contacts->with('messages')->get();
    }


     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
    public function store(Request $request)
    {

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
        $this->contacts->whereId($id)->update($request->all());
        return $this->contacts->with('messages')->get();
    }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $this->contacts->find($id)->delete();
         return $this->contacts->with('messages')->get();
     }


     /**
      * Show messages from Contacts
      *
      * @return \Illuminate\Http\Response
      */
      public function messages($id)
      {
          return $this->contacts->find($id)->messages;
      }



}
