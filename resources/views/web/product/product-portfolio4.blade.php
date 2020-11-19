@extends('web.templete.master')

@section('seo')
<meta name="description" content="Stups Printing">
@endsection

@section('content')

    <section class="page-title">
        <div class="thm-container">
            <h3>Portfolio</h3>        
        </div><!-- /.thm-container -->
    </section><!-- /.page-title -->

    <div class="breadcumb-wrapper">
        <div class="thm-container">
            <ul class="breadcumb">
                <li><a href="{{route('web.index')}}">Homepage</a></li><!--
                --><li><span class="sep">-</span></li><!--
                --><li><span>Portfolio</span></li>
            </ul><!-- /.breadcumb -->
        </div><!-- /.thm-container -->
    </div><!-- /.breadcumb-wrapper -->

    <section class="recent-projects project-page">
        <div class="thm-container">
            <div class="sec-title text-center">
                <span>Our Portfolio</span>
                <h3>PROMOTIONAL / POS</h3>
            </div>
            <div class="row"> 
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/4/Customized Display Stands.jpg')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/4/Customized Display Stands.jpg')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Promotional / Pos</span>
                                <a><h3>Customized Display Stands</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/4/Counter Stands.jpg')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/4/Counter Stands.jpg')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Promotional / Pos</span>
                                <a><h3>Counter Stands</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/4/Customized Carrier Bags.jpg')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/4/Customized Carrier Bags.jpg')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Promotional / Pos</span>
                                <a><h3>Customized Carrier Bags</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/4/Banners.jpg')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/4/Banners.jpg')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Promotional / Pos</span>
                                <a><h3>Banners</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/4/Button Badges.jpg')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/4/Button Badges.jpg')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Promotional / Pos</span>
                                <a><h3>Button Badges</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/4/Trophies.jpg')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/4/Trophies.jpg')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Promotional / Pos</span>
                                <a><h3>Trophies </h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.recent-projects -->

@endsection

@section('script')
@endsection