@extends('layouts.main-layout')
@section('content')

    <h1>
        Create Postcard
    </h1>
    
    <form action="{{ route('store.postcard') }}"
        method="POST"
        enctype="multipart/form-data">

        @method('Post')
        @csrf

        <label for="sender">Sender</label><br>
        <input type="text" name="sender"><br>
        <label for="address">Address</label><br>
        <input type="text" name="address"><br>
        <label for="text">Text</label><br>
        <textarea name="text" cols="30" rows="10"></textarea><br>
        <label for="image">Image</label><br>
        <input type="file" name="image"><br>

        <button type="submit">CREATE</button>

    </form>
    
@endsection