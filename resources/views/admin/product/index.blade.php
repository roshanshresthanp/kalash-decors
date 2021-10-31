@extends('admin.layouts.master')

@section('title', 'Product')

@section('breadcrumb')
<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
	<li class="breadcrumb-item text-muted">
		<a href="{{route('admin.dashboard') }}" class="text-muted">Dashboard</a>
	</li>
	<li class="breadcrumb-item text-active">
		<a href="{{ route('admin.product.index')}}" class="text-active">Product</a>
	</li>
</ul>
@endsection

@section('css')
<link href="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />

{{-- <link href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" /> --}}
@endsection
@section('script')
{{-- <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap4.min.js"></script> --}}

<script src="{{asset('admin/assets/js/pages/crud/datatables/basic/scrollable.js')}}"></script>
<script src="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<script>
    $(function () {

$("#datatable").DataTable({
    // "scrollY": 200,
        "scrollX": true
});
});

// function confirmation(e)
//       {
//         if(confirm('Are you sure to delete this record? Once delete cannot be recovered!'))
//         {
//           return document.getElementById('myform').submit();
//         }
//         else{
//           e.preventDefault();
//         }
//       }
//     </script>
    


@endsection

@section('content')
<div class="container">
    <!--begin::Notice-->
        {{-- <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
            <div class="alert-icon align-self-start mt-1">
                <i class="flaticon-warning text-primary"></i>
            </div>
            <div class="alert-text">This example shows a vertically scrolling DataTable that makes use of the CSS3 vh unit in order to dynamically resize the viewport based on the browser window height.</div>
        </div> --}}
    <!--end::Notice-->
    
    <!--begin::Card-->
    <div class="card card-custom gutter-b">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title mb-0">
                <h5 class="card-label">Table showing all products
                {{-- <span class="d-block text-muted pt-2 font-size-sm">Scrollable Horizontal &amp; Vertical DataTable</span></h5> --}}
            </div>
            <div class="card-toolbar text-right">
                <a href="{{route('admin.product.create')}}" class="btn btn-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md fa fa-plus">
                </span>Add Product</a>
                <!--end::Button-->
            </div>
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom table-checkable" id="datatable">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>category</th>
                        <th>Price (AUD)</th>
                        <th>featured photo</th>
                        <th>Availability</th>
                        <th>Actions<th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($products) )
                        @foreach ($products as $product)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->name}}</td>
                            <td>{!!str_limit($product->description,300)!!}</td>
                            <td><span class="badge badge-primary">{{$product->category->name}}</span></td>
                            <td>{{$product->price}}</td>
                            <td><img src="{{asset('storage/images/product/'.$product->featured_photo)}}" height="80" width="80" ></td>
                            <td>@if($product->availability==1) <span class="badge badge-success">Yes<span> @else <span class="badge badge-danger">No <span> @endif</td>
                            <td> 
                                <form action="{{route('admin.product.destroy', $product->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <a href="{{route('admin.product.edit',$product->id)}}"><span class="fa fa-edit"></span></a> &nbsp;&nbsp;
                                    <button class="fa fa-trash" type="submit" title="Delete" onclick="return confirm('Are you sure to delete this record? Once delete cannot be recovered!')"></button>

                                </form>
                            </td>
                        </tr>
                        @endforeach
                    
                    @endif
                </tbody>
            </table>
            <!--end: Datatable-->
        </div>
    </div>
    <!--end::Card-->
</div>
@endsection



