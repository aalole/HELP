<?php
session_start();
    require_once("server.php");
// print_r($_POST);
if(isset($_POST["submit"])){
    $email = $_POST["email"];
//     $fetch = "SELECT * FROM notifications WHERE email = '$email'";
//     $query1=mysqli_query($connection, $fetch);
//  $row = mysqli_fetch_array($query1);
// $_SESSION['email'] = $row['email'];
// $existEmail = $_SESSION['email'];
// echo $existEmail;
// die();
    $query2 = "INSERT INTO notifications (email) VALUES('$email')";
    
    if(mysqli_query($connection, $query2)){
        echo "email registered successfully";
        // header("Location: index.html");
    }  else{
        echo "connection error ";
    }
}

mysqli_close($connection);
?>
