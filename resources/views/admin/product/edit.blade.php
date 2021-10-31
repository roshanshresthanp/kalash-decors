@extends('admin.layouts.master')

@section('title', 'Edit Product')

@section('breadcrumb')
<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
	<li class="breadcrumb-item text-muted">
		<a href="{{route('admin.dashboard') }}" class="text-muted">Dashboard</a>
	</li>
    <li class="breadcrumb-item text-muted">
		<a href="{{ route('admin.product.index')}}" class="text-muted">Product</a>
	</li>
	<li class="breadcrumb-item text-active">
		<a href="" class="text-active">Edit</a>
	</li>
</ul>
@endsection

@section('content')
    <div class="container">
        <!-- left column -->
        <div class="col-md-12">
            <!-- form start -->

            <form action="{{route('admin.product.update',$product->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            @include('admin.product.form')
            </form>
        </div>
    </div>
@endsection

