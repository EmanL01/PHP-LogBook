<?php include("class_lib.php"); ?>
<?php
	$hijara = new person();
	$sese = new person;

	$hijara->set_name("Hijara Lock ");
	$sese->set_name("Sese Kompany ");

	echo "Hijara's full name:" . $hijara->get_name();
    echo "<br/>";
	echo "Sese's full name: " . $sese->get_name();
?>