@extends('base')

@section('title','Home')

@section('content')
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
                        <h4 class="card-title"><a href="/projet/{{$projet->id}}">{{Str::limit($projet->description,120)}}</a></h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
