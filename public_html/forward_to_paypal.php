<?php
    require_once('models/reservation.php');
    require_once('includes/connection.php');


$checkRecord = array(

);
$objRes = $_SESSION['Reservation'];

$objRes->first_name = $_POST['first_name'];
$objRes->last_name = $_POST['last_name'];
$objRes->address1 = $_POST['address1'];
$objRes->email = $_POST['email'];
$objRes->phone = $_POST['phone'];
$objRes->order_no = session_id();
$_SESSION['Reservation'] = $objRes;
//save data to database

?>
<FORM action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="frmPaypal">
    <input type='hidden' name='return' value='<?= str_replace('forward_to_paypal.php', 'reserve.php', getFullURL());?>?order_no=<?=$objRes->order_no;?>'>
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="order" value="<?=$objRes->order_no;?>">
    <input type="hidden" name="business" value="sb-axsfr2924712@business.example.com">
    <input type="hidden" name="item_name" value="Holiday House Reservation [<?=$objRes->room_name;?>]">
    <input type="hidden" name="item_number" value="<?=$objRes->room_id;?>">
    <input type="hidden" name="amount" value="<?=$objRes->chargin_amt();?>">
    <input type='hidden' name='currency_code' value='AUD'> 

    <input type='hidden' name='first_name' value='<?=$objRes->first_name;?>'> 
    <input type='hidden' name='last_name' value='<?=$objRes->last_name;?>'> 
    <input type='hidden' name='address1' value='<?=$objRes->address1;?>'> 
    <input type='hidden' name='email' value='<?=$objRes->email;?>'> 
    <input type='hidden' name='phone' value='<?=$objRes->phone;?>'> 

</form>
<script>
    document.forms[0].submit();
    </script>