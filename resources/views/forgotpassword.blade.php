<html>
	<title>Login</title>
    <head>
        <link rel="stylesheet" href="css/login02.css">

    </head>
    <body>

        <br>
        <br>
<div class="container" id="container">

	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Done !</h1>
            <br>
			<h3><span>Password reset link is sent to your email successfully. Please check your email.</span></h3>
            <br>
			<button>Login </button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Forgotten Password</h1>
            <br>
			<span>Reset your Password</span>
            <br>
			<input type="email" placeholder="Email" />

			<button id="signUp">Reset Password</button>
			<a href=/>Back to Home</a>
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


<script src="js/login02.js"></script>
    </body>
</html>
