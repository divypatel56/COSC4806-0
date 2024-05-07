<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <h2>My First PHP Page!</h2> 
    <?php  
    $name = "PHP";
    $car = "Toyota";
    $color = "red"; 
    $cost = 0;

    if($color=="red"){
      echo "The color is red<br>";
    }
    else{
      echo "The color is not red<br>";
    }

    if ($cost == 0) {
      Echo "no cost";
    } else {
      Echo "cost is " . $cost;;
    }

    
    ?> 
    
    

</html>