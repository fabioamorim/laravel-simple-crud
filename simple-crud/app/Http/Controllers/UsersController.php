<?php

namespace App\Http\Controllers;

class UsersController extends Controller
{
    function index() 
    {
        return "The principal page.";
    }

    function create()
    {
        return "Show the create user form.";
    }

    function store()
    {
        return "Save on database.";
    }

    function destroy()
    {
        return "Delete the user.";
    }
}