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
                <h3>Our Work</h3>
            </div>
            <div class="row">
                @foreach($gallery as  $value)
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="single-recent-project">
                            <div class="img-box">
                                <img src="{{asset('images/gallery/'.$value->image)}}" alt="Stups Protfolio"/>
                            </div><!-- /.img-box -->
                            <div class="text-box">
                                <a class="example-image-link more" href="{{asset('images/gallery/'.$value->image)}}" data-lightbox="example-set" data-title="Stups Protfolio"><i class="fas fa-plus"></i></a>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-recent-project -->
                    </div><!-- /.col-md-4 -->
                @endforeach
                
               
               
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.recent-projects -->

@endsection

@section('script')
@endsection