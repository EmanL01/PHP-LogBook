<?php
	include("myfunctions.inc");
	html_header("My first function demo");

    //exercise 6
	//echo "My Father pays £" . calculatetax(1500, 22) . " tax    ";

    //exercise 7 
   // echo "My Father pays £" . calculatetax(15000) . " tax ";

   //exercise 8 
   echo "My Father pays £" . calculatetax(15000, 22, 4000) . " tax ";
	html_footer();
?>
