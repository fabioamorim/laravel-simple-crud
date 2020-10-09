<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Http\Requests\UsersFormRequest;

class UsersController extends Controller
{
    function index(Request $request) 
    {
    //    $users = Users::query()
    //       ->orderBy('name')->get();

        $message = $request->session()->get('message');

        $users = $request->session()->get('user');

        return view('user.index', ['users' => $users, 'message' => $message]);
    }

    function create()
    {
        return view('user.create');
    }

    function store(UsersFormRequest $request)
    {

         $user = Users::create($request->all());

         $request->session()->flash('message', "The user was created with success!");

        return redirect()->route('users_list');
    }

    function update(Request $request)
    {
        $id = $request->id;

        $user = Users::where('id', $id)->first();

        return view('user.update', ['user'=> $user]);
    }

    function refresh(UsersFormRequest $request)
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

    function destroy(Request $request)
    {
        Users::destroy($request->id);

        $request->session()->flash('message', "The user was deleted with success!");

        return redirect('/user');
    }

    function search(Request $request){

        $user = Users::where('name', 'like', '%'.$request->name.'%')->get();

        $request->session()->flash('user', $user);

        return redirect('/user');
    }
}