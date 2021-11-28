@extends('guest.layouts.master')

@section('content')
<div class="container">
    <div class="contact_title">
        <h2>Our Products</h2>
    </div>
</div>
<section>
    <div class="container">
        {{-- <div class="showing_fillter">
            <div class="row m0">
                <div class="first_fillter">
                    <h4>Showing 1 to 12 of 30 total</h4>
                </div>
                <div class="secand_fillter">
                    <h4>SORT BY :</h4>
                    <select class="selectpicker">
                        <option>Name</option>
                        <option>Name 2</option>
                        <option>Name 3</option>
                    </select>
                </div>
                <div class="third_fillter">
                    <h4>Show : </h4>
                    <select class="selectpicker">
                        <option>09</option>
                        <option>10</option>
                        <option>10</option>
                    </select>
                </div>
                <div class="four_fillter">
                    <h4>View</h4>
                    <a class="active" href="#"><i class="icon_grid-2x2"></i></a>
                    <a href="#"><i class="icon_grid-3x3"></i></a>
                </div>
            </div>
        </div> --}}
        <div class="two_column_product">
            <div class="row">
                @if(isset($products))
                @foreach ($products as $pro)
                <div class="col-lg-3 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="{{asset('storage/images/product/'.$pro->featured_photo)}}" alt="No Image">
                            {{-- <h5 class="sale">Sale</h5> --}}
                        </div>
                        <div class="l_p_text">
                           <ul>
                                <li class="p_icon"><a href="{{route('product.view',$pro->name)}}"><i class="icon_piechart"></i></a></li>
                                <li><form action="{{route('cart.store')}}" method="post">
                                    @csrf
                                    @method('POST')
                                    {{-- <a class="add_cart_btn" href="dada">Add To Cart</a> --}}
                                    <input type="submit" class="add_cart_btn" value="Add To Cart">
                                    <input type="hidden" name="product_id" value="{{$pro->id}}">
                                    
                                    <input type="hidden" name="quantity" value="1">
                                    </form></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>{{$pro->name}}</h4>
                            <h5>
                                {{-- <del>$45.50</del> --}}
                                 AUD {{$pro->price}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
                
                @endif
                
                
                {{-- <div class="col-lg-3 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="frontend/img/product/l-product-8.jpg" alt="">
                        </div>
                        <div class="l_p_text">
                           <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Ricky Shirt</h4>
                            <h5>$45.05</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="frontend/img/product/four-column/product-1.jpg" alt="">
                        </div>
                        <div class="l_p_text">
                           <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Oxford Shoes</h4>
                            <h5>$45.05</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="frontend/img/product/four-column/product-2.jpg" alt="">
                        </div>
                        <div class="l_p_text">
                           <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Formal Shirt</h4>
                            <h5><del>$130 </del> $110</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="frontend/img/product/four-column/product-3.jpg" alt="">
                        </div>
                        <div class="l_p_text">
                           <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Beats HeadPhone</h4>
                            <h5>$33.50</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="frontend/img/product/four-column/product-4.jpg" alt="">
                        </div>
                        <div class="l_p_text">
                           <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Wome Bag</h4>
                            <h5>$590.00</h5>
                        </div>
                    </div>
                </div> --}}
            </div>
            <nav aria-label="Page navigation example" class="pagination_area">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item next"><a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
              </ul>
            </nav>
        </div>
    </div>
</section>
@endsection