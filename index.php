<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../CSS/bootstrap/css/bootstrap.css">
   
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="CSS/bootstrap/js/bootstrap.js"></script>
    <title>Ajax|jQuery|PHP|CRUD</title>
</head>
<body class="bg-dark">

<div class="container-fluid">
    <div class="row">
      <div class="col">
          <div class="card mt-5">
            <div class="card-title ml-5 my-2">
              <!--Registration Button -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" 
              data-bs-target="#registration">Add New User </button>
            </div>
            <div class="card-body">
            <p id="delete-message" class="text-dark"></p>
              <div id="table"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Registration Modal -->
    <div class="modal fade" id="registration">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="text-dark">Registration Form</h3>
          </div>
          <div class="modal-body">
          <p id="message" class="text-dark"></p>
            <form>
              <input type="text" class="form-control my-2" placeholder="User Name" id="UserName">
              <input type="email" class="form-control my-2" placeholder="User Email" id="UserEmail">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" id="btn_register">Register Now</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="btn_close">Close</button>
          </div>
        </div>
      </div>
    </div>  

    <!--Update Modal-->
    <div class="modal fade" id="update">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="text-dark">Update Form</h3>
          </div>
          <div class="modal-body">
          <p id="up-message" class="text-dark"></p>
            <form>
              <input type="hidden" class="form-control my-2" placeholder="User Email" id="Up_User_ID">
              <input type="text" class="form-control my-2" placeholder="User Name" id="Up_UserName">
              <input type="email" class="form-control my-2" placeholder="User Email" id="Up_UserEmail">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" id="btn_update">Update Now</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="btn_close">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--Delete Modal-->
    <div class="modal fade" id="delete">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="text-dark">Delete Record</h3>
          </div>
          <div class="modal-body">
            <p> Do You Want to Delete the Record ?</p>
          
            <button type="button" class="btn btn-success" id="btn_delete_record">Delete Now</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="btn_close">Close</button>
          </div>
        </div>
      </div>
    </div>



<script src="js/main.js"></script>
</body>
</html>
