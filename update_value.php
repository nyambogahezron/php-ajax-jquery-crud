<?php
require_once "includes/connection.php";

global $con;
$Update_ID = $_POST['U_ID'];
$Update_User =$_POST['U_User'];
$Update_Email = $_POST['U_Email'];

$query = "update jquery set userName='$Update_User', userEmail='$Update_Email' where id='$Update_ID '";
$result = mysqli_query($con,$query);
if($result)
{
    echo ' Your Record Has Been Updated ';
}
else
{
    echo ' Please Check Your Query ';
}