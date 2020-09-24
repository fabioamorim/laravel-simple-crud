@extends('layout')

@section('title', 'Update')
    
@section('content')
<div class="col-sm-12 col align-self-center"><br>
    <h4 class = "text text-center title">Update user</h4>
    <aside class="col-sm-8 col centered">
        <div class="card card-register">
            <article class="card-body"> 
                <form id="formulario"  method="POST" action="/user/update">
                    <div class="col-sm-12 form-group"> 
                        @csrf
                        @method('PUT')   
                        <input name="id"type="hidden" value="{{ $user->id }}"><br>                   
                        <input name="name" class="form-control" type="text"  placeholder="Name" value="{{ $user->name }}"><br>
                        <input name="cpf" class="form-control  input" type="text" placeholder="Cpf" value="{{ $user->cpf }}"><br>
                        <input name="email" class="form-control  input" type="text" placeholder="E-mail" value="{{ $user->email }}"><br>
                        <input name="phone_number" class="form-control  input" type="text"  placeholder="Phone Number" value="{{ $user->phone_number }}"><br>
                        <button type="submit" id="btn-update" class="btn btn-outline-secondary btn-block btn-sm"> Update </button>
                        <a class="btn btn-outline-secondary btn-block btn-sm" href="/user">Calcel</a>
                    </div> <!-- form-group// -->
                </form>
            </article>
        </div>
        <br>
  
    </aside>
  </div>      
@endsection
