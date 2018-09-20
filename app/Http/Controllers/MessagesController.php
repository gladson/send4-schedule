<?php

namespace App\Http\Controllers;

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
            //return $this->messages->all();
            return $this->messages->with('contact')->get();
        }


         /**
          * Store a newly created resource in storage.
          *
          * @param  \Illuminate\Http\Request  $request
          * @return \Illuminate\Http\Response
          */
         public function store(Request $request)
         {
             return $this->messages->create($request->all());
         }

         /**
          * Display the specified resource.
          *
          * @param  int  $id
          * @return \Illuminate\Http\Response
          */
         public function show($id)
         {
             return $this->messages->find($id)->with('contact')->get();
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
             return $this->messages->whereId($id)->update($request->all());
             return $this->messages->with('contact')->get();
         }

         /**
          * Remove the specified resource from storage.
          *
          * @param  int  $id
          * @return \Illuminate\Http\Response
          */
         public function destroy($id)
         {
             $this->messages->find($id)->delete();
             return $this->messages->with('contact')->get();
         }
}
