@extends('layouts.app')

@section('page-title', 'Comics : All DC Comics')

@section('content')

<main>
    <div class="titan_bg">

    </div>
    <div class="black-main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <a class="current" href="#">CURRENT SERIES</a>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between">
                        @foreach (array_slice($cards, 0, 10) as $card)
                            <div class="cards-comics">
                                <img src="{{ $card['thumb'] }}" alt="">
                                <p>{{ $card['title']}}</p>
                            </div>                        
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="load" href="#">LOAD MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-blue">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blue-section">
                        <ul class="d-flex justify-content-between align-items-center">
                            <li><a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="Digital"><span>DIGITAL COMICS</span></a></li>
                            <li><a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="Merchandise"><span>DC MERCHANDISE</span></a></li>
                            <li><a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="Subscriptions"><span>SUBSCRIPTIONS</span></a></li>
                            <li><a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="Shop"><span>COMIC SHOP LOCATOR</span></a></li>
                            <li><a href="#"><img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="Visa"><span>DC POWER VISA</span></a></li>                                
                        </ul>
                    </div>               
                </div>
            </div>
        </div>
    </div>
</main>
    
@endsection