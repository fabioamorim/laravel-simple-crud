@extends('layout')

@section('title', 'Register')
    
@section('content')

<div class="col-sm-12 col align-self-center"><br>
    <h4 class = "text text-center title">New user</h4>
    <aside class="col-sm-8 col centered">
        <div class="card card-register">
            <article class="card-body"> 
            <form id="formulario"  method="POST" action="{{ route('user_store')}}">
                    <div class="col-sm-12 form-group"> 
                        @csrf                      
                        <input name="name" class="form-control" type="text"  placeholder="Name"><br>
                        <input name="cpf" id="cpf" class="form-control  input" data-mask="000.000.000-00" type="text" placeholder="Cpf"><br>
                        <input name="email" class="form-control  input" type="text" placeholder="E-mail"><br>
                        <input name="phone_number" id="phone_number" data-mask="(00) 00000-0000"  class="form-control  input" type="text"  placeholder="Phone Number"><br>
                        <button type="submit" id="btn-login" class="btn btn-outline-secondary btn-block btn-sm"> Save  </button>
                        <a class="btn btn-outline-secondary btn-block btn-sm" href="/user">Calcel</a>
                    </div> <!-- form-group// -->
                </form>
            </article>
        </div>
        <br>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </aside>
  </div>     
@endsection

