 <?php
 $servername = "localhost";
 $sqlUserName = "root";
 $password = "";
 
 try {
   $conn = new PDO("mysql:host=$servername;dbname=meco", $sqlUserName, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connected successfully";
 } catch(PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
 }
 ?> 