
@extends('admin.template.admin_master')
@section('content')

<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Product Images List</h4>
                        <div class="text-right">
                            <a type="button" href="{{ route('admin.add_product_image_form') }}" class="btn btn-info waves-effect waves-light" target="_blank">Add More</a>
                        </div>
                        <table id="contact_list" class="table table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Category Name</th>
                                    <th>Image</th>
                                    <th>Caption</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                        <tbody>
                        </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
 <!-- end row -->

    </div><!-- container-fluid -->


</div> <!-- Page content Wrapper -->


    
@endsection
@section('script')

  <script type="text/javascript">
  
      $(function () {

        var table = $('#contact_list').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.image_list_ajax') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name',searchable: true},
                {data: 'images', name: 'images' ,searchable: true},  
                {data: 'caption', name: 'caption' ,searchable: true},  
                {data: 'action', name: 'action', orderable: false, searchable: false},                 
                
            ]
        });
        
    });
  </script>
 @endsection             