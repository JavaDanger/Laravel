@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{route('/dashboard')}}">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				
			</ul>
			
					<a href="{{route('add-contact')}}" class="btn btn-lg btn-block btn-warning" >Add Contact</a>
				

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
				<div style="margin-top:18px" class="box span12">
					<div  class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Admin Profile</h2>
						
					</div>
					<div class="box-content" style="margin-top:18px;margin-left: 18px;margin-right: 18px">
						<table class="table table-striped table-bordered bootstrap-datatable">
						  <thead>
							 
						  </thead>   
						 @foreach($all_contact as $v_contact)
						  <tbody style="border-color: gray">
							<tr>
								
								<td style="background-color: darkcyan;font-size:large;color: white;font-style: oblique;font-family: serif;" class="center"><p style="margin-left: 130px;margin-top: 70px">{{$v_contact->contact_name}}</p></td>
								<td style="background-color:orange"><img src="{{URL::to($v_contact->contact_image)}}"   style="height: 150px; width: 163px;border-radius: 300px;margin-left: 140px" ></td>
								
								<td style="background-color: white" class="center">
									<a style="margin-left: 100px;margin-top: 50px" class="btn btn-danger" href="{{url('/delete-contact/'.$v_contact->id)}}"  id="delete"><i class="halflings-icon white trash"></i> </a>
									<a style="margin-top: 50px" href="{{url('/view-contact/'.$v_contact->id)}}" class="btn btn-sm btn-success"><i class="halflings-icon white edit"></i>
									</a>
								</td>
							</tr>
							
						  </tbody>
						  @endforeach

					  </table>            
					</div>
				</div><!--/span-->

@endsection
