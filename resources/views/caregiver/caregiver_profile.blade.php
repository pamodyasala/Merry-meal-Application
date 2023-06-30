<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
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
<body>
    @foreach ($users as $user)
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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
<div class="container bootstrap snippets bootdey">
<div class="row">
  <div class="profile-nav col-md-3">
      <div class="panel">
        <div class="user-heading round" style="background-image:url('https://wallpaperaccess.com/full/260170.png');">
              <a href="#">
                  <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
              </a>
              <h1 style="color: black;">{{ $user->Name }}</h1>
              <p style="color: black;">{{ $user->Email }}</p>
          </div>

          <ul class="nav nav-pills nav-stacked">
              <li class="active"><a href="#"> <i class="fa fa-user"></i> Profile</a></li>
              <li><a href="#"> <i class="fa fa-calendar"></i> Recent Activity <span class="label label-warning pull-right r-activity">9</span></a></li>
              <li><a href="/caregiver_profile_Update"> <i class="fa fa-edit"></i> Edit profile</a></li>
          </ul>
      </div>
  </div>
  <div class="profile-info col-md-9">

      <div class="panel">
          <div class="bio-graph-heading" style="background-image:url('https://www.momentumlife.co.nz/Content/blogImages/341_20190108T095054.jpg');">

          </div>
          <div class="panel-body bio-graph-info">
              <h1>Account Details</h1>
              <div class="row">
                  <div class="bio-row">
                    <p><span>Name </span>: {{ $user->Name }}</p>
                  </div>
                  <div class="bio-row">
                    <p><span>Address </span>: {{ $user->Address }}</p>
                  </div>
                  <div class="bio-row">
                    <p><span>Mobile </span>: {{ $user->Contact }}</p>
                  </div>
                  <div class="bio-row">
                    <p><span>Email </span>: {{ $user->Email }}</p>
                  </div>
                  <div class="bio-row">
                    <p><span>Member Id </span>: Member_{{ $user->Member_Id }}</p>
                  </div>
                  <div class="bio-row">
                    <p><span> Account </span>: {{ $user->Account_status }}</p>
                  </div>

              </div>
          </div>
      </div>



  </div>
</div>
</div>

<br>
<br>
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
        <p>Copyright © 2022 Meals on Wheels</p>
      </div>

      <div class="col-md-4 col-sm-4 text-right">
        <a href="#home" class="fa fa-angle-up smoothScroll gototop"></a>
      </div>

    </div>
  </div>
</section>
@endforeach
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

<style type="text/css">
body {
    color: #797979;
    background: #f1f2f7;
    font-family: 'Open Sans', sans-serif;
    padding: 0px !important;
    margin: 0px !important;
    font-size: 13px;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
}

.profile-nav, .profile-info{
    margin-top:30px;
}

.profile-nav .user-heading {
    background: #FF4B2B;
    color: #fff;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    padding: 30px;
    text-align: center;
}

.profile-nav .user-heading.round a  {
    border-radius: 50%;
    -webkit-border-radius: 50%;
    border: 10px solid rgba(255,255,255,0.3);
    display: inline-block;
}

.profile-nav .user-heading a img {
    width: 112px;
    height: 112px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
}

.profile-nav .user-heading h1 {
    font-size: 22px;
    font-weight: 300;
    margin-bottom: 5px;
}

.profile-nav .user-heading p {
    font-size: 12px;
}

.profile-nav ul {
    margin-top: 1px;
}

.profile-nav ul > li {
    border-bottom: 1px solid #ebeae6;
    margin-top: 0;
    line-height: 30px;
}

.profile-nav ul > li:last-child {
    border-bottom: none;
}

.profile-nav ul > li > a {
    border-radius: 0;
    -webkit-border-radius: 0;
    color: #89817f;
    border-left: 5px solid #fff;
}

.profile-nav ul > li > a:hover, .profile-nav ul > li > a:focus, .profile-nav ul li.active  a {
    background: #f8f7f5 !important;
    border-left: 5px solid #94230f;
    color: #89817f !important;
}

.profile-nav ul > li:last-child > a:last-child {
    border-radius: 0 0 4px 4px;
    -webkit-border-radius: 0 0 4px 4px;
}

.profile-nav ul > li > a > i{
    font-size: 16px;
    padding-right: 10px;
    color: #bcb3aa;
}

.r-activity {
    margin: 6px 0 0;
    font-size: 12px;
}


.p-text-area, .p-text-area:focus {
    border: none;
    font-weight: 300;
    box-shadow: none;
    color: #c3c3c3;
    font-size: 16px;
}

.profile-info .panel-footer {
    background-color:#f8f7f5 ;
    border-top: 1px solid #e7ebee;
}

.profile-info .panel-footer ul li a {
    color: #7a7a7a;
}

.bio-graph-heading {
    background: #FF4B2B;
    color: #fff;
    text-align: center;
    font-style: italic;
    padding: 40px 110px;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    font-size: 16px;
    font-weight: 300;
}

.bio-graph-info {
    color: #89817e;
}

.bio-graph-info h1 {
    font-size: 22px;
    font-weight: 300;
    margin: 0 0 20px;
}

.bio-row {
    width: 50%;
    float: left;
    margin-bottom: 10px;
    padding:0 15px;
}

.bio-row p span {
    width: 100px;
    display: inline-block;
}

.bio-chart, .bio-desk {
    float: left;
}

.bio-chart {
    width: 40%;
}

.bio-desk {
    width: 60%;
}

.bio-desk h4 {
    font-size: 15px;
    font-weight:400;
}

.bio-desk h4.terques {
    color: #4CC5CD;
}

.bio-desk h4.red {
    color: #e26b7f;
}

.bio-desk h4.green {
    color: #97be4b;
}

.bio-desk h4.purple {
    color: #caa3da;
}

.file-pos {
    margin: 6px 0 10px 0;
}

.profile-activity h5 {
    font-weight: 300;
    margin-top: 0;
    color: #c3c3c3;
}

.summary-head {
    background: #ee7272;
    color: #fff;
    text-align: center;
    border-bottom: 1px solid #ee7272;
}

.summary-head h4 {
    font-weight: 300;
    text-transform: uppercase;
    margin-bottom: 5px;
}

.summary-head p {
    color: rgba(255,255,255,0.6);
}

ul.summary-list {
    display: inline-block;
    padding-left:0 ;
    width: 100%;
    margin-bottom: 0;
}

ul.summary-list > li {
    display: inline-block;
    width: 19.5%;
    text-align: center;
}

ul.summary-list > li > a > i {
    display:block;
    font-size: 18px;
    padding-bottom: 5px;
}

ul.summary-list > li > a {
    padding: 10px 0;
    display: inline-block;
    color: #818181;
}

ul.summary-list > li  {
    border-right: 1px solid #eaeaea;
}

ul.summary-list > li:last-child  {
    border-right: none;
}

.activity {
    width: 100%;
    float: left;
    margin-bottom: 10px;
}

.activity.alt {
    width: 100%;
    float: right;
    margin-bottom: 10px;
}

.activity span {
    float: left;
}

.activity.alt span {
    float: right;
}
.activity span, .activity.alt span {
    width: 45px;
    height: 45px;
    line-height: 45px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    background: #eee;
    text-align: center;
    color: #fff;
    font-size: 16px;
}

.activity.terques span {
    background: #8dd7d6;
}

.activity.terques h4 {
    color: #8dd7d6;
}
.activity.purple span {
    background: #b984dc;
}

.activity.purple h4 {
    color: #b984dc;
}
.activity.blue span {
    background: #90b4e6;
}

.activity.blue h4 {
    color: #90b4e6;
}
.activity.green span {
    background: #aec785;
}

.activity.green h4 {
    color: #aec785;
}

.activity h4 {
    margin-top:0 ;
    font-size: 16px;
}

.activity p {
    margin-bottom: 0;
    font-size: 13px;
}

.activity .activity-desk i, .activity.alt .activity-desk i {
    float: left;
    font-size: 18px;
    margin-right: 10px;
    color: #bebebe;
}

.activity .activity-desk {
    margin-left: 70px;
    position: relative;
}

.activity.alt .activity-desk {
    margin-right: 70px;
    position: relative;
}

.activity.alt .activity-desk .panel {
    float: right;
    position: relative;
}

.activity-desk .panel {
    background: #F4F4F4 ;
    display: inline-block;
}


.activity .activity-desk .arrow {
    border-right: 8px solid #F4F4F4 !important;
}
.activity .activity-desk .arrow {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    left: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .arrow-alt {
    border-left: 8px solid #F4F4F4 !important;
}

.activity-desk .arrow-alt {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    right: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .album {
    display: inline-block;
    margin-top: 10px;
}

.activity-desk .album a{
    margin-right: 10px;
}

.activity-desk .album a:last-child{
    margin-right: 0px;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>
