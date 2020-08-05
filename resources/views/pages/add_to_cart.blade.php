@extends('layout')
@section('content')


	<section id="cart_items">
		<div class="container col-sm-12">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">

				<?php

					$contents=Cart::content();
					//echo "<pre>";
					//print_r($contents);
					//echo "</pre>";
					//exit();


				?>

				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Image</td>
							<td class="description">Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>

						<?php foreach($contents as $v_contents) {?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{$v_contents->options->image}}" style="height:80px" width="80px" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$v_contents->name}}</a></h4>
								
							</td>
							<td class="cart_price">
								<p>{{$v_contents->price}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="{{url('update-cart')}}" method="post">
										{{csrf_field()}}
									<input class="cart_quantity_input" type="text" name="qty" value="{{$v_contents->qty}}" autocomplete="off" size="2">
									<input  type="hidden" name="rowId" value="{{$v_contents->rowId}}">
									<input type="submit" name="submit" value="Update" class="btn btn-sm btn-default">
									</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{$v_contents->total}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/delete-to_cart/'.$v_contents->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>

					
				<?php } ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
	
				<div class="col-sm-8">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>{{Cart::subtotal()}}</span></li>
							<li>Eco Tax <span>{{Cart::tax()}}</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>{{Cart::total()}}</span></li>
						</ul>
							

							<?php  
                                  $customer_id=Session::get('customer_id');
                                  $shipping_id=Session::get('shipping_id');
                                  //print_r($customer_id);
                                   //print_r($shipping_id);
                                  ?>


                               <?php if($customer_id !=NULL && $shipping_id==NULL){?>
                               <a class="btn btn-default check_out" href="{{URL::to('/checkout')}}">Checkout</a>


                                <?php } if($customer_id !=NULL && $shipping_id !=NULL) {?>
                                <a class="btn btn-default check_out" href="{{URL::to('/payment')}}">Checkout</a>

                                 <?php } else{?>
                                 <a  class="btn btn-default check_out" href="{{URL::to('/login-check')}}">Checkout</a>
                                 <?php  }?>

                                
						
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
@endsection