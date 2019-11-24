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
{{-- @foreach (  as $line) --}}
{{-- @endforeach                                     --}}
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

                    <div class="blog-details">
                        <div class="post-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="/mcf/img/blog/p3.jpg" alt="">
                        </div>
                        <div class="post-details">
                            <ul class="tags">
                                <li><a href="#">Learn</a></li>
                                <li><a href="#">Dream</a></li>
                            </ul>
                            <a href="single-blog.html">
                                <h1>Awesome Design His many legs, pitifully thin compared with.</h1>
                            </a>
                            <p>
                                Received shutters expenses ye he pleasant. Drift as blind above at up. No up simple
                                county stairs do should praise as. Drawings sir gay together landlord had law
                                smallest. Formerly welcomed attended declared met say unlocked. Jennings outlived
                                no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be
                                as it curiosity departure ourselves.
                            </p>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                mollitia animi, id est laborum et dolorum fuga.
                            </p>
                            <blockquote class="blockquote">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod teminc ididunt ut labore et dolore.Lorem ipsum
                                    dolor sit amet.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod temporSed ut perspiciatis unde omnis natus error sit voluptatem accusantium
                                    doloremque laudantium.</p>
                            </blockquote>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                voluptatem sequi nesciunt.

                                On the other hand, we denounce with righteous indignation and dislike men who are so
                                beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire,
                                that they cannot foresee the pain and trouble that are bound to ensue; and equal blame
                                belongs to those who fail in their duty through weakness
                            </p>
                        </div>
                    </div>
                    <div class="comment-wrap">
                        <h3>{{ __('Recent Comments') }}</h3>
                        <div class="media comments">
                            <img class="mr-3" src="/mcf/img/blog/avatar1.jpg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0">Alen Doe</h5>
                                <p>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin. Cras purus odio, vestibulum in
                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                                    fringilla.
                                    Donec lacinia congue felis in faucibus.
                                </p>
                                <div class="comment-buttons">
                                    <a href="#" class="primary-btn black-btn">Replay</a>
                                </div>
                                <div class="media mt-3 replay-comment">
                                    <a class="pr-3" href="#">
                                        <img src="/mcf/img/blog/avatar2.jpg" alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="mt-0">Justin Doe</h5>
                                        <p>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                            ante sollicitudin. Cras purus odio, vestibulum in
                                            vulputate at, tempus viverra turpis.
                                        </p>
                                        <div class="comment-buttons">
                                            <a href="#" class="primary-btn black-btn">Replay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media comments">
                            <img class="mr-3" src="/mcf/img/blog/avatar3.jpg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0">Jon Doe</h5>
                                <p>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin. Cras purus odio, vestibulum in
                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                                    fringilla.
                                    Donec lacinia congue felis in faucibus.
                                </p>
                                <div class="comment-buttons">
                                    <a href="#" class="primary-btn black-btn">Replay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form">
                        <h3>{{ __('Your Comment') }}</h3>
                        <div class="row form-col-wrap">
                            <div class="col-lg-6 form-cols">
                                <input type="text" class="form-control" placeholder="Name"  onfocus="this.placeholder=''" onblur="this.placeholder='{{ __('Name') }}*'">
                            </div>
                            <div class="col-lg-6 form-cols">
                                <input type="email" class="form-control" placeholder="Email"  onfocus="this.placeholder=''" onblur="this.placeholder='{{ __('Email') }}*'">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <textarea name="comment" class="form-control" placeholder="Comment" cols="30" rows="10" onfocus="this.placeholder=''" onblur="this.placeholder='Comment*'"></textarea>
                                <a href="#" class="primary-btn">{{ __('Submit') }}</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- End blog-lists section -->


@endsection

