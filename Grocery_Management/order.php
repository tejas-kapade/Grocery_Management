<?php

$cost = $_POST["cost"];
echo "<h2> Thankyou for payment...</h2>";
$payment = true;

if ($payment) {
    echo '<div style="border: 2px solid #008CBA; background-color: #f2f2f2; padding: 10px; border-radius: 5px; text-align: center; font-family: Arial, sans-serif;"><h1>Payment is successful !!<br><br><br> We recieved your : '.$cost."/- </h1><br><br>".'<a href="index.html" style="background-color: #008CBA; color: white; padding: 10px; border-radius: 5px; text-decoration: none;">Back to Home</a> <a href="order.html" style="background-color: #008CBA; color: white; padding: 10px; border-radius: 5px; text-decoration: none;">Continue shopping</a><br></div>';
}

?>
