<?php
function html_header($pageTitle)
{
	echo "<html><title> $pageTitle </title></head>";
	echo "<body>";
}

function html_h1($text)
{
	echo "<h1> $text </h1>";
}

function html_footer()
{
	echo "</body>";
	echo "</html>";
}

function calculatetax($salary, $rate=40, $allowance)
{
	$tax = (($salary-$allowance) * ($rate/100));
	return $tax;
}
 
//exercise 7 function calculatetax($salary, $rate=40)
{
	$tax = ($salary * ($rate/100));
	return $tax;
}

 
//exercise 6 function calculatetax($salary, $rate)
{
	$tax = ($salary * ($rate/100));
	return $tax;
}



?>
