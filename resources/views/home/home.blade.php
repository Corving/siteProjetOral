@extends('base')

@section('title','Home')

@section('content')
<!-- banner area start from here -->
<section class="banner-area">
    <div class="container">
        <div class="banner-owl-area owl-carousel" data-carousel-loop="true" data-carousel-autoplay="false" data-carousel-mousedrag="true" data-carousel-items="1" data-carousel-nav="false">
            <div class="banner-single-wrapper">
                <div class="banner-img-area">
                    <h4>featured stories</h4>
                    <div class="banner-img">
                        <img src="assets/img/homepage/banner-image.jpg" alt="">
                    </div>
                </div>
                <div class="banner-content-area">
                    <h5>Travel</h5>
                    <h1><a href="#">You got to cool that off. and hat's the double-truth</a></h1>
                    <h4 class="date"><span>29.Nov.2018</span> -Eiad Basha</h4>
                    <p>Hung that found of the from diesel to the venerable, you what you spare at cleaning in coming was sign introduced attempt, then would was try make brown on small careful cheek, and spirits build needed room so times from </p>
                    <button class="btn btn-sm btn-radious-6 btn-black">Read More</button>
                </div>
            </div>
            <div class="banner-single-wrapper">
                <div class="banner-img-area">
                    <h4>featured stories</h4>
                    <div class="banner-img">
                        <img src="assets/img/homepage/banner-image2.jpg" alt="">
                    </div>
                </div>
                <div class="banner-content-area">
                    <h5>Travel</h5>
                    <h1><a href="#">A muscial gift on bangla noboborsha from Armeen Musa</a></h1>
                    <h4 class="date"><span>20.Nov.2019</span> -Written by Eiad Basha</h4>
                    <p>Hung that found of the from diesel to the venerable, you what you spare at cleaning in coming was sign introduced attempt, then would was try make brown on small careful cheek, and spirits build needed room so times from </p>
                    <button class="btn btn-sm btn-radious-6 btn-black">Read More</button>
                </div>
            </div>
            <div class="banner-single-wrapper">
                <div class="banner-img-area">
                    <h4>featured stories</h4>
                    <div class="banner-img">
                        <img src="assets/img/homepage/banner-image3.jpg" alt="">
                    </div>
                </div>
                <div class="banner-content-area">
                    <h5>Travel</h5>
                    <h1><a href="#">You got to cool that off. and hat's the double-truth</a></h1>
                    <h4 class="date"><span>29.Nov.2018</span> -Written by Eiad Basha</h4>
                    <p>Hung that found of the from diesel to the venerable, you what you spare at cleaning in coming was sign introduced attempt, then would was try make brown on small careful cheek, and spirits build needed room so times from </p>
                    <button class="btn btn-sm btn-radious-6 btn-black">Read More</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- all stories section start here -->
<section class="all-stories-area pt-100 pb-50">
    <div class="section-heading text-center">
        <h2>All Stories</h2>
    </div>
    <div class="container">
        <div class="row grid">
            <div class="col-sm-6 col-lg-4 mb-30 grid-item">
                <div class="single-stories-card">
                    <div class="stories-card-img">
                        <img src="assets/img/homepage/stories-img1.jpg" alt="">
                    </div>
                    <div class="stories-card-content">
                        <div class="sub-title-wrapper">
                            <h4 class="card-sub-title">Beauty</h4>
                            <h5 class="card-date">Apr 30, 2019</h5>
                        </div>
                        <h4 class="card-title"><a href="single-blog.html">Ingredients to look for in skin care products</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
