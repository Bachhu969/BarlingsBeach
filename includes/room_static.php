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
                                <div class="col-md-3">
                                    <?php include('reservation_form.php');?>
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
