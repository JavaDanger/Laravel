@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{route('/dashboard')}}">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				
			</ul>
			<a href="{{url('add-supplier')}}" class="btn btn-lg btn-block btn-warning" >Add Supplier</a>

				<p class="alert-success">
						<?php
					$message=Session::get('message');
					if('message'){
						echo $message;
						Session::put('message',null);
					}
						?>
				</p>


			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Suppliers</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable ">
						  <thead>
							  <tr>
								  <th>Supplier's ID</th>
								  <th>Supplier's Name</th>
								  <th>Supplier's Image</th>
								  <th>Supplier's Address</th>
								  <th>Supplier's City</th>
								  <th>Supplier's Email</th>
								  <th>Supplier's Phone</th>
								  <th>Action</th>
							  </tr>
						  </thead>   
						 @foreach($all_supplier as $v_contact)
						  <tbody>
							<tr>
								<td>{{ $v_contact->suppliers_id }}</td>
								<td class="center">{{$v_contact->suppliers_name}}</td>
								<td><img src="{{URL::to($v_contact->suppliers_image)}}"   height="100" width="100" style="border-radius: 50%;" ></td>
								<td class="center">{{$v_contact->suppliers_adderss}}</td>
								<td class="center">{{$v_contact->suppliers_city}}</td>
								<td class="center">{{$v_contact->suppliers_email}}</td>
								<td class="center">{{$v_contact->suppliers_phone}}</td>			
								<td class="center">
									<a href="{{url('/delete-supplier/'.$v_contact->suppliers_id)}}" class="btn btn-sm btn-danger">Delete</a>
									<a href="{{url('/view-supplier/'.$v_contact->suppliers_id)}}" class="btn btn-sm btn-success">View</a>
								</td>
							</tr>
							
						  </tbody>
						  @endforeach

					  </table>            
					</div>
				</div><!--/span-->

@endsection
