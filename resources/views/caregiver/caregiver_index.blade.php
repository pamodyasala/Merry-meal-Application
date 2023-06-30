<!DOCTYPE html>
<html lang="en">
<head>

	<title>Care Giver</title>
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
<section id="home" class="parallax-section">
  <div class="gradient-overlay"></div>
    <div class="container">
      <div class="row">

          <div class="col-md-offset-2 col-md-8 col-sm-12">
            <img src="images/LOGO 2 new.png" style="width:300px;height:150px;">
              <h1 class="wow fadeInUp" data-wow-delay="0.6s">Welcome Care giver</h1>
              <a href="#feature" class="wow fadeInUp btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="1.3s">Discover Now</a>
          </div>

      </div>
    </div>
</section>


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
        <li><a href="/caregiver_profile" class="smoothScroll">Profile</a></li>
        <li><a href="/" class="smoothScroll">Logout</a></li>
      </ul>
    </div>

  </div>
</div>


<!-- Feature section -->
<section id="menu" class="parallax-section">
<div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
    <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
       <h2>Food Menu</h2>
       <h4>we have special menus</h4>
   </div>
 </div>
</section>
<!-- Menu section -->
<section id="menu" class="parallax-section">
  <div class="container">
    <div class="row">


      @foreach ($menus as $menu)
      <div class="col-md-0 col-sm-0">
        <table cellpadding="20" cellspacing="20" style="border:0px solid transparent;">
          <tr>

            <td>
              <div class="media wow fadeInUp" data-wow-delay="0.6s">
                <div class="media-object pull-left">
                  <img src="images/gallery-img1.jpg" class="img-responsive" alt="Food Menu">

                </div>
                <div class="media-body">
                    <h3 class="media-heading">Menu ID:{{ $menu->Menu_Id }}</h3>
                      <h3 class="media-heading">{{ $menu->Name }}</h3>
                      <h3 class="media-heading">{{ $menu->Category }}</h3>
                      <h3 class="media-heading">{{ $menu->Availability }}</h3>
                      <p>{{ $menu->Description }}</p>
                      <a href=orderc class="btn btn-danger ">ORDER</a>
                    </div>
              </div>
            </td>





          </tr>

            @endforeach

        </table>
      </div>

    </div>
  </div>
</section>
<!-- Team section -->

<!-- Gallery section -->
<section id="gallery" class="parallax-section">

    <div class="container">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                       <h2>Recent Orders</h2>
                       <h4>See what you got</h4>
            </div>
            <br>
            @foreach ($oders as $oder)

            <div class="table-responsive">
              <table class="table text-start align-middle table-bordered table-hover mb-0">
                  <tr>
                      <td>
                          <div class="media align-items-center">
                              <img class="mr-3 " width="87" src="https://img.freepik.com/premium-psd/portrait-british-elderly-man_53876-24457.jpg" alt="DexignZone">
                              <div >
                                  <h5 class="mt-0 mb-2">Order ID:Order {{ $oder->Order_Id }}</h5>
                                  <p class="mb-0 ">Menu ID:Menu_{{ $oder->Menu_Id }} </p>
                                  <p class="mb-0 ">Member ID:Member_{{ $oder->Member_Id }} </p>
                              </div>
                          </div>
                      </td>
                      <td>
                        <div>
                          <br>
                          <br>
                          <p class="mb-0"> <br> Preference for frozen foods:<b>{{ $oder->Preference_for_frozen_foods }}</b></p>
                        </div>
                      </td>
                      <td>
                          <br>
                          <h5 class="mb-2 text-black wspace-no">{{ $oder->Name }}</h5>
                          <p class="mb-0">{{ $oder->Address }}</p>
                          <p class="mb-0">Date and Time{{ $oder->DateTime }} </p>
                      </td>
                      <td>
                          <div class="d-flex align-items-center justify-content-center">
                              <br>
                              <br>
                              <br>
                              <p class="mb-0 fs-20 d-inline-block">x{{ $oder->Quantiy }}</p>
                          </div>
                      </td>
                      <td>
                          <div class="d-flex align-items-center">
                              <br>
                              <br>
                              <br>
                              <a class="btn text-warning" href="javascript:void(0);">{{ $oder->Delivery_status }}</a>
                              <div class="dropdown ml-auto">


                                  </div>
                              </div>
                          </div>
                      </td>
                  </tr>
              </table>
          </div>

          @endforeach
        </div>
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
<section id="copyright">
  <div class="container">
    <div class="row">

      <div class="col-md-8 col-sm-8 col-xs-8">
        <p>Copyright © 2016 Steak House Company - Designed by Tooplate</p>
      </div>

      <div class="col-md-4 col-sm-4 text-right">
        <a href="#home" class="fa fa-angle-up smoothScroll gototop"></a>
      </div>

    </div>
  </div>
</section>

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
