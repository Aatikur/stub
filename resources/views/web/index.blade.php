@extends('web.templete.master')

@section('seo')
<meta name="description" content="Stups Printing">
@endsection

@section('content')

    <div id="minimal-bootstrap-carousel" class="carousel slide carousel-fade slider-home-one" data-ride="carousel">           
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active slide-1" style="background-image: url({{asset('web/img/banner-1-1.jpg')}});background-position: left top;">
                
                <div class="carousel-caption">
                    <div class="thm-container">
                        <div class="box valign-middle">
                            <div class="content ">
                                <h3 data-animation="animated fadeInUp">We bring design together with technology</h3>
                                <h2 data-animation="animated fadeInDown">Listening to your <br> printing needs</h2>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="item slide-2" style="background-image: url({{asset('web/img/banner-1-2.jpg')}});background-position: left top;">
                
                <div class="carousel-caption">
                    <div class="thm-container">
                        <div class="box valign-middle">
                            <div class="content ">
                                <h3 data-animation="animated fadeInUp">We bring design together with technology</h3>
                                <h2 data-animation="animated fadeInDown">Putting your <br> thoughts into print.</h2>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>

        <ul class="carousel-indicators list-inline custom-navigation">
            <li data-target="#minimal-bootstrap-carousel" data-slide-to="0" class="active"></li><!--
            --><li data-target="#minimal-bootstrap-carousel" data-slide-to="1"></li>
        </ul>
    </div>

    <section class="welcome-section sec-pad">
        <div class="thm-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="welcome-img-box">
                        <img src="{{asset('web/img/welcome-1-1.png')}}" alt="Awesome Image"/>
                    </div><!-- /.welcome-img-box -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="welcome-content">
                        <div class="title">
                            <p>Welcome to Stups</p>
                            <h3>You Dream it. We Print it.</h3>
                        </div><!-- /.title -->
                        <p>Printing has become a lot more accessible to the general public in recent years. While home printing may be adequate for personal use, it is a different ball game for people using printing services to market their business. Businesses will always be in need of quality printing products, as well as the expertise and advice that they can expect with doing business with a professional print company.</p>
                        <a href="{{route('web.about.about')}}" class="thm-btn yellow-bg">Learn More</a>
                    </div><!-- /.welcome-content -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.welcome-section -->

    <section class="cta-style-two">
        <div class="image-block">
            <img src="{{asset('web/img/free-sample-1-2.jpg')}}" alt="Awesome Image"/>
        </div><!-- /.image-block -->
        <div class="thm-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="cta-style-two-content">
                        <div class="title">
                            <span>Printing your memories</span>
                            <h2>Get a Feel For <br /> Colors</h2>
                        </div><!-- /.title -->
                        <p>Attractive printing products always grab attention, which bodes well for a company. A quality printed job will also help to attract more customers and create a professional image, Stups Printing can advise on every aspect of the printed job, including design, type face, illustrations, color of type, type of paper best used. A business will not get the same type of professional advice by looking at various websites for information. Our  history, growth and keeping up with current trends over the years have served us well and we intent to continue with “Passion with Purpose”</a>
                    </div><!-- /.cta-style-two-content -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6"></div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.cta-style-two -->

    <section class="what-we-do sec-pad">
        <div class="thm-container">
            <div class="sec-title text-center">
                <span>Our features</span>
                <h3>What We Do</h3>
            </div><!-- /.sec-title -->
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="single-what-we-do">
                        <div class="text-box hvr-bounce-to-bottom">
                            <a href="{{route('web.litho_images')}}"><h3>LITHO AND DIGITAL PRINTING</h3></a>
                            <p>Lithographic printing is a style of printing in which an image is transferred to a printing plate, which is then covered with both water and oil-based ink. </p>
                            <a href="{{route('web.litho_images')}}" class="read-more fas fa-angle-right"></a>
                        </div><!-- /.text-box -->
                        <div class="text-box hvr-bounce-to-bottom">
                            <a href="{{route('web.corporate_images')}}"><h3>CORPORATE GIFTS </h3></a>
                            <p>Corporate Gifts printing consist of printing on wide range of items like pen, bags, t-shirts and etc</p>
                            <a href="{{route('web.corporate_images')}}" class="read-more fas fa-angle-right"></a>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-what-we-do -->
                </div><!-- /.col-md-6 -->
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-what-we-do-one hvr-bounce-to-bottom">
                                <i class="printify-icon-paper-drill"></i>
                                <a href="{{route('web.flexo_images')}}"><h3>FLEXO</h3></a>
                                <p>Flexography is a form of printing process which utilizes a flexible relief plate.</p>
                                <a href="{{route('web.flexo_images')}}" class="read-more fas fa-angle-right"></a>
                            </div><!-- /.single-what-we-do-one -->
                        </div><!-- /.col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="single-what-we-do-one hvr-bounce-to-bottom">
                                <i class="printify-icon-printing-text"></i>
                                <a href="{{route('web.promo_images')}}"><h3>PROMOTIONAL / POS</h3></a>
                                <p>Promotional / POS printing and designing is done mainly done for product and promo items like banner, bags, stands and many more.</p>
                                <a href="{{route('web.promo_images')}}" class="read-more fas fa-angle-right"></a>
                            </div><!-- /.single-what-we-do-one -->
                        </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.what-we-do -->

    <section class="call-to-action-one">
        <div class="overlay"></div><!-- /.overlay -->
        <div class="inner-wrapper">
            <div class="thm-container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="call-to-action-content">
                            <div class="title">
                                <span>Business stationery printing</span>
                                <h2>Even More Good <br /> Stuff</h2>
                            </div><!-- /.title -->
                            <ul class="list-box">
                                <li><i class="fas fa-check-circle"></i>Professional designs with added fizz</li>
                                <li><i class="fas fa-check-circle"></i>Create an army of business stationery</li>
                                <li><i class="fas fa-check-circle"></i>Take your attention to detail up a level</li>
                                <li><i class="fas fa-check-circle"></i>Totally safe for laser printers</li>
                            </ul><!-- /.list-box -->
                            <div class="phone-btn"><i class="fas fa-phone"></i>+27 (11) 334 1850</div>
                            <a href="tel:+27 (11) 334 1850" class="thm-btn yellow-bg">Contact Us</a>
                        </div><!-- /.call-to-action-content -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.thm-container -->
        </div><!-- /.inner -->
    </section><!-- /.call-to-action -->

    <section class="recent-projects project-page">
        <div class="thm-container">
            <div class="sec-title text-center">
                <span>Our Portfolio</span>
                <h3>Our Work</h3>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/project-1-1.jpg')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/project-1-1.jpg')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/project-1-2.jpg')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/project-1-2.jpg')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/project-1-3.jpg')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/project-1-3.jpg')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-12 text-center">
                    <a href="{{route('web.gallery')}}" class="thm-btn yellow-bg">More</a>
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.recent-projects -->

    <section class="mail-us-section text-center">
        <div class="thm-container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Contact us for any query</h5>
                </div><!-- /.col-md-5 -->
                <div class="col-md-6">
                    <div class="contact-btn">					
                        <a href="tel:+27 (11) 334 1850" class="thm-btn yellow-bg">Mail Us</a>
                        <a href="tel:+27 (11) 334 1850" class="thm-btn yellow-bg">Call Us</a>
                    </div>
                </div><!-- /.col-md-7 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.faq-section -->

@endsection

@section('script')
@endsection