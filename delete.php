<?php
require_once "includes/connection.php";

global $con;
$Del_Id = $_POST['Del_ID'];
$query = "delete from jquery where id='$Del_Id' ";
$result = mysqli_query($con,$query);

if($result)
{
    echo ' Your Record Has Been Delete ';
}
else
{
    echo ' Please Check Your Query ';
}