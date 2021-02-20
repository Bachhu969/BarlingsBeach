<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reservation 5</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/gallery.css">
    <link rel="stylesheet" type="text/css" href="css/vit-gallery.css">
    <link rel="shortcut icon" type="text/css" href="images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css" />
    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>
     <!-- HEADER -->
     <header class="header-sky">
        <div class="container">
            <!--HEADER-TOP-->
            <div class="header-top">
                <div class="header-top-left">
                    <span><i class="ion-android-cloud-outline"></i>23 °C</span>
                    <span><i class="ion-ios-location-outline"></i> Barlings Beach, New South Wales</span>
                    <span><i class="fa fa-phone" aria-hidden="true"></i> +61 432 456 654</span>
                </div>
                
            </div>
            <!-- END/HEADER-TOP -->
        </div>
        <!-- MENU-HEADER -->
        <div class="menu-header">
            <nav class="navbar navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header ">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar "></span>
                            <span class="icon-bar "></span>
                            <span class="icon-bar "></span>
                        </button>
                        <a class="navbar-brand" href="index.php" title="BBHE"><img src="images/Home-1/logo.png" alt="#"></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index.php" title="Home">Home</a>
                            </li>
                            <li>
                                <a href="room.php#<?php echo htmlspecialchars($_GET["room_id"]);?>" title="Room & Rate">Accommodation</a>
                                <ul class="dropdown-menu icon-fa-caret-up submenu-hover">
                                    <li><a href="room_detail.html" title="">Accommodation Detail</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="attractions.html" title=" ">Attractions</a>
                            </li>      
                            <li><a href="contact.html" title="Contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- END / MENU-HEADER -->
    </header>
    <!-- END-HEADER -->

    <section class="banner-tems text-center">
        <div class="container">
            <div class="banner-content">
                <h2>RESERVATION</h2>
             
            </div>
        </div>
    </section>
    <!-- <a href="reservation_room.php?room_id=3">asdf</a> -->
    <!-- RESERVATION -->
    <section class="section-reservation-page ">
        <div class="container">
            <div class="reservation-page">
                <form action="reserve.php">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <div class="sidebar">
                                <!-- WIDGET CHECK AVAILABILITY -->
                                <div class="widget widget_check_availability">
                                <h1 class="widget-title">YOUR RESERVATION</h1>
                                    <div class="check_availability">                                        
                                        <p><h2><?php echo htmlspecialchars($_GET["room_name"]);?></h2></p>
                                        <h6 class="check_availability_title">your stay dates</h6>
                                        <input name="room_id" value="<?php echo htmlspecialchars($_GET["room_id"]);?>" type="hidden"/>
                                        <div class="check_availability-field">
                                            <label>Arrive</label>
                                            <div class="input-group date" data-date-format="dd-mm-yyyy" id="datepicker1">
                                                <input id="arrivaldate" onchange="calculate_cost()" name="arrivaldate" class="form-control wrap-box" type="text" placeholder="Arrival Date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"  aria-hidden="true"></i></span>
                                            </div>
                                        </div>                                    
                                        <div class="check_availability-field">
                                            <label>Depature</label>
                                            <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                                <input id="departuredate" onchange="calculate_cost()" name="departuredate" class="form-control wrap-box" type="text" placeholder="Departure Date">
                                                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                        <h6 class="check_availability_title">Accommodation</h6>
                                        <div class="bottom">
                                            <span class="price"><h5>Stay:</h5> <span class="amout">$<?php echo htmlspecialchars($_GET["room_price"]);?></span>/Night<br>(1 May - 30 September) </span><br>
                                            <span class="price"><h5>Stay:</h5><span class="amout">$<?php echo htmlspecialchars($_GET["room_price_peak"]);?></span>/Night <br>(1 October – 30 April )</span>
                                            <!-- <a href="reservation_2.html" class="btn-room btn ">VIEW DETAILS</a> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- END / WIDGET CHECK AVAILABILITY -->
                            </div>
                        </div>
                        <div class=" col-lg-9 col-md-8 col-sm-12 col-xs-12">
                            <div class="reservation_content">
                                <div class="reservation-billing-detail">
                                    <h4>BILLING DETAILS</h4>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <span id="total_cost"><h5>Please select arrival and departure dates!</h5></span>
                                        </div>
                                        <div class="col-sm-12">
                                            <label>Full Name<sup> *</sup></label>
                                            <input name="fullname" type="text" class="input-text">
                                        </div>                                         
                                    </div>
                                    
                                    <label>Address<sup> *</sup></label>
                                    <input name="address" type="text" class="input-text" placeholder="Unit, House no., Street, City, Country">
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>Email Address<sup> *</sup></label>
                                            <input name="email" type="text" class="input-text" placeholder="Street Address">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Phone<sup> *</sup></label>
                                            <input name="phone" type="text" class="input-text" placeholder="Mobile">
                                        </div>
                                    </div>
                                        <!-- <label>Order Notes</label>
                                        <textarea class="input-textarea" placeholder="Notes about additional request, eg. special notes for "></textarea>
                                        <label class="label-radio">
                                            <input type="radio" class="input-radio"> Create an account?
                                        </label>
                                        <p class="reservation-code">
                                            You have a coupon? <a href="#">Click here to enter your code</a>
                                        </p> -->
                                        <ul class="option-bank">
                                            <li>
                                                <label class="label-radio">
                                                    <input type="radio" class="input-radio" name="chose-bank"> Direct Bank Transfer
                                                </label>
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.</p>
                                            </li>                                    
                                            <li>
                                                <label class="label-radio">
                                                    <input type="radio" class="input-radio" name="chose-bank"> Credit Card
                                                </label>
                                                <a href="#" title=""><img src="images/Reservation/american.jpg" alt="#"></a>
                                                <a href="#" title=""><img src="images/Reservation/mastercard.jpg" alt="#"> </a>
                                                <!-- <a href="#" title=""><img src="images/Reservation/o.jpg" alt="#"></a> -->
                                                <a href="#" title=""><img src="images/Reservation/paypal.jpg" alt="#"></a>
                                                <a href="#" title=""><img src="images/Reservation/visa.jpg" alt="#"></a>
                                                <!-- <a href="#" title=""><img src="images/Reservation/2co.jpg" alt="#"></a> -->
                                            </li>
                                        </ul>
                                        <button class="btn btn-room btn4">Check Out</button>
                            
                                   
                                    <!-- <button class="btn btn-room btn4" type="submit" value="Submit">Check Out</button> -->
                                </div>
                            </div>
                        </div>


                    </div>
                </form>
            </div>
        </div>

    </section>
    <!-- END / RESERVATION -->

    <!--FOOTER-->
    <footer class="footer-sky">
        
        <!-- /footer-top -->
        <div class="footer-mid">
            <div class="container">
               
                <div class="footer-bottom">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        Copyright © 2020 <a href="#" title="">@</a> Barlings Beach Holiday Escapes
                        
                    </div>
                    
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding">
                        <div class="payments text-right">
                            <ul> 
                                <li><a href="tems_condition_1.html" title="">Legals</a></li>
                                <li>
                                    <a href="#" title="Isnstagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#" title="Facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#" title="Paypal"><img src="images/Home-1/Paypal.png" alt="Paypal"></a>
                                </li>
                                <li>
                                    <a href="#" title="Visa"><img src="images/Home-1/Visa.png" alt="Visa"></a>
                                </li>
                                <li>
                                    <a href="#" title="Master"><img src="images/Home-1/Master-card.png" alt="Master"></a>
                                </li>                                
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END / FOOTER-->

    <!--SCOLL TOP-->
    <a href="#" title="sroll" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
    <!--END / SROLL TOP-->

    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/vit-gallery.js"></script>
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/jquery.appear.min.js"></script>
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.js"></script>
    <script type="text/javascript" src="js/jquery.littlelightbox.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4"></script>
    <!-- Custom jQuery -->
    <script type="text/javascript" src="js/sky.js"></script>
   
    <script>
        function calculate_cost(){
            var arrivaldate = $('#arrivaldate').val();
            var departuredate = $('#departuredate').val();
            if (arrivaldate && departuredate){

                var arrivalmonth = parseInt(arrivaldate.split("-")[1]);
                var departuremonth = parseInt(departuredate.split("-")[1]);
                
                var price = <?php echo htmlspecialchars($_GET["room_price"]);?>;
                if ((arrivalmonth <= 4 || arrivalmonth >= 10) || (departuremonth <= 4 || departuremonth >= 10)){
                    price = <?php echo htmlspecialchars($_GET["room_price_peak"]);?>;
                }

                function fixdate(dt){
                    var datearr = dt.split("-");
                    var day = datearr[0];
                    var month = datearr[1];
                    datearr[0] = month;
                    datearr[1] = day;
                    return datearr.join("-");
                }

                var arrival = new Date(fixdate(arrivaldate)).getTime();
                var departure = new Date(fixdate(departuredate)).getTime();

                var num_of_nights = Math.round((departure - arrival)/(1000*60*60*24));
                $('#total_cost').text("Total cost: $"+num_of_nights*price);
            }else{
                $('#total_cost').text("Please select both arrival and departure dates!");
            }
        }
    </script>

</body>

</html>