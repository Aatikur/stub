@extends('web.templete.master')

@section('seo')
<meta name="description" content="Stups Printing">
@endsection

@section('content')

    <section class="page-title">
        <div class="thm-container">
            <h3>Product</h3>        
        </div><!-- /.thm-container -->
    </section><!-- /.page-title -->

    <div class="breadcumb-wrapper">
        <div class="thm-container">
            <ul class="breadcumb">
                <li><a href="{{route('web.index')}}">Homepage</a></li><!--
                --><li><span class="sep">-</span></li><!--
                --><li><span>Product</span></li>
            </ul><!-- /.breadcumb -->
        </div><!-- /.thm-container -->
    </div><!-- /.breadcumb-wrapper -->

    <section class="what-we-do sec-pad">
        <div class="thm-container">
            <div class="sec-title text-center">
                <span>Our features product</span>
                <h3>Products</h3>
            </div><!-- /.sec-title -->
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="single-what-we-do">
                        <div class="text-box hvr-bounce-to-bottom">
                            <a href="{{route('web.product.product-portfolio1')}}"><h3>LITHO AND DIGITAL PRINTING</h3></a>
                            <p>Lithographic printing is a style of printing in which an image is transferred to a printing plate, which is then covered with both water and oil-based ink. </p>
                            <a href="{{route('web.product.product-portfolio1')}}" class="read-more fas fa-angle-right"></a>
                        </div><!-- /.text-box -->
                        <div class="text-box hvr-bounce-to-bottom">
                            <a href="{{route('web.product.product-portfolio2')}}"><h3>CORPORATE GIFTS </h3></a>
                            <p>There are many people variation of passages of lorem Ipsum available in the majority have suffer alteration in some.</p>
                            <a href="{{route('web.product.product-portfolio2')}}" class="read-more fas fa-angle-right"></a>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-what-we-do -->
                </div><!-- /.col-md-6 -->
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-what-we-do-one hvr-bounce-to-bottom">
                                <i class="printify-icon-paper-drill"></i>
                                <a href="{{route('web.product.product-portfolio3')}}"><h3>FLEXO</h3></a>
                                <p>Flexography is a form of printing process which utilizes a flexible relief plate.</p>
                                <a href="{{route('web.product.product-portfolio3')}}" class="read-more fas fa-angle-right"></a>
                            </div><!-- /.single-what-we-do-one -->
                        </div><!-- /.col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="single-what-we-do-one hvr-bounce-to-bottom">
                                <i class="printify-icon-printing-text"></i>
                                <a href="{{route('web.product.product-portfolio4')}}"><h3>PROMOTIONAL / POS</h3></a>
                                <p>There are many people variation of passages of lorem Ipsum available in the majority have suffer alteration in some.</p>
                                <a href="{{route('web.product.product-portfolio4')}}" class="read-more fas fa-angle-right"></a>
                            </div><!-- /.single-what-we-do-one -->
                        </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.what-we-do -->

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