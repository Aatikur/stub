@extends('admin.template.admin_master')
@section('content')

<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                @if (Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif @if (Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                @endif
                <div class="card m-b-20">
                    <div class="card-body">

                        {{Form::model($image_data, ['method' => 'put','route'=>['admin.update_product_image',$image_data->id],'enctype'=>'multipart/form-data'])}}
                        
                            <div class="form-group">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Caption</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="caption" id="example-text-input" value="{{ $image_data->caption }}">
                                </div>
                                @if($errors->has('caption'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('caption') }}</strong>
                                </div>
                                @enderror
                                <label for="example-text-input" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="category">
                                            <option>Select category</option>
                                            @foreach($product_category as $value)
                                               <option value="{{ $value->id }}" >{{  $value->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if($errors->has('category'))
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </div>
                                    @enderror
                            
                                <label for="example-search-input" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="images" type="file">
                                    @if($errors->has('images'))
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ $errors->first('images') }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                    </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                        {{ Form::close() }}
                        
                        
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container-fluid -->


</div> <!-- Page content Wrapper -->

    
@endsection
                   

                