<html>
    <head>

		<link rel="stylesheet" href="{{ asset('css/login02.css') }}">




    </head>
    <body>

        <br>
        <br>
<div class="container" id="container">


	<div class="form-container sign-in-container">
		<form action="/admin_log" method="post">
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

			<div class="overlay-panel overlay-right">


                <img width="200px" height="200px" src="{{ asset('img/Fast.png') }}" />

			</div>
		</div>
	</div>
</div>
<script src="{{ asset('js/login02.js') }}" ></script>
    </body>
</html>





