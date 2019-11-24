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

    <section class="blog-lists-section section-gap-full ">
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

                            @foreach($cats as $cat1)
                                <li class="d-flex justify-content-between">
                                    <a href="/mcf_cat/{{ $cat1->ident }}">{{ $cat1->name }}</a>
                                    <span>
                                        (
                                            {{ count($cat1->products) }}
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


                <!-- Start service section -->
                <section class="service-section section-gap-full" style="padding-top: 0em;">
                    <div class="container">
                        <div class="row">

                            {{-- @foreach($cats as $cat) --}}
                            @foreach($cat2->products as $product)
                                    @if (isset($product))

                                      <div class="col-lg-4  col-md-6 pb-30">
                                          {{-- <a href="/mcf_product/{{ $product->ident }}"> --}}
                                            <div class="single-service text-center" style="background-color: white;">
                                                <div class="text-center">
                                                  <img src="{{ $cat2->image }}" class="img-responsive responsive-img" style="max-height: 10em; max-width: 10em;">
                                                </div>
                                                {{-- <i class="ti-user"></i> --}}

                                                <h4>{{ $product->name ?? '??' }}</h4>
                                                <p>
                                                    {{ $product->price_amount ?? '??' }} руб.
                                                </p>

                                                <button class="card-link text-red to_cart btn-sm btn" data-ident="{{ $product->ident }}" >
                                                    В корзину
                                                </button>
                                                

                                            </div>
                                          {{-- </a> --}}
                                      </div>
                                    @endif

                            @endforeach



                        </div>
                    </div>
                </section>
                <!-- End service section -->

                </div>

            </div>
        </div>
    </section>
    <!-- End blog-lists section -->


@endsection


@section('script')
<script type="text/javascript">

$(document).ready(function (){

    $('.to_cart').click(function(e){
        // let this0=this
        e.preventDefault();
        // doBounce($(this), 1, '13px', 300);
        $(this).addClass('animated bounce')
        var this0=this
        $.get("/product/"+$(this).data('ident')+"/to_cart/1");

        setTimeout(function(){
          $(this0).removeClass('animated bounce')
        }, 1500);

    })

});
  
</script>
      
@endsection