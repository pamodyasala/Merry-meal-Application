<!DOCTYPE html>
<html lang="en">
<head>

	<title>Partner</title>
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
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

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
              <h1 class="wow fadeInUp" data-wow-delay="0.6s">Welcome Partner</h1>
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
        <li><a href="/partner_profile" class="smoothScroll">Profile</a></li>
        <li><a href="/" class="smoothScroll">Logout</a></li>
      </ul>
    </div>

  </div>
</div>


<!-- Feature section -->


<!-- Menu section -->
<section id="feature" class="parallax-section">
    <div class="container">
          <div class="row">

        <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
            <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
              <h2>Add Menu</h2>
              <h4>Add your healthy meal to Merry Meal</h4>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.3s">
          <form action = "/menu_insertp" method = "post">
            @csrf <!-- {{ csrf_field() }} -->



            <div class="form-group">
                <label class="mb-1 text-black" for="Name"><strong>Name</strong></label>
                <div><input type="text" class="form-control" id="Name" name="Name" placeholder="Enter Menu Name" required></div>
            </div>
            <div class="form-group">
                <label class="mb-1 text-black" for="Description"><strong>Description</strong></label>
                <div><input type="text" class="form-control" id="Description" name="Description" placeholder="Enter Description" required></div>
            </div>

            <div class="form-group">
                <label class="mb-1 text-black" for="Image1"><strong>Image</strong></label>
                <div><input type="file" class="form-control" id="Image1" name="Image1" placeholder="Enter Meal Image" required></div>
            </div>
            <div class="form-group">
                <label class="mb-1 text-black" for="Image2"><strong>Image</strong></label>
                <div><input type="file" class="form-control" id="Image2" name="Image2" placeholder="Enter Meal Image" ></div>
            </div>
            <div class="form-group">
                <label class="mb-1 text-black" for="Image3"><strong>Image</strong></label>
                <div><input type="file" class="form-control" id="Image3" name="Image3" placeholder="Enter Meal Image" ></div>
            </div>
            <div class="form-group">
                <label class="mb-1 text-black" for="Category"><strong>Category</strong></label>
                <div><select name="Category" id="Category">
                    <option value="Breakfast">Breakfast</option>
                    <option value="Lunch">Lunch</option>
                    <option value="Dinner">Dinner</option>
                  </select>
                  <br><br>
                </div>
            </div>
            <div class="form-group text-center mt-4">
                <button type="submit" class="btn btn-danger btn-block" id="dz-signup-submit" href="#sign-up">Add menu</button>
            </div>
        </form>
        </div>
        <br>
        <br>
         <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.9s">
          <img src="https://st2.depositphotos.com/1791505/8561/i/600/depositphotos_85618976-stock-photo-world-cuisine-collage.jpg" class="img-responsive" alt="About">

               </ul>
        </div>

          </div>
      </div>
  </section>

<!-- Team section -->
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
            <table style="border:2px solid; margin-left: auto; margin-right: auto;">
                <tr>
                <td >Menu_Id</td>
                <td>Menu Name</td>
                <td> Description</td>
                <td>Category</td>
                <td></td>
                </tr>
                @foreach ($menus as $menu)
                <form action = "/update_menup" method = "post">
                    @csrf <!-- {{ csrf_field() }} -->
                <tr>
                <td><input type="text" id="Menu_Id" name="Menu_Id" style="margin-left: 5px;" value={{ $menu->Menu_Id }} readonly></td>

                <td><input type="text" name="Name" style="margin-left: 10px;" value={{ $menu->Name }}></td>
                <td><input type="text" name="Description" style="margin-left: 10px;" value={{ $menu->Description }} ></td>
                <td><select name="Category" id="Category" style="margin-left: 10px;" value={{ $menu->Category }} required>
                    <option value="{{ $menu->Category }}"  selected>{{ $menu->Category }}</option>
                    <option value="Breakfast">Breakfast</option>
                    <option value="Lunch">Lunch</option>
                    <option value="Dinner">Dinner</option>
                  </select></td>
                <td><input type="submit" class="btn btn-danger" value="Update Menu" style="margin: 10px;"></td>

                </tr>
                </form>
                @endforeach
                </table>

        </div>

  </section>
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
            <form action = "/Accept_order" method = "post">
              @csrf <!-- {{ csrf_field() }} -->
            <div class="table-responsive">
              <table class="table text-start align-middle table-bordered table-hover mb-0">
                  <tr>
                      <td> <h5 class="mt-0 mb-2"><input type="text"  style="border-top-style: hidden; border-right-style: hidden; border-left-style: hidden; border-bottom-style: hidden;" id="Orders_Id" name="Orders_Id" value={{ $oder->Order_Id }} readonly></h5>
                          <div class="media align-items-center">
                              <img class="mr-3 " width="87" src="https://img.freepik.com/premium-psd/portrait-british-elderly-man_53876-24457.jpg" alt="DexignZone">
                              <div >


                                  <p class="mb-0 ">Menu ID:Menu_{{ $oder->Menu_Id }} </p>
                                  <p class="mb-0 ">Member ID:Member_ </p>
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

                                  <a class="btn-link" data-toggle="dropdown">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right">
                                      <button  class="dropdown-item text-black" type="submit" formaction="/Accept_orderp">Accept</button>
                                      <button class="dropdown-item text-black" type="submit" formaction="/Prepaedp">prepared</button>
                                      <button class="dropdown-item text-black" type="submit" formaction="/Reject_orderp">Reject</button>
                                  </div>
                              </div>
                          </div>
                      </td>
                  </tr>
              </table>
          </div>
      </form>
          @endforeach
        </div>
    </div>
  </section>

<!-- Contact section -->


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
