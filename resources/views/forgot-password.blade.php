<!DOCTYPE html>
<html lang="en">
 @include('components.head')
 @include('components.formstylesheet')
<body>
  <div class="limiter" data-aos-delay="120">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26" data-aos="fade-down" data-aos-delay="120">
						Forgot Password 
					</span>

					<div data-aos="fade-up" data-aos-delay="120" class="wrap-input100 validate-input" data-validate="there is no special symbols, and at least 8 characters">
						<input class="input100" type="text" name="username" autocomplete="true" maxlength="26">
						<span class="focus-input100" data-placeholder="username"></span>
					</div>
					<div data-aos="fade-down" data-aos-delay="120" class="wrap-input100 validate-input" data-validate="Recovery Key at least have 4 characters">
						<input class="input100" type="number" name="keys" autocomplete="true" maxlength="8">
						<span class="focus-input100" data-placeholder="Recovery Key"></span>
					</div>

					<div data-aos="fade-up" data-aos-delay="160" class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Submit
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
</body>
@include("components.formjs")
</html>