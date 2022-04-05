<html>
<body>
<?php //This code is for calcuating gross without tax
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
	$gross = $hourlyrate * $hoursperweek;
	echo $gross;
?>
</body>
</html>




<html>
<body>
<?php //This code is for calculating gross after tax 
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
    $aftertax = 100;
    $aftertax2 = 22;
	$gross = $hourlyrate * $hoursperweek / $aftertax * $aftertax2;
	echo $gross;
?>
</body>
</html>
