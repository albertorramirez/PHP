<?php

$orderPrice = 15.99;
$salesTax = 8.25;
$displayorderTax = applyTax($orderPrice, $salesTax);

function applyTax($orderPrice, $salesTax){
    $salesPercent = $salesTax / 100;
    $orderTax = $salesPercent * $orderPrice;
    return $orderTax;
    
}

?>

<p><?php echo $orderPrice; ?></p>
<p><?php echo $displayorderTax; ?></p>
<p><?php echo $orderPrice + $displayorderTax; ?></p>
