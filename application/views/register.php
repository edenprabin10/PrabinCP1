<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
    <title>Cafe Club</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

    <!-- css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">

    <!-- google font -->
    <!-- <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Kreon:300,400,700'> -->
    
    <!-- js -->
    <script src="<?php echo base_url();?>assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="120" >
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div id="menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    	<div id="navbar" class="navbar-collapse collapse">
            

            <ul class="nav navbar-nav navbar-left">
            	<li><a href="<?php echo site_url('Home/dashboard1')?> ">Home</a></li>      
                <li><a href="#reservation">About Us</a></li>
                <li><a href="#reservation">Services</a></li>
                       
                <li><a href="#food-menu">Food Menu</a></li><li></li>>



               <a href="<?php echo site_url('Home/register')?> " style="color:white;font-size:1.1em;text-decoration:none;"> Register </a> 
                    
                
                <!--fix for scroll spy active menu element-->
                <li style="display:none;"><a href="#header"></a></li>

            </ul>
        </div><!--/.navbar-collapse -->
        </div><!-- container -->
    </div><!-- menu -->

        <div class="container">
            <div class="navbar-header visible-xs">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
              <h2>CAFE CLUB</h2></a>
            </div>


 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/register.css"> </link> 
		</head>

	
		<!-- <div class="container"> -->
			
			<img src="<?php echo base_url();?>assets/img/signup.png" width="49">
			<form action="<?php echo site_url('Customer/getRegister') ?>" method="post">
				<div class="form-input">
			    <input type="text" name="firstname" placeholder="Enter Firstname">				
				</div>				
				<div class="form-input">
				<input type="text" name="lastname" placeholder="Enter Lastname">				
				</div>
				
				<div class="form-input">
				<input type="text" name="username" placeholder="Enter Username">				
				</div>
				
				<div class="form-input">
				<input type="password" name="password" placeholder="Enter Password">				
				</div>
				
				<div class="form-input">
				<input type="password" name="repassword" placeholder="Enter Repassword">				
				</div>
				
				<div class="form-input">
				<input type="text" name="email" placeholder="Enter Email">				
				</div>
				
				<div class="form-input">
				<input type="text" name="address" placeholder="Enter Address">				
				</div>
				
				<div class="form-input">
				<input type="text" name="contactno" placeholder="Enter Contact No.">				
				</div>
				
				<button type="submit" name="submit" value="Sign Up" class="btn-login"> Sign Up </button>
				<a href="#"> Forget YOur Password</a> </br>
				<a href="<?php echo site_url("home/login")?>"> Already Member</a> <br>
				
			</form>
		</div>
	</body>
</html>	