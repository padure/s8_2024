@extends('layouts.guest')

@section('content')
<!-- Header -->
<header>
    <div class="container d-flex align-items-center bg-site-image">
        <div class="col-6">
            <h1 class="text-white mb-5">
                Discover, collect, and sell extraordinary <br>
                <span class="text-site-gradient">NFTs</span>
            </h1>
            <p class="text-light mb-5">NFT is the world's first and largest NFT marketplace</p>
            <div class="buttons">
                <a href="#" class="btn btn-bg-light text-white px-4 py-2 me-3">
                    <i class="fa-solid fa-rocket"></i>
                    Explore
                </a>
                <a href="#" class="btn btn-bg-dark border text-white px-4 py-2">
                    <i class="fa-solid fa-plus"></i>
                    Create
                </a>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->
<!-- Auctions -->
<section class="auctions my-5">
    <div class="container title d-flex justify-content-between align-items-center my-5">
        <h2 class="text-white">Live Auctions</h2>
        <a href="#" class="btn btn-bg-light text-white px-4 py-2 me-3">
            <i class="fa-solid fa-rocket"></i>
            Explore All
        </a>
    </div>
    <div class="swiper auctionsSwiper">
        <div class="swiper-wrapper">
            <!-- Card 1 -->
            <div class="swiper-slide">
                <div class="card bg-card radius p-4">
                    <img src="{{ asset('assets/images/section_2/card-1.png') }}" class="card-img-top" alt="Metaverse">
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
                                <span class="text-secondary"><span class="text-white crown">1</span>/100</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-brands fa-ethereum text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white me-1">5.00</span>ETH</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <span class="btn-bg-secondary w-auto p-3 me-2 text-white text-center rounded flex-fill">
                                <i class="fa-solid fa-stopwatch"></i>
                                12d 13h 56m
                            </span>

                            <button class="btn btn-bg-light text-white p-3 flex-fill place-bid-btn">
                                <i class="fa-solid fa-crown text-center"></i>
                                Place Bid
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="swiper-slide">
                <div class="card bg-card radius p-4">
                    <img src="{{ asset('assets/images/section_2/card-2.png') }}" class="card-img-top" alt="Metaverse">
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
                                <span class="text-white">372</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-solid fa-crown text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white crown">1</span>/100</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-brands fa-ethereum text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white me-1">5.00</span>ETH</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <span class="btn-bg-secondary w-auto p-3 me-2 text-white text-center rounded flex-fill">
                                <i class="fa-solid fa-stopwatch"></i>
                                12d 13h 56m
                            </span>

                            <button class="btn btn-bg-light text-white p-3 flex-fill place-bid-btn">
                                <i class="fa-solid fa-crown text-center"></i>
                                Place Bid
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="swiper-slide">
                <div class="card bg-card radius p-4">
                    <img src="{{ asset('assets/images/section_2/card-3.png') }}" class="card-img-top" alt="Metaverse">
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
                                <span class="text-white">231</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-solid fa-crown text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white crown">1</span>/100</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-brands fa-ethereum text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white me-1">5.00</span>ETH</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <span class="btn-bg-secondary w-auto p-3 me-2 text-white text-center rounded flex-fill">
                                <i class="fa-solid fa-stopwatch"></i>
                                12d 13h 56m
                            </span>

                            <button class="btn btn-bg-light text-white p-3 flex-fill place-bid-btn">
                                <i class="fa-solid fa-crown text-center"></i>
                                Place Bid
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="swiper-slide">
                <div class="card bg-card radius p-4">
                    <img src="{{ asset('assets/images/section_2/card-4.png') }}" class="card-img-top" alt="Metaverse">
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
                                <span class="text-white">321</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-solid fa-crown text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white crown">1</span>/100</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-brands fa-ethereum text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white me-1">5.00</span>ETH</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <span class="btn-bg-secondary w-auto p-3 me-2 text-white text-center rounded flex-fill">
                                <i class="fa-solid fa-stopwatch"></i>
                                12d 13h 56m
                            </span>

                            <button class="btn btn-bg-light text-white p-3 flex-fill place-bid-btn">
                                <i class="fa-solid fa-crown text-center"></i>
                                Place Bid
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="swiper-slide">
                <div class="card bg-card radius p-4">
                    <img src="{{ asset('assets/images/section_2/card-1.png') }}" class="card-img-top" alt="Metaverse">
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
                                <span class="text-secondary"><span class="text-white crown">1</span>/100</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-brands fa-ethereum text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white me-1">5.00</span>ETH</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <span class="btn-bg-secondary w-auto p-3 me-2 text-white text-center rounded flex-fill">
                                <i class="fa-solid fa-stopwatch"></i>
                                12d 13h 56m
                            </span>

                            <button class="btn btn-bg-light text-white p-3 flex-fill place-bid-btn">
                                <i class="fa-solid fa-crown text-center"></i>
                                Place Bid
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="swiper-slide">
                <div class="card bg-card radius p-4">
                    <img src="{{ asset('assets/images/section_2/card-2.png') }}" class="card-img-top" alt="Metaverse">
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
                                <span class="text-secondary"><span class="text-white crown">1</span>/100</span>
                            </div>
                            <div class="d-flex flex-column">
                                <i class="fa-brands fa-ethereum text-white text-center"></i>
                                <span class="text-secondary"><span class="text-white me-1">5.00</span>ETH</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <span class="btn-bg-secondary w-auto p-3 me-2 text-white text-center rounded flex-fill">
                                <i class="fa-solid fa-stopwatch"></i>
                                12d 13h 56m
                            </span>

                            <button class="btn btn-bg-light text-white p-3 flex-fill place-bid-btn">
                                <i class="fa-solid fa-crown text-center"></i>
                                Place Bid
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- End Auctions -->
<!-- Collections -->
<section class="collections my-5 py-5">
    <div class="container title d-flex justify-content-between align-items-center my-5">
        <h2 class="text-white">Popular Collections</h2>
        <a href="#" class="btn btn-bg-light text-white px-4 py-2 me-3">
            <i class="fa-solid fa-rocket"></i>
            Explore All
        </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-card radius">
                    <div class="card-body">
                        <div class="d-flex flex-wrap">
                            <img src="{{ asset('assets/images/section_2/card-2.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                            <img src="{{ asset('assets/images/section_2/card-2.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                            <img src="{{ asset('assets/images/section_2/card-2.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                            <img src="{{ asset('assets/images/section_2/card-2.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="d-flex author flex-row align-items-center">
                                <img src="{{ asset('assets/images/section_2/Avatar.png') }}" alt="Avatar" class="avatar me-3">
                                <div class="d-flex flex-column justify-content-center">
                                    <h5 class="text-white mb-0">Metaverse</h5>
                                    <p class="text-secondary mb-0">Created by <span class="text-white">John Doe</span></p>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <i class="fa-regular fa-heart text-white text-center"></i>
                                <span class="text-white">145</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-card radius">
                    <div class="card-body">
                        <div class="d-flex flex-wrap">
                            <img src="{{ asset('assets/images/section_2/card-2.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                            <img src="{{ asset('assets/images/section_2/card-2.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                            <img src="{{ asset('assets/images/section_2/card-2.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                            <img src="{{ asset('assets/images/section_2/card-2.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="d-flex author flex-row align-items-center">
                                <img src="{{ asset('assets/images/section_2/Avatar.png') }}" alt="Avatar" class="avatar me-3">
                                <div class="d-flex flex-column justify-content-center">
                                    <h5 class="text-white mb-0">Metaverse</h5>
                                    <p class="text-secondary mb-0">Created by <span class="text-white">John Doe</span></p>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <i class="fa-regular fa-heart text-white text-center"></i>
                                <span class="text-white">145</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-card radius">
                    <div class="card-body">
                        <div class="d-flex flex-wrap">
                            <img src="{{ asset('assets/images/section_2/card-2.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                            <img src="{{ asset('assets/images/section_2/card-2.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                            <img src="{{ asset('assets/images/section_2/card-2.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                            <img src="{{ asset('assets/images/section_2/card-2.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="d-flex author flex-row align-items-center">
                                <img src="{{ asset('assets/images/section_2/Avatar.png') }}" alt="Avatar" class="avatar me-3">
                                <div class="d-flex flex-column justify-content-center">
                                    <h5 class="text-white mb-0">Metaverse</h5>
                                    <p class="text-secondary mb-0">Created by <span class="text-white">John Doe</span></p>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <i class="fa-regular fa-heart text-white text-center"></i>
                                <span class="text-white">145</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Collections -->
@endsection
