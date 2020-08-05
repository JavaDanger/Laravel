<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="o{{URL::to('images/ico/favicon.ic')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::to('images/ico/apple-touch-icon-57-precomposed.png')}}">
     
</head><!--/head-->
<style type="text/css">
    .paymentWrap {
    padding: 50px;
}

.paymentWrap .paymentBtnGroup {
    max-width: 800px;
    margin: auto;
}

.paymentWrap .paymentBtnGroup .paymentMethod {
    padding: 40px;
    box-shadow: none;
    position: relative;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active {
    outline: none !important;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active .method {
    border-color: #4cd264;
    outline: none !important;
    box-shadow: 0px 3px 22px 0px #7b7b7b;}

.paymentWrap .paymentBtnGroup .paymentMethod .method {
    position: absolute;
    right: 3px;
    top: 3px;
    bottom: 3px;
    left: 3px;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    border: 2px solid transparent;
    transition: all 0.5s;
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.amex {
    background-image: url("https://graffikgallery.co.uk/wp-content/uploads/2016/09/paypal-attend-graffik-gallery-corporate-graffiti-workshops.png");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.vishwa {
    background-image: url("https://media.dhakatribune.com/uploads/2017/09/bkash-01.jpg");
}



.paymentWrap .paymentBtnGroup .paymentMethod .method.ez-cash {
    background-image: url("https://cdn-images-1.medium.com/max/1600/1*6K_qTqM_u_zKSXc0ViwV-A.jpeg");
}


.paymentWrap .paymentBtnGroup .paymentMethod .method:hover {
    border-color: #4cd264;
    outline: none !important;
}

</style>

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i>01739909188</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i>noman12@cse.pstu.ac.bd</a></li>
                            </ul>
                        </div>
                    </div>
                 {{--    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="#"><img src="images/home/logo.png" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">
                         
                            
                        </div>
                    </div>
                    <div class="col-sm-12">
                          <div class="logo pull-left">
                            <a href="{{URL::to('home')}}"><img src="{{URL::to('frontend/images/home/logo.png')}}" alt="" /></a>
                        </div>
    
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                
                                 <?php  
                                  $customer_id=Session::get('customer_id');
                                  $shipping_id=Session::get('shipping_id');
                                  ?>


                               <?php if($customer_id !=NULL && $shipping_id==NULL){?>
                               <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>


                                <?php } if($customer_id !=NULL && $shipping_id !=NULL) {?>
                                <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>

                                 <?php } else{?>
                                 <li><a href="{{URL::to('/login-check')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                 <?php  }?>

                                 <li><a href="{{URL::to('/show_cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>

                                
                                
                              <?php  
                                  $customer_id=Session::get('customer_id');
                              ?>
                              
                             <?php if($customer_id !=NULL){?>
                                <li><a href="{{URL::to('/customer-logout')}}"><i class="fa fa-lock"></i>User Logout</a></li>
                           <?php } else {?>
                                <li><a href="{{URL::to('/login-check')}}"><i class="fa fa-lock"></i>User Login</a></li>
                                <?php }  ?>

                                 <li><a href="{{url('admin')}}" target="_blank"><i class="fa fa-lock"></i>Admin Login</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->


        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">

                    <div class="col-sm-9">
                        
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                       
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL::to('/home')}}" class="{{ Request::is('/') ? "active" : "" }}">Home</a></li>
                    <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                           <ul role="menu" class="sub-menu">
                               <li><a href="{{route('show-all-product')}}" class="{{ Request::is('ec965b080f77387e68b42805932a0132') ? "active" : "" }}">Products</a></li>
                                         
                                     <?php if($customer_id !=NULL && $shipping_id==NULL){?>
                                <li><a href="{{url('checkout')}}" class="{{ Request::is('/checkout') ? "active" : "" }}">Checkout</a></li>


                                <?php } if($customer_id !=NULL && $shipping_id !=NULL) {?>
                                <li><a href="{{URL::to('/payment')}}" class="{{ Request::is('payment') ? "active" : "" }}">>Checkout</a></li>

                                 <?php } else{?>
                                 <li><a href="{{URL::to('/login-check')}}" class="{{ Request::is('login-check') ? "active" : "" }}">Checkout</a></li>
                                 <?php  }?>

                                 <li><a href="{{route('about')}}" class="{{ Request::is('46b3931b9959c927df4fc65fdee94b07') ? "active" : "" }}" >Contact</a></li>
                                  
                                  <li><a href="{{URL::to('/show_cart')}}" class="{{ Request::is('show_cart') ? "active" : "" }}">Cart</a></li> 
                            </ul>
                     </li> 
                               
                                
                                <li><a href="{{route('about')}}" class="{{ Request::is('46b3931b9959c927df4fc65fdee94b07') ? "active" : "" }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                   <div class="col-sm-3">
                        <div class="search_box pull-right">
                             <input type="text" placeholder="Search"/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->


   <?php 
    $all_published_slider=DB::table('tbl_slider')
    ->where('publication_status',1)
    ->get(); 
    ?>  
<section id="slider"><!--slider-->
    <div class="container">
      <div class="row"> 

         <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach( $all_published_slider as $v_slider )
                        <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                    @endforeach
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @foreach( $all_published_slider as $v_slider )
                        <div class="item {{ $loop->first ? ' active' : '' }}" >
                            <img src="{{ $v_slider->slider_image }}"  style="width: 100%; height: 400px;" ">
                        </div>
                    @endforeach
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

         </div>
     </div>
 </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            
                            <div class="panel panel-default">

                            <?php
                            $all_published_category=DB::table('category_tbl')
                                ->where('publication_status',1)
                                ->get();

                            foreach($all_published_category as $v_category){?>

                                 <div class="panel panel-default">
                                 <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/product-by-category/'.$v_category->category_id)}}">{{$v_category->category_name}}</a></h4>

                                </div>
                            </div>



                          <?php } ?>   

                               
                            
                        </div><!--/category-products-->
                         </div>
                    
                       {{-- brand section --}}

                        <div class="brands_products"><!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                         

                     <?php
                            $all_published_manufacture=DB::table('manufacture_tbl')
                                ->where('publication_status',1)
                                ->get();

                            foreach($all_published_manufacture as $v_manufacture){?>

                             <li><a href="{{URL::to('/product-by-manufacture/'.$v_manufacture->manufacture_id)}}"> <span class="pull-right"></span>{{$v_manufacture->manufacture_name}}</a></li>
                    <?php } ?>  
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                       {{--  <div class="price-range"><!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div><!--/price-range--> --}}
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="images/home/shipping.jpg" alt="" />
                        </div><!--/shipping-->
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->


                  @yield('content')

              
                </div>
            </div>
        </div>
    </section>
    
   
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2018 E-SHOPPER Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="http://https://www.facebook.com/profile.php?id=100005604587678">Abdullah Al Noman</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.j')}}s"></script>
    <script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
  




 </body>
</html>
 