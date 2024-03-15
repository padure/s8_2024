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
                    <div class="card p-4">
                        <img src="{{ asset('assets/images/section_2/Saly-10.png') }}" class="card-img-top" alt="Metaverse">
                        <div class="card-body">
                            <div class="d-flex author flex-row align-items-center">
                                <img src="{{ asset('assets/images/section_2/Avatar.png') }}" alt="Avatar" class="avatar">
                                <div class="d-flex flex-column justify-content-center">
                                    <h5 class="text-white mb-0">Metaverse</h5>
                                    <p class="text-light mb-0">Created by <span class="text-white">John Doe</span></p>
                                </div>
                            </div>
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
