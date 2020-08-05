@extends('admin_layout')
@section('admin_content')


    

<ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{{route('/dashboard')}}">Home</a>
                    <i class="icon-angle-right"></i> 
                </li>
                
            </ul>

                    
                    <a href="{{route('all-contact')}}" class="btn btn-lg btn-block btn-warning">All Contact</a>

                
            
            <div class="row-fluid sortable" style="margin-top: 10px">
                <div class="box span12">
                    <div class="box-header" data-original-title>
                        <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Contact</h2>
                        </div>

                        <p class="alert-success">
                        <?php
                    $message=Session::get('message');
                    if('message'){
                        echo $message;
                        Session::put('message',null);
                    }
                        ?>
                </p>

                    
                    <div class="box-content">
                        <form class="form-horizontal" action="{{url('/insert-contact')}}" method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                            
                            <div class="control-group">
                              <label for="exampleInputEmail1">Name</label>
                               <div class="controls">
                               <input type="text" class="form-control" name="contact_name" placeholder="Enter Full Name"required>
                              </div>
                            </div>

                                      
                            <div class="control-group hidden-phone">
                              <label for="exampleInputPassword20">Email</label>
                              <div class="controls">
                                <input type="email" class="form-control" name="contact_email" placeholder="Email"required>
                              </div>
                            </div>

                            <div class="control-group hidden-phone">
                              <label for="exampleInputPassword21">Phone</label>
                              
                              <div class="controls">
                                <input type="text" class="form-control" name="contact_phone" placeholder="phone"required>
                              </div>
                            </div>

                            <div class="control-group hidden-phone">
                             <label for="exampleInputPassword19">Address</label>
                              
                              <div class="controls">
                               <input type="text" class="form-control" name="contact_address" placeholder="address"required>
                              </div>
                            </div>

                            <div class="control-group hidden-phone">
                              <label for="exampleInputPassword12">City</label>
                              
                              <div class="controls">
                                <input type="text" class="form-control" name="contact_city" placeholder="city" required>
                              </div>
                            </div>

                            <div class="control-group hidden-phone">
                              
                             <label for="exampleInputPassword11">Photo</label>
                              <div class="controls">
                                 <input type="file"  name="contact_image" accept="image/*"  required onchange="readURL(this);">
                              </div>
                            </div>


                            <div class="form-actions">
                              <button type="submit" class="btn btn-primary">Submit</button>
                              <button type="reset" class="btn">Cancel</button>
                            </div>



                           
                          
                        </form>   

                    </div>
                </div><!--/span-->

            </div><!--/row-->
           


@endsection