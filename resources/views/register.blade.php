<!DOCTYPE html>
<html lang="en">
 @include('components.head')
 @include('components.formstylesheet')
<body data-aos-delay="50">
  <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{ url('/signup') }}" method="post">
					@csrf
					<span class="login100-form-title p-b-26" data-aos="fade-down" data-aos-delay="100">
						Sign Up
					</span>
					<center class="d-block center p-2" data-aos="fade-up" data-aos-delay="200">
						<a href="/"><img class="w-75" src="{{ asset('img/logo.png')}}" alt="logo"></img></a>
					</center>
          <div class="wrap-login100 d-block w-100 text-center" data-aos-delay="150" data-aos="fade-down">
            <!-- Check if there are flashed messages -->
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
              @endif
           </div>
           
					<div data-aos="fade-uo" data-aos-delay="100" class="wrap-input100 validate-input" data-validate="there is no special symbols, and at least 8 characters">
						<input class="input100" type="text" name="username" autocomplete="true" maxlength="26">
						<span class="focus-input100" data-placeholder="username"></span>
					</div>

					<div data-aos="fade-up" data-aos-delay="120" class="wrap-input100 validate-input" data-validate="Password at least have 8 characters">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" autocomplete="true" maxlength="32">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					<div data-aos="fade-up" data-aos-delay="150" class="wrap-input100 validate-input" data-validate="Recovery Key at least have 4 characters">
						<input class="input100" type="number" name="keys" autocomplete="true" maxlength="8">
						<span class="focus-input100" data-placeholder="Recovery Key"></span>
					</div>

					<div class="container-login100-form-btn" data-aos="fade-down" data-aos-delay="120">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Sign Up
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Already have an account?
						</span>

						<a class="txt2" href="/login">
							Sign In
						</a>
					</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				</form>
			</div>
		</div>
	</div>
	
<pre>{{ var_dump(session()->all()) }}</pre>
	<div id="dropDownSelect1"></div>
</body>
@include("components.formjs")
</html>