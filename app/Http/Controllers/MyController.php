<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postcard;


class MyController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function getPostcards(){
        $postcards = Postcard::all();
        return json_encode($postcards);
    }

    public function create(){
        return view('pages.create');
    }

    public function store(Request $request){

        $data = $request -> validate([
            'sender' => 'required|string',
            'address' => 'required|string',
            'text' => 'required|string',
        ]);

        // prendo l'img dal form
        $imageFile = $request -> file('image');
        // assegno un nome univoco all'img
        $imageName = rand(100000,999999) . '_' . time() . '.' . $imageFile -> getClientOriginalName();
        // salvo l'img nello storage
        $imageFile -> storeAs('/asset/', $imageName , 'public');
        // aggiungo l'img all'array che salvero' nel db
        $data['image'] = $imageName;
        // salvo l'array nel db
        Postcard::create($data);
        // torno alla home
        return redirect() -> route('home');

    }
}
