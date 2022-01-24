@extends('layouts.main-layout')
@section('main-content')
<section id="items">
    <div class="btn series">current series</div>

    <div class="container">
        @foreach ($itemsList as $item)
            <div class="item">
                <div class="img-container">
                    <img src="{{$item['thumb']}}" alt="{{$item['series']}}">
                </div>
                <h4>{{$item['series']}}</h4>
            </div>
        @endforeach
    </div>

    <div class="btn more">load more</div>
</section>

<section id="banner">
    <div class="container">
        <div>
            <img src="storage/img/buy-comics-digital-comics.png" alt="">
            <span>digital comics</span>
        </div>
        <div>
            <img src="storage/img/buy-comics-merchandise.png" alt="">
            <span>dc merchandise</span>
        </div>
        <div>
            <img src="storage/img/buy-comics-subscriptions.png" alt="">
            <span>subscription</span>
        </div>
        <div>
            <img src="storage/img/buy-comics-shop-locator.png" alt="">
            <span>comic shop locator</span>
        </div>
        <div>
            <img class="smaller" src="storage/img/buy-dc-power-visa.svg" alt="">
            <span>dc power visa</span>
        </div>
    </div>
</section>
@endsection