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
    <h1>Hello, this is tha first page, Welcome =)</h1>
@endsection