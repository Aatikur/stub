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
                @foreach($promo_data as $data)
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="single-recent-project">
                            <div class="img-box">
                                <img src="{{asset('images/product/'.$data->images)}}" alt="Stups Protfolio"/>
                            </div><!-- /.img-box -->
                            <div class="text-box">
                                <a class="example-image-link more" href="{{asset('images/product/'.$data->images)}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                                <div class="inner hvr-bounce-to-bottom">
                                    <span>Promotional / Pos</span>
                                    <a><h3>{{ $data->caption }}</h3></a>
                                </div><!-- /.inner -->
                            </div><!-- /.text-box -->
                        </div><!-- /.single-recent-project -->
                    </div><!-- /.col-md-3 -->
                @endforeach
               
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.recent-projects -->

@endsection

@section('script')
@endsection