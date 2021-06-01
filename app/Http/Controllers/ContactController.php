<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller

{
      public function index(){
        
        return Contact::all();
    }

    public function store(Request $request){

         return Contact::create($request->all());
      

    }

    public function show($id){

      $contact = Contact::findOrFail($id);

      return $contact;
    }

    public function update(Request $request, $id){
      
      // $contact = Contact::find($id);

      // $contact->firstName = $request->input('firstName');
      // $contact->lastName = $request->input('lastName');
      // $contact->email = $request->input('email');

      // $contact->save();

      // return $contact;

      Contact::where('id',$id)->update($request->all());
      
    }

    public function destroy($id){
      
      Contact::where('id',$id)->delete();

      
    }
}
