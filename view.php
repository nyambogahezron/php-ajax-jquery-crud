<?php
// require_once "includes/function.php";
require_once "includes/connection.php";

// display_record();

$query = "select * from jquery ";
$result = mysqli_query($con,$query);
// $users = mysqli_fetch_array($result);
// $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
// echo '<pre>';
// var_dump(json_encode($users));
// echo '</pre>';
//echo json_encode($users);


echo '<table class="table table-bordered">
                <tr>
                    <td> User ID </td>
                    <td> User User </td>
                    <td> User Email</td>s
                    <td> Edit </td>
                    <td> Delete </td>
                </tr>';

   
    while($row=mysqli_fetch_assoc($result))
    {
       echo '<tr>';
        echo '<td>' .$row['id']. '</td>';
        echo '<td>' . $row['userName']. '</td>';
        echo '<td>' .$row['userEmail']. '</td>';
        echo '<td> <button data-bs-toggle="modal" data-bs-target="#update" class="btn btn-success" 
        id="btn_edit" data-id='.$row['id'].'><span class="bi bi-pencil-square"></span></button> </td>';
        echo '<td> <button data-bs-toggle="modal" data-bs-target="#delete" class="btn btn-danger" 
        id="btn_delete" data-id1='.$row['id'].'><span class="bi bi-trash"></span></button> </td>';
        echo '</tr>';
    }
echo '</table>';
   