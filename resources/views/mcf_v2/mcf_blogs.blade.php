@extends('layouts.mcf_v2')

@section('content')


    <!-- Start blog-lists section -->
    <section class="blog-lists-section section-gap-full">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar-wrap">
                        <div class="single-widget search-widget">
                            <h4 class="widget-title">{{ __('Search')}}</h4>
                            <div class="sidebar-form">
                                <form action="#" class="relative">
                                    <input type="text" placeholder="{{ __('Search here')}}" onfocus="this.placeholder=''" onblur="this.placeholder='{{ __('Search here')}}'">
                                    <button type="submit">
                                        <i class="ti-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="single-widget archive-widget">
                            <h4 class="widget-title">Категории</h4>
                            <ul>

                            @foreach($cats as $cat)
                                <li class="d-flex justify-content-between">
                                    <a href="#">{{ $cat->name }}</a>
                                    <span>
                                        (
                                            {{ count($cat->products) }}
                                        )
                                    </span>
                                    {{-- App\Models\Product:: --}}
                                </li>
                            @endforeach
                            </ul>
                        </div>


                        <div class="single-widget recent-post-widget">
                            <h4 class="widget-title">Последние предложения</h4>
                            <ul>
                                <li class="d-flex flex-row align-items-center">
                                    <div class="thumbs">
                                        <img class="img-fluid" src="/mcf/img/blog/small-t1.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="single-blog.html">
                                            <h5>Комплект для бара.</h5>
                                        </a>
                                        <p class="text-uppercase">
                                            Ноябрь 22, 2019
                                        </p>
                                    </div>
                                </li>

                                <li class="d-flex flex-row align-items-center">
                                    <div class="thumbs">
                                        <img class="img-fluid" src="/mcf/img/blog/small-t4.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="single-blog.html">
                                            <h5>To shewing another demand to Received shutters expenses.</h5>
                                        </a>
                                        <p class="text-uppercase">
                                            January 10, 2016
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="single-widget social-widget">
                            <h4 class="widget-title">{{ __('Social Links') }}</h4>
                            <ul>
                                <li>
                                    <a target="_blank" href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="#">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="#">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-widget banner-widget">
                            <img class="img-fluid" src="/mcf/img/banner.jpg" alt="">
                        </div>
                        <div class="single-widget tags-widget">
                            <h4 class="widget-title">{{ __('Tags') }}</h4>
                            <ul>
                                <li><a href="#">Звук</a></li>
                                <li><a href="#">Свет</a></li>
                                <li><a href="#">Пульты</a></li>
                                <li><a href="#">Динамики</a></li>
                                <li><a href="#">Коммутация</a></li>
                                <li><a href="#">Статьи</a></li>
                                <li><a href="#">Музыка</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">

                    <div class="blog-lists">

                        <div class="single-blog-post">
                            <div class="post-thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="/mcf/img/blog/p1.jpg" alt="">
                            </div>
                            <div class="post-details">
                                <ul class="tags">
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Music</a></li>
                                </ul>
                                <a href="single-blog.html">
                                    <h1>To shewing another demands to. </h1>
                                </a>
                                <p>
                                    Received shutters expenses ye he pleasant. Drift as blind above at up. No up simple
                                    county stairs do should praise as. Drawings sir gay together landlord had law
                                    smallest. Formerly welcomed attended declared met say unlocked. Jennings outlived
                                    no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be
                                    as it curiosity departure ourselves.
                                </p>
                                <div class="user-details d-flex align-items-center">
                                    <div class="user-img">
                                        <img src="/mcf/img/avatar1.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="#">
                                            <h4>Phil Martinez</h4>
                                        </a>
                                        <p>April 15,2018</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog-post">
                            <div class="post-thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="/mcf/img/blog/p2.jpg" alt="">
                            </div>
                            <div class="post-details">
                                <ul class="tags">
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">Food</a></li>
                                </ul>
                                <a href="single-blog.html">
                                    <h1>A wonderful serenity has taken possession of my entire soul.</h1>
                                </a>
                                <p>
                                    Received shutters expenses ye he pleasant. Drift as blind above at up. No up simple
                                    county stairs do should praise as. Drawings sir gay together landlord had law
                                    smallest. Formerly welcomed attended declared met say unlocked. Jennings outlived
                                    no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be
                                    as it curiosity departure ourselves.
                                </p>
                                <div class="user-details d-flex align-items-center">
                                    <div class="user-img">
                                        <img src="/mcf/img/avatar1.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="#">
                                            <h4>Phil Martinez</h4>
                                        </a>
                                        <p>April 15,2018</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <nav>
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="ti ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="ti ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- End blog-lists section -->


@endsection

