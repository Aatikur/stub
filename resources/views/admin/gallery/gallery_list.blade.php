@extends('admin.template.admin_master')
@section('content')
    


<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            {{-- <div class="col-lg-6">
                <div class="card m-b-20">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Single image lightbox</h4>
                        <p class="text-muted m-b-30 font-14">Three simple popups with different scaling settings.</p>

                        <div class="row">
                            <div class="col-6">
                                <h5 class="mt-0 font-14 m-b-15 text-muted">Fits (Horz/Vert)</h5>
                                <a class="image-popup-vertical-fit" href="assets/images/small/img-2.jpg" title="Caption. Can be aligned it to any side and contain any HTML.">
                                    <img class="img-responsive" src="assets/images/small/img-2.jpg"  width="145">
                                </a>
                            </div>
                            <div class="col-6">
                                <h5 class="mt-0 font-14 m-b-15 text-muted">Effects</h5>
                                <a class="image-popup-no-margins" href="assets/images/small/img-3.jpg">
                                    <img class="img-responsive" src="assets/images/small/img-3.jpg" width="75">
                                </a>
                                <p class="mt-2 mb-0 font-14 text-muted">No gaps, zoom animation, close icon in top-right corner.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="col-lg-12">
                <div class="text-right">
                    <a type="button" href="{{ route('admin.add_image_form')}}"class="btn btn-info waves-effect waves-light">Add More</a>
                </div>
                <div class="card m-b-20">
                    <div class="card-body">
                       
                        <h4 class="mt-0 header-title">Gallery Images</h4>
                       
                        
                        <div class="popup-gallery row">

                            @if(isset($gallery) && !empty($gallery))
                                @foreach($gallery as  $value)
                                    <div class="col-lg-3">
                                        <div class="gallery-item">
                                            <a class="pull-left" target="_blank" href="{{ asset('images/gallery/thumb/'.$value->image) }}" title="Project 1">
                                                <div class="img-responsive">
                                                    <img src="{{ asset('images/gallery/thumb/'.$value->image) }}" width="200">
                                                </div>
                                            </a>
                                            <a href="{{ Route('admin.delete_image',['id'=>$value->id]) }}" class="btn btn-primary waves-effect waves-light trash"><i class="fa fa-trash"></i></a>
                                            <a target="_blank" href="{{ Route('admin.image_edit_form',['id'=>$value->id]) }}" class="btn btn-info waves-effect waves-light trash"><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>
                                    
                                @endforeach
                            @endif
                            
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->


        {{-- <div class="row">
            <div class="col-lg-6">
                <div class="card m-b-20">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Zoom Gallery</h4>
                        <p class="text-muted m-b-30 font-14">Zoom effect works only with images.</p>

                        <div class="zoom-gallery">
                            <a class="pull-left" href="assets/images/small/img-3.jpg" title="Project 1"><img src="assets/images/small/img-3.jpg" width="275"></a>
                            <a class="pull-left" href="assets/images/small/img-7.jpg" title="Project 2"><img src="assets/images/small/img-7.jpg" width="275"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card m-b-20">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Popup with video or map</h4>
                        <p class="text-muted m-b-30 font-14">In this example lazy-loading of images is enabled for the next image based on move direction. </p>

                        <div class="row">
                            <div class="col-12">
                                <a class="popup-youtube btn btn-secondary" href="http://www.youtube.com/watch?v=0O2aH4XLbto">Open YouTube Video</a>
                                <a class="popup-vimeo btn btn-secondary" href="https://vimeo.com/45830194">Open Vimeo Video</a>
                                <a class="popup-gmaps btn btn-secondary" href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom">Open Google Map</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row --> --}}

    </div><!-- container -->


</div> <!-- Page content Wrapper -->
@endsection
