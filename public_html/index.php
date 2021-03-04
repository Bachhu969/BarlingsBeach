<?php
session_start();
//connect to database
$mysqli = mysqli_connect('localhost', 'root', '', 'barlingsbeach');
//show categories first
$display_block='<form method="get" action="room.php">';
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
                            <a href="room_list.php" title="Accommodation">Accommodation</a>
                           
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

<!-- SLIDER -->
<section class="section-slider height-v">
    <div id="index12" class="owl-carousel  owl-theme">
        <div class="item">
            <img alt="Third slide" src="images/Home-1/flash-1.jpg" class="img-responsive">
            <div class="carousel-caption">
                <h1>Welcome to Barlings Beach</h1>
                <p><span class="line-t"></span>Holiday Escapes <span class="line-b"></span></p>
            </div>
        </div>
        <div class="item">
            <img alt="Third slide" src="images/Home-2/slider-111.jpg" class="img-responsive">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Welcome to Barlings Beach</h1>
                    <p><span class="line-t"></span>Holiday Escapes <span class="line-b"></span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END / SLIDER -->
<!-- OUR-ROOMS-->
<section class="rooms">
    <div class="container">
        <h2 class="title-room">Our Accommodation</h2>
        <div class="outline"></div>
        <p class="rooms-p">Create character-filled place for you to enjoy a casual, memorable beach holiday with family and friends </p>
        <div class="wrap-rooms">
            <div class="row">
                <div id="rooms" class="owl-carousel owl-theme">
                    <div class="item ">
END_OF_TEXT;

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
        //  $roomShortDescription=$rooms['SHORT_DESCRIPTION'];
        //  $roomLongDescription=$rooms['LONG_DESCRIPTION'];
        $roomPicurl=$rooms['picurl'];
        //  $roomTitle=$rooms['TITLE'];
         $display_block .= <<<END_OF_TEXT
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                <div class="wrap-box">
                    <div class="box-img">
                        <img src="images/rooms/small/$roomID.jpg"   class="img-responsive"  alt=$roomName   title=$roomName>
                    </div>
                    <div class="rooms-content">
                    <a href="room.php?id=$roomID"><h4 class="sky-h4">$roomName</h4>
                    </a>   
                     <p class="price">Starting At $ $roomNormalCharges  Per Night</p>
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
</div>
</div>
</div>
<!-- /container -->
</section>
<!-- END / ROOMS -->
<!-- ABOUT-US-->
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                <div class="about-centent">
                    <h2 class="about-title">About Us</h2>
                    <div class="line"></div>
                    <p class="about-p">We are a family-owned business offering short term holiday stays in the seaside town of Barlings Beach,
                         the historic town of Mogo on the South Coast of NSW.located between the neighbouring seaside villages of Batemans BAy 
                         and Moruya on the everpopular NSW South Coast. Facilities include Luxuary Townhouse, Seaside Holiday House and Shack Houses,
                         with a guest lounge perfect for group activities. </p>
                    <p class="about-p1">We are pet friendly with a pet friendly beach nearby. We offer many extras that we think could be booked and paid for online.
                         These extras include breakfast packs, oceanview, pool & Spa, wifi Coverage, airport taxi, picnic hampers, BBQ packs, laundry and dog walking.   </p>
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 ">
                <div class="about-img">
                    <div class="img-1">
                        <img src="images/Home-1/about-32.png" class="img-responsive" alt="Image">
                        <div class="img-2">
                            <img src="images/Home-1/about1.jpg" class="img-responsive" alt="Image">
                        </div>
                        <div class="img-3">
                            <img src="images/Home-1/about2.jpg" class="img-responsive" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- END/ ABOUT-US-->

<!-- BEST -->
<section class="best">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="wrap-best">                
                    <div class="icon-best">
                        <img src="images/Home-1/about-icon-1.png" class="img-responsive" alt="Image">
                    </div>
                    <h6 class="sky-h6"> Bedrooms</h6>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="wrap-best">
                    <div class="icon-best">
                        <img src="images/Home-1/about-icon-2.png" class="img-responsive" alt="Image">
                    </div>
                    <h6 class="sky-h6">Ocean  View </h6>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="wrap-best">
                    <div class="icon-best">
                        <img src="images/Home-1/about-icon-3.png" class="img-responsive" alt="Image">
                    </div>
                    <h6 class="sky-h6">Pool & Spa</h6>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="wrap-best">
                    <div class="icon-best">
                        <img src="images/Home-1/about-icon-4.png" class="img-responsive" alt="Image">
                    </div>
                    <h6 class="sky-h6">Wifi Coverage</h6>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="wrap-best">
                    <div class="icon-best">
                        <img src="images/Home-1/about-icon-5.png" class="img-responsive" alt="Image">
                    </div>
                    <h6 class="sky-h6">AwESOME pACKAGES</h6>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="wrap-best">
                    <div class="icon-best">
                        <img src="images/Home-1/about-icon-6.png" class="img-responsive" alt="Image">
                    </div>
                    <h6 class="sky-h6">cLEANING eVERDAY</h6>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="wrap-best">
                    <div class="icon-best">
                        <img src="images/Home-1/about-icon-73.png" class="img-responsive" alt="Image">
                    </div>
                    <h6 class="sky-h6">Pet Friendly</h6>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="wrap-best">
                    <div class="icon-best">
                        <img src="images/Home-1/about-icon-8.png" class="img-responsive" alt="Image">
                    </div>
                    <h6 class="sky-h6">Airport Taxi</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END / BEST -->

<!-- TESTIMONOALS -->
<section class="testimonials">
    <div class="testimonials-h">
        <div class="testimonials-content">
            <div class="container">
                <div id="testimonials" class="owl-carousel owl-theme">
                    <div class="item ">
                        <div class="img-testimonials"><img src="images/Home-1/Christina Moley1.png" alt="#"></div>
                        <p class="testimonials-p"><span>“</span>We loved our holiday in your Barlings Beach luxury townhouse. We will definitely stay longer next time! Ocean view window and Pet Friendly environment simply feels like home<span>”</span> </p>
                        <h5 class="sky-h5">Christina Moley</h5>
                        <p class="testimonials-p1">From Victoria</p>
                    </div>
                    <div class="item">
                        <div class="img-testimonials"><img src="images/Home-1/Johana Rose.png" alt="#"></div>
                        <p class="testimonials-p"><span>“</span>"What a magical stay at such an amazing place. Completely self-contained and very private. We loved it and plan to return again and again." <span>”</span> Our walks along the beach were amazing</p>
                        <h5 class="sky-h5">Johana Bale</h5>
                        <p class="testimonials-p1">From Brisbane</p>
                    </div>
                    <div class="item">
                        <div class="img-testimonials"><img src="images/Home-1/Andrew Dick.png" alt="#"></div>
                        <p class="testimonials-p"><span>“</span> This is the only place to stay in Barlings Beach! I have stayed in the cheaper holiday homes and they were fine, but this is just the icing on the cake! After spending the day surfing <span>”</span> ocean view window and then to top it all off...</p>
                        <h5 class="sky-h5">Shaun Rooky</h5>
                        <p class="testimonials-p1">From Katoomba</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END / TESTIMONOALS -->

<!--OUR-EVENTS-->
<section class="events">
    <div class="container">
        <h2 class="events-title">Other Attractions</h2>
        <div class="line"></div>
        <div id="events-v2" class="owl-carousel owl-theme">
            <div class="item ">
                <div class="events-item">
                    <div class="events-img"><img src="images/Home-1/BBQ.jpg" class="img-responsive" alt="Image"></div>
                    <div class="events-content">
                        <a href="#" title="">                                
                            <h3 class="sky-h3">BBQ Party</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="events-item">
                    <div class="events-img"><img src="images/Home-1/golf.jpg" class="img-responsive" alt="Image"></div>
                    <div class="events-content">
                        <a href="#" title="">                                
                            <h3 class="sky-h3">Golf Cup </h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="events-item">
                    <div class="events-img"><img src="images/Home-1/surf.jpg" class="img-responsive" alt="Image"></div>
                    <div class="events-content">
                        <a href="#" title="">                                
                            <h3 class="sky-h3"> Surfing at Beach </h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  
<!-- OUR-GALLERY-->
<section class="gallery-our">
    <div class="container-fluid">
        <div class="gallery">
            <h2 class="title-gallery">Our Gallery</h2>
            <div class="outline"></div>                
            <br/>
            <div class="tab-content">
                <div id="Hotel" class="tab-pane fade in active">
                    <div class="product ">
                        <div class="row">
                            <div class="gallery_product col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <img src="images/Home-1/gg.jpg" class="img-responsive" alt="Product" title="images products">
                                    </div>
                                    <div class="gallery-box-main " title>
                                        <div class="gallery-icon">
                                            <a class="lightbox " href="images/Home-1/g-g.jpg" data-littlelightbox-group="gallery" title="Luxury Room view all"><i class="ion-ios-plus-empty" aria-hidden="true" ></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery_product col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <img src="images/Home-1/gg2.jpg" class="img-responsive" alt="Product" title="images products">
                                    </div>
                                    <div class="gallery-box-main">
                                        <div class="gallery-icon">
                                            <a class="lightbox " href="images/Home-1/gg22.jpg" data-littlelightbox-group="gallery" title="HIHI"><i class="ion-ios-plus-empty" aria-hidden="true" ></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery_product col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <img src="images/Home-1/gg3.jpg" class="img-responsive" alt="Product" title="images products">
                                    </div>
                                    <div class="gallery-box-main">
                                        <div class="gallery-icon">
                                            <a class="lightbox " href="images/Home-1/gg33.jpg" data-littlelightbox-group="gallery" title="Flying is life"><i class="ion-ios-plus-empty" aria-hidden="true" ></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery_product col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <img src="images/Home-1/gg-44.jpg" class="img-responsive" alt="Product" title="images products">
                                    </div>
                                    <div class="gallery-box-main">
                                        <div class="gallery-icon">
                                            <a class="lightbox " href="images/Home-1/gg4444.jpg" data-littlelightbox-group="gallery" title="Flying is life"><i class="ion-ios-plus-empty" aria-hidden="true" ></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery_product col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <img src="images/Home-1/gg5.jpg" class="img-responsive" alt="Product" title="images products">
                                    </div>
                                    <div class="gallery-box-main">
                                        <div class="gallery-icon">
                                            <a class="lightbox " href="images/Home-1/gg55.jpg" data-littlelightbox-group="gallery" title="Flying is life"><i class="ion-ios-plus-empty" aria-hidden="true" ></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery_product col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <img src="images/Home-1/gg-666.jpg" class="img-responsive" alt="Product" title="images products">
                                    </div>
                                    <div class="gallery-box-main">
                                        <div class="gallery-icon">
                                            <a class="lightbox " href="images/Home-1/gg6-6.jpg" data-littlelightbox-group="gallery" title="Flying is life"><i class="ion-ios-plus-empty" aria-hidden="true" ></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery_product col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <img src="images/Home-1/gg7.jpg" class="img-responsive" alt="Product" title="images products">
                                    </div>
                                    <div class="gallery-box-main">
                                        <div class="gallery-icon">
                                            <a class="lightbox " href="images/Home-1/gg77.jpg" data-littlelightbox-group="gallery" title="Flying is life"><i class="ion-ios-plus-empty" aria-hidden="true" ></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery_product col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <img src="images/Home-1/gg8.jpg" class="img-responsive" alt="Product" title="images products">
                                    </div>
                                    <div class="gallery-box-main">
                                        <div class="gallery-icon">
                                            <a class="lightbox " href="images/Home-1/gg8-8.jpg" data-littlelightbox-group="gallery" title="Flying is life"><i class="ion-ios-plus-empty" aria-hidden="true" ></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <div class="product ">
                        <div class="row">
                            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <img src="images/Home-1/gallery-6.jpg" class="img-responsive" alt="Product" title="images products">
                                    </div>
                                    <div class="gallery-box-main">
                                        <div class="gallery-icon">
                                            <a class="lightbox " href="images/Home-1/gallery-2-2.jpg" data-littlelightbox-group="gallery" title="Flying is life"><i class="ion-ios-plus-empty" aria-hidden="true" ></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <img src="images/Home-1/gallery-7.jpg" class="img-responsive" alt="Product" title="images products">
                                    </div>
                                    <div class="gallery-box-main">
                                        <div class="gallery-icon">
                                            <a class="lightbox " href="images/Home-1/gallery-3-3.jpg" data-littlelightbox-group="gallery" title="Flying is life"><i class="ion-ios-plus-empty" aria-hidden="true" ></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <img src="images/Home-1/gallery-8.jpg" class="img-responsive" alt="Product" title="images products">
                                    </div>
                                    <div class="gallery-box-main">
                                        <div class="gallery-icon">
                                            <a class="lightbox " href="images/Home-1/gallery-4-4.jpg" data-littlelightbox-group="gallery" title="Flying is life"><i class="ion-ios-plus-empty" aria-hidden="true" ></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <div class="product ">
                        <div class="row">
                            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <img src="images/Home-1/gallery-7.jpg" class="img-responsive" alt="Product" title="images products">
                                    </div>
                                    <div class="gallery-box-main">
                                        <div class="gallery-icon">
                                            <a class="lightbox " href="images/Home-1/gallery-2-2.jpg" data-littlelightbox-group="gallery" title="Flying is life"><i class="ion-ios-plus-empty" aria-hidden="true" ></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <img src="images/Home-1/gallery-8.jpg" class="img-responsive" alt="Product" title="images products">
                                    </div>
                                    <div class="gallery-box-main">
                                        <div class="gallery-icon">
                                            <a class="lightbox " href="images/Home-1/gallery-6-6.jpg" data-littlelightbox-group="gallery" title="Flying is life"><i class="ion-ios-plus-empty" aria-hidden="true" ></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <div class="product ">
                        <div class="row">
                            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <img src="images/Home-1/gallery-3.jpg" class="img-responsive" alt="Product" title="images products">
                                    </div>
                                    <div class="gallery-box-main">
                                        <div class="gallery-icon">
                                            <a class="lightbox " href="images/Home-1/gallery-2-2.jpg" data-littlelightbox-group="gallery" title="Flying is life"><i class="ion-ios-plus-empty" aria-hidden="true" ></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <img src="images/Home-1/gallery-4.jpg" class="img-responsive" alt="Product" title="images products">
                                    </div>
                                    <div class="gallery-box-main">
                                        <div class="gallery-icon">
                                            <a class="lightbox " href="images/Home-1/gallery-2-2.jpg" data-littlelightbox-group="gallery" title="Flying is life"><i class="ion-ios-plus-empty" aria-hidden="true" ></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <img src="images/Home-1/gallery-5.jpg" class="img-responsive" alt="Product" title="images products">
                                    </div>
                                    <div class="gallery-box-main">
                                        <div class="gallery-icon">
                                            <a class="lightbox " href="images/Home-1/gallery-2-2.jpg" data-littlelightbox-group="gallery" title="Flying is life"><i class="ion-ios-plus-empty" aria-hidden="true" ></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <img src="images/Home-1/gallery-6.jpg" class="img-responsive" alt="Product" title="images products">
                                    </div>
                                    <div class="gallery-box-main">
                                        <div class="gallery-icon">
                                            <a class="lightbox " href="images/Home-1/gallery-2-2.jpg" data-littlelightbox-group="gallery" title="Flying is life"><i class="ion-ios-plus-empty" aria-hidden="true" ></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <img src="images/Home-1/gallery-7.jpg" class="img-responsive" alt="Product" title="images products">
                                    </div>
                                    <div class="gallery-box-main">
                                        <div class="gallery-icon">
                                            <a class="lightbox " href="images/Home-1/gallery-2-2.jpg" data-littlelightbox-group="gallery" title="Flying is life"><i class="ion-ios-plus-empty" aria-hidden="true" ></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <img src="images/Home-1/gallery-8.jpg" class="img-responsive" alt="Product" title="images products">
                                    </div>
                                    <div class="gallery-box-main">
                                        <div class="gallery-icon">
                                            <a class="lightbox " href="images/Home-1/gallery-2-2.jpg" data-littlelightbox-group="gallery" title="Flying is life"><i class="ion-ios-plus-empty" aria-hidden="true" ></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /gallery -->
    </div>
    <!-- /container -->
</section>
<!-- END / OUR GALLERY -->

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

END_OF_TEXT;

$display_block .= <<<END_OF_TEXT
</form>
END_OF_TEXT;  
 ?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Home 1</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
        rel="stylesheet">
    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/gallery.css">
    <link rel="stylesheet" type="text/css" href="css/vit-gallery.css">
    <link rel="shortcut icon" type="text/css" href="images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css" />
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
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4"></script>
<!-- Custom jQuery -->
<script type="text/javascript" src="js/sky.js"></script>

</html>