<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UsersController extends Controller
{
    function index(Request $request) 
    {
        $users = Users::query()
            ->orderBy('name')->get();

        $message = $request->session()->get('message');

        return view('user.index', ['users' => $users, 'message' => $message]);
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

    function update(Request $request)
    {
        $id = $request->id;

        $user = Users::where('id', $id)->first();

        return view('user.update', ['user'=> $user]);
    }

    function refresh(Request $request)
    {
        
        $user = Users::find($request->id);
        $user->name = $request->name;
        $user->cpf  = $request->cpf;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;

        $user->save();
        

        $request->session()->flash('message', "The user was updated with success!");

        return redirect('/user');
    }

    function destroy()
    {
        return "Delete the user.";
    }
}