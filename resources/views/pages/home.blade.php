@extends('layouts.main-layout')
@section('content')

    <h1>
        Postcards List
    </h1>

    <a class="btn btn-primary" href="{{ route('create.postcard') }}">Add New Postcards</a>
    <postcards-component></postcards-component>
    
@endsection