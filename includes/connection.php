<?php
$con = mysqli_connect('localhost', 'root', '', 'ajax');

if (!$con){
    echo "not connected" . mysqli_connect_error();
}
?>