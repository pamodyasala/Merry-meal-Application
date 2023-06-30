<!DOCTYPE html>
<html lang="en">
<head>

	<title>Order Now</title>
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
        <li><a href="/" class="smoothScroll">Logout</a></li>
      </ul>
    </div>

  </div>
</div>


<!-- Feature section -->


<!-- Menu section -->
<section id="menu" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>Breakfast</h2>
            <h4>we have special menus</h4>
        </div>
      </div>

      <div class="wow fadeInUp col-md-5 col-sm-7" data-wow-delay="0.5s">
        <br>
        <!-- flexslider -->
        <div class="flexslider">
          <ul class="slides">

            <li>
              <img src="images/slide-img1.jpg" alt="Flexslider">
            </li>
            <li>
              <img src="images/slide-img2.jpg" alt="Flexslider">
            </li>
            <li>
              <img src="images/slide-img3.jpg" alt="Flexslider">
            </li>

          </ul>
        </div>


      </div>

       <div class="wow fadeInUp col-md-7 col-sm-5" data-wow-delay="0.9s">

         	<p>With the rice, there are normally at least three (preferably five) different curries to choose from,
                one of which is usually made with fish or meat and the other two with vegetables. Rice and curry are frequently served
                with sambol, a sauce made of spice & coconut milk, mallum (sliced leaves with coco), and fried, crunchy items like papadams.
                The menus of restaurants all throughout Sri Lanka consistently feature this specialty, which is a classic home-cooked dish.
                It is eaten with hands traditionally every day, mostly during lunch but occasionally in the evening or extremely seldom for
                breakfast.</p>


                <h3>
                    <li>Rice , Dal , Chicken Curry , Egg & Papadam</li></h3>
                </h3>
                <div class="row">
                  <div class="wow fadeInUp col-md-0 col-sm-0" data-wow-delay="0.9s">
                    <form action = "/place_order" method = "post">
                      @csrf <!-- {{ csrf_field() }} -->
                      <label for="quantity"><h3>Menu ID:</h3></label>
                      <input type="text" id="Menu_id" name="Menu_id">
                      <label for="quantity"><h3>Quantity:</h3></label>
                      <input type="number" id="Quantiy" name="Quantiy" min="0" max="4" step="1" value="0">
                      <h3>Do you prefer frozen meals ?</h3>
                      <input type="checkbox" id="Preference_for_frozen_foods" name="Preference_for_frozen_foods" value="Yes">
                      <label for="vehicle1"> <h3 style="padding-right: 10px;">Yes</h3></label>
                      <input type="checkbox" id="Preference_for_frozen_foods" name="Preference_for_frozen_foods" value="No">
                      <label for="vehicle2"> <h3>No</h3></label><br>
                      <input type="submit" class="btn btn-danger" value="Order Now">
                  </form>


                 </div>

                 </div>
                <div class="container">


</section>








<!-- Footer section -->
<footer>
	<div class="container">
		<div class="row">

              <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.3s">
                <h3>About the house</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                	tincidunt ut laoreet. Dolore magna aliquam erat volutpat ipsum.</p>
              </div>

              <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.6s">
                <h3>Contact Detail</h3>
                <p>123 Delicious Street, San Francisco, CA 10110</p>
                <p>010-020-0780</p>
                <p>hello@company.com</p>
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
