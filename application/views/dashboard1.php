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
            </div><!-- navbar-header -->

        <div id="navbar" class="navbar-collapse collapse">
            

            <ul class="nav navbar-nav navbar-left">
                <li><a href="#reservation">Reservation</a></li>
                <li><a href="#chefs">Our Chefs</a></li>      

                <li><a href="#our-story">Facts</a></li>                
             
                <li><a href="#food-menu">Food Menu</a></li><li></li>>



               <a href="<?php echo site_url('Home/register')?> " style="color:white;font-size:1.1em;text-decoration:none;"> Register </a> 
                    
                
                <!--fix for scroll spy active menu element-->
                <li style="display:none;"><a href="#header"></a></li>

            </ul>
        </div><!--/.navbar-collapse -->
        </div><!-- container -->
    </div><!-- menu -->

    <div id="header">
        <div class="bg-overlay"></div>
        <div class="center text-center">
            <div class="banner">
                <h1 class="">Cafe Club</h1>
               
            </div>
        </div>
        <div class="bottom text-center">
            <a id="scrollDownArrow" href="#"><i class="fa fa-chevron-down"></i></a>
        </div>
    </div>
    <!-- /#header -->
    <div id="story" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Our Story</h2>
            <p class="lead main text-center">We're cooking delecious foods since 1997</p>
            <div class="row text-center story">
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper"> <i class="fa fa-anchor"></i> </div>
                        <h3>EST. 1997</h3>
                        <p>Vivamus sagittis lacuson augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum ultricies vehicula.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper"> <i class="fa  fa-cutlery"></i> </div>
                        <h3>Cooking Traditions</h3>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient monte nascetur ultricies vehicula. </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper"> <i class="fa fa-coffee"></i> </div>
                        <h3>Food Quality</h3>
                        <p>Curabitur blandit matti tempus porttitor. Donec id elit non mi porta ut gravida at eget metus. Consectetur adipiscing elit ultricies vehicula.</p>
                    </div>
                </div>
            </div>
            <!-- /.services --> 
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!-- #story -->


    <div id="facts" class="parallax parallax2 facts">
        <div class="container inner"></div>
        <!-- /.container --> 
    </div><!-- #facts -->




    <div id="food-menu" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">OUR Menu</h2>
            <p class="lead main text-center">There is no sincerer love than the love of food!</p>

                        <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class="menu-images "><img src="<?php echo base_url();?>assets/img/menu/hot-drinks.png" alt="Hot Drinks"></div>
                    <div class="menu-titles"><h1 class="">Hot drinks</h1></div>
                    <div class="menu-items ">
                        <ul>
                            <li>Espresso</li>
                            <li>Americano</li>
                            <li>Capuccino</li>
                            <li>Latte</li>
                            <li>Mocha</li>
                            <li>Hot Chocolate</li>
                            <li>Yummie Cafee</li>
                            <li>Fruit Tea</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="menu-images "><img src="<?php echo base_url();?>assets/img/menu/ice-drinks.png" alt="Ice Drinks"></div>
                    <div class="menu-titles"><h1 class="">Ice drinks</h1></div>
                    <div class="menu-items ">
                        <ul>
                            <li>Ice Coffee</li>
                            <li>Americano</li>
                            <li>Latte</li>
                            <li>Vanilla Frappe</li>
                            <li>Espresso Frappe</li>
                            <li>Choco Frappe</li>
                            <li>Iced Chai</li>
                            <li>Fruit Fresh</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="menu-images "><img src="<?php echo base_url();?>assets/img/menu/smoothies.png" alt="Smoothies"></div>
                    <div class="menu-titles"><h1 class="">Smoothies</h1></div>
                    <div class="menu-items ">
                        <ul>
                            <li>Mango</li>
                            <li>Strawberry</li>
                            <li>Blue Berry</li>
                            <li>Peach</li>
                            <li>Pineapple</li>
                            <li>Banana</li>
                            <li>Milkshake</li>
                            <li>Greens</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="menu-images "><img src="<?php echo base_url();?>assets/img/menu/deserts.png" alt="Deserts"></div>
                    <div class="menu-titles"><h1 class="">Deserts</h1></div>
                    <div class="menu-items ">
                        <ul>
                            <li>Cheesecake</li>
                            <li>Choco Pie</li>
                            <li>Pancakes</li>
                            <li>Muffins</li>
                            <li>Fruit Slices</li>
                            <li>Fruit Salad</li>
                            <li>Cream Cake</li>
                            <li>Ice Cream</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class="menu-images "><img src="<?php echo base_url();?>assets/img/menu/cocktails.png" alt="Hot Drinks"></div>
                    <div class="menu-titles"><h1 class="">Cocktails</h1></div>
                    <div class="menu-items ">
                        <ul>
                            <li>Black Velvet</li>
                            <li>Gin Sour</li>
                            <li>Mojito</li>
                            <li>Long Island</li>
                            <li>Orgasm</li>
                            <li>Bloody Mary</li>
                            <li>Earthquake</li>
                            <li>Whisky Mac</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="menu-images "><img src="<?php echo base_url();?>assets/img/menu/beer.png" alt="Ice Drinks"></div>
                    <div class="menu-titles"><h1 class="">Beer</h1></div>
                    <div class="menu-items ">
                        <ul>
                            <li>Lager</li>
                            <li>Blonde Beer</li>
                            <li>Black Beer</li>
                            <li>Blonde Ale</li>
                            <li>Pilsner</li>
                            <li>Lemon Beer</li>
                            <li>Unfiltered Beer</li>
                            <li>Non-Alcoholic</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="menu-images "><img src="<?php echo base_url();?>assets/img/menu/wine.png" alt="Smoothies"></div>
                    <div class="menu-titles"><h1 class="">Wine</h1></div>
                    <div class="menu-items ">
                        <ul>
                            <li>Sweet Red</li>
                            <li>Dry Red</li>
                            <li>Sweet White</li>
                            <li>Dry White</li>
                            <li>Rose</li>
                            <li>Sparkling Wine</li>
                            <li>Fortified Wine</li>
                            <li>Frutty Red</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="menu-images "><img src="<?php echo base_url();?>assets/img/menu/sprites.png" alt="Deserts"></div>
                    <div class="menu-titles"><h1 class="">Sprites</h1></div>
                    <div class="menu-items ">
                        <ul>
                            <li>Whisky</li>
                            <li>Rum</li>
                            <li>Tequila</li>
                            <li>Gin</li>
                            <li>Champagne</li>
                            <li>Brandy</li>
                            <li>Absinthe</li>
                            <li>Liqueur</li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!--/#food-menu--><!-- /#special-offser -->




    <div id="reservation" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Reservation</h2>
            <p class="lead main text-center">Reserve your table &amp; enjoy lorem Ipsum</p>
            <div class="row">
                <div class="col-md-6">
                    <form class="form form-table" method="post" name="">
                        <div class="form-group">
                            <h4>Fill the form for table reservation (all fields required)</h4>
                        </div>

                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="first_name1">first name</label>
                            <input class="form-control hint" type="text" id="first_name1" name="first_name" placeholder="First name" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="last_name1">last name</label>
                            <input class="form-control hint" type="text" id="last_name1" name="last_name" placeholder="Last name" required="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="email1">email</label>
                            <input class="form-control hint" type="email" id="email1" name="email" placeholder="Email@domain.com" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="phone1">phone</label>
                            <input class="form-control hint" type="text" id="phone1" name="phone" placeholder="Phone" required="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="reserv_date1">reservation date</label>
                            <input class="form-control datepicker hasDatepicker hint" type="text" id="reserv_date1" name="reserv_date" placeholder="Reservation date" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="numb_guests1">number of guests</label>
                            <input class="form-control hint" type="text" id="numb_guests1" name="numb_guests" placeholder="Number of guests" required="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="alt_reserv_date1">time from</label>
                            <input class="form-control datepicker hasDatepicker hint" type="text" id="alt_reserv_date1" name="alt_reserv_date" placeholder="Time from" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="time1">time</label>
                            <input class="form-control timepicker ui-timepicker-input hint" type="text" id="time1" name="time" placeholder="Time to" required="" autocomplete="off">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-danger btn-lg">Reserve!</button>
                          </div>
                        </div>
                      </form>
                </div><!-- col-md-6 -->
                <div class="col-md-5 col-md-offset-1">
                    
                    <h3><i class="fa fa-clock-o fa-fw"></i>Hours</h3>
                    <h4>Breakfast</h4>
                    <p>Mon to Fri: 7:30 AM - 11:30 AM<br>Sat &amp; Sun: 8:00 AM - 9:00 AM</p>
                    <h4>Lunch</h4>
                    <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                    <h4>Dinner</h4>
                    <p>Mon to Sat: 6:00 PM -  1:00 AM<br>Sun: 5:30 PM - 12:00 AM</p>

                    <h3><i class="fa fa-map-marker fa-fw"></i>Directions</h3>
                    <p>Kalanki, Kathmandu</p>

                    <h3><i class="fa fa-mobile fa-fw"></i>Contacts</h3>
                    <p>Email: prabinshakya15@gmail.com</p>
                    <p>Phone: +9779849597770</p>

                </div><!-- col-md-6 -->
            </div>
            <!-- /.services --> 
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!-- #reservation --><!-- /#chefs -->


    <footer id="footer" class="dark-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <div class="row">
                <div class="col-sm-6">
                    &copy; Copyright Cafe Club 1997
                    <br/>
                Design By Prabin Shakya</div>
                <div class="col-sm-6">
                    <div class="social-bar">
                        <a href="#" class="fa fa-instagram tooltipped" title=""></a>
                        <a href="#" class="fa fa-youtube-square tooltipped" title=""></a>
                        <a href="#" class="fa fa-facebook-square tooltipped" title=""></a>
                        <a href="#" class="fa fa-pinterest-square tooltipped" title=""></a>
                        <a href="#" class="fa fa-google-plus-square tooltipped" title=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </footer>

    <script src="<?php echo base_url();?>assets/js/jquery-2.1.3.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.actual.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>