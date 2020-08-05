@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{route('/dashboard')}}">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li>
					<a href="{{route('/dashboard')}}">Dashboard</a>
					<i class="icon-angle-right"></i>
				</li>

				<li><a href="{{url('/')}}">E-shopper</a></li>
			</ul>
			<div style="margin-left: 500px">
                            <a href="{{url('/')}}"  target="_blank"><img src="backend/logo/logo.png" alt="" /></a>
                           
                        </div>
                        <h2 style="margin-left: 500px;font-style: oblique;font-family: serif;color: darkgreen;font-size: 20px">An Online Market Place</h2><hr style="padding: 0px;background-color:gray">
            <div>
            	<h1>Admin Panel</h1>
            </div>
			

			<div style="margin-top: 10px;margin-bottom:40px;background-color: green">
				

				<div class="row-fluid" style="margin-top: 30px">
				
				<div class="span4 statbox yellow" onTablet="span5" onDesktop="span8" style="margin-top: 40px;">
					<div>
						<a href="{{route('admin.all-category')}}" class="btn btn-success pull-left" style="margin-top: 30px;margin-left: 40px;border-radius: 16px !important">ALL Category</a>			
						<a href="{{route('admin.add-category')}}" class="btn btn-danger pull-left" style="margin-top: 30px;border-radius: 16px !important">Add Category</a>				
					</div>			
				</div>
				<div class="span4 statbox red" onTablet="span5" onDesktop="span8" style="margin-top: 40px">
					<div>
						<a href="{{route('admin.all-manufacture')}}" class="btn btn-primary pull-left" style="margin-top: 30px;margin-left: 25px;border-radius: 16px !important" >ALL Manufacture</a>			
						<a href="{{route('admin.add-manufacture')}}" class="btn btn-info pull-left" style="margin-top: 30px;border-radius: 16px !important">Add Manufacture</a>				
					</div>			
				</div>
				<div class="span4 statbox green" onTablet="span5" onDesktop="span8" style="margin-top: 40px">
					<div>
						<a href="{{route('admin.all-product')}}" class="btn btn-success pull-left" style="margin-top: 30px;margin-left: 60px;border-radius: 16px !important" >ALL Product</a>			
						<a href="{{route('admin.add-product')}}" class="btn btn-warning pull-left" style="margin-top: 30px;border-radius: 16px !important">Add Product</a>				
					</div>			
				</div>
				</div><!--/row-->

				<hr>
				<div class="row-fluid">
				<div class="span4 statbox yellow" onTablet="span5" onDesktop="span8">
					<div>
						<a href="{{route('admin.all-slider')}}" class="btn btn-success pull-left" style="margin-top: 30px;margin-left: 55px;border-radius: 16px !important">ALL Slider</a>			
						<a href="{{route('admin.add-slider')}}" class="btn btn-danger pull-left" style="margin-top: 30px;border-radius: 16px !important">Add Slider</a>				
					</div>			
				</div>
				<div class="span4 statbox red" onTablet="span5" onDesktop="span8">
					<div >
						<a style="border-radius: 16px !important;margin-top: 8px" href="{{url('manage-order')}}" class="btn btn-primary btn-block  " >ALL Order</a><br>			
						<a style="border-radius: 16px !important;margin-left: 8px" href="{{url('all-confirmed-order')}}" class="btn btn-warning pull-left  " >ALL Confirmed Order</a>			
						<a  style="border-radius: 16px !important;" href="{{url('all-pending-order')}}" class="btn btn-default pull-left" >ALL Pending Order</a>			
									
					</div>			
				</div>
				<div class="span4 statbox green" onTablet="span5" onDesktop="span8">
					<div>
						<a href="{{url('all-supplier')}}" class="btn btn-success pull-left" style="margin-top: 30px;margin-left: 60px;border-radius: 16px !important" >ALL Supplier</a>			
						<a href="{{url('add-supplier')}}" class="btn btn-warning pull-left" style="margin-top: 30px;border-radius: 16px !important">Add Supplier</a>				
					</div>			
				</div>
						
					</div>

					<hr>

				
			</div>
<br><br><br><br>


			

				
								
			

@endsection