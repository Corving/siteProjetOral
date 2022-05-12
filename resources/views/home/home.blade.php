@extends('base')

@section('title','Home')

@section('content')
    <!-- banner area start from here -->
    <section class="banner-area">
        <div class="container">
            <div class="banner-owl-area owl-carousel" data-carousel-loop="true" data-carousel-autoplay="false"
                 data-carousel-mousedrag="true" data-carousel-items="1" data-carousel-nav="false">
                @foreach($entreprises as $entreprise)
                    <div class="banner-single-wrapper">
                        <div class="banner-img-area">
                            <h4>Présentation des entreprises</h4>
                            <div class="banner-img">
                                <img src="{{$entreprise->url_img}}" alt="">
                            </div>
                        </div>
                        <div class="banner-content-area">
                            <h5>Présentation de </h5>
                            <h1><a href="#">{{$entreprise->titre}}</a></h1>
                            <h4 class="date"><span>{{$entreprise->date_projet}}</span></h4>
                            <p>{{$entreprise->description}}</p>
                            <button onclick="window.location.href='/entreprise/{{$entreprise->id}}';" class="btn btn-sm btn-radious-6 btn-black">
                                Lire la suite
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Tout les projets -->
    <section class="all-stories-area pt-100 pb-50">
        <div class="section-heading text-center">
            <h2>Toutes mes réalisations</h2>
        </div>
        <div class="container">
            <div class="row grid">
                @foreach($projets as $projet)
                    <div class="col-sm-6 col-lg-4 mb-30 grid-item">
                        <div class="single-stories-card">
                            <div class="stories-card-img">
                                <img src="{{$projet->url_img}}" alt="">
                            </div>
                            <div class="stories-card-content">
                                <div class="sub-title-wrapper">
                                    <h4 class="card-sub-title">{{$projet->titre}}</h4>
                                    <h5 class="card-date">{{$projet->date_projet}}</h5>
                                </div>
                                <h4 class="card-title"><a
                                        href="/projet/{{$projet->id}}">{{Str::limit($projet->description,120)}}</a></h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
