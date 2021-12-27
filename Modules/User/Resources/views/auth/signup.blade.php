@extends('common::layouts.master')
@section('title', 'Sign up')

@push('styles')
<style>
.main-content{
	width: 50%;
	border-radius: 20px;
	box-shadow: 0 5px 5px rgba(0,0,0,.4);
	margin: 5em auto;
	display: flex;
}
.company__info{
	background-color: #008080;
	border-top-left-radius: 20px;
	border-bottom-left-radius: 20px;
	display: flex;
	flex-direction: column;
	justify-content: center;
	color: #fff;
}
.fa-android{
	font-size:3em;
}
@media screen and (max-width: 640px) {
	.main-content{width: 90%;}
	.company__info{
		display: none;
	}
	.login_form{
		border-top-left-radius:20px;
		border-bottom-left-radius:20px;
	}
}
@media screen and (min-width: 642px) and (max-width:800px){
	.main-content{width: 70%;}
}
.row > h2{
	color:#008080;
}
.login_form{
	background-color: #fff;
	border-top-right-radius:20px;
	border-bottom-right-radius:20px;
	border-top:1px solid #ccc;
	border-right:1px solid #ccc;
}
.form-custom{
	padding: 0 2em;
}
.form__input{
	width: 100%;
	border:0px solid transparent;
	border-radius: 0;
	border-bottom: 1px solid #aaa;
	padding: 1em .5em .5em;
	padding-left: 2em;
	outline:none;
	margin:1.5em auto;
	transition: all .5s ease;
}
.form__input:focus{
	border-bottom-color: #008080;
	box-shadow: 0 0 5px rgba(0,80,80,.4); 
	border-radius: 4px;
}
.btn{
	transition: all .5s ease;
	width: 70%;
	border-radius: 30px;
	color:#008080;
	font-weight: 600;
	background-color: #fff;
	border: 1px solid #008080;
	margin-top: 1.5em;
	margin-bottom: 1em;
}
.btn:hover, .btn:focus{
	background-color: #008080;
	color:#fff;
}
</style>
@endpush

@section('content')
    
    <div class="container-fluid">
		<div class="row main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">				
				<h2 style="font-size: 4rem"><i class="fab fa-redhat"></i></h2>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form p-3">
				<div class="container-fluid">
					<div class="row">
						<h2>Sign up</h2>
					</div>
					<div class="row">
						<form action="{{ route('signup') }}" method="POST" class="form-group form-custom">
                            @csrf
							<div class="row">
								<input type="text" name="name" id="name" class="form__input" placeholder="Your Name...">
							</div>
                            @error('name')
                                <small>
                                    <strong class="text-danger">{{ $message }}</strong>
                                </small>
                            @enderror
                            <div class="row">
								<input type="email" name="email" id="email" class="form__input" placeholder="Your E-mail...">
							</div>
                            @error('email')
                                <small>
                                    <strong class="text-danger">{{ $message }}</strong>
                                </small>
                            @enderror
							<div class="row">
								<input type="password" name="password" id="password" class="form__input" placeholder="Enter Password">
							</div>
                            @error('password')
                                <small>
                                    <strong class="text-danger">{{ $message }}</strong>
                                </small>
                            @enderror
                            <div class="row">
								<input type="password" name="password_confirmation" id="password_confirmation" class="form__input" placeholder="Confirm Password">
							</div>
							<div class="row">
								<input type="checkbox" name="remember" id="remember" class="">
								<label for="remember">Remember Me!</label>
							</div>
							<div class="row">
                                <button type="submit" class="btn mx-auto">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection