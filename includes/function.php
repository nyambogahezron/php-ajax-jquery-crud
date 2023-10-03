<?php
require_once "connection.php";
function InsertRecord()
    {
        global $con;
        $UserName = $_POST['UName'];
        $UserEmail = $_POST['UEmail'];

        $query = " insert into jquery (userName,userEmail) values('$UserName','$UserEmail')";
        $result= mysqli_query($con,$query);

        if($result)
        {
            echo ' Your Record Has Been Saved in the Database';
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }


    

// Display Data Function
function display_record()
{
    global $con;
    $query = "select * from jquery ";
    $result = mysqli_query($con,$query);
    $users = mysqli_fetch_array($result);
    echo ($users);

}


