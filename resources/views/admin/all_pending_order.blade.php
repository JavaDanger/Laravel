@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{route('/dashboard')}}">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				
			</ul>
				<p class="alert-success">
						<?php
					$message=Session::get('message');
					if('message'){
						echo $message;
						Session::put('message',null);
					}
						?>
				</p>
			<a href="{{url('manage-order')}}" class="btn btn-lg btn-block btn-warning" >All Orders</a>
			<a href="{{url('all-confirmed-order')}}" class="btn btn-lg btn-block btn-success" >All Confirmed Orders</a>

			


			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Pending Orders</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable">
						  <thead>
							  <tr>
								  <th>Order ID</th>
								  <th>Customer First Name</th>
								  <th>Customer Last Name</th>
								  <th>Order Total</th>
								  <th>Order Date</th>
								  <th>Product Current Status</th>
								  <th>Action</th>
							  </tr>
						  </thead>   
						 @foreach($all_pending_order as $v_order)
						  <tbody>
							<tr>
								<td>{{ $v_order->order_id }}</td>
								<td>{{$v_order->customer_first_name}}</td>
								<td>{{$v_order->customer_last_name}}</td>
								<td>{{$v_order->order_total}}</td>
								<td>{{$v_order->created_at}}</td>
								
								

								<td class="center">
									@if($v_order->order_status==1)
									<span class="label label-success">Confirmed</span>
									@else
									<span class="label label-danger">Pending</span>
									@endif
								</td>

								<td class="center">
									@if($v_order->order_status==1)
									<a class="btn btn-danger" href="{{URL::to('/inactive_order/'.$v_order->order_id)}}">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
									@else
									<a class="btn btn-success" href="{{URL::to('/active_order/'.$v_order->order_id)}}">
										<i class="halflings-icon white thumbs-up"></i>  
									</a>
									@endif

									<a class="btn btn-info" href="{{URL::to('/view_order/'.$v_order->order_id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="{{URL::to('/delete_order/'.$v_order->order_id)}}" id="delete">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							
						  </tbody>
						  @endforeach

					  </table>            
					</div>
				</div><!--/span-->

@endsection
