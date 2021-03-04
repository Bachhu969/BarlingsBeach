<!-- WIDGET CHECK AVAILABILITY -->
<div class="widget widget_check_availability">

    <form action="reservation_room.php" method="POST" class="resForm">
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
                <div class="input-group date datepicker fromDate" data-date-format="dd-mm-yyyy"
                    id="datepicker1">
                    <input id="arrivaldate_<?=$roomData['RoomID'];?>" onchange="calculate_cost()"
                        name="arrivaldate" class="form-control wrap-box arrivaldate"
                        type="text" placeholder="Arrival Date">
                    <span class="input-group-addon"><i class="fa fa-calendar"
                            aria-hidden="true"></i></span>
                </div>
            </div>
            <div class="check_availability-field">
                <label>Depature</label>
                <div id="datepicker2" class="input-group date datepicker toDate"
                    data-date-format="dd-mm-yyyy">
                    <input id="departuredate" onchange="calculate_cost()"
                        name="departuredate" class="form-control wrap-box departuredate"
                        type="text" placeholder="Departure Date">
                    <span class="input-group-addon"><i class="fa fa-calendar"
                            aria-hidden="true"></i></span>
                </div>
            </div>
            <h6 class="check_availability_title">Accommodation</h6>
            <div class="bottom">
                <input type="hidden" class="my_price" value="<?=$roomData['NormalCharges'];?>"/>
                <input type="hidden" class="my_peak_price" value="<?=$roomData['PeakCharges'];?>"/>
                <div class="text-center">You won't be charged yet.<br/>Price shown is the total trip price, including additional fees and taxes.</div>
            <hr/>
            <div class="row font-bold">
                <div class="col-sm-8">
                  <h4><strong>TOTAL</strong> <br> $ <?=$roomData['NormalCharges'];?> X <span class="total_days">0</span> Nights</h4>
                </div>
                <input type="hidden" name="total_days" class="total_days" value=0/>
                <input type="hidden" name="rate" class="rate" value=0/>
                <input type="hidden" name="total_cost" class="total_cost" value=0/><br>
                <h4><strong><div class="col-sm-4">$ <span class="total_cost">0</span></div>
            </div></strong></h4>
                <span class="price">
                    <h5>STAY:  <span>$
                        <?=$roomData['NormalCharges'];?> </span> / Night<br>FROM (1 May
                    - 30
                    September)</h5>
                </span><br>
                <span class="price">
                    <h5>STAY: <span>$
                        <?=$roomData['PeakCharges'];?>  </span> / Night <br>FROM (1
                    October – 30
                    April )</h5>
                </span><hr>
                <button type="submit" class="btn">Reserve</button>
                <!-- <a href="reservation_2.html" class="btn-room btn ">VIEW DETAILS</a> -->
            </div>
           
        </div>
    </form>
</div>
<!-- END / WIDGET CHECK AVAILABILITY -->


<script>
    function fixDateNew(dt){
        var datearr = dt.split("-");
        var day = datearr[0];
        var month = datearr[1];
        datearr[0] = month;
        datearr[1] = day;

        let r1 = new Date();
        r1.setFullYear(datearr[2], datearr[0], datearr[1]);
        return r1;
    }
    function fixdate(dt) {
        var datearr = dt.split("-");
        var day = datearr[0];
        var month = datearr[1];
        datearr[0] = month;
        datearr[1] = day;
        return datearr.join("-");
    }

    function calculateSingleForm(parentObj)
    {
        var arrivaldate = $(parentObj).find('.arrivaldate').val();
        var departuredate = $(parentObj).find('.departuredate').val();
        if (arrivaldate && departuredate) {

            var arrivalmonth = parseInt(arrivaldate.split("-")[1]);
            var departuremonth = parseInt(departuredate.split("-")[1]);

            var price = $(parentObj).find('.my_price').val();
            if ((arrivalmonth <= 4 || arrivalmonth >= 10) || (departuremonth <= 4 || departuremonth >= 10)) {
                price = $(parentObj).find('.my_peak_price').val();
            }

            var arrival = fixDateNew(arrivaldate).getTime();
            var departure = fixDateNew(departuredate).getTime();
          
            // var arrival = new Date(fixdate(arrivaldate)).getTime();
            // var departure = new Date(fixdate(departuredate)).getTime();
            
            if(arrival>departure){
                //console.log($(parentObj).find('.departuredate').length);
                departure = arrival;
                $(parentObj).find('.departuredate').val(departure);
            }
            var num_of_nights = Math.round((departure - arrival) / (1000 * 60 * 60 * 24));
            console.log(arrivaldate,departuredate);
            console.log(departure,arrival, num_of_nights);
            
            $(parentObj).find('.total_days').text(num_of_nights);
            $(parentObj).find('.total_days').val(num_of_nights);
            $(parentObj).find('.rate').text(num_of_nights);
            $(parentObj).find('.rate').val(price);
            $(parentObj).find('.total_cost').text(num_of_nights * price);
            $(parentObj).find('.total_cost').val(num_of_nights * price);
        } else {
            $(parentObj).find('.total_cost').val(0);
        }
    }
    function calculate_cost() {
        $('.resForm').each(function(index, item){
            //console.log(item);
            calculateSingleForm(item);
        });
        $('.fromDate').on('change', function(e){
                //console.log('changed');
                $parent = $(this).closest('.resForm')[0];
                $parent = $($parent);
                //console.log($parent);
                //console.log($parent.find('.arrivaldate').length);
                fromDate = $parent.find('.arrivaldate').val();
                toDate = $parent.find('.departuredate').val();

                var arrival = new Date(fixdate(fromDate)).getTime();
                var departure = new Date(fixdate(toDate)).getTime();


                if(departure<arrival){toDate=fromDate;}
                //console.log(fromDate);
                $toDate = $parent.find('.toDate').datepicker({
                    dateFormat: 'mm/dd/yy',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '100y:c+nn',
                    minDate: fromDate,
                    autoclose: true,
                    todayHighlight: true
                }).datepicker('update', toDate);
        });
    }
    </script>