<?php
    $room_id = htmlspecialchars($_GET["room_id"]);
    $room_name = htmlspecialchars($_GET["room_name"]);
    $arrivaldate = htmlspecialchars($_GET["arrivaldate"]);
    $departuredate = htmlspecialchars($_GET["departuredate"]);
    $fullname = htmlspecialchars($_GET["fullname"]);
    $address = htmlspecialchars($_GET["address"]);
    $email = htmlspecialchars($_GET["email"]);
    $phone = htmlspecialchars($_GET["phone"]);

    session_start();
    //connect to database
    $mysqli = mysqli_connect('localhost', 'root', '', 'barlingsbeach');
    $reserveroom = "INSERT INTO reservation (room_id, room_name, arrivaldate, departuredate, fullname, address, email, phone) VALUES ($room_id, '$room_name', '$arrivaldate', '$departuredate', '$fullname', '$address', '$email', '$phone')";
    $reserveroomq = mysqli_query($mysqli, $reserveroom)
    or die(mysqli_error($mysqli));

    //close connection to MySQL
    mysqli_close($mysqli);

?>

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
                <h2>RESERVATION DONE</h2>
             
            </div>
        </div>
    </section>
    
    <section class="section-reservation-page ">
        <div class="container">
            <table style="border: solid 1px #aaa999;"> 
                <div>
                    <h1>Thank you for your reservation!<br></h1><br> <h3>Your reservation details are as follows:</h3>
                    <br/>Arrival date: <?php echo $arrivaldate ?>
                    <br/>Departure date: <?php echo $departuredate ?>
                    <br/>Accommodation: <?php echo $room_id?> <?php echo $room_name?>
                    <br/>Your name: <?php echo $fullname ?>
                    <br/>Address: <?php echo $address ?>
                    <br/>Email: <?php echo $email ?>
                    <br/>Phone: <?php echo $phone ?>
                    <br/><br/>
                    
                </div>
            </table>
        </div>

    </section>

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
   
    <!-- <script>
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
    </script> -->

</body>

</html>