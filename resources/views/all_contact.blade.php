@extends('layout')
@section('content')
<h1>Contact With Us</h1>
<hr>
<div style="margin-top: 10px" class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						
						
					</div>
					
						<table class="table table-striped table-bordered bootstrap-datatable">
						  <thead>
							  <tr>
								
							  </tr>
						  </thead>   
						 @foreach($contact as $v_contact)
						  <tbody style="border-color: gray">
							<tr>
								
								<td style="background-color: darkcyan;font-size: large;color: white;font-style: oblique;font-family: serif" ><p style="margin-top: 60px;margin-left: 40px;">{{$v_contact->contact_name}}</p></td>
								<td style="background-color: orange"><img src="{{URL::to($v_contact->contact_image)}}"  style="height: 150px; width: 163px;border-radius: 300px;margin-left: 100px" ></td>
											
								<td style="background-color: white;" class="center">
									
									<a style="margin-top: 60px;margin-left: 50px" href="{{url('/single-contact/'.$v_contact->id)}}" class="btn btn-sm btn-danger">Details</a>
								</td>
							</tr>
							
						  </tbody>
						  @endforeach

					  </table>            
					</div>
				</div><!--/span-->
			

@endsection
