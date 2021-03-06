<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href=" <?php echo base_url(); ?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin Dashboard </title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="<?php echo base_url(); ?>http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

   
    	<div class="sidebar-wrapper">
            <div class="logo">
                
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="<?php echo site_url('admin/admindash') ?>" target="main-panel">
                        <i class="ti-panel"></i>
                        <p> Admin Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/selectcustomer') ?>" target="main-panel">
                        <i class="ti-user"></i>
                        <p>Customer Profiles List</p>
                    </a>
                </li>
               
                <li>
                <a href="<?php echo site_url('admin/selectcategory') ?>" target="main-panel">
                        <i class="ti-view-list-alt"></i>
                        <p>Add Items</p>
                    </a>
                  </li>        
                
                 <li>
                <a href="<?php echo site_url('admin/addCategory') ?>" target="main-panel">
                        <i class="ti-view-list-alt"></i>
                        <p>Add Category</p>
                    </a>
                  </li>
                  <li>
                <a href="<?php echo site_url('admin/selectbooking') ?>" target="main-panel">
                        <i class="ti-view-list-alt"></i>
                        <p>Booking</p>
                    </a>
                  </li>
                    <li>
                <a href="<?php echo site_url('admin/customerorder') ?>" target="main-panel">
                        <i class="ti-view-list-alt"></i>
                        <p>Customer Order</p>
                    </a>
                  </li>

				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Admin Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                     
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-settings"></i>
                                    <p class="Setting"></p>
									<p>Setting</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url("admin/logout");?>">Logout</a></li>                       
                              </ul>
                        </li>
						
                    </ul>

                </div>
            </div>
        </nav>



        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
               
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, Made with <i class="fa fa-heart heart"></i> by Prabin Shakya
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url(); ?>assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?php echo base_url(); ?>assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Welcome Back <b>Prabin </b>"

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>

</html>
