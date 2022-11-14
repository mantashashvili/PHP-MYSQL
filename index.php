<?php
/*$conn = mysqli_connect("localhost", "root", "");
 
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";



// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
*/







$conn = mysqli_connect("localhost", "root", "", "myDB");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";





  


  // sql to create table
/*$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }
    
    mysqli_close($conn); 
    */








//    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
  //VALUES ('anna', 'dolidze', 'anna@example.com')";
    
   // if (mysqli_query($conn, $sql)) {
    //  echo "New record created successfully";
   // } else {
    //  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //}
    
    //mysqli_close($conn);









    //LAST ID 


    /*if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      
      $sql = "INSERT INTO MyGuests (firstname, lastname, email)
      VALUES ('John', 'Doe', 'john@example.com')";
      
      if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);*/



/*
$//sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
 */

 



$sqly = "DELETE FROM MyGuests WHERE id=7";

if ($conn->query($sqly) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>

