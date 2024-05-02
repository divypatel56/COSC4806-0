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
    $x = 5;
    $y = 7;
    echo "I have started learning $name.";
    ECHO "<br> PHP is a server-side scripting language.<br>";
    echo "I have a $color $car.";
  

    function add(){
      $z;
      global $x, $y;
      $z = $x + $y;
      echo "<br>The sum of $x and $y is $z."."<br>";
    }
    add();
    print "We can also use print instead of echo.<br>";
    //String functions
    echo strlen("Hello World")."<br>";
    echo str_word_count("Hello My name is Divy")."<br>";
    echo strpos("Hello world!", "world")."<br>";
    echo strtoupper("divy")."<br>";
    echo strtolower("DIVY")."<br>";
    echo str_replace("World", "Class" , "Hello World!")."<br>";
    echo strrev("World")."<Br>";

    //String concate
    $txt1 = "COSC";
    $txt2 = "4806";
    echo($txt1 ."-". $txt2);
   
    
    ?> 
    
    

</html>