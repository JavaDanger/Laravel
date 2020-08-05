@extends('admin_layout')
@section('admin_content')

  <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{{url('dashboard')}}">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li><a href="{{url('dashboard')}}">Dashboard</a></li>
            </ul>
 <div style="margin-left: 20px">
               <!-- Basic example -->
              <h1 style="margin-left: 10px">Details About the Supplier</h1>
              <hr>
                <div class="container">
                    <div class="panel panel-default">
                        
                        

                        <div class="panel-body">
                            
                                 <div class="form-group">
                                    <p><img style="height: 400px; width: 400px;"  src="{{ URL::to($view->suppliers_image) }}" /></p>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><b>Name</b></label>
                                   <p>{{ $view->suppliers_name }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword20"><b>Email</b></label>
                                     <p>{{ $view->suppliers_email }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword21"><b>Address</b></label>
                                     <p>{{ $view->suppliers_adderss }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword19"><b>City</b></label>
                                     <p>{{ $view->suppliers_city }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword18"><b>Contact Number</b></label>
                                     <p>{{ $view->suppliers_phone }}</p>
                                </div>
                                
                            
                        </div><!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col-->

            </div>
       
   </div>
@endsection
       
                   
   







