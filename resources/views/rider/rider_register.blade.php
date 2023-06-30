<html>
    <head>

		<link rel="stylesheet" href="{{ asset('css/login02.css') }}">




    </head>
    <body>

        <br>
        <br>
<div class="container" id="container">

	<div class="form-container sign-up-container">
		<form action = "/rider_insert" method = "post">
            @csrf <!-- {{ csrf_field() }} -->
			<h1>Create Account</h1>
            <br>
			<span>Enter your details to register with Merry Meals</span>
            <br>
			<input type="text" id="Name" name="Name" placeholder="Enter Full Name" required />
			<input type="text" id="Address" name="Address" placeholder="Enter Your Address" required />
			<input type="text" id="Contact" name="Contact" placeholder="Enter Your Contact No" required />
            <input type="email" id="Email" name="Email" placeholder="Enter Your Email" required/>
			<input type="text" id="Driverable_vehicles" name="Driverable_vehicles" placeholder="Driverable Vehicles" required/>
			<input type="file" id="License" name="License" placeholder="Driver's License" />
            <input type="password" id="Password" name="Password" placeholder="Enter Password" required />
			<button>Sign Up</button>
		</form>

	</div>
	<div class="form-container sign-in-container">
		<form action="/rider_log" method="post">
            @csrf <!-- {{ csrf_field() }} -->
			<h1>Sign in</h1>
            <br>
			<?php if (isset($_GET['error'])) { ?>

                <p class="error"><?php echo $_GET['error']; ?></p>

            <?php } ?>
			<span>or use your account</span>
            <br>
			<input type="email" name="email" placeholder="Email" required/>
			<input type="password" name="password" placeholder="Password" required/>
			<a href="/forgotpassword">Forgot your password?</a>
			<button>Sign In</button>
			<a href=/>Back to Homepage</a>
		</form>

	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">

				<h1>Already Registered ?</h1>
                <img width="200px" height="200px" src="{{ asset('img/Fast.png') }}" />
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">

				<h1>Don't have a Account ?</h1>
                <img width="200px" height="200px" src="{{ asset('img/Fast.png') }}" />
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script src="{{ asset('js/login02.js') }}" ></script>
    </body>
</html>
