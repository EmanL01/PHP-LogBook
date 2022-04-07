<?php

 session_start();

 echo "<h2> Your order qty is {$_SESSION["selqty"]} </h2></br>";
 echo "<h2> and the selected colour is {$_POST["selcolour"]}.</h2>";
 
   // if(isset($_SESSION['selqty']) && isset($_SESSION['txtprice']) && isset($_POST['selcolour'])){
      //$qty = $_SESSION['selqty'];
      //$price = $_SESSION['txtprice'];
      //$colour = $_POST['selcolour'];

     // $total = $qty * $price;
    
     if($_POST)
   {
      $selqty = $_SESSION["selqty"];
      $selsize = $_SESSION["selsize"];

      if($_SESSION["selsize"] == "Small (£15.75)")
      {
         $total = $selqty * 15.75;
      }
      else if ($_SESSION["selsize"] == "Medium (£16.75)")
      {
         $total = $selqty * 16.75;
      }
      else if ($_SESSION["selsize"] == "Large (£17.75)")
      {
         $total = $selqty * 17.75;
      }
      else if ($_SESSION["selsize"] == "Extra Large (£18.75)")
      {
         $total = $selqty * 18.75;
      }

      else
      {
         echo "No avaiable price fond ";
      }
      echo ("<h2>The sum of the widget is $total</h2>");
   }
?>
  
