<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <h2>My First PHP Page!</h2> 
    <?php  
    echo("<pre>");
    $products = array("iPhone", "iPad", "MacBook","Book");

    $prices = array(1000, 2000, 3000, 4000);

    foreach($products as $p){
      echo $p . "<br>";
    }

    echo "The price of the ". $products[0]." is ". $prices[0].".<br>";

    print_r($products);
    echo("<pre>");
    print_r($prices);
    //To remove element from array
    unset($prices[2]);
    echo "<pre>";
    print_r($prices);

    // Combinations of arrays
    $odd = [1,3,5,7,9];
    $even = [2,4,6,8,10];
    $numbers = array_merge($odd, $even);
    echo "<pre>";
    print_r($numbers);

    echo count($numbers);
    
    ?> 
    
    

</html>