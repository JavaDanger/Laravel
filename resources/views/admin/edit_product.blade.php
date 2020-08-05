@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{{route('/dashboard')}}">Home</a>
                    <i class="icon-angle-right"></i> 
                </li>
                
            </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit product</h2>
            </div>
            <div class="box-content">
                @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-dismissible alert-danger">
                            <button type="button" class="close" data-dismiss="alert alert-danger">×</button>
                            {{ $error }}
                        </div>
                    @endforeach
                @endif


                <p style="color: green;font-size: 15px; font-weight: bold;">
                    <?php
                    $message = Session::get('message');
                    if ($message){
                        echo $message;
                        Session::put('message',null);
                    }
                    ?>
                </p>
                <form class="form-horizontal" method="post" action="{{ URL::to('/update_product',$specific_edit_product->product_id) }}" enctype="multipart/form-data">

                    {{ csrf_field() }}

                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Product Name</label>
                            <div class="controls">
                                <input type="text" name="product_name" value="{{ $specific_edit_product->product_name }}" class="span6 typeahead" id="typeahead"  required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Category Name</label>
                            <div class="controls">
                                <select name="category_id" id="" required>
                                    <option>Select category</option>

                                    <?php
                                    $all_published_category = DB::table('category_tbl')
                                        ->where('publication_status',1)
                                        ->get();
                                    foreach ($all_published_category as $view_category){
                                        ?>
                                    <option value="{{ $view_category->category_id }}" <?php if($specific_edit_product->category_id == $view_category->category_id ){echo "selected";}?>>{{ $view_category->category_name }}</option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Manufacture Name</label>
                            <div class="controls">
                                <select name="brand_id" id="" required>
                                    <option>Select brand</option>

                                    <?php
                                    $all_published_brand = DB::table('manufacture_tbl')
                                        ->where('publication_status',1)
                                        ->get();
                                    foreach ($all_published_brand as $view_brand){
                                        ?>
                                    <option value="{{ $view_brand->manufacture_id }}"<?php if($specific_edit_product->manufacture_id == $view_brand->manufacture_id ){echo "selected";}?>>{{ $view_brand->manufacture_name }}</option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                      
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Product Price</label>
                            <div class="controls">
                                <input type="text" value="{{ $specific_edit_product->product_price }}" name="product_price" class="span6 typeahead" id="typeahead"  required> Tk
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="fileInput">Image input</label>
                            <div class="controls">
                                <input class="input-file uniform_on" name="previous_image" value="{{ $specific_edit_product->product_image }}" id="fileInput" type="hidden" >
                                <input class="input-file uniform_on" name="product_image" id="fileInput" type="file">
                            </div>
                        </div>
                     
                       
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Update</button>
                           
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->

    </div><!--/row-->

 @endsection