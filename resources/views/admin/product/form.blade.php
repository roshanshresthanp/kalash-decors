<div class="row" data-sticky-container>
    <div class="col-lg-6 col-xl-8">
     <div class="card card-custom gutter-b example example-compact">
            <div class="card-body">
                <div class="form-group">
                    <label>Product Name
                    {{-- <span class="text-danger">*</span> --}}
                </label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Property Name" name="name" value="@if(isset($product)){{$product->name}}@else{{old('name')}}@endif" required />
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                
                <div class="form-group row">
                    <div class="col">
                        <label>Price</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" placeholder="Enter price amount" name="price" value="@if(isset($product)){{$product->price}}@else{{old('price')}}@endif" />
                        @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="col">
                        <label>Category</label>
                        <select class="form-control" name="category_id">

                            @if(isset($product))
                            <option value="{{$product->category_id}}">{{$product->category->name}}</option>
                            @endif

                            @if(isset($category))
                                @foreach ($category as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            @endif

                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col">
                        <label>Description</label>
                        <textarea id="ck-editor"  class="form-control @error('description') is-invalid @enderror" placeholder="Enter Description" name="description"> @if(isset($product)){{$product->description}}@else{{old('description')}}@endif </textarea>            
                                   @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                </div>

                
                
                {{-- <div class="form-group row">
                    <div class="col">
                        <label>Facility</label>
                        <textarea id="ck-editor1" class="form-control @error('facility') is-invalid @enderror" placeholder="Enter Facility" name="facility"> @if(isset($product)){{$product->facility}}@else{{old('facility')}}@endif </textarea>              
                                 @error('facility')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label>Bedroom</label>
                        <select class="form-control" name="bedroom">
                            @if(isset($product) && isset($product->bedroom))
                            <option value="{{$product->bedroom}}" selected="selected">{{$product->bedroom}}</option>
                            @endif
                            @for($i=1;$i<=15;$i++)
                            <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col">
                        <label>Bathroom</label>
                        <select class="form-control" name="bathroom">
                            @if(isset($product) && isset($product->bathroom))
                            <option value="{{$product->bathroom}}" selected="selected">{{$product->bathroom}}</option>
                            @endif
                            @for($i=1;$i<=15;$i++)
                            <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col">
                        <label>Garage</label>
                        <select class="form-control" name="garage">
                            @if(isset($product) && isset($product->garage))
                            <option value="{{$product->garage}}" selected="selected">{{$product->garage}}</option>
                            @endif
                            @for($i=1;$i<=10;$i++)
                            <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </div> --}}
                
                
               
                
               {{-- <div class="form-group row">
                <div class="col">
                    <label>Temporary Address
                    <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('temporary_address') is-invalid @enderror" placeholder="Enter Temporary Address" name="temporary_address" value="@if(isset($product)){{$product->temporary_address}}@else{{old('temporary_address')}}@endif" required />
                    @error('temporary_address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col">
                    <label>Permanent Address
                </label>
                    <input type="text" class="form-control @error('permanent_address') is-invalid @enderror" placeholder="Enter Permanent Address" name="permanent_address" value="@if(isset($product)){{$product->permanent_address}}@else{{old('permanent_address')}}@endif"  />
                    @error('permanent_address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
               </div> --}}
               {{-- <div class="form-group">
                <label>Contact Number</label>
                <input type="text" class="form-control @error('contact_number') is-invalid @enderror" placeholder="Enter Contact Number" name="contact_number" value="@if(isset($product)){{$product->contact_number}}@else{{old('contact_number')}}@endif" />
                @error('contact_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div> --}}
      </div>
  </div>
    </div>
    <div class="col-lg-4 col-xl-4">
     <div class="card card-custom sticky" data-sticky="true" data-margin-top="140" data-sticky-for="1023" data-sticky-class="stickyjs">
            <div class="card-body">

               
                {{-- <div class="form-group row">
                    <label class="col-4 col-form-label">Status</label>
                    <div class="col-6">
                     <span class="switch switch-default">
                      <label>
                       <input type="checkbox"  name="status"  @if(isset($product) && $product->status == '1')
                       checked @endif value="1"/>
                       <span></span>
                      </label>
                     </span>
                    </div>
                </div> --}}
                {{-- <div class="form-group">
                    <label>Photo</label>
                    <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="@if(isset($product)){{$product->photo}}@else{{old('photo')}}@endif" />
                    @error('photo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div> --}}
                {{-- <div class="form-group">
                    <label>Property Owner</label>
                    <select class="form-control" name="owner_id">
                        @if(isset($product->owner_id))
                        <option value="{{$product->owner_id}}" selected="selected">@foreach($user as $owner)@if($owner->id==$product->owner_id) {{$owner->name}} @endif @endforeach</option>
                        @endif

                        @forelse($user as $owner)
                        <option value="{{$owner->id}}">{{$owner->name}}</option>
                        @empty
                        <p>No Property Owner</p>
                        @endforelse
                    </select>
                </div> --}}

                <div class="form-group row">
                    <label class="col-6 col-form-label">Availability</label>
                    <div class="col-3">
                        <span class="switch">
                            <label>
                            
                            <input type="checkbox" @if(isset($product)) @if($product->availability==1) checked @endif @else value="1" checked @endif name="availability"/>
                            {{-- @else
                            <input type="checkbox"  value="1" checked name="availability"/>
                            @endif --}}
                            <span></span>
                            </label>
                        </span>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-5">Featured Photo</label>
                    <div class="image-input image-input-outline" id="kt_image_1">
                        <div class="image-input-wrapper" @if(isset($product)) style="background-image: url('{{asset('storage/images/product/'.$product->featured_photo)}}" @endif></div>
                    
                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                        <i class="fa fa-pen icon-sm text-muted"></i>
                        <input type="file" name="featured_photo" class="@error('photo') is-invalid @enderror" accept=".png, .jpg, .jpeg, .svg ,.webp"/>
                        <input type="hidden" name="profile_avatar_remove"/>
                        </label>
                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                    </div>
                    @error('featured_photo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">{{__('Upload one or multiple images')}}:</label>
                    <input type="file" id="imageCollection" name="photo[]" accept=".png, .jpg, .jpeg, .svg , .webp"  onchange="javascript:updateList()" class="" multiple="">
                    <div id="imageList" class="pt-3"></div>
                    @error('photo[]')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                
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

{{-- <script src="{{asset('admin/assets/js/pages/crud/forms/editors/ckeditor-classic.js')}}"></script> --}}
<script src="{{asset('admin/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>

<script>
    var KTCkeditor = function () {
    // Private functions
    var demos = function () {
        ClassicEditor
            .create( document.querySelector( '#ck-editor' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    }
    var demos1 = function () {
        ClassicEditor
            .create( document.querySelector( '#ck-editor1' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    }

    return {
        // public functions
        init: function() {
            demos();
            demos1();
        }
    };
}();

// Initialization
jQuery(document).ready(function() {
    KTCkeditor.init();
});
</script>
<script>
    function updateList()
    {
      var input = document.getElementById('imageCollection');
      var output = document.getElementById('imageList');
      var children = "";
      console.log(input.files);
      for (var i = 0; i < input.files.length; ++i) {
          children += '<small><li class="text-secondary">' + input.files.item(i).name + '</li></small>';
      }
      output.innerHTML = '<ul style="list-style: decimal;">'+children+'</ul>';     
    }

    function removeList()
    {
      document.getElementById('imageList').innerHTML = "";
    }
  </script>
@endsection