@extends('layouts.guest')

@section('content')
    <!-- Header -->
    <header class="header d-flex align-items-center">
        <div class="container">
            <div class="col-6">
                <h1 class="text-white mb-5">
                    Discover, collect, and sell extraordinary <br>
                    <span class="text-site-gradient">NFTs</span>
                </h1>
                <p class="text-light mb-5">NFT is the world's first and largest NFT marketplace</p>
                <div class="buttons">
                    <a href="#" class="btn btn-bg-light text-white px-4 py-2 me-3">Explore</a>
                    <a href="#" class="btn btn-bg-dark border text-white px-4 py-2">Create</a>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->
    <!-- Auctions -->
    <section class="auctions">
        <div class="container title d-flex justify-content-between align-items-center">
            <h2 class="text-white">Live Auctions</h2>
            <a href="#" class="btn btn-bg-light text-white px-4 py-2 me-3">Explore All</a>
        </div>
        <div class="swiper auctionsSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card">
                        <img src="{{ asset('assets/images/section_2/Saly-10.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
                <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- End Auctions -->
@endsection
