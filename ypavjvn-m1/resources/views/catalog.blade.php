@extends('layouts.app')

    @section('content')
    <div class="catalog">
        <div class="container">
            <h1>Каталог</h1>
            <form action="/public/catalog">
                <select name="filter" id="filter"></select>
                <option value="created_at">Новизна</option>
                <option value="price">Цена</option>
                <option value="name">Название</option>
                <option value="year">Год</option>
                <select name="category" id="category">
                    @foreach($category as $c)
                        <option value="{{$c->id}}">{{$c->name}}></option> 
                    @endforeach
                </select>
                <button type="submit">Применить</button>
            </form>
            @foreach($products as $p)
            <div class="tovar">
                <div class="tovar-img col-md-6">
                    <img src="/public/img/{{$p->photo}}" alt="..." class="img-fluid">
                </div>
                <div class="tovar-item col-md-3">
                    <div class="tovar-name"><p>{{$p->name}}</p></div>
                    <div class="tovar-item col-md-3">
                        <p>{{$p->price}} ₽</p>
                        @guest @else <a href="/public/product/{{$p->id}}">купить</a> @endguest
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection