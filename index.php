<?php //Set useful variables for paypal form
$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypalID = 'amit@longtail.info'; //Business Email
$baseUrl = 'http://'.$_SERVER['HTTP_HOST'].'/paypal/'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Paypal</title>
</head>
<body>
    <form action="<?php echo $paypalURL; ?>" method="post">
        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="<?php echo $paypalID; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="Baby Product">
        <input type="hidden" name="item_number" value="2">
        <input type="hidden" name="amount" value="2">
        <input type="hidden" name="currency_code" value="USD">
        
        <!-- Specify URLs -->
        <input type="hidden" name="cancel_return" value="<?php echo $baseUrl;?>cancel.php">
        <input type="hidden" name="return" value="<?php echo $baseUrl;?>success.php">

        <!-- Instant Payment Notification -->
        <input type="hidden" name="notify_url" value="<?php echo $baseUrl;?>ipn.php">
        
        <!-- Display the payment button. -->
        <input type="image" name="submit" border="0"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
    </form>
</body>
</html>