@extends('layouts.app')

@section('content')
    <div class="cart">
        <div class="conteiner">
            <h1>Корзина</h1>
           
                @foreach($carts as $c) 
                <div class="cart-t">
                    <p>{{$c->Product->name}}</p>
                    <p>Цена: {{$c->Product->price * $c->count}} ₽</p>
                    <div class="m-p">
                        <a class="minus" href="/public/cart/minus/{{$c->id}}">-</a>
                        <p>{{$c->count}}</p>
                        <a class="plus" href="/public/cart/plus/{{$c->id}}">+</a>
                    </div>
                    
                </div>
                @endforeach
                <a class="oformit" href="/public/cart/pay/{{$c->id_basket}}">Оформить</a>
            
        </div>
    </div>
@endsection
