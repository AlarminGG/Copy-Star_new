@extends('layouts.app')

@section('content')
    <div class="cart">
        <div class="conteiner">
            <h1>Товар</h1>
                <p>{{$product2->name}}</p>
                <p>{{$product2->count}}</p>
                <p>{{$product2->price}}</p>
        </div>
    </div>
@endsection
