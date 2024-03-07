<!DOCTYPE html>
<html lang="en">
 @include('components.head')
 @include('components.formstylesheet')
<body>
  <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26" data-aos="fade-down" data-aos-delay="200">
						Welcome
					</span>
					<center class="d-block center p-2" data-aos="fade-up" data-aos-delay="170">
						<a href="/"><img class="w-75" src="{{ asset('img/logo.png')}}" alt="logo"></img></a>
					</center>

					<div data-aos="fade-up" data-aos-delay="150" class="wrap-input100 validate-input" data-validate="there is no special symbols, and at least 8 characters">
						<input class="input100" type="text" name="username" autocomplete="true" maxlength="26">
						<span class="focus-input100" data-placeholder="username"></span>
					</div>

					<div data-aos="fade-down" data-aos-delay="130" class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" autocomplete="true" maxlength="32">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn" data-aos="fade-up" data-aos-delay="100">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115" data-aos="fade-up" data-aos-delay="120">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="/signup">
							Sign Up
						</a>
					</div>
					<div class="text-center" >
						<span class="txt1">
							Reset Password?
						</span>

						<a class="txt2" href="/reset">
							Reset
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
</body>
@include("components.formjs")
</html>