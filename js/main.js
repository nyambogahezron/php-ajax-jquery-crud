
function Insert_record()
{
   $(document).on('click','#btn_register',function()
   {
 
        var User = $('#UserName').val();
        var Email = $('#UserEmail').val();

        if(User == "" || Email=="")
        {
            $('#message').html('Please Fill in the Blanks ');
        }
        else
        {
            $.ajax(
                {
                    url : 'insert.php',
                    method: 'post',
                    data:{UName:User,UEmail:Email},
                    success: function(data)
                    {
                        $('#message').html(data);
                        $('#registration').modal('show');
                        $('form').trigger('reset');
                        view_record();
                    }
                })
        }
        
   })

   $(document).on('click','#btn_close',function()
   {
       $('form').trigger('reset');
       $('#message').html('');
   })   
}
Insert_record();

// Display Record
function view_record()
{
    $.ajax(
        {
            url: 'view.php',
            method: 'post',
            success: function(data,status)
            {
              if(status=='success')
                {
                    $('#table').html(data);
                }
            }
        })
}

view_record()

//Get Particular Record
function get_record()
{
    $(document).on('click','#btn_edit',function()
    {
        var ID = $(this).attr('data-id');
        // console.log(ID);
        $.ajax(
            {
                url: 'update.php',
                method: 'post',
                data:{UserID:ID},
                dataType: 'JSON',
                success: function(data)
                {
                //  console.log(data)                 
                   $('#Up_User_ID').val(data[0]);
                   $('#Up_UserName').val(data[1]);
                   $('#Up_UserEmail').val(data[2]);
                   $('#update').modal('show');
                   
                }
                
            })

     
    })
}
get_record()  


function update_record()
{
    
    $(document).on('click','#btn_update',function()
    {
        
        var UpdateID = $('#Up_User_ID').val();
        var UpdateUser = $('#Up_UserName').val();
        var UpdateEmail = $('#Up_UserEmail').val();
        alert(UpdateUser)
        if(UpdateUser=="" || UpdateEmail=="")
        {
            $('#up-message').html('please Fill in the Blanks');
            $('#update').modal('show');
        }
        else
        {
            $.ajax(
                {
                    url: 'update_value.php',
                    method: 'post',
                    data:{U_ID:UpdateID,U_User:UpdateUser,U_Email:UpdateEmail},
                    success: function(data)
                    {
                        $('#up-message').html(data);
                        $('#update').modal('show');
                        view_record();
                    }
                })
        }
        
    })
}
update_record()


// Delete Function
function delete_record()
{
    $(document).on('click','#btn_delete',function()
    {
        var Delete_ID = $(this).attr('data-id1');
        // $('#delete').modal('show');

        $(document).on('click','#btn_delete_record',function()
        {
            $.ajax(
                {
                    url: 'delete.php',
                    method: 'post',
                    data:{Del_ID:Delete_ID},
                    success: function(data)
                    {
                        $('#delete-message').html(data).hide(5000);
                        view_record();
                    }
                })
        })
    })
}
delete_record()

