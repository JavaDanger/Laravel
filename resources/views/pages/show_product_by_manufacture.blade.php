@extends('layout')
@section('content')






 <h2 class="title text-center">Features Items</h2>
 
 <?php foreach($product_by_manufacture as $v_product_by_manufacture){?>


                        
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{URL::to($v_product_by_manufacture->product_image)}}" style="height: 250px" width="300px" alt="" />
                                            <h2>{{$v_product_by_manufacture->product_price}} Tk</h2>
                                            <p>{{$v_product_by_manufacture->product_name}} </p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>{{$v_product_by_manufacture->product_price}} Tk</h2>
                                                <p>{{$v_product_by_manufacture->product_name}}</p>
                                               {{--  <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> --}}
                                               <form action="{{url('/add-to-cart')}}" method="post">
                                    {{ csrf_field() }}
                                    <label>Quantity:</label>
                                    <input name="qty" type="text" value="1" />
                                    <input type="hidden" name="product_id" value="{{$v_product_by_manufacture->product_id}}">
                                    <button type="Submit" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart
                                    </button>
                                </form>
                                            </div>
                                        </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>{{$v_product_by_manufacture->manufacture_name}}</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>View Product</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                       
                                
             <?php } ?>      
               
                
            
                        
                    </div><!--features_items-->
                     <div class="text-center">
              {{ $product_by_manufacture->links()  }}
            </div>

                   
                    
                    

@endsection