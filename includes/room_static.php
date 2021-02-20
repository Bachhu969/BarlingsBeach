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
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar "></span>
                            <span class="icon-bar "></span>
                            <span class="icon-bar "></span>
                        </button>
                        <a class="navbar-brand" href="index.php" title="BBHE"><img src="images/Home-1/logo.png"
                                alt="#"></a>
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

                <div class="row">
                    <div class="col-md-12">
                        <div class="room-item-1" id="<?=$roomData['RoomID'];?>">
                            <h1><a href="#"><?php echo $roomData['Name'];?></a></h1>
                            <div class="img">
                                <a href="#"><img src="images/rooms/large/<?=$roomData['RoomID'];?>.jpg" alt="#"></a>
                            </div>
                           
                            <div class="content">

                                <div class="row">
                                    <div class="col-md-9">
                                        <p class="price">
                                            <h3>Starting At $ <?=$roomData['NormalCharges'];?> per night</h3>
                                        </p>
                                        <div class="description">
                                            <?=$roomData['Description'];?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <?php include('reservation_form.php');?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <ul class="product-detail_tab-header">
                                            <!--<li><a href="reservation_room.php?room_id=$roomID&room_name=$roomName" data-toggle="tab">OVERVIEW</a></li>-->
                                            <li class="active"><a href="#amenities" data-toggle="tab">
                                                    <h1>Amenities</h1>
                                                </a></li>
                                            <!--<li><a href="#rates" data-toggle="tab">RATES</a></li>-->
                                        </ul>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="product-detail_tab-content tab-content">
                                            <!-- OVERVIEW -->
                                            <div class="tab-pane fade" id="overview">
                                                <div class="product-detail_overview">
                                                    <h5 class='text-uppercase'><?=$roomData['Name'];?> </h5>
                                                    <p>$roomPicurl</p>

                                                </div>
                                            </div>
                                            <!-- END / OVERVIEW -->
                                            <?php include('room_amenities.php');?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                    <a href="#" title="Isnstagram"><i class="fa fa-instagram"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#" title="Facebook"><i class="fa fa-facebook-square"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#" title="Paypal"><img src="images/Home-1/Paypal.png" alt="Paypal"></a>
                                </li>
                                <li>
                                    <a href="#" title="Visa"><img src="images/Home-1/Visa.png" alt="Visa"></a>
                                </li>
                                <li>
                                    <a href="#" title="Master"><img src="images/Home-1/Master-card.png"
                                            alt="Master"></a>
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