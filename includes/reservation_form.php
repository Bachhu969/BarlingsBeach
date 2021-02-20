<!-- WIDGET CHECK AVAILABILITY -->
<div class="widget widget_check_availability">

    <form action="reservation_room.php" method="POST">
        <h3 class="widget-title">YOUR RESERVATION</h3>
        <div class="check_availability">
            <p>
            <h4><?=$roomData['Name'];?></h4>
            </p>
            <h6 class="check_availability_title">your stay dates</h6>
            <input name="room_id" value="<?=$roomData['RoomID'];?>"
                type="hidden" />
            <div class="check_availability-field">
                <label>Arrive</label>
                <div class="input-group date" data-date-format="dd-mm-yyyy"
                    id="datepicker1">
                    <input id="arrivaldate" onchange="calculate_cost()"
                        name="arrivaldate" class="form-control wrap-box"
                        type="text" placeholder="Arrival Date">
                    <span class="input-group-addon"><i class="fa fa-calendar"
                            aria-hidden="true"></i></span>
                </div>
            </div>
            <div class="check_availability-field">
                <label>Depature</label>
                <div id="datepicker2" class="input-group date"
                    data-date-format="dd-mm-yyyy">
                    <input id="departuredate" onchange="calculate_cost()"
                        name="departuredate" class="form-control wrap-box"
                        type="text" placeholder="Departure Date">
                    <span class="input-group-addon"><i class="fa fa-calendar"
                            aria-hidden="true"></i></span>
                </div>
            </div>
            <h6 class="check_availability_title">Accommodation</h6>
            <div class="bottom">
                <input type="hidden" id="my_price" value="<?=$roomData['NormalCharges'];?>"/>
                <input type="hidden" id="my_peak_price" value="<?=$roomData['PeakCharges'];?>"/>
                <span class="price">
                    <h5>Stay:</h5> <span class="amout">$
                        <?=$roomData['NormalCharges'];?></span>/Night<br>(1 May
                    - 30
                    September)
                </span><br>
                <span class="price">
                    <h5>Stay:</h5><span class="amout">$
                        <?=$roomData['PeakCharges'];?></span>/Night <br>(1
                    October – 30
                    April )
                </span>
                <button type="submit" class="btn">Reserve</button>
                <!-- <a href="reservation_2.html" class="btn-room btn ">VIEW DETAILS</a> -->
            </div>
            <div class="text-center">You won't be charged yet.<br/>Price shown is the total trip price, including additional fees and taxes.</div>
            <hr/>
            <div class="row font-bold">
                <div class="col-sm-8">
                    $ <?=$roomData['NormalCharges'];?> x <span class="total_days">0</span> nights
                </div>
                <input type="hidden" name="total_days" class="total_days" value=0/>
                <input type="hidden" name="rate" class="rate" value=0/>
                <input type="hidden" name="total_cost" class="total_cost" value=0/>
                <div class="col-sm-4">$ <span class="total_cost">0</span></div>
            </div>
        </div>
    </form>
</div>
<!-- END / WIDGET CHECK AVAILABILITY -->


<script>
    function calculate_cost() {
        var arrivaldate = $('#arrivaldate').val();
        var departuredate = $('#departuredate').val();
        if (arrivaldate && departuredate) {

            var arrivalmonth = parseInt(arrivaldate.split("-")[1]);
            var departuremonth = parseInt(departuredate.split("-")[1]);

            var price = $('#my_price').val();
            if ((arrivalmonth <= 4 || arrivalmonth >= 10) || (departuremonth <= 4 || departuremonth >= 10)) {
                price = $('#my_peak_price').val();
            }

            function fixdate(dt) {
                var datearr = dt.split("-");
                var day = datearr[0];
                var month = datearr[1];
                datearr[0] = month;
                datearr[1] = day;
                return datearr.join("-");
            }

            var arrival = new Date(fixdate(arrivaldate)).getTime();
            var departure = new Date(fixdate(departuredate)).getTime();

            var num_of_nights = Math.round((departure - arrival) / (1000 * 60 * 60 * 24));
            $('.total_days').text(num_of_nights);
            $('.total_days').val(num_of_nights);
            $('.rate').text(num_of_nights);
            $('.rate').val(price);
            $('.total_cost').text(num_of_nights * price);
            $('.total_cost').val(num_of_nights * price);
        } else {
            $('.total_cost').val(0);
        }
    }
    </script>