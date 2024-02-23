@extends('layouts.app')

@section('content')
    <!-- Body main wrapper start -->
    <main>
        <!-- breadcrumb area  start -->
        <section class="breadcrumb__area p-relative style-one is-breadcrumb-space">
            <div class="breadcrumb__thumb-bg include-bg bg__thumb-position"
                data-background="{{ Vite::asset('resources/imgs/breadcrumb/breadcrumb-bg-03.png') }}"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-7 col-xl-7 col-lg-8">
                        <div class="breadcrumb__content-wrapper p-relative z-index-1 text-center">
                            <div class="breadcrumb__title-wrapperr">
                                <h1 class="breadcrumb__title mb-25">Portfolio Classic</h1>
                                <p class="mb-15">
                                    "I'm a passionate Full Stack Web Developer. Here you'll find a showcase of my projects
                                    and skills in web application development."
                                </p>
                            </div>
                            <div class="breadcrumb__menu">
                                <nav>
                                    <ul>
                                        <li><span><a href="{{ route('home') }}">Home</a></span></li>
                                        <li><span><a href="blog.html">Portfolio</a></span></li>
                                        {{-- <li><span>Portfolio Classic</span></li> --}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area  end -->

        <!-- portfolio area start -->
        <section class="bd__portfolio-area section-space">
            <div class="container">
                <div class="row g-5 section__title-space justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="bd__menu-tab">
                            <ul class="bd__menu nav" id="myTab" role="tablist">
                                <li class="bd__btn-item" role="presentation">
                                    <button class="active" id="view-tab" data-bs-toggle="tab" data-bs-target="#view"
                                        type="button" role="tab" aria-controls="view" aria-selected="true">View
                                        All</button>
                                </li>
                                <li class="bd__btn-item" role="presentation">
                                    <button id="brand-tab" data-bs-toggle="tab" data-bs-target="#brand" type="button"
                                        role="tab" aria-controls="brand" aria-selected="false">Brand</button>
                                </li>
                                <li class="bd__btn-item" role="presentation">
                                    <button id="project-tab" data-bs-toggle="tab" data-bs-target="#project" type="button"
                                        role="tab" aria-controls="project" aria-selected="false">Project</button>
                                </li>
                                <li class="bd__btn-item" role="presentation">
                                    <button id="digital-tab" data-bs-toggle="tab" data-bs-target="#digital" type="button"
                                        role="tab" aria-controls="digital" aria-selected="false">Digital Art</button>
                                </li>
                                <li class="bd__btn-item" role="presentation">
                                    <button id="creative-tab" data-bs-toggle="tab" data-bs-target="#creative" type="button"
                                        role="tab" aria-controls="creative" aria-selected="false">Creative</button>
                                </li>
                                <li class="bd__btn-item" role="presentation">
                                    <button id="mockup-tab" data-bs-toggle="tab" data-bs-target="#mockup" type="button"
                                        role="tab" aria-controls="mockup" aria-selected="false">Mockup</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12">
                        <div class="tab-content wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s" id="myTabContent">
                            <div class="tab-pane fade show active" id="view" role="tabpanel"
                                aria-labelledby="view-tab">
                                <div class="row  g-5">
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-08.png') }}"
                                                    alt="image not found">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"href="{{ Vite::asset('resources/imgs/portfolio/portfolio-08.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a
                                                            href="{{ route('portfolio-detail', ['portfolio' => 'slug-details']) }}">Mockup</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="{{ route('portfolio-detail', ['portfolio' => 'slug-details']) }}">Design
                                                            With Mockup</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven ">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-02.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"> <a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-02.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Creative</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Creative Idea is key</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-12.png') }}"
                                                    alt="image not found">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-12.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Creative</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Creative Idea Combines
                                                            Technology</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-05.png') }}"
                                                    alt="image not found">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-05.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Branding</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Logo With Branding</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-10.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"href="{{ Vite::asset('resources/imgs/portfolio/portfolio-10.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Logo</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Card Branding</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-11.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-11.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Art</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Digital Art is Creative</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-09.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-09.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Creative Art</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Implement Dynamic Lighting to
                                                            Highlight</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-04.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-04.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Responsive</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Design Flexible Layouts That Can
                                                            Adapt</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-13.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-13.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Creative</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Illustrate Renewable Energy
                                                            Sources</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-23.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-23.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Creative</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Illustrate Renewable Energy
                                                            Sources</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-24.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-24.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Creative</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Illustrate Renewable Energy
                                                            Sources</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-25.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-25.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Creative</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Illustrate Renewable Energy
                                                            Sources</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-26.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-26.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Creative</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Illustrate Renewable Energy
                                                            Sources</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="brand" role="tabpanel" aria-labelledby="brand-tab">
                                <div class="row  g-5">
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-02.png') }}"
                                                    alt="image not found">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-02.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Branding</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Logo With Branding</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-10.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-10.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Logo</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Card Branding</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-05.png') }}"
                                                    alt="image not found">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-05.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Branding</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Logo With Branding</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="project" role="tabpanel" aria-labelledby="project-tab">
                                <div class="row  g-5">
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-09.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-09.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Responsive</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Design Flexible Layouts That Can
                                                            Adapt</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-04.png') }}"
                                                    alt="image not found">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-04.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Creative</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Creative Idea Combines
                                                            Technology</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-13.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-13.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Creative</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Illustrate Renewable Energy
                                                            Sources</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven ">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-23.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-23.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Creative</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Creative Idea is key</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven ">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-24.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-24.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Creative</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Creative Idea is key</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven ">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-25.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-25.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Creative</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Creative Idea is key</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven ">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-26.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-26.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Creative</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Creative Idea is key</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="digital" role="tabpanel" aria-labelledby="digital-tab">
                                <div class="row  g-5">
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-12.png') }}"
                                                    alt="image not found">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-12.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Creative</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Creative Idea Combines
                                                            Technology</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-08.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-08.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Creative</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Illustrate Renewable Energy
                                                            Sources</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven ">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-02.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-02.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Creative</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Creative Idea is key</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="creative" role="tabpanel" aria-labelledby="creative-tab">
                                <div class="row  g-5">
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-11.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-11.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Art</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Digital Art is Creative</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-08.png') }}"
                                                    alt="image not found">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"><a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-08.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Creative</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Creative Idea Combines
                                                            Technology</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-13.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"> <a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-13.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Creative</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Illustrate Renewable Energy
                                                            Sources</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven ">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-02.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box"> <a
                                                            class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-02.png') }}">
                                                            <i class="icon-plus"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Creative</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Creative Idea is key</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="mockup" role="tabpanel" aria-labelledby="mockup-tab">
                                <div class="row  g-5">
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-08.png') }}"
                                                    alt="image not found">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box">
                                                        <a class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-08.png') }}">
                                                            <i class="icon-plus"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Mockup</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Design With Mockup</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-10.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box">
                                                        <a class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-10.png') }}">
                                                            <i class="icon-plus"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Logo</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Card Branding</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-04.png') }}"
                                                    alt="">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box">
                                                        <a class="popup-image circle-btn is-bg-white is-btn-large"
                                                            href="{{ Vite::asset('resources/imgs/portfolio/portfolio-04.png') }}">
                                                            <i class="icon-plus"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="portfolio-details.html">Responsive</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline"><a
                                                            href="portfolio-details.html">Design Flexible Layouts That Can
                                                            Adapt</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="portfolio__more text-center mt-50">
                            <a class="bd-btn is-btn-anim" href="portfolio.html">
                                <span class="bd-btn-inner">
                                    <span class="bd-btn-normal">View all project</span>
                                    <span class="bd-btn-hover">View all project</span>
                                    <i class="contentHidden"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- portfolio area end -->

    </main>
    <!-- Body main wrapper end -->
@endsection
