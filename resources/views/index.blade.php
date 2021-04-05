@extends('client.layout')

@section('content')
<section class="bnr-2">
        <div class="container">
            <div class="welcome-area">
                <div class="welcome-text">
                    <h1 class="color_grad wow fadeInUp" data-wow-delay="0.2s"> Improve your Online Presence</h1>
                    <p class="wow fadeInUp font16" data-wow-delay="0.3s">
                        We treat all social media issues. Increase your social media presence with a Gauranteed Social Media Marketing Platform with real human providing Direct organic reach.
                    </p>
                    <div class="home-button mt60 xs-mt40 wow fadeInUp" data-wow-delay="0.4s">
                        <a class="left" href="#">Get Started for free</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--ABOUT AREA-->
    <section class="about-area sky-gray-bg padding-30-20 relative wow fadeIn" id="about">
        <div class="area-bg"></div>
        <div class="container">
            <div class="row flex-v-center padding-top">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="about-content xs-mb50">
                        <h2 class="mb30 justify"> We Offer Affordable and Efficient Social Media Growth. </h2>
                        <p> We offer the best social media services that allows you boost your online presence across all social media platforms at affordable amounts. We are unique because we boost social media handles and and contents organically with real hummans. </p>
                        <a href="#" class="read-more mt30 inline-block"> Get Started Now </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="about-mockup">
                        <img src="assets/img/about/about-4.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2> How we Work </h2>
                        <p> our works are guaranteed to increase your social media insights on all platforms. </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="about-mockup right xs-mb50">
                        <div class="video-area-wrapper">
                            <div class="img-wrapper">
                                <img src="assets/img/boost_social.png" alt="video section image">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 our_mission_text">
                    <div class="about-content">
                        <h2 class="mb30"> Place an order in 3 easy steps </h2>
                        <p> You can place an order on our website by following these three easy steps. </p>
                        <div class="single_goal pos_relative">
                            <i class="material-icons icon-round mdi mdi-trending-up"></i>
                            <p> First Register on the website. Your details are Safe and Secure </p>
                        </div>

                        <div class="single_goal pos_relative">
                            <i class="material-icons icon-round mdi mdi-store"></i>
                            <p> Next Fund Your Account. We Have Multiple Payment Channels </p>
                        </div>

                        <div class="single_goal pos_relative">
                            <i class="material-icons icon-round mdi mdi-format-line-style"></i>
                            <p> Finally “Create Your Order” </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->

    <!--TESTMONIAL AREA TWO-->
    <section class="testimonials-style-two padding-100-40">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <p>Testimonials</p>
                        <h2>What Our Client Says?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testmonial-style-two">
                        <div id="testimonials-slider-pager" class="hidden-xs">
                            <a href="#" class="pager-item active" data-slide-index="0"><img src="{{asset('assets/img/testmonial/b.jpg')}}" alt="" /></a>
                            <a href="#" class="pager-item" data-slide-index="1"><img src="{{asset('assets/img/testmonial/b.jpg')}}" alt="" /></a>
                            <a href="#" class="pager-item" data-slide-index="2"><img src="{{asset('assets/img/testmonial/b.jpg')}}" alt="" /></a>
                            <a href="#" class="pager-item" data-slide-index="0"><img src="{{asset('assets/img/testmonial/b.jpg')}}" alt="" /></a>
                            <a href="#" class="pager-item" data-slide-index="1"><img src="{{asset('assets/img/testmonial/b.jpg')}}" alt="" /></a>
                            <a href="#" class="pager-item" data-slide-index="2"><img src="{{asset('assets/img/testmonial/b.jpg')}}" alt="" /></a>
                            <a href="#" class="pager-item" data-slide-index="5"><img src="{{asset('assets/img/testmonial/b.jpg')}}" alt="" /></a>
                        </div>
                        <div class="testimonials-slider">
                            <ul class="slider">
                                <li class="slide-item">
                                    <div class="single-testimonials">
                                        <div class="author-image">
                                            <img src="{{asset('assets/img/testmonial/b.jpg')}}" alt="" />
                                        </div>
                                        <div class="author-content">
                                            <img src="{{asset('assets/img/quotes.png')}}" alt="" />
                                            <p>"Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with"</p>
                                            <h3> Sarah Eddie </h3>
                                            <p> Client Name, Project Name </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="slide-item">
                                    <div class="single-testimonials">
                                        <div class="author-image">
                                            <img src="{{asset('assets/img/testmonial/b.jpg')}}" alt="" />
                                        </div>
                                        <div class="author-content">
                                            <img src="{{asset('assets/img/quotes.png')}}" alt="" />
                                            <p>"Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with"</p>
                                            <h3> Sarah Eddie </h3>
                                            <p> Client Name, Project Name </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="slide-item">
                                    <div class="single-testimonials">
                                        <div class="author-image">
                                            <img src="{{asset('assets/img/testmonial/b.jpg')}}" alt="" />
                                        </div>
                                        <div class="author-content">
                                            <img src="{{asset('assets/img/quotes.png')}}" alt="" />
                                            <p>"Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with"</p>
                                            <h3>Mr. Kabila</h3>
                                            <p> Client Name, Project Name </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="slide-item">
                                    <div class="single-testimonials">
                                        <div class="author-image">
                                            <img src="{{asset('assets/img/testmonial/b.jpg')}}" alt="" />
                                        </div>
                                        <div class="author-content">
                                            <img src="{{asset('assets/img/quotes.png')}}" alt="" />
                                            <p>"Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with"</p>
                                            <h3> Sarah Eddie </h3>
                                            <p> Client Name, Project Name </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="slide-item">
                                    <div class="single-testimonials">
                                        <div class="author-image">
                                            <img src="{{asset('assets/img/testmonial/b.jpg')}}" alt="" />
                                        </div>
                                        <div class="author-content">
                                            <img src="{{asset('assets/img/quotes.png')}}" alt="" />
                                            <p>"Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with"</p>
                                            <h3>Mr. Ketu</h3>
                                            <p> Client Name, Project Name </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="slide-item">
                                    <div class="single-testimonials">
                                        <div class="author-image">
                                            <img src="{{asset('assets/img/testmonial/b.jpg')}}" alt="" />
                                        </div>
                                        <div class="author-content">
                                            <img src="{{asset('assets/img/quotes.png')}}" alt="" />
                                            <p>"Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with"</p>
                                            <h3>Mr. Bala</h3>
                                            <p> Client Name, Project Name </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--TESTMONIAL AREA TWO END-->


    <!--BLOG AREA-->
    <!--BLOG AREA-->
    <section class="blog-area padding-100-40 wow fadeIn" id="news">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <p> Recent Updates </p>
                        <h2>See our latest news</h2>
                    </div>
                </div>
            </div>
            <div class="row blog-slider">
                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog-item mb50 shadow">
                        <div class="blog-thumb">
                            <a href="blog.html"><img src="{{ asset('assets/img/1.png') }}" alt=""></a>
                        </div>
                        <div class="post-item-content padding30">
                            <div class="col-lg-9 col-md-12">
                                <p><i class="fa fa-user"></i> <a href="#" class="link">Moga</a></p>
                                <a href="#">
                                    <h5> Launch an effective and healthy social media Presence </h5>
                                </a>
                                <a class="read-more" href="blog.html">Read More</a>
                            </div>
                            <div class="col-lg-3 text-center">
                                <h2 class="post-date" data-titles="29">29</h2>
                                <span> February </span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog-item mb50 shadow">
                        <div class="blog-thumb">
                            <a href="blog.html"><img src="{{ asset('assets/img/hero.png') }}" alt=""></a>
                        </div>
                        <div class="post-item-content padding30">
                            <div class="col-lg-9 col-md-12">
                                <p><i class="fa fa-user"></i> <a href="#" class="link">Moga</a></p>
                                <a href="#">
                                    <h5>Ten Secrets You Will Not Want To Know</h5>
                                </a>
                                <a class="read-more" href="blog.html">Read More</a>
                            </div>
                            <div class="col-lg-3 text-center">
                                <h2 class="post-date" data-titles="29">29</h2>
                                <span> February </span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog-item mb50 shadow">
                        <div class="blog-thumb">
                            <a href="blog.html"><img src="{{ asset('assets/img/3.png')}}" alt=""></a>
                        </div>
                        <div class="post-item-content padding30">
                            <div class="col-lg-9 col-md-12">
                                <p><i class="fa fa-user"></i>
                                    <a href="#" class="link"> Social </a>
                                </p>
                                <a href="#">
                                    <h5> Secrets for boosting your online presence</h5>
                                </a>
                                <a class="read-more" href="">Read More</a>
                            </div>
                            <div class="col-lg-3 text-center">
                                <h2 class="post-date" data-titles="29">29</h2>
                                <span> February </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AREA END-->
    <!--CLIENT AREA-->
    <section class="client-area padding-50-50 wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="client-list client-slider">
                        <div class="single-client"><img src="{{asset('assets/img/facebook.svg')}}" alt=""></div>
                        <div class="single-client"><img src="{{asset('assets/img/twitter.svg')}}" alt=""></div>
                        <div class="single-client"><img src="{{asset('assets/img/instagram.svg')}}" alt=""></div>
                        <div class="single-client"><img src="{{asset('assets/img/youtube.svg')}}" alt=""></div>
                        <div class="single-client"><img src="{{asset('assets/img/facebook.svg')}}" alt=""></div>
                        <div class="single-client"><img src="{{asset('assets/img/twitter.svg')}}" alt=""></div>
                        <div class="single-client"><img src="{{asset('assets/img/instagram.svg')}}" alt=""></div>
                        <div class="single-client"><img src="{{asset('assets/img/youtube.svg')}}" alt=""></div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CLIENT AREA END-->
@endsection