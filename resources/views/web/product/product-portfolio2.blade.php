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
                <h3>Corporate Gifts</h3>
            </div>
            <div class="row"> 
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/3/Pens.png')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/3/Pens.png')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Corporate Gifts</span>
                                <a><h3>Pens</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/3/Variety of Gifts.jpg')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/3/Variety of Gifts.jpg')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Corporate Gifts</span>
                                <a><h3>Novelty Items</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/3/Clothing.jpg')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/3/Clothing.jpg')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Corporate Gifts</span>
                                <a><h3>Clothing</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/3/Golf Bags.jpg')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/3/Golf Bags.jpg')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Corporate Gifts</span>
                                <a><h3>Golf Bags</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/3/tent.jpg')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/3/tent.jpg')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Corporate Gifts</span>
                                <a><h3>Tents</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.recent-projects -->
    <section class="cta-style-three">
    <div class="thm-container text-center" style="padding:20px;background: #33333361;">
        <span>Thickest business card</span>
        <h2>Contact us and we will gladly email <br> you the full range of amazing products <br> that would suite your business.</h2>
        <a href="{{route('web.contact.contact')}}" class="thm-btn">Contact Us</a>
    </div><!-- /.thm-container -->
</section><!-- /.cta-style-three -->


@endsection

@section('script')
@endsection