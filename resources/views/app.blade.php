<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>
	le mirage - William Langlois
	</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('/font-awesome-4.1.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

 	

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
<!-- PRELOADER STARTS HERE -->
  <div class="shym-preloader"></div>
  <!-- /PRELOADER ENDS HERE-->
  
  
  
<!-- HEADER STARTS HERE --> 
 <header class="navbar navbar-inverse navbar-fixed-top heading" role="banner">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle togglebutton" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>


</button>


<a class='shym-logo'> <img src="{{ asset('/img/logo.png') }}" alt='Shym'/></a>
<ul class='shym-social-icons'>
  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
<li><a href="#"><i class="fa fa-youtube"></i></a></li>
 </ul>
</div>

 <div class="collapse navbar-collapse menubar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" class='dropdown-toggle' data-toggle='dropdown'><i class="fa fa-fw fa-home"></i>Home</a>
					<ul class="dropdown-menu">
					<li>
					<a href="#">Bootstrap Templates</a></li>
                    <li><a href="#">Single page website </a></li>
                    <li><a href="#">Landing Page</a>
					<li><a href="#">Admin Templates</a></li>
                    <li><a href="#">Login Page </a></li>                            
					</ul>
					</li>
                    <li class='dropdown'><a href="#" class='dropdown-toggle' data-toggle='dropdown'><i class="fa fa-fw fa-support"></i>Support</a>
					<ul class='dropdown-menu'>
					<li><a href="#">Megamenu</a></li>
					<li><a href="#">Menu Bar</a>
                    <li><a href="#">Accordion</a></li>
                    <li><a href="#">Tabs</a>
					
					</li>
					</ul>
                    <li><a href="#"><i class="fa fa-fw fa-th"></i>Widgets</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-bar-chart-o"></i>Recent Works</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-users"></i>Users<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Blog Single</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">404</a></li>
                            <li><a href="#">Registration</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-fw fa-book"></i>Blog</a></li> 
                    
                </ul>
            </div>
			
</div>
</header><!---->

  <section class='gallery'>
  
  
   <div class="home-caption">
                <div class="home-title">A Platform to download Free Photos</div>
                <div class="home-subtitle">Your-Plugin is a platform to download free Photos,Pictures,and Beautiful Pictures </div>
                <a href="#" class="btn btn-lg downloadbtn">Start Your Download</a>
            </div>
  
  
  
  </section>
  
  <!-- /GALLERY ENDS HERE -->
  <!-- OPTION STARTS HERE-->
  <section class='shym-option'>
  <div class='container'>

	@yield('content')
	   </div>
  </section>
    <!-- /OPTION ENDS HERE -->
	
<!--APPLICATION ENDS HERE -->
<section class='shym-application'>
<div class='container'>

<div class='row'>
<div class='col-xs-12 shym-application-data'>
<h2 class='shym-text-uppercase'>Perfect Application Support</h2>
</div>
</div>
<div class='row'>
<div class='col-xs-12 shym-application-data'>
<div class="apps">
                      <a href="#" data-scroll-reveal="wait 0.25s, then enter left and move 40px over 1s"><i class="fa fa-android"></i></a>
						<a href="#" data-scroll-reveal="wait 0.25s, then enter right and move 40px over 1s"><i class="fa fa-apple"></i></a>
						<a href="#" data-scroll-reveal="wait 0.25s, then enter bottom and move 40px over 1s"><i class="fa fa-windows"></i></a>
						<a href="#" data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s"><i class="fa fa-css3"></i></a>
                    </div>
</div>

</div>



</div>

</section>
	
<!--/APPLICATION ENDS HERE-->	
	
<!--FEATURE STARTS HERE-->
<section class='shym-feature'>
<div class='container'>
<div class='row'>
<div class='col-sm-4 shym-feature-data'>

<div class='col-xs-3 fe-icon'>
<span data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s" ><i class="fa fa-support"></i></span>
</div>
<div class='col-xs-9'>
<h3>Support</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has. </h3>
</div>
</div>

<div class='col-sm-4 shym-feature-data'>
<div class='col-xs-3 fe-icon'>
<span data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s" ><i class="fa fa-th"></i></span>
</div>
<div class='col-xs-9'>
<h3>Widgets</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has. </h3>
</div>
</div>


<div class='col-sm-4'>
<div class='col-xs-3 fe-icon'>
<span data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s" ><i class="fa fa-laptop"></i></span>
</div>
<div class='col-xs-9'>
<h3>Responsive Design</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has. </h3>
</div>

</div>


</div>

<!------------------------------------------------------------------------------------------ -->

<div class='row'>
<div class='col-sm-4 shym-feature-data'>

<div class='col-xs-3 fe-icon'>
<span data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s" ><i class="fa fa-bar-chart-o"></i></span>
</div>
<div class='col-xs-9'>
<h3>User Rating</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has. </h3>
</div>
</div>

<div class='col-sm-4 shym-feature-data'>
<div class='col-xs-3 fe-icon'>
<span data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s" ><i class="fa fa-users"></i></span>
</div>
<div class='col-xs-9 '>
<h3>Top Users</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has. </h3>
</div>
</div>


<div class='col-sm-4 shym-feature-data'>
<div class='col-xs-3 fe-icon'>
<span data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s" ><i class="fa fa-table"></i></span>
</div>
<div class='col-xs-9'>
<h3>Data Tables</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has. </h3>
</div>

</div>


</div>

<!------------------------------------------------------------------------------------------ -->


<div class='row'>
<div class='col-sm-4  shym-feature-data'>

<div class='col-xs-3 fe-icon'>
<span data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s" ><i class="fa fa-book"></i></span>
</div>
<div class='col-xs-9 '>
<h3>Top Readers</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has. </h3>
</div>
</div>

<div class='col-sm-4 shym-feature-data '>
<div class='col-xs-3 fe-icon'>
<span data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s" ><i class="fa fa-edit"></i></span>
</div>
<div class='col-xs-9'>
<h3>Top Authors</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has. </h3>
</div>
</div>


<div class='col-sm-4 shym-feature-data '>
<div class='col-xs-3 fe-icon'>
<span data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s" ><i class="fa fa-clock-o"></i></span>
</div>
<div class='col-xs-9'>
<h3>24h Support</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has. </h3>
</div>

</div>


</div>

<!------------------------------------------------------------------------------------------ -->
</div>
</section>
<!--/FEATURE ENDS HERE -->

<!--SHYM-USER STARTS HERE -->
	
<section class='shym-user'>
<div class='container'>
<div class='shym-user-title' >
        <h3 class='shym-text-center shym-text-uppercase'>Best Pictures</h3>
        <hr>
        <p class='shym-text-center'>It is a long established fact that a reader will be distracted by the readable content.</p>
      </div>
      
      <!--======= SLIDER PART =========-->
      <div id="owl-team"> 
        
        <!--======= SLIDER PART =========-->
        <div class="team">
          <div class="img"> <img class="img-responsive" src="{{ asset('/img/team-1.jpg') }}" alt="" >
            <div class="over">
			<i class="fa fa-eye"></i>
              <div class="des"> <a href="#"></a>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.
                  
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p>
              </div>
            </div>
          </div>
          <div class="info">
            <h4>Lorum Ipsum</h4>
            <p>Price:25$</p>
            <hr>
            <div class="social_icons">
              <ul>
                <li class="facebook"> <a href="#."><i class="fa fa-facebook"></i> </a> </li>
                <li class="twitter"> <a href="#."><i class="fa fa-twitter"></i> </a> </li>
                <li class="dribbble"> <a href="#."><i class="fa fa-dribbble"></i> </a> </li>
                <li class="googleplus"> <a href="#."><i class="fa fa-google"></i> </a> </li>
                <li class="linkedin"> <a href="#."><i class="fa fa-linkedin"></i> </a> </li>
                <li class="pinterest"> <a href="#."><i class="fa fa-pinterest"></i> </a> </li>
              </ul>
            </div>
          </div>
        </div>
        
        <!--======= SLIDER PART =========-->
        <div class="team">
          <div class="img"> <img class="img-responsive" src="{{ asset('/img/team-2.jpg') }}" alt="" >
            <div class="over">
			<i class="fa fa-eye"></i>
              <div class="des"> <a href="#"></a>
              
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.
                  
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p>
              </div>
            </div>
          </div>
          <div class="info">
           <h4>Lorum Ipsum</h4>
            <p>Price:25$</p>
            <hr>
            <div class="social_icons">
              <ul>
                <li class="facebook"> <a href="#."><i class="fa fa-facebook"></i> </a> </li>
                <li class="twitter"> <a href="#."><i class="fa fa-twitter"></i> </a> </li>
                <li class="dribbble"> <a href="#."><i class="fa fa-dribbble"></i> </a> </li>
                <li class="googleplus"> <a href="#."><i class="fa fa-google"></i> </a> </li>
                <li class="linkedin"> <a href="#."><i class="fa fa-linkedin"></i> </a> </li>
                <li class="pinterest"> <a href="#."><i class="fa fa-pinterest"></i> </a> </li>
              </ul>
            </div>
          </div>
        </div>
        
        <!--======= SLIDER PART =========-->
        <div class="team">
          <div class="img"> <img class="img-responsive" src="{{ asset('/img/team-3.jpg') }}" alt="" >
            <div class="over">
              <i class="fa fa-eye"></i>
              <div class="des"> <a href="#"></a>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.
                  
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p>
              </div>
            </div>
          </div>
          <div class="info">
            <h4>Lorum Ipsum</h4>
            <p>Price:25$</p>
            <hr>
            <div class="social_icons">
              <ul>
                <li class="facebook"> <a href="#."><i class="fa fa-facebook"></i> </a> </li>
                <li class="twitter"> <a href="#."><i class="fa fa-twitter"></i> </a> </li>
                <li class="dribbble"> <a href="#."><i class="fa fa-dribbble"></i> </a> </li>
                <li class="googleplus"> <a href="#."><i class="fa fa-google"></i> </a> </li>
                <li class="linkedin"> <a href="#."><i class="fa fa-linkedin"></i> </a> </li>
                <li class="pinterest"> <a href="#."><i class="fa fa-pinterest"></i> </a> </li>
              </ul>
            </div>
          </div>
        </div>
        
        <!--======= SLIDER PART=========-->
        <div class="team">
          <div class="img"> <img class="img-responsive" src="{{ asset('/img/team-4.jpg') }}" alt="" >
            <div class="over">
              <i class="fa fa-eye"></i>
              <div class="des"> <a href="#"></a>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.
                  
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p>
              </div>
            </div>
          </div>
          <div class="info">
            <h4>Lorum Ipsum</h4>
            <p>Price:25$</p>
            <hr>
            <div class="social_icons">
              <ul>
                <li class="facebook"> <a href="#."><i class="fa fa-facebook"></i> </a> </li>
                <li class="twitter"> <a href="#."><i class="fa fa-twitter"></i> </a> </li>
                <li class="dribbble"> <a href="#."><i class="fa fa-dribbble"></i> </a> </li>
                <li class="googleplus"> <a href="#."><i class="fa fa-google"></i> </a> </li>
                <li class="linkedin"> <a href="#."><i class="fa fa-linkedin"></i> </a> </li>
                <li class="pinterest"> <a href="#."><i class="fa fa-pinterest"></i> </a> </li>
              </ul>
            </div>
          </div>
        </div>
		
		
        
        <!--======= SLIDER PART =========-->
        <div class="team">
          <div class="img"> <img class="img-responsive" src="{{ asset('/img/team-1.jpg') }}" alt="" >
            <div class="over">
              <i class="fa fa-eye"></i>
              <div class="des"> <a href="#"></a>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.
                  
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p>
              </div>
            </div>
          </div>
          <div class="info">
            <h4>Lorum Ipsum</h4>
            <p>Price:25$</p>
            <hr>
            <div class="social_icons">
              <ul>
                <li class="facebook"> <a href="#."><i class="fa fa-facebook"></i> </a> </li>
                <li class="twitter"> <a href="#."><i class="fa fa-twitter"></i> </a> </li>
                <li class="dribbble"> <a href="#."><i class="fa fa-dribbble"></i> </a> </li>
                <li class="googleplus"> <a href="#."><i class="fa fa-google"></i> </a> </li>
                <li class="linkedin"> <a href="#."><i class="fa fa-linkedin"></i> </a> </li>
                <li class="pinterest"> <a href="#."><i class="fa fa-pinterest"></i> </a> </li>
              </ul>
            </div>
          </div>
        </div>
		
		<!--======= SLIDER PART =========-->
        <div class="team">
          <div class="img"> <img class="img-responsive" src="{{ asset('/img/team-3.jpg') }}" alt="" >
            <div class="over">
<i class="fa fa-eye"></i>
              <div class="des"> <a href="#"></a>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.
                  
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p>
              </div>
            </div>
          </div>
          <div class="info">
            <h4>Lorum Ipsum</h4>
            <p>Price:25$</p>
            <hr>
            <div class="social_icons">
              <ul>
                <li class="facebook"> <a href="#."><i class="fa fa-facebook"></i> </a> </li>
                <li class="twitter"> <a href="#."><i class="fa fa-twitter"></i> </a> </li>
                <li class="dribbble"> <a href="#."><i class="fa fa-dribbble"></i> </a> </li>
                <li class="googleplus"> <a href="#."><i class="fa fa-google"></i> </a> </li>
                <li class="linkedin"> <a href="#."><i class="fa fa-linkedin"></i> </a> </li>
                <li class="pinterest"> <a href="#."><i class="fa fa-pinterest"></i> </a> </li>
              </ul>
            </div>
          </div>
        </div>
		
		
		
		
		
		
		
		
      </div>
</div>
</section>
	<!--/SHYM -USER ENDS HERE -->
<!--PICTURE INFORMATION STARTS HERE-->
<section class='picture-information'>
<div class='container'>
<div class='row'>
<div class='col-md-12 shym-text-center'>
<h3 class='shym-text-uppercase'>picture Information</h3> 
</div>


<div class='gap'>

</div>
<div class='col-md-12 col-sm-12 col-xs-12'>
<div class='col-sm-3 '>
<div class='picture-info' data-scroll-reveal="wait 0.25s, then enter right and move 40px over 1s">
<img src="{{ asset('/img/item1.jpg') }}"/>
<p>There are many variations of passages of Lorem Ipsum available, but the majority.There are many variations of passages of Lorem Ipsum available</p>
<div class="shym-overlay">
                            <div class="shym-picture-detail-inner">
                                <h3><a href="#">Business theme</a> </h3>
                                <p>There are many variations of passages of Lorem Ipsum available,There are many variations of passages of Lorem Ipsum available but the majority</p>
                                <a href="#" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
						</div>
</div>
<div class='col-sm-3 '>
<div class='picture-info' data-scroll-reveal="wait 0.25s, then enter left and move 40px over 1s">
<img src="{{ asset('/img/item2.jpg') }}"/>
<p>There are many variations of passages of Lorem Ipsum available, but the majority.There are many variations of passages of Lorem Ipsum available</p>
<div class="shym-overlay">
                            <div class="shym-picture-detail-inner">
                                <h3><a href="#">Business theme</a> </h3>
                                <p>There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available but the majority</p>
                                <a href="#" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
						</div>
</div>
<div class='col-sm-3'>
<div class='picture-info' data-scroll-reveal="wait 0.25s, then enter bottom and move 40px over 1s">
<img src="{{ asset('/img/item3.jpg') }}"/>
<p>There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available but the majority</p>
<div class="shym-overlay">
                            <div class="shym-picture-detail-inner">
                                <h3><a href="#">Business theme</a> </h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority.There are many variations of passages of Lorem Ipsum available</p>
                                <a href="#" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
						</div>
</div>
<div class='col-sm-3'>
<div class='picture-info' data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s">
<img src="{{ asset('/img/item4.jpg') }}"/>
<p>There are many variations of passages of Lorem Ipsum available. There are many variations of passages of Lorem Ipsum available, but the majority</p>
<div class="shym-overlay">
                            <div class="shym-picture-detail-inner">
                                <h3><a href="#">Business theme</a> </h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a href="#" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
							</div>
</div>
</div>

</div>

</div>
</div>

</section>
<!--/PICTURE INFORMATION ENDS HERE -->
	<!--QUOTE STARTS HERE -->
<section class='quote'>
<div class='container'>
<div class='row'>
<div class='col-md-12 col-sm-12 col-xs-12'>
<div class='col-sm-10 col-xs-10 pull-left'>
<h3 class='shym-text-left'>Have a question or need a custom quote?</h3>
<p class='shym-text-left' >{{ Inspiring::quote() }}</p></div><div class=' col-sm-2 '><button class='btn btn-warning pull-right ' style='margin-top:50px;'>Quote</button></div>
</div>
</div>
</div>
</section>
<!--/QUOTE ENDS HERE-->

<!--SHYM CONTACT START HERE -->
<footer class="shym-contact">
    
      <div class="container"> 
        
        <!--======= TITTLE PART =========-->
        <div class="tittle">
          <h3 class='shym-text-center'>Get ın touch</h3>
          <hr>
          <p class='shym-text-center'>It is a long established fact that a reader will be distracted by the readable content.</p>
        </div>
        
        <!--======= SOCIAL ICONS PART =========-->
        <div class="social_icons">
          <ul>
            <li class="facebook"> <a href="#." data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s"><i class="fa fa-facebook"></i> </a> </li>
            <li class="twitter"> <a href="#." data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s"><i class="fa fa-twitter"></i> </a> </li>
            <li class="dribbble"> <a href="#." data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s"><i class="fa fa-dribbble"></i> </a> </li>
            <li class="googleplus"> <a href="#." data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s"><i class="fa fa-google"></i> </a> </li>
            <li class="linkedin "> <a href="#." data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s"><i class="fa fa-linkedin"></i> </a> </li>
            <li class="pinterest"> <a href="#." data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s"><i class="fa fa-pinterest"></i> </a> </li>
          </ul>
        </div>
        
        <!--======= CONTACT INFO PART =========-->
        <div class="con-info">
          <div class="row">
		  <div class='container'>
            <div class="col-md-6 col-sm-6">
              <div class="row">
                <div class="col-sm-6"> <i class="ion-flag"></i>
                  <h4>ABOUT US</h4>
                  <p> Temporibus autem quisbusdam et
                    aut officiis debitis aut rerum nece
                    sitatibus sape eveniet ut et
                    voluptate rerum. </p>
                </div>
                
                <!--======= OFFICE ADRESS PART =========-->
                <div class="col-sm-6"> <i class="ion-android-location"></i>
                  <h4>OFFICE ADRESS</h4>
                  <p> Shym Center Adress</p>
                  <p>+1 (000)-999-0000</p>
                  <p> Kottayam Kerala. India</p>
                  <p> support@domain.com </p>
                </div>
              </div>
            </div>
            
            <!--======= GET IN TOUCH PART =========-->
            <div class="col-md-6 col-sm-6"> <i class="ion-flag"></i>
              <h4>GET IN TOUCH</h4>
              <div id="contact_form">
                <form id="contact-form" class="contact-form " accept-charset="utf-8" method="post" >
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label><span>Name</span>
                          <input name="name" type="text" placeholder="Name"/>
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>
                          <input name="email" type="email" placeholder="Email"/>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label> <span>Message</span>
                        <textarea name="message" placeholder="Your Message"></textarea>
                      </label>
                      <input name="submit" type="submit" value="SUBMIT YOUR MESSAGE" />
                    </div>
                  </div>
                </form>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
		</div>
      </div>
    </div>
    <div class="copyrights">
      <div class="container">
        <p class="pull-left">© 2014  Scriptcafe.in</p>
       <p class="pull-right">App Landing Page Designed and Developed by <a href='http://www.scriptcafe.in'>Scriptcafe.in </a></p>
      </div>
    
  </footer>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="{{ asset('/js/owl.carousel.min.js') }}"></script> 
	<script src="{{ asset('/js/scrollReveal.js') }}"></script>
	<script src="{{ asset('/js/function.js') }}"></script>
</body>
</html>
