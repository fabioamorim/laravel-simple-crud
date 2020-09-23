<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UsersController extends Controller
{
    function index(Request $request) 
    {

        $message = $request->session()->get('message');

        return view('user.index', ['message' => $message]);
    }

    function create()
    {
        return view('user.create');
    }

    function store(Request $request)
    {
        $user = Users::create($request->all());

        $request->session()->flash('message', "The user was created with success!");

        return redirect('/user');
    }

    function destroy()
    {
        return "Delete the user.";
    }
}