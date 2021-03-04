<?php

function GetRoomDetail($room_id){

        if($room_id==0){
            die('Invalid Page link....');
    }

    global $mysqli;
    $get_room_sql = "SELECT * FROM room where RoomID=$room_id ORDER BY RoomID";
    //var_dump($get_room_sql);
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
    //all required data is in $roomData;
    $roomData['reserveURL'] = sprintf("reservation_room.php?id=%s", 
        $roomData['RoomID'], $roomData['Name'], $roomData['NormalCharges'], $roomData['PeakCharges']
        );
    //var_dump($roomData);
    return $roomData;
}

function getFullURL()
{
    $pageURL = (@$_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
    $pageURL .= $_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF']; 
    //var_dump($pageURL);
    return $pageURL;
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
}

function GetRoomList(){
   
 
global $mysqli;
$get_room_sql = "SELECT * FROM room ORDER BY RoomID";
//var_dump($get_room_sql);
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
    $rooms['reserveURL'] = sprintf("reservation_room.php?id=%s", 
    $rooms['RoomID'], $rooms['Name'], $rooms['NormalCharges'], $rooms['PeakCharges']
    );
    //  $roomID=$rooms['RoomID'];
    //  $roomName=$rooms['Name'];
    //  $roomNormalCharges=$rooms['NormalCharges'];
    //  $roomPeakCharges=$rooms['PeakCharges'];
    //  $roomDescription=$rooms['Description'];
    //  $roomPageURL=$rooms['pageURL'];
    //  $roomPicurl=$rooms['picurl'];
     array_push($roomData, $rooms);
  }
}
//all required data is in $roomData;

// var_dump($roomData);
return $roomData;
}

function chargingPercent($arrivalDate){
  //if arrival date is less than 30 days then charging percent = 100 otherwise it will be 15
  $now = time(); // or your date as well
  $your_date = strtotime($arrivalDate);
  $datediff = $your_date - $now ;
  $days = round($datediff / (60 * 60 * 24));
  //var_dump($datediff);
  //var_dump($days);

  //if($days>=30){return 15;}else{return 100;}
  return $days>=30?15:100; //ternary operator
}
function isValidReservationDate($roomID, $arrivalDate, $departureDate)
{
  return true;
  global $mysqli;
  ////get data from database regarding arrival date and departure date
  $q1 = sprintf('select * from reservation where room_id = %d and arrivaldate>="%s" and departuredate <="%s"', $roomID, $arrivalDate, $arrivalDate);
  echo $q1;
  //3-31 ,-> 3-21[userdate] = 3-21[db from_date] and 3-31[user_date] <=4-1[db to_date], so in valid
  //3-28 -> from date <3-31 , so valid
  $rec = mysqli_query($mysqli, $q1) or die(mysqli_error($mysqli));
  var_dump(mysqli_num_rows($rec));
  die();
  return mysqli_num_rows($rec)>0?false: true;
  return !mysqli_num_rows($rec)>0;
}