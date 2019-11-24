<!DOCTYPE html>
<html lang="ru" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="MCF Michael">
    <!-- Meta Description -->
    <meta name="description" content="Sound and Light instruments brand">
    <!-- Meta Keyword -->
    <meta name="keywords" content="Sound, Light, instruments, brand, mcf, scene, stadion, hall">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>MCF - Бренд завода про производству светового и звукогого оборудования | Sound and light instruments factory.</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700" rel="stylesheet">

    <!--
CSS
============================================= -->

    <link rel="stylesheet" type="text/css" href="/fontawesome-free-5.11.2-web/css/all.min.css">
    {{-- <script type="text/javascript" src="/fontawesome-free-5.11.2-web/js/all.min.js"></script> --}}
    {{-- <link rel="stylesheet" href="/mcf/css/font-awesome.min.css"> --}}
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="/mcf/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="/mcf/css/themify-icons.css">
    <link rel="stylesheet" href="/mcf/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/mcf/css/style.css">
    <link rel="stylesheet" href="/mcf/css/responsive.css">

    <style type="text/css">
        .breakpoint-off .dopenav ul li .dropdown {
            width: 17em;
        }
        .nav-brand {
            text-align: center;
            border: 1px solid #f00000;
            padding: 6px;
            background: white;
        }

        a:hover {
            color: red !important;
        }

        .primary-btn {
            background: #f00;
        }

        section.page-top-banner.section-gap-full.relative > div.container > div > div > h1, section.page-top-banner.section-gap-full.relative > div.container > div > div > h4 {
            color: white;
        }
        a.a_hover:hover {
            color: #F00096 !important;
        }

        .blog-lists-section .tags-widget ul li a {
            font-size: 14px;
        }

    </style>
    @yield('css')
</head>

<body>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Выбор языка</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form>
            <div class="form-group">

                <ul class="list-group">
                    <li class="list-group-item list-group-item-action">
                        <a href="/ru">
                            <img src="/22px-Flag_of_Russia.svg.png">
                            Русский
                        </a>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <a href="/en">
                            <img src="/22px-Flag_of_the_United_States.svg.png">
                            English
                        </a>
                    </li>
                </ul>
            </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-primary">Сохранить</button>
      </div>
    </div>
  </div>
</div>












    <!-- Preloader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <!-- Start header section -->
    <header class="header-area" id="header-area">
        <div class="dope-nav-container breakpoint-off">
            <div class="container">
                <div class="row">
                    <!-- dope Menu -->
                    <nav class="dope-navbar justify-content-between" id="dopeNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="/">
                            <img src="/logo1.png" alt="" style="max-width: 3em;">
                        </a>

                        <!-- Navbar Toggler -->
                        <div class="dope-navbar-toggler">
                            <span class="navbarToggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </div>

                        <!-- Menu -->
                        <div class="dope-menu">

                            <!-- close btn -->
                            <div class="dopecloseIcon">
                                <div class="cross-wrap">
                                    <span class="top"></span>
                                    <span class="bottom"></span>
                                </div>
                            </div>

                            <!-- Nav Start -->
                            <div class="dopenav">
                                <ul id="nav">
                                    <li>
                                        <a href="/">Главная</a>
                                    </li>
                                    <li>
                                        <a href="/mcf_products">Продукция</a>
                                        <ul class="dropdown">
                                        @foreach($cats as $cat)
                                            <li >
                                                <a class="a_hover" href="/mcf_cat/{{ $cat->ident }}">{{ $cat->name }}</a>
                                            </li>
                                        @endforeach                                            
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/mcf_about_us">О нас</a>
                                    </li>
                                    {{-- <li> --}}
                                        {{-- <a href="/mcf_service">Сервис</a> --}}
                                    {{-- </li> --}}
                                    <li>
                                        <a href="/mcf_contact">Контакты</a>
                                    </li>
                                    <li>
                                        <a href="/mcf_cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span id="qty_badge2" class="badge badge-notify" style="font-size:10px;" data-cart_id={{ $cart->id }}></span>
                                            Корзина
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#exampleModal">
                                            <i class="fa fa-flag"></i>
                                            Язык
                                        </a>
                                    </li>
{{--                                     <li>
                                        <a class="menu_creative_btn2" href="/cart/" style="color: #691cff;">
                                        </a>
                                    </li> --}}

                                </ul>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Start header section -->

    @yield('content-header')


    @yield('content')

    <!-- Start footer section -->
    <footer class="footer-section section-gap-half">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 footer-cols">

                        <a class="nav-brand" href="/">
                            <img src="/logo1.png" alt="" style="max-width: 4em;">
                        </a>

                    {{-- <a href="#">                        <img src="/logo1.png" alt="" style="max-width: 4em;">                    </a> --}}
                    <p class="copyright-text">&copy; 2019 Разработка
                        <i class="fa fa-heart" aria-hidden="true"></i> от <br>
                        <a href="mailto:mltefive@gmail.com" target="_blank">mltefive@gmail.com</a>
                    </p>
                </div>
                <div class="col-lg-3 col-sm-6 footer-cols">
                    <h4>Ссылки</h4>
                    <ul>
                        <li><a href="/">Главная</a></li>
                        <li><a href="/mcf_products">Продукция</a></li>
                        <li><a href="/mcf_about_us">О бренде</a></li>
                        {{-- <li><a href="/mcf_service">Сервис</a></li> --}}
                        <li><a href="/mcf_contact">Контакты</a></li>



                                    <li>
                                        <a href="/">Главная</a>
                                    </li>
                                    <li>
                                        <a href="/mcf_products">Продукция</a>
                                    </li>
                                    <li>
                                        <a href="/mcf_about_us">О нас</a>
                                    </li>
                                    <li>
                                        <a href="/mcf_service">Сервис</a>
                                    </li>
                                    <li>
                                        <a href="/mcf_contact">Контакты</a>
                                    </li>




                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 footer-cols">
                    <h4>Помощь</h4>
                    <ul>




                        <li><a href="#">Как сделать заказ</a></li>
                        <li> <a href="#">Правила оплаты</a></li>
                        <li> <a href="#">Возврат товара</a></li>
                        <li> <a href="#">Отказ от услуги</a></li>
                        <li> <a href="#">Запрос помощи</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 footer-cols">
                    <h4>Наши котакты</h4>
                    <ul>
                        <li>
                            <a href="tel:88002000023">8‒800‒200‒00‒23</a>
                        </li>
                        <li>
                            <a href="email:mcfzavod@gmail.com">mcfzavod@gmail.com</a>
                        </li>
                        <li>
                            <a href="#">
                                 675000, Амурская обл.,
                                <br>
                                г.Благовещенск, Пионерская 31
                            </a>
                        </li>
                    </ul>
                    <ul id="social">
                        <li>
                            <a target="_blank" href="#">
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
            </div>
        </div>
    </footer>
    <!-- End footer section -->

    <div class="scroll-top">
        <i class="ti-angle-up"></i>
    </div>

    <!--
JS
============================================= -->
    <script src="/mcf/js/vendor/jquery-2.2.4.min.js"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    {{-- <script src="/mcf/js/vendor/popper.min.js"></script> --}}
    <script src="/mcf/js/jquery.easing.1.3.js"></script>
    {{-- <script src="/mcf/js/vendor/bootstrap.min.js"></script> --}}
    <script src="/mcf/js/jquery.parallax-scroll.js"></script>
    <script src="/mcf/js/dopeNav.js"></script>
    <script src="/mcf/js/owl.carousel.min.js"></script>
    <script src="/mcf/js/waypoints.min.js"></script>
    <script src="/mcf/js/jquery.stellar.min.js"></script>
    <script src="/mcf/js/jquery.counterup.min.js"></script>
    <script src="/mcf/js/main.js"></script>

    @yield('script')

</body>

</html>