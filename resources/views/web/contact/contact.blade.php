@extends('web.templete.master')

@section('seo')
<meta name="description" content="Stups Printing">
@endsection

@section('content')

    <section class="page-title">
        <div class="thm-container">
            <h3>Contact</h3>        
        </div><!-- /.thm-container -->
    </section><!-- /.page-title -->

    <div class="breadcumb-wrapper">
        <div class="thm-container">
            <ul class="breadcumb">
                <li><a href="{{route('web.index')}}">Homepage</a></li><!--
                --><li><span class="sep">-</span></li><!--
                --><li><span>Contact</span></li>
            </ul><!-- /.breadcumb -->
        </div><!-- /.thm-container -->
    </div><!-- /.breadcumb-wrapper -->

    <div style="margin-top: -24px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3590.884522161713!2d28.1059138260684!3d-25.84035023109907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e957b560cc1f18b%3A0xa896319a79926919!2s4%20Van%20Tonder%20St%2C%20Sunderland%20Ridge%2C%20Centurion%2C%200157%2C%20South%20Africa!5e0!3m2!1sen!2sin!4v1604742630115!5m2!1sen!2sin" height="450" frameborder="0" style="border:0;width: 100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <section class="contact-section sec-pad">
        <div class="thm-container">
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-form-content">
                        <div class="title">
                            <span>Contact with us</span>
                            <h2>Send Message</h2>
                        </div><!-- /.title -->
                        <form action="{{ route('web.add_contacts') }}" method="POST" class="contact-form">
                        @csrf
                            <input type="text" name="name" placeholder="Your full name" />
                            <input type="text" name="email" placeholder="Your email address" />
                            <textarea name="message" placeholder="What you are looking for?"></textarea>
                            <button type="submit" class="thm-btn yellow-bg">Submit Now</button>
                            <div class="form-result"></div><!-- /.form-result -->
                        </form>
                    </div><!-- /.contact-form-content -->
                </div><!-- /.col-md-8 -->
                <div class="col-md-4">
                    <div class="contact-info text-center">
                        <div class="title text-center">
                        <span>Contact info</span>
                        <h2>Details</h2>
                        </div><!-- /.title -->
                        <div class="single-contact-info">
                            <h4>Address</h4>
                            <p>4 Van Tonder Street Sunderland Ridge, <br> Centurion</p>
                        </div><!-- /.single-contact-info -->
                        <div class="single-contact-info">
                            <h4>Phone</h4>
                            <p>Local: +27 (11) 334 1850 (office hours only)</p>
                        </div><!-- /.single-contact-info -->
                        <div class="single-contact-info">
                            <h4>Email</h4>
                            <p>info@stupsprinting.com</p>
                        </div><!-- /.single-contact-info -->
                        <div class="single-contact-info">
                            <h4>Follow</h4>
                            <div class="social">
                                <a href="https://www.instagram.com/stupsprinting" target="_blank" class="fab fa-instagram hvr-pulse"></a><!--  
                                        --><a href="https://www.facebook.com/stupsprinting.printing.7/" target="_blank" class="fab fa-facebook-f hvr-pulse"></a>
                        </div><!-- /.social -->
                        </div><!-- /.single-contact-info -->
                    </div><!-- /.contact-info -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.contact-section -->

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