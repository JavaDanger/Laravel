@extends('layout')	
@section('content')


					<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{URL::to($product_by_details->product_image)}}" alt="" />
								
							</div>
							

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>{{$product_by_details->product_name}}</h2>
								<p>Color:  {{$product_by_details->product_color}}</p>
								<img src="{{URL::to('frontend/images/product-details/rating.png')}}" alt="" />
								

						<span>
							<span>{{$product_by_details->product_price}} Tk</span>
								<form action="{{url('/add-to-cart')}}" method="post">
									{{ csrf_field() }}
									<label>Quantity:</label>
									<input name="qty" type="text" value="1" />
									<input type="hidden" name="product_id" value="{{$product_by_details->product_id}}">
									<button type="Submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</form>
							</span>


								<p><b>Availability:</b> 
								   @if($product_by_details->publication_status==1)
									<span>Available</span>
									@else
									<span>Unavailable</span>
									@endif</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b>{{$product_by_details->manufacture_name}}</p>
								<p><b>Category:</b>{{$product_by_details->category_name}}</p>
								<p><b>Size:</b>{{$product_by_details->product_size}}</p>

							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->

					
					
		      
@endsection
