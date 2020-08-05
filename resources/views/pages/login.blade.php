@extends('layout')
@section('content')


<section id="form"><!--form-->
		<div class="container">
			
				<div class="col-sm-3 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<p class="alert-danger">
						<?php
					$message=Session::get('message');
					if('message'){
						echo $message;
						Session::put('message',null);
					}
						?>
				</p>
						<h2>Login to your account</h2>
						<form action="{{url('/customer-login')}}" method="post">
							{{ csrf_field() }}
							
							<input type="email" required="" placeholder="Email" name="customer_email" />
							<input type="passwrod" placeholder="Password" name="password" />
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>

				<div class="col-sm-4">
					<?php
					$message=Session::get('message');
					if('message'){
						echo $message;
						Session::put('message',null);
					}
						?>
				</p>
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="{{url('/customer-registration')}}" method="post">
							 {{ csrf_field() }}
							<input type="text" placeholder="First name" name="customer_first_name" required=""/>
							<input type="text" placeholder="Last name" name="customer_last_name" required=""/>
							<input type="email" placeholder="Email" name="customer_email" required=""/>
							<input type="password" placeholder="Password" name="password" required=""/>
							<input type="text" placeholder="Phone Number" name="phone_number" required=""/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		
	</section><!--/form-->
	

@endsection