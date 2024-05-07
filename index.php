<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php  
    //Define arrays
    $movies = array(
      array("Inception",  "Sci-Fi"),
      array( "The Dark Knight","Action"),
      array( "The Matrix", "Sci-Fi")
    );

    
    // Generate HTML for Movie table
    echo "<h2>Movie Table</h2>" ;
    echo "<table border='1'>";
    echo "<tr><th>Movie Name</th><th>Genre</th></tr>";
    foreach( $movies as $movie){
      echo "</tr>";
      foreach($movie as $value){
        echo "<td>".$value."</td>";
      }
      echo "</tr>";
    }
    echo"</table>";
    //Conta
    $contact = array(
      array("John","234675231","johan@gmail.com"),
      array("Jane","217864528","jane@gmail.com"),
      array("Jack","234567890","jack@gmail.com")
    );

    echo "<h2>Contact Table</h2>" ;
    echo "<table border = 1";
    echo "<tr> <th>Name</th> <th>Phone</th> <th>Email</th> </tr>";
    foreach($contact as $key){
      echo "</tr>";
      foreach($key as $value){
        echo "<td>" .$value . "</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
    
    
    
    ?> 
    
    

</html>