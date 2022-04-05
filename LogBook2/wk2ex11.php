<?php
$mymarks['CO453'] = 45;
$mymarks['CO450'] = 43;
$mymarks['CO454'] = 46;
$mymarks['CO404'] = 48;
$mymarks['CO451'] = 47;
$mymarks['CO403'] = 49;


$total = 0;
foreach ($mymarks as $index => $value) {
    $total = $total + $mymarks[$index];
    $average = $total / 6;
    echo 'For' .$index. 'my grade was' .$value. ' and the average is'. $average. '<br/>';
  }

?>
  