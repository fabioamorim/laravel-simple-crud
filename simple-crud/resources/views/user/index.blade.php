@extends('layout')
@section('title', 'My System Home')
    
@section('content')
    @if (!empty($message))
        <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
            <strong>Attetion!</strong> {{ $message}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>  
    @endif
    <h2 class="text text-center mt-5">Users</h2>
    
    @if ($users)
     <table class="table table-sm">
        <thead>
          <tr>
            <th>NAME</th>
            <th>CPF</th>
            <th>E-MAIL</th>
            <th>PHONE NUMBER</th>
            <th>CREATED AT</th>
            <th>UPDATED AT</th>
            <th>CONFIGURATION</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr>
              <td>{{ $user->name }}</td>
              <td>{{ $user->cpf }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->phone_number }}</td>
              <td>{{ $user->created_at }}</td>
              <td>{{ $user->updated_at }}</td>
              <td>
                  <form action="{{ route('user_destroy',$user->id) }}" method="post">
                    <a href="/user/update/{{ $user->id }}" class="btn btn-outline-secondary btn-sm">atualizar</a>
                    <button type="submit" class="btn btn-outline-secondary btn-sm">delete</button>
                    @csrf
                    @method('DELETE')
                  </form>
              
              </td>
            </tr>
          @endforeach
        </tbody>
        
      </table>

    @endif
    
@endsection