@extends('layouts.mcf_v2')


@section('content-header')

<style type="text/css">
.gradient-bg, .page-top-banner .overlay-bg, .banner-section .overlay-bg, .features-wrap .single-feature .overlay-bg {
    background: -moz-linear-gradient(0deg, #f00 0%, #691cff 100%);
    background: -webkit-linear-gradient(0deg, #f00 0%, #691cff 100%);
    background: -ms-linear-gradient(0deg, #f00 0%, #691cff 100%);
}

.page-top-banner {
  background: url(/bg3.jpg);
  background-size: cover;
}

</style>


    <!-- Start page-top-banner section -->
    <section class="page-top-banner section-gap-full relative" data-stellar-background-ratio="0.5">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row section-gap-half">
                <div class="col-lg-12 text-center">
                    <h1>О Нас</h1>
                    <h4>позвольте представиться</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- End about-top-banner section -->

@endsection


@section('content')

    <!-- End about-top-banner section -->

    <!-- Start about section -->
    <section class="about-section section-gap-full relative" id="about-section">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 about-left">
                    <img class="img-fluid" src="/led.png" alt="">
                </div>
                <div class="col-lg-5 col-md-5 about-right">
                    <h3>Завод MCF</h3>
                    <h1>Все что Вам нужно знать о нас</h1>
                    <p>
                        Работаем с 2002 года. Сообдственное производство звукового и светового оборудования.
                        Работая с нами Вы работает без посредников.
                    </p>
                    <a class="primary-btn" href="#">Контакты</a>
                </div>
            </div>
        </div>
        <div class="floating-shapes">
            <span data-parallax='{"x": 150, "y": -20, "rotateZ":500}'>
                <img src="/mcf/img/shape/fl-shape-1.png" alt="">
            </span>
            <span data-parallax='{"x": 250, "y": 150, "rotateZ":500}'>
                <img src="/mcf/img/shape/fl-shape-2.png" alt="">
            </span>
            <span data-parallax='{"x": -180, "y": 80, "rotateY":2000}'>
                <img src="/mcf/img/shape/fl-shape-3.png" alt="">
            </span>
            <span data-parallax='{"x": -20, "y": 180}'>
                <img src="/mcf/img/shape/fl-shape-4.png" alt="">
            </span>
            <span data-parallax='{"x": 300, "y": 70}'>
                <img src="/mcf/img/shape/fl-shape-5.png" alt="">
            </span>
            <span data-parallax='{"x": 250, "y": 180, "rotateZ":1500}'>
                <img src="/mcf/img/shape/fl-shape-6.png" alt="">
            </span>
            <span data-parallax='{"x": 180, "y": 10, "rotateZ":2000}'>
                <img src="/mcf/img/shape/fl-shape-7.png" alt="">
            </span>
            <span data-parallax='{"x": 60, "y": -100}'>
                <img src="/mcf/img/shape/fl-shape-9.png" alt="">
            </span>
            <span data-parallax='{"x": -30, "y": 150, "rotateZ":1500}'>
                <img src="/mcf/img/shape/fl-shape-10.png" alt="">
            </span>
        </div>
    </section>
    <!-- End about section -->
    <!-- Start feature section -->
    <section class="feature-section section-gap-full" id="feature-section">
        <div class="container">
            <div class="row align-items-center feature-wrap">
                <div class="col-lg-4 header-left">
                    <h1 style="font-size: 3em;">
                        Уникальное предложение для каждого проекта.
                    </h1>
                    <a class="primary-btn" href="#">Заказать расчёт
                        <span class="ti-arrow-right"></span>
                    </a>
                </div>
                <div class="col-lg-8">
                    <div class="row features-wrap">
                        <div class="col-md-6">
                            <div class="single-feature relative">
                                <div class="overlay overlay-bg"></div>
                                <span class="ti-palette"></span>
                                <h3>Настоящий бренд</h3>
                                <p>
                                    Мы предоставляем только качественное оборудование.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-feature relative">
                                <div class="overlay overlay-bg"></div>
                                <span class="ti-heart"></span>
                                <h3>Сделано с любовью</h3>
                                <p>
                                    У нас ручная сборка и проверка качества продукта на каждом этапе.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-feature relative">
                                <div class="overlay overlay-bg"></div>
                                <span class="ti-loop"></span>
                                <h3>Сервисвное обслуживание</h3>
                                <p>
                                    Вся продукция подлежит гарантии не менее 1 года. Не забывайте использовать качественную коммутацию.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-feature relative">
                                <div class="overlay overlay-bg"></div>
                                <span class="ti-headphone-alt"></span>
                                <h3>Оперативный ответ</h3>
                                <p>
                                    Вы можете всегда позвонить нам для получения консультации. Контакты в меню сверху или снизу страницы.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature section -->

    <!-- Start stat section -->
    <section class="stat-section section-gap-half">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-stat">
                        <i class="ti-thumb-up"></i>
                        <h1>
                            <span class="counter">56</span>+</h1>
                        <h4>Проектов сделано</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-stat">
                        <i class="ti-face-smile"></i>
                        <h1>
                            <span class="counter">106</span>+</h1>
                        <h4>Счатливых клиента</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-stat">
                        <i class="ti-paint-bucket"></i>
                        <h1>
                            <span class="counter">14320</span>+</h1>
                        <h4>Общая мощность</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-stat">
                        <i class="ti-check-box"></i>
                        <h1>
                            <span class="counter">123</span>+</h1>
                        <h4>Наши партнеры</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End stat section -->

    <!-- Start team section -->
    <section class="team-section section-gap-full">
        <div class="container">
            <div class="section-title">
                <h2 class="text-center">Наша команда</h2>
                <p class="text-center">А вот и Мы! Знакомьтесь.</p>
            </div>
            <div class="row">
                <div class="team-carusel  owl-carousel" id="team-carusel">
                    <div class="single-team item">
                        <img class="img-fluid" src="/8_cr.jpg" alt="">
                        <div class="team-content">
                            <h4>Foto Sushi</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-team item">
                        <img class="img-fluid" src="/7_cr.jpg" alt="">
                        <div class="team-content">
                            <h4>Philipe Cavalcante</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-team item">
                        <img class="img-fluid" src="/9_cr.jpg" alt="">
                        <div class="team-content">
                            <h4>Cristian Newman</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-team item">
                        <img class="img-fluid" src="/10_cr.jpg" alt="">
                        <div class="team-content">
                            <h4>Conor Sexton</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-team item">
                        <img class="img-fluid" src="/11_cr.jpg" alt="">
                        <div class="team-content">
                            <h4>Pete Bellis</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-team item">
                        <img class="img-fluid" src="/12_cr.jpg" alt="">
                        <div class="team-content">
                            <h4>Foto Sushi</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-team item">
                        <img class="img-fluid" src="/13_cr.jpg" alt="">
                        <div class="team-content">
                            <h4>Philipe Cavalcante</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End team section -->

    <!-- Start testimonial section -->
    <section class="testimonial-section section-gap-full" id="testimonial-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 testimonial-left">
                    <h2>Что о нас гворят</h2>
                    <p>
                        Если Вы уже являетесь нашим клиентом, то оставьте пожалуйста отзыв. Мы будем Вам благодарны за обратную связь.
                    </p>
                    <a class="primary-btn" href="#">Отзывы
                        <span class="ti-arrow-right"></span>
                    </a>
                </div>
                <div class="col-lg-8 testimonial-right">
                    <div class="testimonial-carusel  owl-carousel" id="testimonial-carusel">
                        <div class="single-testimonial item">
                            <p>
                                “В октябре 2018 года, под руководством Юрчука Павла в районном центре культуры с. Амурзет Октябрьского района ЕАО, прошел семинар по техническому обслуживанию музыкальной аппаратуры. По приглашению директора ДК, Павел выехал в с.Екатерино - Никольское, где оказал профессиональную консультацию, настроил и устранил неполадки в музыкальной аппаратуре. Колонки "YAMAHA" стали звучать лучше, после замены кроссоверов и проводной системы. Работа Павла прошла испытания в количестве 15 - ти Новогодних мероприятий. Огромное спасибо, благодарим за качественную работу. Побольше бы специалистов такого уровня. С уважением работники ДК.”
                            </p>
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="/mcf/img/avatar1.jpg" alt="">
                                </div>
                                <div class="details">
                                    <h4>с. Екатерино - Никольское</h4>
                                    <p>Центр культуры</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial item">
                            <p>
                                “Продукция завода MCF - это конструктор, собранный из лучших комплектующих зарубежных брендов. Оборудование собирается специалистами физиками согласно всех необходимых спецификаций, производится тонкая настройка всего оборудования, тестирование, сертификация. Даже и не думал, что на нашем Российском рынке есть достойная замена зарубежным производителям звукового и светового оборудования по достаточно приемлемым ценам. Я остался в восторге от качества оборудования.”
                            </p>
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="/mcf/img/avatar2.jpg" alt="">
                                </div>
                                <div class="details">
                                    <h4>Клиент Михаил.</h4>
                                    <p>физик - специалиста</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial item">
                            <p>
                                “Хотим поблагодарить Индивидуального предпринимателя Юрчука Павла Владимировича за поставку и монтаж современного звукового оборудования для ГБУ РК "Национальный музыкально-драматический театр Республики Коми" в августе 2019 года. Павел Владимирович лично провел монтаж и наладку оборудования, обучил специалистов театра, и в дополнение к поставке качественного современного звукового оборудования согласно условий государственного контракта, в виде спонсорской помощи поставил необходимое театру оборудование (колонки, МФУ, головные микрофоны и т.д.) на сумму более 100 тыс. руб. Огромное спасибо, благодарим за качественную работу и за спонсорскую помощь. С уважением сотрудники театра.”
                            </p>
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="/mcf/img/avatar3.jpg" alt="">
                                </div>
                                <div class="details">
                                    <h4>г. Сыктывкар.</h4>
                                    <p>сотрудники театра</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial item">
                            <p>
                                “Огромное спасибо! Приятно удивлены, что у нас могут делать звуковое и световое оборудование такого высокого качества! Желаем процветания и дальнейших успехов! С уважением и благодарностью, коллектив Знаменской Детской школы искусств.”
                            </p>
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="/mcf/img/avatar1.jpg" alt="">
                                </div>
                                <div class="details">
                                    <h4>Тамбовская область</h4>
                                    <p>школа искусств</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial item">
                            <p>
                                “Компания MCF зарекомендовала себя как надежный партнер, скрупулезно подошедший к вопросу оснащения театра «Модерн» звуковым оборудованием. Звукоусилительная аппаратура MCF используется на всех 3 сценах театра. На 1-й малой сцене установлены микшерный пульт, акустические системы и усилитель как основные портальные, на 2-й малой сцене усилитель и громкоговорители MCF используются в качестве арьерных и на главной сцене, установленные позади зрителей акустические системы помогают формировать пространственную звуковую картину. Помимо озвучивания залов активные акустические системы MCF используются в фойе театра для звукоусиления на пресс-конференциях, создания музыкального фона перед спектаклями, в антрактах и при проведении различных мероприятий.”
                            </p>
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="/mcf/img/avatar2.jpg" alt="">
                                </div>
                                <div class="details">
                                    <h4>Андрей Трифонов</h4>
                                    <p>партнер</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial section -->
@endsection