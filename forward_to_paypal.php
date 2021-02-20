<?php
    require_once('includes/connection.php');


$checkRecord = array(

);


$_SESSION['first_name'] = $_POST['first_name'];
$_SESSION['last_name'] = $_POST['last_name'];
$_SESSION['address1'] = $_POST['address1'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['phone'] = $_POST['phone'];
$_SESSION['order_no'] = session_id();
//save data to database


?>
<FORM action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="frmPaypal">
    <input type='hidden' name='return' value='<?= str_replace('forward_to_paypal.php', 'reserve.php', getFullURL());?>?order_no=<?=$_SESSION['order_no'];?>'>
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="order" value="<?=$_SESSION['order_no'];?>">
    <input type="hidden" name="business" value="sb-axsfr2924712@business.example.com">
    <input type="hidden" name="item_name" value="Holiday House Reservation [<?=$_SESSION['room_name'];?>]">
    <input type="hidden" name="item_number" value="<?=$_SESSION['room_id'];?>">
    <input type="hidden" name="amount" value="<?=$_SESSION['total_cost'];?>">
    <input type='hidden' name='currency_code' value='AUD'> 

    <input type='hidden' name='first_name' value='<?=$_SESSION['first_name'];?>'> 
    <input type='hidden' name='last_name' value='<?=$_SESSION['last_name'];?>'> 
    <input type='hidden' name='address1' value='<?=$_SESSION['address1'];?>'> 
    <input type='hidden' name='email' value='<?=$_SESSION['email'];?>'> 
    <input type='hidden' name='phone' value='<?=$_SESSION['phone'];?>'> 

</form>
<script>
    document.forms[0].submit();
    </script>