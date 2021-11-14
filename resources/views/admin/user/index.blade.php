@extends('admin.layouts.master')

@section('title', 'Users')

@section('breadcrumb')
<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
	<li class="breadcrumb-item text-muted">
		<a href="{{route('admin.dashboard') }}" class="text-muted">Dashboard</a>
	</li>
	<li class="breadcrumb-item text-active">
		<a href="{{ route('admin.user.index')}}" class="text-active">Users</a>
	</li>
</ul>
@endsection

@section('css')
<link href="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('script')
<script src="{{asset('admin/assets/js/pages/crud/datatables/basic/scrollable.js')}}"></script>
 <script src="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>

<script>
    $(function () {

$("#datatable").DataTable({
  "responsive": true
//   "ScrollX" :true
});
});

// function confirmation(e)
//       {
//         if(confirm('Are you sure to delete this record? Once delete cannot be recovered!'))
//         {
//           return document.getElementById('userDelete').submit();
//         }
//         else{
//           e.preventDefault();
//         }
//       }
//     </script>
    


@endsection

{{-- 
@section('actionButton')
<a href="{{ route('user.create') }}" class="btn btn-primary font-weight-bolder fas fa-plus">
	Add User
</a>
@endsection --}}

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
            <div class="card-title">
                <h3 class="card-label">Table showing users
                {{-- <span class="d-block text-muted pt-2 font-size-sm">scrollable datatable with fixed height</span></h3> --}}
            </div>
            <div class="card-toolbar">
                <!--begin::Dropdown-->
                <!--end::Dropdown-->
                <!--begin::Button-->
                {{-- <a href="{{route('admin.user.create')}}" class="btn btn-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md fa fa-plus">
                </span>Add User</a> --}}
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
                        {{-- <th>Role</th> --}}
                        <th>Address</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($user)>0)
                        @foreach ($user as $user)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user->name}}</td>
                            {{-- <td>{{ucwords($user->role)}}</td> --}}
                            <td>{{$user->address}}</td>
                            <td>{{$user->contact}}</td>
                            <td>{{$user->email}}</td>
                            <td> 
                                <form id="userDelete" action="{{route('admin.user.destroy', $user->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    {{-- <a href="{{route('admin.user.edit',$user->id)}}"><span class="fa fa-edit"></span></a> &nbsp;&nbsp; --}}

                                    {{-- <input type="submit" class="fa fa-trash" value="jh" title="Delete" onclick="confirmation(event)"><i class="fa fa-trash"></i> --}}
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



