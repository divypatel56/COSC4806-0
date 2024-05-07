<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <h2>My First PHP Page!</h2> 
    <?php  
    //Associative array
    $employee = array("Name"=>'John',"Id"=>"1", "Salary"=>"2000");
    echo "<pre>";
    foreach($employee as $x=>$y){
      echo "$x:$y<br>";
    };

    print_r(array_keys($employee));
    print_r(array_values($employee));

    //ArrayKey
    if(array_key_exists("Name",$employee)){
      echo "$employee[Name] is present employee";
    }
    else{
      echo "Name is not present";
    }

    
    
    
    ?> 
    
    

</html>