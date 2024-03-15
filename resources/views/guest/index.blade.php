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
                    <div class="card btn-radius p-4">
                        <img src="{{ asset('assets/images/section_2/Saly-10.png') }}" class="card-img-top" alt="Metaverse">
                        <div class="card-body">
                            <div class="d-flex author flex-row align-items-center">
                                <img src="{{ asset('assets/images/section_2/Avatar.png') }}" alt="Avatar" class="avatar me-3">
                                <div class="d-flex flex-column justify-content-center">
                                    <h5 class="text-white mb-0">Metaverse</h5>
                                    <p class="text-secondary mb-0">Created by <span class="text-white">John Doe</span></p>
                                </div>
                            </div>
                            <div class="icons my-3 d-flex justify-content-around">
                                <div class="d-flex flex-column">
                                    <i class="fa-regular fa-heart text-white text-center"></i>
                                    <span class="text-white">145</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <i class="fa-solid fa-crown text-white text-center"></i>
                                    <span class="text-secondary"><span class="text-white">1</span>/100</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <i class="fa-brands fa-ethereum text-white text-center"></i>
                                    <span class="text-secondary"><span class="text-white me-1">5.00</span>ETH</span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <span class="btn-bg-secondary w-auto p-3 me-2 text-white rounded">
                                    <i class="fa-solid fa-stopwatch"></i>
                                    12d 13h 56m
                                </span>

                                <button class="btn btn-bg-light text-white p-3">
                                    <i class="fa-solid fa-crown text-center"></i>
                                    Place Bid
                                </button>
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
