<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;

use App\Message;

class MessagesController extends Controller
{
    protected $messages;

        public function __construct(Message $messages) {
            $this->messages = $messages;
        }

        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            try {
                if ($this->messages->exists()) {
                    return $this->messages->with('contact')->get();
                } else {
                    return response()->json(['error'=>'Não foi encontrado.'], 404);
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
                $messages = [
                    'contact_id.exists' => 'Contato não foi encontrado.',
                ];

                $validator = Validator::make($request->all(), [
                    'contact_id' => 'required|exists:contacts,id',
                    'message' => 'required',
                ], $messages);
                if ($validator->fails()) {
                    return response()->json(['error'=>$validator->errors()], 401);
                } else {
                    $save_message = $this->messages->create($request->all());
                    return $this->messages->whereId($save_message->id)->with('contact')->get();
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
                return $this->messages->findOrfail($id)->whereId($id)->with('contact')->get();
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
                $messages = [
                    'contact_id.exists' => 'Contato não foi encontrado.',
                ];
                $validator = Validator::make($request->all(), [
                    'contact_id' => 'required|exists:contacts,id',
                    'message' => 'required',
                ], $messages);
                if ($validator->fails()) {
                    return response()->json(['error'=>$validator->errors()], 401);
                } else {
                    $this->messages->whereId($id)->update($request->all());
                    return $this->messages->findOrfail($id)->with('contact')->get();
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
                $this->messages->findOrfail($id)->delete();
                return response()->json(['success'=>'Deletado com sucesso.'], 410);
            } catch (\Exception $ex) {
                return response()->json(['error'=>'Não foi encontrado.'], 404);
            } catch (\Throwable $ex) {
                return response()->json(['error'=>'Não foi encontrado.'], 417);
            }
         }
}
