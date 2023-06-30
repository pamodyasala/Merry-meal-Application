<!DOCTYPE html>
<html lang="en">
<head>

	<title>Order Details</title>
<!--

Template 2083 Steak House

http://www.tooplate.com/view/2083-steak-house

-->
  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
  	<meta name="description" content="">

	<!-- stylesheets css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

  	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

  	<link rel="stylesheet" href="css/nivo-lightbox.css">
  	<link rel="stylesheet" href="css/nivo_themes/default/default.css">

  	<link rel="stylesheet" href="css/hover-min.css">
  	<link rel="stylesheet" href="css/flexslider.css">

	<link rel="stylesheet" href="css/style.css">

  	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- Preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</div>


<!-- Home section -->



<!-- Navigation section -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">

    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">Merry Meal</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#top" class="smoothScroll">Home</a></li>
        <li><a href="#feature" class="smoothScroll">Features</a></li>
        <li><a href="#about" class="smoothScroll">About</a></li>
        <li><a href="#menu" class="smoothScroll">Menu</a></li>
        <li><a href="#team" class="smoothScroll">Team</a></li>
        <li><a href="#gallery" class="smoothScroll">Gallery</a></li>
        <li><a href="#contact" class="smoothScroll">Logout</a></li>
      </ul>
    </div>

  </div>
</div>


<!-- Feature section -->


<!-- Menu section -->
<section id="menu" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-0 col-md-0 col-sm-offset-4 col-sm-0">
         <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>Update Menu</h2>
            <h4>Make your signature meals</h4>
        </div>
      </div>
       <div class="wow fadeInUp col-md-0 col-sm-0" data-wow-delay="0.9s">
        <table border = "1">
            <tr>
            <td>Menu_Id</td>
            <td>Menu Name</td>
            <td> Description</td>
            <td>Category</td>
            <td></td>
            </tr>
            @foreach ($menus as $menu)
            <form action = "/update_menu" method = "post">
                @csrf <!-- {{ csrf_field() }} -->
            <tr>
            <td><input type="text" id="Menu_Id" name="Menu_Id" value={{ $menu->Menu_Id }} readonly></td>

            <td><input type="text" name="Name"  value={{ $menu->Name }}></td>
            <td><input type="text" name="Description" value={{ $menu->Description }} ></td>
            <td><select name="Category" id="Category" value={{ $menu->Category }} required>
                <option value="{{ $menu->Category }}"  selected>{{ $menu->Category }}</option>
                <option value="Breakfast">Breakfast</option>
                <option value="Lunch">Lunch</option>
                <option value="Dinner">Dinner</option>
              </select></td>
            <td><input type="submit" class="btn btn-danger" value="Update Menu"></td>

            </tr>
            </form>
            @endforeach
            </table>


      </div>

</section>



<!-- Footer section -->
<footer>
	<div class="container">
		<div class="row">

              <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.3s">
                <h3>About the Merry meal</h3>
                <p>MerryMeal is a charitable organization that prepares and delivers a hot noon meal to qualified adults living at home who are unable to cook for themselves or maintain
                  their nutritional status due to age, disease, or disability. </p>
              </div>

              <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.6s">
                <h3>Contact Detail</h3>
                <p>12/60, Union Place, Colombo</p>
                <p>010-020-0780</p>
                <p>merrymeal@gmail.com</p>
              </div>

              <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.9s">
                <h3>Opening Hours</h3>
                <strong>Monday - Firday</strong>
                <p>11:00 AM - 10:00 PM</p>
                <strong>Saturday - Sunday</strong>
                <p>10:00 AM - 09:00 PM</p>
              </div>

		</div>
	</div>
</footer>

<!-- Copyright section -->


<!-- javscript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.magnific-popup.min.js"></script>

<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.backstretch.min.js"></script>

<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>

<script src="js/jquery.flexslider-min.js"></script>

<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>

<script src="js/custom.js"></script>

</body>
</html>
