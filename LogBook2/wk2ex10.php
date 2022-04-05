
<?php //This code is for displaying in html table
  $mymarks['year 1'] = 55;
  $mymarks['year 2'] = 65;
  $mymarks['year 3'] = 75;
?>

<html>
<head>
<title>Data in table</title>
</head>
<body>
<table border=1 align="center">
<tr><th>Index</th><th>Subject</th></tr> 
<?php
  foreach ($mymarks as $index => $value) {
    echo'<tr><td>' .$index. '</td><td>' .$value. '</td></tr>';
  }
  
  
?>
</table>
</body> 
</html> 



<?php //This code is for displaying marks without html
  $mymarks['year 1'] = 55;
  $mymarks['year 2'] = 65;
  $mymarks['year 3'] = 75;

  foreach ($mymarks as $index => $value) {
    echo 'for' .$index. 'my grade was' .$value. '<br/>';
  }
  echo "<br/> My best year was Year 3 when I averaged ". $mymarks['year 3'];
?>