<?php
session_start();
//connect to database
$mysqli = mysqli_connect('localhost', 'root', '', 'barlingsbeach');



//get/grab incoming room id
$room_id =@( isset($_GET['id'])? $_GET['id'] * 1: 0);

if($room_id==0){
        die('Invalid Page link....');
}

$get_room_sql = "SELECT * FROM room where RoomID=$room_id ORDER BY RoomID";
var_dump($get_room_sql);
$get_room_res = mysqli_query($mysqli, $get_room_sql)
or die(mysqli_error($mysqli));

$roomData = [];

// Check connection
   if($mysqli === false)
   {
   die("ERROR: Could not connect. " . mysqli_connect_error());
   }
   else{
  
   }

   if (mysqli_num_rows($get_room_res) < 1) 
   {

   }
   else 
   {
      while ($rooms = mysqli_fetch_array($get_room_res)) 
      {
        //  $roomID=$rooms['RoomID'];
        //  $roomName=$rooms['Name'];
        //  $roomNormalCharges=$rooms['NormalCharges'];
        //  $roomPeakCharges=$rooms['PeakCharges'];
        //  $roomDescription=$rooms['Description'];
        //  $roomPageURL=$rooms['pageURL'];
        //  $roomPicurl=$rooms['picurl'];
            $roomData = $rooms;
      }
    }
    //var_dump($roomData);


//show categories first
$display_block='<form method="get" action="room_1.php">';

$display_block .= <<<END_OF_TEXT
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
                   <a href="room_1.php" title="Room & Rate">Accommodation</a>
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
<!-- BANNER -->
<section class="banner-tems text-center">
    <div class="container">
        <div class="banner-content">
            <h2>Accommodation</h2>
            <p>At Barlings Beach Holiday Escapes</p>
        </div>
    </div>
</section>
<!-- END-BANNER -->

<!-- BODY-ROOM-1 -->
<section class="body-room-1 ">
    <div class="container">
        <div class="room-wrap-1">
        
END_OF_TEXT ;

$get_room_sql = "SELECT * FROM room ORDER BY RoomID";
$get_room_res = mysqli_query($mysqli, $get_room_sql)
or die(mysqli_error($mysqli));

// Check connection
   if($mysqli === false)
   {
   die("ERROR: Could not connect. " . mysqli_connect_error());
   }
   else{
  
   }

   if (mysqli_num_rows($get_room_res) < 1) 
   {

   }
   else 
   {
      while ($rooms = mysqli_fetch_array($get_room_res)) 
      {
         $roomID=$rooms['RoomID'];
         $roomName=$rooms['Name'];
         $roomNormalCharges=$rooms['NormalCharges'];
         $roomPeakCharges=$rooms['PeakCharges'];
         $roomDescription=$rooms['Description'];
         $roomPageURL=$rooms['pageURL'];
         $roomPicurl=$rooms['picurl'];


         $display_block .= <<<END_OF_TEXT
               <div class="row">        
               <div class="col-md-12">
                  <div class="room-item-1" id= $roomID>
                  <h1><a href="#">$roomName</a></h1>
                  <div class="img">
                      <a href="#"><img src="images/rooms/large/$roomID.jpg" alt="#"></a>
                  </div>
                     <div class="content">
                            <div class="row">
                                    <div class="col-md-12">
                                            <p>
                                                <h5>$roomDescription</h5>
                                            </p>  
                                    </div>
                            </div>                                     
                     </div>
                     <div class="bottom">                      
                              
                           <div class="row">
                                <div class="col-md-12"> 
                                   <p class="price"><h3>Starting At $ $roomNormalCharges per night</h3></p>
                                   <a href="reservation_room.php?room_id=$roomID&room_name=$roomName&room_price=$roomNormalCharges&room_price_peak=$roomPeakCharges" class="btn">RESERVE</a>
                                </div>
                            </div>        
                            
                            <div class="row">
                            <div class="col-md-3">
                                     <ul class="product-detail_tab-header">
                                             <!--<li><a href="reservation_room.php?room_id=$roomID&room_name=$roomName" data-toggle="tab">OVERVIEW</a></li>-->
                                             <li class="active"><a href="#amenities" data-toggle="tab"><h1>Amenities</h1></a></li>
                                             <!--<li><a href="#rates" data-toggle="tab">RATES</a></li>-->
                                     </ul>
                             </div>
                                     <div class="col-md-9">
                                            <div class="product-detail_tab-content tab-content">
                                                    <!-- OVERVIEW -->
                                                    <div class="tab-pane fade" id="overview">
                                                        <div class="product-detail_overview">
                                                            <h5 class='text-uppercase'>$roomName </h5>
                                                            <p>$roomPicurl</p>
                                                        
                                                        </div>
                                                    </div>
                                                    <!-- END / OVERVIEW -->
                                                    <!-- AMENITIES -->
                                                    <div class="tab-pane fade active in" id="amenities">
                                                        <div class="product-detail_amenities">
                                                        <div class="row">
                                                        <div class="col-md-12">
                                                            <!--<h2>Amenities</h2>-->
                                                        </div>
                                                        <div class="col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1">
                                                            <div class="row">
                                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 amenity">
                                                                        <i class="icon villa-wi-fi"></i> Wifi
                                                                    </div>                                                                    
                                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 amenity">
                                                                        <i class="icon villa-air-condition"></i> Air Condition
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 amenity">
                                                                        <i class="icon villa-beachfront"></i> Beachfront
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 amenity">
                                                                        <i class="icon villa-housekeeping"></i> Housekeeping
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 amenity">
                                                                        <i class="icon villa-towels"></i> Linen & Towels Included
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 amenity">
                                                                        <i class="icon villa-sea-views"></i> Sea Views
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 amenity">
                                                                        <i class="icon villa-close-to-sea"></i> Close to the Sea
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 amenity">
                                                                        <i class="icon villa-landscape-views"></i>  Landscape Views
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 amenity">
                                                                        <i class="icon villa-24h-check-in"></i> Self Check in
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 amenity">
                                                                        <i class="icon villa-welcome-pack"></i> Welcome Pack
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 amenity">
                                                                        <i class="icon villa-parking"></i> Parking
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 amenity">
                                                                        <i class="icon villa-satellite-tv"></i> Satellite-Cable TV
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 amenity">
                                                                        <i class="icon villa-towels"></i> Pool Towels
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 amenity">
                                                                        <i class="icon villa-barbeque"></i> BBQ
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 amenity">
                                                                        <i class="icon villa-microwave"></i> Microwave
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 amenity">
                                                                        <i class="icon villa-washer-dryer"></i> Washer
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 amenity">
                                                                        <i class="icon villa-iron-board"></i>  Iron & Ironing Board
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 amenity">
                                                                        <i class="icon villa-dishwasher"></i> Dishwasher
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 amenity">
                                                                        <i class="icon villa-blow-dryer"></i> Hair dryer
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 amenity">
                                                                        <i class="icon villa-safe"></i> Safe
                                                                    </div>
                                                                    
                                                              </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <!-- END / AMENITIES -->
                                                    <div class="tab-pane fade" id="rates">
                                                          <div class="product-detail_rates">
                                                             <table>
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Peak Season Rate Per night</th>
                                                                           
                                                                        </tr>
                                                                    </thead> 
                                                                    <tr>                                                               
                                                                   <td>
                                                                        <p class="price"><span class="amout">$240</span></p>
                                                                    </td>
                                                                   
                                                                </tr>
                                                             </table>
                                                          </div>
                                                    </div>                                              
                                            </div>       
                                     </div>
                             </div>
                       </div>
                 </div>
               </div>
            </div>        
            END_OF_TEXT;
      }
   }

mysqli_free_result($get_room_res);
//close connection to MySQL
mysqli_close($mysqli);

$display_block .= <<<END_OF_TEXT

</div>
        </div>           
        </section>
        <!-- TAB -->
          
            <!-- END / TAB -->
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
</form>
END_OF_TEXT;  
 ?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Room 1</title>
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
    <?php echo $display_block; ?> 
 </body>


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
</html>