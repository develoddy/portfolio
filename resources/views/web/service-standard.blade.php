
@extends('layouts.app')

@section('content')

<!-- Body main wrapper start -->
<main>

    <!-- breadcrumb area  start -->
    <section class="breadcrumb__area p-relative style-two is-breadcrumb-space">
        <div class="breadcrumb__thumb-bg include-bg bg__thumb-position" data-background="{{ Vite::asset('resources/imgs/breadcrumb/breadcrumb-bg-02.png') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-5 col-xl-6 col-lg-8 col-md-8">
                    <div class="breadcrumb__content-wrapper p-relative z-index-1">
                        <div class="breadcrumb__title-wrapperr">
                            <h1 class="breadcrumb__title mb-25">Easy Solutions for Your Business</h1>
                        </div>
                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="index.html">Home</a></span></li>
                                    <li><span><a href="services.html">Service</a></span></li>
                                    <li><span>Service Standard</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area  end -->

    <!-- service area start -->
    <section class="bd-service__area section-space p-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section__title-wrapper text-center section__title-space">
                        <span class="section__subtitle bg-field">MY SERVICE</span>
                        <h2 class="section__title mb-20">Professional Services</h2>
                        <p class="section__paragraph is-br-none">Begin with a brief introduction or summary that <br> highlights who you are and what</p>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                    <div class="service__wrapper service__item style-five bg-solid bordered-style">
                        <div class="contentHidden"></div>
                        <div class="contentHidden"></div>
                        <span class="service__icon-wrap"><i class="icon-design"></i></span>
                        <div class="service__content">
                            <h5 class="service__title"><a href="service-details.html">Web Design</a></h5>
                            <p>Learn how to create websites that adapt to different screen sizes and devices, ensuring a seamless.</p>
                            <div class="service__more">
                                <a class="bd-text-btn style-one" href="service-details.html"> 
                                    <span class="icon__box">Read More</span><iclass="fa-regular fa-arrow-right-long"></i>
                                </a>
                                <a class="contentHidden" href="service-details.html">Read More <span class="contentHidden">
                                    <i class="contentHidden"></i><i class="contentHidden"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                    <div class="service__wrapper service__item style-five bg-solid bordered-style">
                        <div class="contentHidden"></div>
                        <div class="contentHidden"></div>
                        <span class="service__icon-wrap"><i class="icon-ux-design"></i></span>
                        <div class="service__content">
                            <h5 class="service__title"><a href="service-details.html">UX/UI Design</a></h5>
                            <p>Start with a brief introduction about your a yourself. Mention your name, your current role or status.</p>
                            <div class="service__more">
                                <a class="bd-text-btn style-one" href="service-details.html"> 
                                    <span class="icon__box">Read More</span>
                                    <i class="fa-regular fa-arrow-right-long"></i></a>
                                <a class="contentHidden" href="service-details.html">Read More 
                                    <span class="contentHidden">
                                        <i class="contentHidden"></i>
                                        <i class="contentHidden"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                    <div class="service__wrapper service__item style-five bg-solid bordered-style">
                        <div class="contentHidden"></div>
                        <div class="contentHidden"></div>
                        <span class="service__icon-wrap">
    <i class="icon-project"></i>
</span>
                        <div class="service__content">
                            <h5 class="service__title"><a href="service-details.html">Project Design</a></h5>
                            <p>Showcase your design process, from initial concept to final execution.Include stages research.</p>
                            <div class="service__more">
                                <a class="bd-text-btn style-one" href="service-details.html"> <span class="icon__box">Read More</span><i
                class="fa-regular fa-arrow-right-long"></i></a>
                                <a class="contentHidden" href="service-details.html">Read More <span class="contentHidden">
                <i class="contentHidden"></i>
                <i class="contentHidden"></i>
            </span>
                                </a>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                    <div class="service__wrapper service__item style-five bg-solid bordered-style">
                        <div class="contentHidden"></div>
                        <div class="contentHidden"></div>
                        <span class="service__icon-wrap">
    <i class="icon-application"></i>
</span>
                        <div class="service__content">
                            <h5 class="service__title"><a href="service-details.html">Mobile Application</a></h5>
                            <p>Whenever possible, incorporate interactive prototypes that allow visitors to experience the app's user.</p>
                            <div class="service__more">
                                <a class="bd-text-btn style-one" href="service-details.html"> <span class="icon__box">Read More</span><i
                class="fa-regular fa-arrow-right-long"></i></a>
                                <a class="contentHidden" href="service-details.html">Read More <span class="contentHidden">
                <i class="contentHidden"></i>
                <i class="contentHidden"></i>
            </span>
                                </a>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.1s" data-wow-duration="1s">
                    <div class="service__wrapper service__item style-five bg-solid bordered-style">
                        <div class="contentHidden"></div>
                        <div class="contentHidden"></div>
                        <span class="service__icon-wrap">
    <i class="icon-game"></i>
</span>
                        <div class="service__content">
                            <h5 class="service__title"><a href="service-details.html">Game Development</a></h5>
                            <p>Share design documents, storyboards, or game design document that illustrate your planning and concept.</p>
                            <div class="service__more">
                                <a class="bd-text-btn style-one" href="service-details.html"> <span class="icon__box">Read More</span><i
                class="fa-regular fa-arrow-right-long"></i></a>
                                <a class="contentHidden" href="service-details.html">Read More <span class="contentHidden">
                <i class="contentHidden"></i>
                <i class="contentHidden"></i>
            </span>
                                </a>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.3s" data-wow-duration="1s">
                    <div class="service__wrapper service__item style-five bg-solid bordered-style">
                        <div class="contentHidden"></div>
                        <div class="contentHidden"></div>
                        <span class="service__icon-wrap">
    <i class="icon-animation"></i>
</span>
                        <div class="service__content">
                            <h5 class="service__title"><a href="service-details.html">Animation</a></h5>
                            <p>If applicable, include storyboard sketches, concept art, or character designs that contributed.</p>
                            <div class="service__more">
                                <a class="bd-text-btn style-one" href="service-details.html"> <span class="icon__box">Read More</span><i
                class="fa-regular fa-arrow-right-long"></i></a>
                                <a class="contentHidden" href="service-details.html">Read More <span class="contentHidden">
                <i class="contentHidden"></i>
                <i class="contentHidden"></i>
            </span>
                                </a>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>
    <!-- service area end -->

    <!-- skill area start -->
    <section class="bd-skill__area section-space theme-bg-secondary">
        <div class="container">
            <div class="row align-items-lg-center g-5">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div class="skill__thumb-wrapper wow fadeInLeft" data-wow-delay=".3s">
                        <div class="skill__thumb">
                            <img src="{{ Vite::asset('resources/imgs/skill/skill-01.png') }}" alt="image not found">
                        </div>
                        <div class="video__content text-center">
                            <div class="video__play">
                                <a href="https://www.youtube.com/watch?v=go7QYaQR494" class="play-btn popup-video"><i class="fa-sharp icon-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="skill__content-wrapper style-two wow fadeInRight" data-wow-delay=".3s">
                        <div class="section__title-wrapper mb-40">
                            <div class="section__title-wrapper">
                                <span class="section__subtitle bg-field">OUR SKILLS</span>
                                <h2 class="section__title mb-20">Display Your Skills For The World To know</h2>
                                <p>Multiple variations of passages resembling Lorem Ipsum are accessible, yet the majority have been modified.</p>
                            </div>
                        </div>
                        <div class="skill__list-wrapper">
                            <div class="info__list">
                                <ul>
                                    <li>
                                        <i class="fa-regular fa-check"></i>
                                        Reinvent Your Business to Better Support Our Needs
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-check"></i>
                                        Pioneering the Internet's First Authentic Generator
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-check"></i>
                                        Pioneering the Design World's First Authentic Generator
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="skill__btn">
                            <a class="bd-btn is-btn-anim bordered-blue" href="about.html">
                                <span class="bd-btn-inner">
    <span class="bd-btn-normal">Know more</span>
                                <span class="bd-btn-hover">Know more</span>
                                <i class="contentHidden"></i>
                                </span>
                            </a>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- skill area end -->

    <!-- portfolio area start -->
    <section class="bd-portfolio__area section-space">
        <div class="container">
            <div class="row g-5 align-items-center section__title-space">
                <div class="col-xl-5 col-lg-7 col-md-6">
                    <div class="section__title-wrapper ">
                        <span class="section__subtitle bg-field">WHAT I HAVE DONE</span>
                        <h2 class="section__title">The Perfection of Artistry Our Works</h2>
                        <p class="contentHidden">For each project in the portfolio, provide detailed descriptions following the aspects</p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-5 col-md-6">
                    <div class="portfolio__more text-md-end">
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
            <div class="portfolio__wrapper">
                <div class="row grid g-5 wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-lg-6 col-md-6 grid-item">
                        <div class=" portfolio__item style-five">
                            <div class="portfolio__item-thumb">
                                <img src="{{ Vite::asset('resources/imgs/portfolio/masonary/portfolio-masonary-24.png') }}" alt="image not found">
                                <div class="portfolio__item-btn">
                                    <span class="icon__box">
                             <a class="popup-image circle-btn is-bg-white is-btn-large"
                                href="{{ Vite::asset('resources/imgs/portfolio/masonary/portfolio-masonary-24.png') }}"> <i
                                   class="icon-plus"></i></a>
                          </span>
                                </div>
                            </div>
                            <div class="portfolio__item-content">
                                <div class="portfolio__item-info">
                                    <div class="portfolio__tag">
                                        <a href="portfolio-details.html">Design</a>
                                    </div>
                                    <h4 class="portfolio__item-title underline small"><a href="portfolio-details.html">Responsive Design</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 grid-item">
                        <div class=" portfolio__item style-five">
                            <div class="portfolio__item-thumb">
                                <img src="{{ Vite::asset('resources/imgs/portfolio/masonary/portfolio-masonary-25.png') }}" alt="">
                                <div class="portfolio__item-btn">
                                    <span class="icon__box">
                             <a class="popup-image circle-btn is-bg-white is-btn-large"
                                href="{{ Vite::asset('resources/imgs/portfolio/masonary/portfolio-masonary-25.png') }}"> <i
                                   class="icon-plus"></i></a>
                          </span>
                                </div>
                            </div>
                            <div class="portfolio__item-content">
                                <div class="portfolio__item-info">
                                    <a href="portfolio-details.html"><span class="portfolio__tag">Brand</span></a>
                                    <h4 class="portfolio__item-title underline small"><a href="portfolio-details.html">Logo With Brand</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 grid-item">
                        <div class=" portfolio__item style-five">
                            <div class="portfolio__item-thumb">
                                <img src="{{ Vite::asset('resources/imgs/portfolio/masonary/portfolio-masonary-26.png') }}" alt="">
                                <div class="portfolio__item-btn">
                                    <span class="icon__box">
                             <a class="popup-image circle-btn is-bg-white is-btn-large"
                                href="{{ Vite::asset('resources/imgs/portfolio/masonary/portfolio-masonary-26.png') }}"> <i
                                   class="icon-plus"></i></a>
                          </span>
                                </div>
                            </div>
                            <div class="portfolio__item-content">
                                <div class="portfolio__item-info">
                                    <div class="portfolio__tag">
                                        <a href="portfolio-details.html">Creative</a>
                                    </div>
                                    <h4 class="portfolio__item-title underline small"><a href="portfolio-details.html">Styles can vary realistic</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 grid-item">
                        <div class=" portfolio__item style-five">
                            <div class="portfolio__item-thumb">
                                <img src="{{ Vite::asset('resources/imgs/portfolio/masonary/portfolio-masonary-27.png') }}" alt="">
                                <div class="portfolio__item-btn">
                                    <span class="icon__box">
                             <a class="popup-image circle-btn is-bg-white is-btn-large"
                                href="{{ Vite::asset('resources/imgs/portfolio/masonary/portfolio-masonary-27.png') }}"> <i
                                   class="icon-plus"></i></a>
                          </span>
                                </div>
                            </div>
                            <div class="portfolio__item-content">
                                <div class="portfolio__item-info">
                                    <div class="portfolio__tag">
                                        <a href="portfolio-details.html">Project</a>
                                    </div>
                                    <h4 class="portfolio__item-title underline small"><a href="portfolio-details.html">Useful Project With Art</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio area end -->

    <!-- cta area start -->
    <div class="cta__area is-cta-margin fix">
        <div class="container">
            <div class="cta__wrapper cta__item is-sec-space">
                <div class="cta__bg"></div>
                <div class="cta__shape-wrap d-none d-md-block">
                    <div class="cta__shape-one scene">
                        <img class="layer" data-depth="5" src="{{ Vite::asset('resources/imgs/shape/circle-shape-02.png') }}" alt="image">
                    </div>
                    <div class="cta__shape-two scene">
                        <img class="layer" data-depth="6" src="{{ Vite::asset('resources/imgs/shape/circle-shape-03.png') }}" alt="image">
                    </div>
                    <div class="cta__shape-three scene">
                        <img class="layer" data-depth="7" src="{{ Vite::asset('resources/imgs/shape/circle-shape-03.png') }}" alt="image">
                    </div>
                    <div class="cta__shape-four scene">
                        <img class="layer" data-depth="8" src="{{ Vite::asset('resources/imgs/shape/circle-shape-02.png') }}" alt="image">
                    </div>
                    <div class="cta__shape-five scene">
                        <img class="layer" data-depth="9" src="{{ Vite::asset('resources/imgs/shape/circle-shape-03.png') }}" alt="image">
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10">
                        <div class="cta__content-wrap">
                            <div class="cta__content">
                                <div class="section__title-wrapper text-center ">
                                    <div class="section__title-wrapper text-center">
                                        <span class="section__subtitle sec-border">SUBSCRIBE</span>
                                        <h2 class="section__title mb-20">Stay Informed with the Latest News</h2>
                                        <p class="contentHidden">contentHidden</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cta__form">
                                <form action="#">
                                    <div class="cta__input">
                                        <input type="text" placeholder="Enter email">
                                        <a href="contact.html" class="bd-btn is-bg-gradient">Submit Now</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta area end -->

</main>
<!-- Body main wrapper end -->

@endsection