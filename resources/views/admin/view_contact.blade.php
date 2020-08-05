@extends('admin_layout')
@section('admin_content')




<ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{{route('/dashboard')}}">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li><a href="{{route('/dashboard')}}">Dashboard</a></li>
            </ul>
            <a href="{{route('all-contact')}}" class="btn btn-sm btn-warning">Go Back</a>
            <h1 style="margin-left: 10px">Details About: <span style="font-style: oblique;font-family: serif;color: darkgreen">{{ $view->contact_name }}</span></h1>
 <div style="margin-left: 20px;background-color: darkcyan">

               <!-- Basic example -->
              
              <hr>
                <div class="container">
                    <div class="panel panel-default">
                        
                        

                        <div class="panel-body">
                            
                                 <div style="margin-left: 300px" class="form-group">
                                    <p><img style="height: 400px; width: 400px;border-radius: 500px"  src="{{ URL::to($view->contact_image) }}" /></p>
                                </div>
                                 <h1 style="margin-left: 420px;color: gold">Developer</h1>
                                <h2 style="margin-left: 420px;color: orange">PHP & Laravel Expert</h2>
                                <hr style="height: 1px">
                                <div style="margin-left: 350px">
                                  <div style="margin-left: 50px" class="form-group">
                                    <label style="font-size: large;" for="exampleInputEmail1"><b>Name</b></label>
                                   <p style="color: white;font-size: medium;">{{ $view->contact_name }}</p>
                                </div>
                                <br>
                                <div style="margin-left: 50px" class="form-group">
                                    <label style="font-size: large;" for="exampleInputPassword20"><b>Email</b></label>
                                     <p style="color: white;font-size: medium;">{{ $view->contact_email }}</p>
                                </div>
                                 <br>
                                <div style="margin-left: 50px" class="form-group">
                                    <label style="font-size: large;" for="exampleInputPassword21"><b>Address</b></label>
                                     <p style="color: white;font-size: medium;">{{ $view->contact_address }}</p>
                                </div>
                                 <br>
                                <div style="margin-left: 50px" class="form-group">
                                    <label style="font-size: large;" for="exampleInputPassword19"><b>City</b></label>
                                     <p style="color: white;font-size: medium;">{{ $view->contact_city }}</p>
                                </div>
                                 <br>
                                <div style="margin-left: 50px" class="form-group">
                                    <label style="font-size: large;" for="exampleInputPassword18"><b>Contact Number</b></label>
                                     <p style="color: white;font-size: medium;">{{ $view->contact_phone }}</p>
                                </div>
                                </div>
                                
                                <br>
                                
                            
                        </div><!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col-->

            </div>
       
  
   
@endsection
       
                   
   







