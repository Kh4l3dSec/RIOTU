<?php

include "include/dbconfig2.php";


session_start();

if(!isset($_POST["firstname"]) && isset($_POST["username"])){
$username = $_POST["username"];
//this session used for the first searched username.
$_SESSION["usernameupdate"]=$username;

        $sql = "select * from user where username = '" . $username."'";
        //echo $sql;
        
        $result = $conn->query($sql);
        
        if ($result->num_rows == 1){ 

             $row = $result->fetch_assoc();

header('Content-Type: text/xml');
                $product = new \stdClass();
                $product->firstname = $row["firstname"];
		$product->lastname = $row["lastname"];
		$product->username=$row["username"];
		$product->password = $row["password"];
                $product->role = $row["role"];
                $product->birth_date = $row["birth_date"];
                $product->join_date = $row["join_date"];
                
		
		$product_json = json_encode($product);
		echo $product_json;
        }
       else{ 
           header('Content-Type: text/xml');
           echo ('<?xml version="1.0" encoding="UTF-8" standalone="yes"?>');
            echo"<message>This UserName does not exsit</message>";
        }
}

else{
    header('Content-Type: text/xml');
    echo ('<?xml version="1.0" encoding="UTF-8" standalone="yes"?>');

$firstname = $_POST["firstname"];

$lastname = $_POST["lastname"];


$username = $_POST["username"];
$password = $_POST["password"];
$role = $_POST["role"];
$birth_date = $_POST["birth_date"];
$join_date = $_POST["join_date"];





$sql = "UPDATE user SET firstname='".$firstname."',lastname='".$lastname."',username='".$username."',password='".$password."',birth_date='".$birth_date."' WHERE username='".$_SESSION["usernameupdate"]."';" ;

 if (mysqli_query($conn, $sql)) {
    echo "<message>Record updated successfully</message>";
} else {
    echo "<message>Error updating record: " . mysqli_error($conn)."</message>";
}
}
       
?>