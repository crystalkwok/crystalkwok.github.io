<!DOCTYPE html> 
<html lang="en"> 
	<head> 
	
		<link rel="icon" href="css/img/CROWN_LOGO2.ico"/>
		<title>CROWN</title>

		<!-- Bootstrap -->
    	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
    	<link href="css/bootstrap-theme.css" rel="stylesheet" media="screen">    	
    	<link href="css/cover.css" rel="stylesheet" media="screen">



<!--Pop Up Login Page -->
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<!--End Pop Up Login Page-->




<!-- SMOOTH SCROLL -->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
<script>
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
</script>
<!-- End of SMOOTH SCROLL -->



	</head>

	<body>


		<div class="cover">
  			<div class="clearfix"></div>


  			<nav>
   				<ul>
					<li><a id="modal_trigger" href="#modal">LOGIN</a></li>	
   				    <li><a href="#signup">SIGNUP</a></li>
   					<li><a href="#features">FEATURES</a></li>
   					<li><a href="#about">ABOUT</a></li>


    			</ul>

  			</nav>

		</div>

		<!--Login PopUp Container-->
		<div id="modal" class="popupContainer" style="display:none;">
				<header class="popupHeader">
					<span class="header_title">Login</span>
					<span class="modal_close"><i class="fa fa-times"></i></span>
				</header>
				
				<section class="popupBody">
					<!-- Social Login -->
					<div class="social_login">
						<div class="">
							<a href="main/calendarPage.php" class="social_box fb">
								<span class="icon" ><i class="fa fa-facebook"></i></span>
								<span class="icon_title">Connect with Facebook</span>
								
							</a>

							<a href="main/calendarPage.php" class="social_box google">
								<span class="icon"><i class="fa fa-google-plus"></i></span>
								<span class="icon_title">Connect with Google</span>
							</a>
						</div>

						<div class="centeredText">
							<span>Or use your Email address</span>
						</div>

						<div class="action_btns">
							<div class="loginButton"><a href="#" id="login_form" class="btn">Login</a></div>
							<!-- not function atm
							<div class="one_half last"><a href="#signup" id="register_form" class="btn">Sign up</a></div>
							-->
						</div>
					</div>

					<!-- Username & Password Login form -->
					<div class="user_login">
						<form>
							<label>Email Address</label>
							<input type="text" />
							<br />

							<label>Password</label>
							<input type="password" />
							<br />

							<div class="checkbox">
								<input id="remember" type="checkbox" />
								<label for="remember">Remember me on this computer</label>
							</div>

							<div class="action_btns">
								<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
								<div class="one_half last"><a href="main/calendarPage.php" class="btn btn_red">Login</a></div>
							</div>
						</form>

						<a href="#" class="forgot_password">Forgot password?</a>
					</div>
				</section>
			</div>
			<!--End Login PopUp Container-->
		<div class="secondCover" id="about">
  			<div class="clearfix"></div>


		</div>

		<div class="thirdCover" id="features">
  			<div class="clearfix"></div>


		</div>

		<div class="fourthCover" id="signup">
  			<div class="body"></div>
			<div class="grad"></div>
			<div class="header">
				<div>Sign<span>Up</span></div>
			</div>
			<br>
			<div class="login">
				<input type="text" placeholder="first name" name="FirstName"><br>
				<input type="text" placeholder="last name" name="LastName"><br>
				<input type="text" placeholder="email" name="user"><br>
				<input type="password" placeholder="password" name="password"><br>
				<input type="button" onClick="location.href='main/calendarPage.php'" value="GET STARTED">
			</div>
		</div>


<script type="text/javascript">

	$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});


		// Calling Register Form
		/*$("#register_form").click(function(){
			$(".social_login").hide();
			/*$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});*/

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
</script>

  		<!--<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script> -->


	</body>

</html>
