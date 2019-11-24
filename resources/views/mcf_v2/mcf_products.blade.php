@extends('layouts.mcf_v2')

@section('content-header')

<style type="text/css">
.gradient-bg, .page-top-banner .overlay-bg, .banner-section .overlay-bg, .features-wrap .single-feature .overlay-bg {
    background: -moz-linear-gradient(0deg, #f00 0%, #691cff 100%);
    background: -webkit-linear-gradient(0deg, #f00 0%, #691cff 100%);
    background: -ms-linear-gradient(0deg, #f00 0%, #691cff 100%);
}

.page-top-banner {
  background: url(/bg14.jpg);
  background-size: cover;
}

</style>

    <!-- Start page-top-banner section -->
    <section class="page-top-banner section-gap-full relative" data-stellar-background-ratio="0.5">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row section-gap-half">
                <div class="col-lg-12 text-center">
                    <h1>Категории</h1>
                    <h4>Продукция нашего завода</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- End about-top-banner section -->

@endsection


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

                            @foreach($categories as $cat)
                                <li class="d-flex justify-content-between">
                                    <a href="#">{{ $cat->name }}</a>
                                    <span>
                                        (
                                            {{ count($cat->products) }}
                                        )
                                    </span>
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
                                            <h5>Стойки на все случаи жизни.</h5>
                                        </a>
                                        <p class="text-uppercase">
                                            Ноябрь 23, 2019
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
                                        {{-- <i class="fa fa-facebook"></i> --}}
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="#">
                                        <i class="fab fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="#">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
{{--                                 <li>
                                    <a target="_blank" href="#">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                        <div class="single-widget banner-widget">
                            <img class="img-fluid" src="/bg4.jpg" alt="">
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
                    <div class="row">
                        
{{-- @foreach (  as $line) --}}
{{-- @endforeach                                     --}}

                            @foreach($cats as $cat)
                                    {{-- <h2> --}}
                                        {{-- <a href="#">{{ $cat->name }}</a> --}}
                                    {{-- </h2> --}}
                                            {{-- {{ count($cat->products) }} --}}
                                    @foreach($cat->products as $product)
                                        

                        <div class="col-md-4" style="    margin-bottom: 1em;">
                            <div class="card">
                              <img class="card-img-top" src="/product1.png" alt="Card image cap">
                              <div class="card-body">
                                <h5 class="card-title">{{ $product->name ?? 'Наименование продукта' }}</h5>
                                <p class="card-text">{{ $product->desc ?? 'Краткое описание' }}</p>

                              </div>

                              <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{ $product->price_amount ?? '??' }}</li>
                              </ul>

                              <div class="card-body">
                                <a href="#" class="card-link to_cart text-red" >
                                    В корзину
                                </a>
                                <a href="#" class="card-link">Больше</a>
                              </div>
                            </div>
                        </div>


                                    @endforeach
                            @endforeach


                    </div>

                    <div class="blog-lists" style="margin-top: 2em;">

                        <div class="single-blog-post">
                            <div class="post-thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="/bg14.jpg" alt="">
                            </div>
                            <div class="post-details">
                                <ul class="tags">
                                    <li><a href="#">Open Air</a></li>
                                    <li><a href="#">Музыка</a></li>
                                </ul>
                                <a href="/blogs">
                                    <h2>Каки мощности указывают производители?</h2>
                                </a>
                                    <h3>Стандарты мощности в России (номинальная, синусоидальная)</h3>
                                <hr>
                                <p>
                                    В России используется два параметра мощности - номинальная и синусоидальная. Раньше использовалась номинальная мощность, то сейчас чаще - синусоидальная. Например, колонки 35АС впоследствии получили обозначение S-90 (номинальная мощность 35 Вт, синусоидальная мощность 90 Вт)
                                </p>

                                <ul class="list-group">
                                    <li class="list-group-item">
                                        Номинальная мощность - мощность при среднем положении регулятора громкости усилителя, при которой остальные параметры устройства соответствуют заявленным в техническом описании.
                                    </li>
                                    <li class="list-group-item">
                                        Синусоидальная мощность - мощность, при которой усилитель или колонка может работать в течение длительного времени с реальным музыкальным сигналом без физического повреждения. Обычно в 2 - 3 раза выше номинальной.
                                        
                                    </li>
                                </ul>
                                <hr>
                                <h3>Западные стандарты: DIN, RMS и PMPO</h3>
                                <hr>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        DIN - примерно соответствует синусоидальной мощности - мощность, при которой усилитель или колонка может работать в течение длительного времени с сигналом "розового шума" без физического повреждения.
                                    </li>
                                    <li class="list-group-item">
                                        RMS (Rated Maximum Sinusoidal) - Максимальная (предельная) синусоидальная мощность - мощность, при которой усилитель или колонка может работать в течение одного часа с реальным музыкальным сигналом без физического повреждения. Обычно на 20 - 25 процентов выше DIN.
                                        
                                    </li>
                                    <li class="list-group-item">
                                        PMPO (Peak Music Power Output)- Музыкальная мощность (запредельная :-)) - мощность, которую динамик колонки может выдержать в течение 1 -2 секунд на сигнале низкой частоты (около 200 Гц) без физического повреждения. Обычно в 10 - 20 раз выше DIN.
                                        
                                    </li>
                                </ul>
                                <hr>


                                <div class="user-details d-flex align-items-center">
                                    <div class="user-img">
                                        <img src="/mcf/img/avatar1.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="#">
                                            <h4>Редактор MCF</h4>
                                        </a>
                                        <p>Ноябрь 24,2019</p>
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

