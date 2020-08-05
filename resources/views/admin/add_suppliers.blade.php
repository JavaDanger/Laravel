@extends('admin_layout')
@section('admin_content')

<div>
    

<ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{{route('/dashboard')}}">Home</a>
                    <i class="icon-angle-right"></i> 
                </li>
               
            </ul>
             <a href="{{url('all-supplier')}}" class="btn btn-lg btn-block btn-warning">All Supplier</a>
            
            <div class="row-fluid sortable">
                <div class="box span12">
                    <div class="box-header" data-original-title>
                        <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Supplier</h2>
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
                        <form class="form-horizontal" action="{{url('/insert-supplier')}}" method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                            
                            <div class="control-group">
                              <label for="exampleInputEmail1">Name</label>
                               <div class="controls">
                               <input type="text" class="form-control" name="suppliers_name" placeholder="Enter Full Name"required>
                              </div>
                            </div>

                                      
                            <div class="control-group hidden-phone">
                              <label for="exampleInputPassword20">Email</label>
                              <div class="controls">
                                <input type="email" class="form-control" name="suppliers_email" placeholder="Email"required>
                              </div>
                            </div>

                            <div class="control-group hidden-phone">
                              <label for="exampleInputPassword21">Phone</label>
                              
                              <div class="controls">
                                <input type="text" class="form-control" name="suppliers_phone" placeholder="phone"required>
                              </div>
                            </div>

                            <div class="control-group hidden-phone">
                             <label for="exampleInputPassword19">Address</label>
                              
                              <div class="controls">
                               <input type="text" class="form-control" name="suppliers_adderss" placeholder="address"required>
                              </div>
                            </div>

                            <div class="control-group hidden-phone">
                              <label for="exampleInputPassword12">City</label>
                              
                              <div class="controls">
                                <input type="text" class="form-control" name="suppliers_city" placeholder="city" required>
                              </div>
                            </div>

                            <div class="control-group hidden-phone">
                              
                             <label for="exampleInputPassword11">Photo</label>
                              <div class="controls">
                                 <input type="file"  name="suppliers_image" accept="image/*"  required onchange="readURL(this);">
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
            </div>


@endsection