    @extends('layouts.app')

    @section('content')
    <div class="welcome">
        <div class="container">
            <div class="info">
                <div class="info-img"><img src="/public/img/logo.png"></div>
                <div class="info-text">
                    <p>О нас</p>
                    <h1>Шоппинг в век технологий.</h1>
                </div>
            </div>
        </div>



        <div class="container">
            <div class="row">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="/public/img/tovar1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="/public/img/tovar2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="/public/img/tovar3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Назад</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Вперед</span>
                    </button>
                    </div>
            </div>
        </div>
    </div>
    @endsection