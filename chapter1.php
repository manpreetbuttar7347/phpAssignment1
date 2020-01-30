<!----Manpreet kaur Buttar-8618964----->

<html>
<body>
<?php
  $base = 5;          // variable base with value
  $height = 9;         // variable height with value
$area = ($base * $height)/2;  
  $area = number_format($area, 2); // rounded the area 
    
    echo '<p> The area of the triangle is <strong>' . $area .
    '</strong></p>';   //display the area 

    $MY_NAME = 'Manpreet Buttar' ;
    
    $MY_NAME = strtoupper($MY_NAME); //convert to uppercase letters
    
    echo '<p> My first name is <strong>' . $MY_NAME . '</strong></p>'    // display the name in uppercase
    
 ?>   
   
</body>
</html>