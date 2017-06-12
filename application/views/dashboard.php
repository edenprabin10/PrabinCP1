<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/Stylesheet.css" />
    </head>
    <body>
        <div id="wrapper" >

		
            <div id="banner">             
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Coffee</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">About</a></li>
				  <li><a href="<?php echo site_url('Home/register') ?>">Register</a></li>
                  <li><a href="<?php echo site_url('Home/login') ?>">Sign In</a></li>
                </ul>
            </nav>
            
            <div id="content_area">
               
            </div>
            
            <div id="sidebar">
                
            </div>
            
            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>
    </body>
</html>
