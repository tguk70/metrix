<?php
function decimal_to_time($decimal) {
    //$minutes = round(($decimal * 3600) / 60,0,PHP_ROUND_HALF_UP);
    $minutes = (($decimal * 3600) / 60);
    return $minutes;
}

$runningtime = 0.54424244;
$makeready = 0.74;
//$stockprice = round (177.07 / 1000,2,PHP_ROUND_HALF_UP);
$stockprice = (177.07 / 1000);
$pressprice = (349.49 / 60);
$cutting = 395.1;
$quantity = 1796;
$printingmethod = "Sheetwise";
if($printingmethod != "One-Sided"){
    $side2 = ((decimal_to_time($runningtime)) * $pressprice) + ((decimal_to_time($makeready)) * $pressprice);
} else {
    $side2 = 0;
}
$Calc = (((decimal_to_time($runningtime)) * $pressprice) +  $side2  + ((decimal_to_time($makeready)) * $pressprice) + ($stockprice * $quantity) + $cutting);
$total = round($Calc,2,PHP_ROUND_HALF_UP);
echo $total."\n";

?>