<?php
// session_start();
$name= $_POST["pname"];
$category= $_POST["pcategory"];
$subcategory=$_POST["psubcategory"];
$color= $_POST["pcolor"];
$price= $_POST["pprice"];

?>
<?php

$servername = "mysql-server";
$username = "root";
$password = "secret";
$dbname= "Products";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// print_r($conn);die;

// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
$sql = "INSERT INTO tbl_product (prod_id, prod_name, prod_category, prod_subcategory, prod_color, prod_price )
 VALUES (NULL, $name,'$category','$subcategory', '$color','$price')";


if ($conn->query($sql) === TRUE) {
    echo "product added succesfully";
    echo "<script>window.location='index.php';</script>";
    }
  
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo'<script> alert("connection failed"); </script> ';
  }
  $conn->close();
  ?>