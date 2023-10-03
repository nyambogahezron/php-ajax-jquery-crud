<?php
require_once "includes/connection.php";

    global $con;
    $UserID = $_POST['UserID'];
    $query = "select * from jquery where id='$UserID'";
    $result = mysqli_query($con,$query);
    $user = mysqli_fetch_array($result);

    echo json_encode($user);
   