<div class="row" data-sticky-container>
    {{-- <div class="col-lg-3 col-xl-2">
     <div class="card card-custom sticky" data-sticky="true" data-margin-top="140" data-sticky-for="1023" data-sticky-class="stickyjs">
            <div class="card-body p-0">
                ...
            </div>
        </div>
    </div> --}}
    <div class="col-lg-6 col-xl-8">
     <div class="card card-custom gutter-b example example-compact">
            {{-- <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Add user</h3>
                </div>
            </div> --}}
            <div class="card-body">
                <div class="form-group">
                    <label>Category Name
                    {{-- <span class="text-danger">*</span> --}}
                </label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Category Name" name="name" value="@if(isset($category)){{$category->name}}@else{{old('name')}}@endif" />
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Description
                    {{-- <span class="text-danger">*</span> --}}
                </label>
                    <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Category Name" name="description">@if(isset($category)){{$category->description}}@endif  </textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
               
                
      </div>
  </div>
    </div>
    <div class="col-lg-4 col-xl-4">
     <div class="card card-custom sticky" data-sticky="true" data-margin-top="140" data-sticky-for="1023" data-sticky-class="stickyjs">
            <div class="card-body">
                <div class="form-group">
                    <label>Category Type</label>
                    <select class="form-control" name="parent_id">

                        @if(isset($category))
                            @if($category->parent_id==0)
                            <option value="0" selected="selected">Main Category</option>
                            @else
                            @foreach ($categories as $cat)
                                @if($category->parent_id ==$cat->id)
                                <option value="{{$cat->id}}" selected="selected" > {{$cat->name}} </option>
                                @endif
                            @endforeach
                            @endif

                        @else
                        <option value="0" selected="selected">Main Category</option>
                            @if(isset($cats))
                                @foreach($cats as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            @endif

                        @endif

                        

                        {{-- <option value="rental-client" @if(isset($category) && $category->role == 'rental-client')) selected="selected" @endif >Rental Client</option> --}}
                        
                    </select>
                </div> 
                {{-- <div class="form-group row">
                    <label class="col-4 col-form-label">Status</label>
                    <div class="col-6">
                     <span class="switch switch-default">
                      <label>
                       <input type="checkbox"  name="status"  @if(isset($category) && $category->status == '1')
                       checked @endif value="1"/>
                       <span></span>
                      </label>
                     </span>
                    </div>
                </div> --}}
                {{-- <div class="form-group">
                    <label>Photo</label>
                    <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="@if(isset($category)){{$category->photo}}@else{{old('photo')}}@endif" />
                    @error('photo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div> --}}
                {{-- <div class="form-group row">
                    <label class="col-4">Photo</label>
                    <div class="image-input image-input-outline" id="kt_image_1">
                        <div class="image-input-wrapper" @if(isset($category)) style="background-image: url('{{asset('storage/images/user/'.$category->photo)}}" @endif></div>
                    
                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                        <i class="fa fa-pen icon-sm text-muted"></i>
                        <input type="file" name="photo" class="@error('photo') is-invalid @enderror" accept=".png, .jpg, .jpeg"/>
                        <input type="hidden" name="profile_avatar_remove"/>
                        </label>
                    
                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                    </div>
                    @error('photo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div> --}}
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
@section('script')
<script>
    var avatar1 = new KTImageInput('kt_image_1');

</script>
<script src="{{asset('admin/assets/js/pages/crud/file-upload/image-input.js')}}"></script>
@endsection