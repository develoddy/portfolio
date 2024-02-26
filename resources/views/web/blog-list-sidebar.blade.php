@extends('layouts.app')

@section('content')
    <!-- Body main wrapper start -->
    <main>

        <!-- breadcrumb area  start -->
        <section class="breadcrumb__area p-relative style-one is-breadcrumb-space">
            <div class="breadcrumb__thumb-bg include-bg bg__thumb-position"
                data-background="{{ Vite::asset('resources/imgs/breadcrumb/breadcrumb-bg-05.png') }}"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-7 col-xl-7 col-lg-8">
                        <div class="breadcrumb__content-wrapper p-relative z-index-1 text-center">
                            <div class="breadcrumb__title-wrapperr">
                                <h1 class="breadcrumb__title mb-25">Blog</h1>
                                <p class="mb-15">
                                    Welcome to My Blog, where I Share My Experiences and Knowledge as a Full Stack Web Developer.
                                </p>
                            </div>
                            <div class="breadcrumb__menu">
                                <nav>
                                    <ul>
                                        <li><span><a href="index.html">Home</a></span></li>
                                        {{-- <li><span><a href="blog.html">Blog</a></span></li> --}}
                                        <li><span>Blog</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area  end -->

        <!-- postbox area start -->
        <section class="postbox__area section-space">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                        <div class="section__title-wrapper section__title-space">
                            <span class="contentHidden">contentHidden</span>
                            <h2 class="section__title">Read My Latest Article</h2>
                            <p class="contentHidden">contentHidden</p>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-xxl-8 col-lg-8">
                        <div class="blog__list-wrapper">
                            <div class="row g-5">
                                <div class="col-xl-12 col-lg-12 col-md-6">
                                    <div class="blog__wrap blog__item style-seven bg-solid wow fadeInUp"
                                        data-wow-delay=".3s">
                                        <div class="blog__thumb is-hover">
                                            <a href="blog-details.html">
                                                <img src="{{ Vite::asset('resources/imgs/blog/blog-18.png') }}"
                                                    alt="image not found">
                                            </a>
                                            <div class="blog__tag">
                                                <a href="#">Development</a>
                                            </div>
                                        </div>
                                        <div class="blog__content ">
                                            <div class="blog__meta">
                                                <span>
                                                    <i class="fa-light fa-calendar"></i>
                                                    Nov 12, 2023
                                                </span>
                                                <span>
                                                    <i class="fa-light fa-comment"></i>
                                                    10 Comments
                                                </span>
                                            </div>
                                            <h5 class="blog__title"><a href="blog-details.html">Strategy A Glimpse into Our
                                                    Corporate
                                                    Success Stories</a></h5>
                                            <p>Explore how subtle micro actions can enhance user engagement and satisfaction
                                                Stay up to date
                                                with latest trends </p>
                                            <div class="blog-btn-text">
                                                <a href="blog-details.html" class="underline-btn">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-6">
                                    <div class="blog__wrap blog__item style-seven bg-solid wow fadeInUp"
                                        data-wow-delay=".4s">
                                        <div class="blog__thumb is-hover">
                                            <a href="blog-details.html">
                                                <img src="{{ Vite::asset('resources/imgs/blog/blog-19.png') }}"
                                                    alt="image not found">
                                            </a>
                                            <div class="blog__tag">
                                                <a href="#">Evidenze</a>
                                            </div>
                                        </div>
                                        <div class="blog__content">
                                            <div class="blog__meta">
                                                <span>
                                                    <i class="fa-light fa-calendar"></i>
                                                    Mar 12, 2023
                                                </span>
                                                <span>
                                                    <i class="fa-light fa-comment"></i>
                                                    12 Comments
                                                </span>
                                            </div>
                                            <h5 class="blog__title"><a href="blog-details.html">Excellence A Corporate into
                                                    Showcase
                                                    of Achievement</a></h5>
                                            <p>Remote work can enhance include allowing employees with various needs and
                                                backgrounds to in
                                                the workforce.</p>
                                            <div class="blog-btn-text">
                                                <a href="blog-details.html" class="underline-btn">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-6">
                                    <div class="blog__wrap blog__item style-seven bg-solid wow fadeInUp"
                                        data-wow-delay=".5s">
                                        <div class="blog__thumb is-hover">
                                            <a href="blog-details.html">
                                                <img src="{{ Vite::asset('resources/imgs/blog/blog-29.png') }}"
                                                    alt="image not found">
                                            </a>
                                            <div class="blog__tag">
                                                <a href="#">Indra</a>
                                            </div>
                                        </div>
                                        <div class="blog__content">
                                            <div class="blog__meta">
                                                <span>
                                                    <i class="fa-light fa-calendar"></i>
                                                    Mar 12, 2023
                                                </span>
                                                <span>
                                                    <i class="fa-light fa-comment"></i>
                                                    12 Comments
                                                </span>
                                            </div>
                                            <h5 class="blog__title"><a href="blog-details.html">Clearly outline the purpose
                                                    of your blog and what you want to achieve</a></h5>
                                            <p>Remote work can enhance include allowing employees with various needs and
                                                backgrounds to in
                                                the workforce.</p>
                                            <div class="blog-btn-text">
                                                <a href="blog-details.html" class="underline-btn">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-6">
                                    <div class="blog__wrap blog__item style-seven bg-solid wow fadeInUp"
                                        data-wow-delay=".6s">
                                        <div class="blog__thumb is-hover">
                                            <a href="blog-details.html">
                                                <img src="{{ Vite::asset('resources/imgs/blog/blog-30.png') }}"
                                                    alt="image not found">
                                            </a>
                                            <div class="blog__tag">
                                                <a href="#">Development</a>
                                            </div>
                                        </div>
                                        <div class="blog__content">
                                            <div class="blog__meta">
                                                <span>
                                                    <i class="fa-light fa-calendar"></i>
                                                    Mar 12, 2023
                                                </span>
                                                <span>
                                                    <i class="fa-light fa-comment"></i>
                                                    12 Comments
                                                </span>
                                            </div>
                                            <h5 class="blog__title"><a href="blog-details.html">Select a memorable and
                                                    relevant domain name for your website</a></h5>
                                            <p>Remote work can enhance include allowing employees with various needs and
                                                backgrounds to in
                                                the workforce.</p>
                                            <div class="blog-btn-text">
                                                <a href="blog-details.html" class="underline-btn">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-6">
                                    <div class="blog__wrap blog__item style-seven bg-solid wow fadeInUp"
                                        data-wow-delay=".7s">
                                        <div class="blog__thumb is-hover">
                                            <a href="blog-details.html">
                                                <img src="{{ Vite::asset('resources/imgs/blog/blog-31.png') }}"
                                                    alt="image not found">
                                            </a>
                                            <div class="blog__tag">
                                                <a href="#">Design</a>
                                            </div>
                                        </div>
                                        <div class="blog__content">
                                            <div class="blog__meta">
                                                <span>
                                                    <i class="fa-light fa-calendar"></i>
                                                    Mar 12, 2023
                                                </span>
                                                <span>
                                                    <i class="fa-light fa-comment"></i>
                                                    12 Comments
                                                </span>
                                            </div>
                                            <h5 class="blog__title"><a href="blog-details.html">Pick a clean and
                                                    responsive template that aligns with your style</a></h5>
                                            <p>Remote work can enhance include allowing employees with various needs and
                                                backgrounds to in
                                                the workforce.</p>
                                            <div class="blog-btn-text">
                                                <a href="blog-details.html" class="underline-btn">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-6">
                                    <div class="blog__wrap blog__item style-seven bg-solid wow fadeInUp"
                                        data-wow-delay=".8s">
                                        <div class="blog__thumb is-hover">
                                            <a href="blog-details.html">
                                                <img src="{{ Vite::asset('resources/imgs/blog/blog-32.png') }}"
                                                    alt="image not found">
                                            </a>
                                            <div class="blog__tag">
                                                <a href="#">Project</a>
                                            </div>
                                        </div>
                                        <div class="blog__content">
                                            <div class="blog__meta">
                                                <span>
                                                    <i class="fa-light fa-calendar"></i>
                                                    Mar 12, 2023
                                                </span>
                                                <span>
                                                    <i class="fa-light fa-comment"></i>
                                                    12 Comments
                                                </span>
                                            </div>
                                            <h5 class="blog__title"><a href="blog-details.html">Share a more detailed bio,
                                                    including your background and interests</a></h5>
                                            <p>Remote work can enhance include allowing employees with various needs and
                                                backgrounds to in
                                                the workforce.</p>
                                            <div class="blog-btn-text">
                                                <a href="blog-details.html" class="underline-btn">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl4 col-lg-4">
                        <div class="sidebar__wrapper">
                            <div class="sidebar__widget">
                                <h5 class=" sidebar__widget-title">Search Here</h5>
                                <div class="sidebar__widget-content">
                                    <div class="sidebar__search">
                                        <form action="#">
                                            <div class="sidebar__search-input">
                                                <input type="text" placeholder="Enter your keywords...">
                                                <button type="submit">
                                                    <i class="fa-sharp fa-light fa-magnifying-glass"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget is-padding-none">
                                <div class="sidebar__widget-content">
                                    <div class="sidebar__author">
                                        <div class="sidebar__author-thumb">
                                            <img src="{{ Vite::asset('resources/imgs/user/user-07.png') }}"
                                                alt="image not found">
                                        </div>
                                        <div class="sidebar__author-content">
                                            <h6 class=" sidebar__author-title">Colene Landin</h6>
                                            <p>Lorem ipsum dolor ametare elit consectetur adipiscing Aenean pellentesque.
                                            </p>
                                            <div class="sidebar__author-social">
                                                <div class="theme__social">
                                                    <a href="#"><i class="fa-brands fa-facebook-f"></i>
                                                    </a>
                                                    <a href="#"><i class="icon-twiter"></i>
                                                    </a>
                                                    <a href="#"><i class="fa-brands fa-linkedin"></i>
                                                    </a>
                                                    <a href="#"><i class="fa-brands fa-behance"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget">
                                <h5 class=" sidebar__widget-title">Pages</h5>
                                <div class="sidebar__widget-content">
                                    <ul>
                                        <li><a href="blog.html">Web Design <span><i
                                                        class="fa-regular fa-angle-right"></i></span></a></li>
                                        <li><a href="blog.html">Devlopment <span><i
                                                        class="fa-regular fa-angle-right"></i></span></a></li>
                                        <li><a href="blog.html">Branding <span><i
                                                        class="fa-regular fa-angle-right"></i></span></a></li>
                                        <li><a href="blog.html">Motion Design<span><i
                                                        class="fa-regular fa-angle-right"></i></span></a></li>
                                        <li><a href="blog.html">UI/UX Deisgn <span><i
                                                        class="fa-regular fa-angle-right"></i></span></a></li>
                                        <li><a href="blog.html">Graphic Design <span><i
                                                        class="fa-regular fa-angle-right"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar__widget">
                                <h5 class=" sidebar__widget-title">Recent Post</h5>
                                <div class="sidebar__widget-content">
                                    <div class="sidebar__post">
                                        <div class="rc__post">
                                            <div class="rc__post-thumb">
                                                <a href="blog-details.html"><img
                                                        src="{{ Vite::asset('resources/imgs/blog/post/sidebar/sidebar-post-blog-01.png') }}"
                                                        alt="image not found"></a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h6 class="rc__post-title">
                                                    <a href="blog-details.html">Prepare for the Future of and idea</a>
                                                </h6>
                                                <div class="rc__meta">
                                                    <span>
                                                        <i class="fa-sharp fa-light fa-clock"></i>
                                                        June 22, 2020
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rc__post">
                                            <div class="rc__post-thumb">
                                                <a href="blog-details.html"><img
                                                        src="{{ Vite::asset('resources/imgs/blog/post/sidebar/sidebar-post-blog-02.png') }}"
                                                        alt="image not found"></a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h6 class="rc__post-title">
                                                    <a href="blog-details.html">Developing privacy user centric apps</a>
                                                </h6>
                                                <div class="rc__meta">
                                                    <span>
                                                        <i class="fa-sharp fa-light fa-clock"></i>
                                                        March 15, 2023
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rc__post">
                                            <div class="rc__post-thumb">
                                                <a href="blog-details.html"><img
                                                        src="{{ Vite::asset('resources/imgs/blog/post/sidebar/sidebar-post-blog-03.png') }}"
                                                        alt="image not found"></a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h6 class="rc__post-title">
                                                    <a href="blog-details.html">Starting and Growing Design</a>
                                                </h6>
                                                <div class="rc__meta">
                                                    <span>
                                                        <i class="fa-sharp fa-light fa-clock"></i>
                                                        July 22, 2021
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget">
                                <h5 class=" sidebar__widget-title">Tags</h5>
                                <div class="sidebar__widget-content">
                                    <div class="sidebar__widget-tag">
                                        <div class="tagcloud">
                                            <a href="#">Techology</a>
                                            <a href="#">Food</a>
                                            <a href="#">Personality</a>
                                            <a href="#">Agency</a>
                                            <a href="#">Life Style</a>
                                            <a href="#">Travel</a>
                                            <a href="#">Nature</a>
                                            <a href="#">Development</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-6">
                        <div class="pagination__wrapper">
                            <div class="bd-basic__pagination style-2">
                                <nav>
                                    <ul>
                                        <li>
                                            <span><a href="#">Next</a></span>
                                        </li>
                                        <li>
                                            <a href="#">1</a>
                                        </li>
                                        <li>
                                            <span class="current">2</span>
                                        </li>
                                        <li>
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <span><a href="#">Prev</a></span>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- postbox area end -->

    </main>
    <!-- Body main wrapper end -->
@endsection
