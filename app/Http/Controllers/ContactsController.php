<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function create()
    {
        return view('contacts.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|min:3',
            'email'=>'required|email',
            'message'=>'required|min:10',
        ]);
    }
}