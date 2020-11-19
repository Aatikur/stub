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
                <h3>Litho Printing</h3>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/1/Leaflet 2.png')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/1/Leaflet 2.png')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Litho Printing</span>
                                <a><h3>Leaflets</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/1/Boxes.png')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/1/Boxes.png')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Litho Printing</span>
                                <a><h3>Square Paper Book</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/1/poster A1.png')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/1/poster A1.png')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Litho Printing</span>
                                <a><h3>Posters</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/1/Large Format Printing.jpg')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/1/Large Format Printing.jpg')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Litho Printing</span>
                                <a><h3>Large Format Printing</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/1/Annual Report.jpg')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/1/Annual Report.jpg')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Litho Printing</span>
                                <a><h3>Annual Reports </h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/1/Books.png')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/1/Books.png')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Litho Printing</span>
                                <a><h3>Book</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/1/Header Board.png')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/1/Header Board.png')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Litho Printing</span>
                                <a><h3>Header Boards</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/1/Desk Pad.png')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/1/Desk Pad.png')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Litho Printing</span>
                                <a><h3>Calendars / Deskpads</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/1/Training Manual.png')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/1/Training Manual.png')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Litho Printing</span>
                                <a><h3>Training Manual</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/1/Folder 2.png')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/1/Folder 2.png')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Litho Printing</span>
                                <a><h3>Folders</h3></a>
                            </div><!-- /.inner -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-recent-project -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-recent-project">
                        <div class="img-box">
                            <img src="{{asset('web/img/gallery/1/Continuous Forms.jpg')}}" alt="Stups Protfolio"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a class="example-image-link more" href="{{asset('web/img/gallery/1/Continuous Forms.jpg')}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            <div class="inner hvr-bounce-to-bottom">
                                <span>Litho Printing</span>
                                <a><h3>Continuous Forms</h3></a>
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