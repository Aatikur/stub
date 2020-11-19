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
                <li><a href="index.php">Homepage</a></li><!--
                --><li><span class="sep">-</span></li><!--
                --><li><span>Portfolio</span></li>
            </ul><!-- /.breadcumb -->
        </div><!-- /.thm-container -->
    </div><!-- /.breadcumb-wrapper -->

    <section class="recent-projects project-page">
        <div class="thm-container">
            <div class="sec-title text-center">
                <span>Our Portfolio</span>
                <h3>Flexo Printing </h3>
            </div>
            <div class="row"> 
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/2/Variable Data Labels.png')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/2/Variable Data Labels.png')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Flexo Printing</span>
                                <a><h3>Variable Data Labels</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/2/Plain.png')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/2/Plain.png')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Flexo Printing</span>
                                <a><h3>Full Colour labels</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/2/Bar Code.jpg')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/2/Bar Code.jpg')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Flexo Printing</span>
                                <a><h3>Bar Code</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/2/Blanc Labels.jpeg')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/2/Blanc Labels.jpeg')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Flexo Printing</span>
                                <a><h3>Blanc Labels</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/2/Ribbons for Label Printers.jpg')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/2/Ribbons for Label Printers.jpg')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Flexo Printing</span>
                                <a><h3>Ribbons for Label Printers</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/2/Water Bottle.png')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/2/Water Bottle.png')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Flexo Printing</span>
                                <a><h3>Annual Reports </h3></a>
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