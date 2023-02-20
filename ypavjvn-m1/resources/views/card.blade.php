@extends('layouts.app')

@section('content')
    <div class="card1">
        <div class="conteiner">
            <h1>Товар</h1>
            <div class="card-item">
                <p>{{$product2->name}}</p>
                <p>{{$product2->count}}</p>
                <p>{{$product2->price}}</p>
            </div>
        </div>
    </div>
@endsection
