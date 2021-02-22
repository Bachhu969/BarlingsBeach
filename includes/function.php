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
