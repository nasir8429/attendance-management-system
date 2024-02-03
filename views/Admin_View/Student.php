<?php   
      session_start();
  include "connection.php";  
  $isLoggedIn = 0;
      if(!(isset($_SESSION['session_data']))){
      }else{

        $isLoggedIn = 1;
      }
 ?>

<?php
if (isset($_POST['edit_student'])) {
 $name = $_POST['name'];
 $id = $_POST['id'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $std_id = $_POST['std_id'];
 $program = $_POST['program'];
 $department = $_POST['department'];
 $password = $_POST['password'];
 $conf_password = $_POST['conf_password'];
 date_default_timezone_set("America/New_York");
    $string = "The time is " . date("h:i:sa");
    $imageFileName =  hash('md5', $string);
    $name_check=$_FILES['file']['name'];
    if ( $name_check=='')
    {
        if ($password== $conf_password) {
    $editQuery = "UPDATE admin_add_student SET name='$name',email='$email',phone='$phone',std_id='$std_id',program='$program',department='$department',password='$password',conf_password='$conf_password' WHERE id=$id";
      //update query for password change...
    $result = $con->query($editQuery);
    if($result){

      header('location:student.php');
    }else{
      echo "not update";
        }
   }

    }
    else
    {

        $_FILES['file']['name'] = $imageFileName.'.jpg';
    $image_name=$_FILES['file']['name'];
    $temp=$_FILES['file']['tmp_name'];
    $type=$_FILES['file']['type'];
     move_uploaded_file($temp, "uploads/".$image_name);
        if ($password== $conf_password) {
    $editQuery = "UPDATE admin_add_student SET image='$image_name',name='$name',email='$email',phone='$phone',std_id='$std_id',program='$program',department='$department',password='$password',conf_password='$conf_password' WHERE id=$id";
      //update query for password change...
    $result = $con->query($editQuery);
    if($result){

      header('location:student.php');
    }else{
      echo "not update";
    }
}
    }

 
 



}      
?>

<?php
if (isset($_POST['add_student'])) {
 $std_id=$_POST['std_id'];   
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $program = $_POST['program'];
 $department = $_POST['department'];
 $password = $_POST['password'];
 $conf_password = $_POST['conf_password'];
 date_default_timezone_set("America/New_York");
    $string = "The time is " . date("h:i:sa");
    $imageFileName =  hash('md5', $string);


    $_FILES['file']['name'] = $imageFileName.'.jpg';
    $image_name=$_FILES['file']['name'];
    $temp=$_FILES['file']['tmp_name'];
    $type=$_FILES['file']['type'];
     move_uploaded_file($temp, "uploads/".$image_name);
 if ($password==$conf_password) {
    $sql="INSERT INTO admin_add_student VALUES ('','$image_name','$std_id','$name','$email','$phone','$program','$department','$password','$conf_password')";
                            $result=$con->query($sql);
                            if($result){
                            }
                            else
                            {
                                echo "not insert";
                            }
 }
 else
 {
    echo "two password doesn't match";
 }


}      
?>


<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Student</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="../../assets/common_assets/css/datatables.min.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="../../assets/common_assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../../assets/common_assets/css/common.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="../../assets/admin/css/admin.css">

    </head>

    <body>
        <nav class="navbar navbar-default navbar-fixed-top mynav">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <p class="logo">ADMIN PANEL</p>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav pull-right">

                        <!-- <li class="active">
                            <a href="#" class="active" id="login-form-link">Login</a>
                        </li>
                        <li>
                            <a href="#" id="register-form-link">Register</a>
                        </li> -->
                        <li>
                            <a href="Dashborad.php">Dashboard</a>
                        </li>
                        <li>
                            <a href="Teachers.php">Teacher</a>
                        </li>
                        <li class="active">
                            <a href="Student.php">Student</a>
                        </li>

                        <li>
                            <a href="Attendance.php">Attendance</a>
                        </li>
                        <li>
                            <a href="Student_take_course.php">Add student course</a>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">
                                <strong>
                                    Admin
                                    <!-- <?php echo $_SESSION['username']; ?> -->
                                </strong>

                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="logout.php">logout</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <div class="container dashboard-content-container">
            <form action="" method="post">
                <div class="row">
                    <div class="col-sm-offset-1 col-md-offset-2 col-sm-10 col-md-8" style="line-height: 45px;text-align: center;color: rgb(13, 144, 157);font-size: 22px">
                        <a href="" class="btn btn-lg btn-success" data-toggle="modal" data-target="#add_student" style="margin-bottom: 15px;">Add
                            New Student</a>
                    </div>
                </div>


            </form>
            <div class="row">
                <table id="datatable" class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Program</th>
                            <th>Department</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php
                     $student_show_sql = "SELECT * FROM admin_add_student";
                     $student_show_result = $con->query($student_show_sql);
                    while ($student_show_row= $student_show_result->fetch_assoc()) {
                    ?>       
                        <tr>
                            <td>
                                <img src="uploads/<?php echo $student_show_row['image']?>" height="100px;" width="100px;">
                            </td>
                            <td><?php echo $student_show_row['std_id']?></td>
                            <td><?php echo $student_show_row['name']?></td>
                            <td><?php echo $student_show_row['email']?></td>
                            <td><?php echo $student_show_row['phone']?></td>
                            <td>
                               <?php echo $student_show_row['program']?>
                            </td>
                            <td><?php echo $student_show_row['department']?></td>
                            <td>
                                <center>
                                    <!-- <a href="#" class="btn btn-sm btn-success"><i class="fa fa-eye edit"></i></a> -->
                                   <button data-toggle="modal" data-target="#edit_course"  class="fa fa-edit edit editstudent" id="<?php echo $student_show_row['id']?>" > edit</button>        
                                <a href="student_delete.php?id= <?php echo $student_show_row['id']; ?>"  class="btn btn-sm btn-danger"><i
                                        class="fa fa-trash edit"></i></a>
                                </center>
                            </td>
                        </tr>
                     <?php
                     }
                     ?>   
                    </tbody>
                </table>
            </div>
        </div>


        <!--Modal For Add Course Starts-->

        <div class="modal fade" id="add_student" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog my-modal" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="exampleModalLabel" style="text-align: center">Add Student</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body clearfix">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Image:</label>
                                    <input type="file" class="form-control" name="file" id="recipient-name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">ID:</label>
                                    <input type="text" class="form-control" name="std_id" id="recipient-name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                    <input type="text" class="form-control" name="name" id="recipient-name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                    <input type="text" class="form-control" name="email" id="recipient-name">
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Phone:</label>
                                    <input type="text" class="form-control" name="phone" id="recipient-name">
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Program:</label>
                                    <!-- <input type="text" class="form-control" name="program" id="recipient-name"> -->
                                    <select class="form-control" name="program"  id="recipient-name" style="height: 45px;">
                                    <?php
                                    include "connection.php";
                                          $course_show_sqlllll = "SELECT * FROM program";
                                         $course_show_resultllll = $con->query($course_show_sqlllll);
                                         while ($course_show_rowllll= $course_show_resultllll->fetch_assoc()) {                     
                                        ?>  
                                            <option value="<?php echo $course_show_rowllll['type'];?>"><?php echo $course_show_rowllll['type']; ?></option>
                                        <?php
                                         }
                                        ?> 
                                      </select>
                                </div>


                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Department:</label>
                                   <!--  <input type="text" class="form-control" name="department" id="recipient-name"> -->
                                     <select class="form-control" name="department"  id="recipient-name" style="height: 45px;">
                                    <?php
                                    include "connection.php";
                                          $course_show_sqlllll = "SELECT * FROM department";
                                         $course_show_resultllll = $con->query($course_show_sqlllll);
                                         while ($course_show_rowllll= $course_show_resultllll->fetch_assoc()) {                     
                                        ?>  
                                            <option value="<?php echo $course_show_rowllll['type'];?>"><?php echo $course_show_rowllll['type']; ?></option>
                                        <?php
                                         }
                                        ?> 
                                      </select> 

                                </div>


                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Password:</label>
                                    <input type="password" name="password" class="form-control" id="recipient-name">
                                </div>



                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Confirm Password:</label>
                                    <input type="password" name="conf_password" class="form-control" id="recipient-name">
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" name="add_student" class="btn btn-primary" value="save">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>


                            </div>

                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--Modal For Add Course Ends-->

        <!--Edit Course Modal-->
        <div class="modal fade" id="edit_course" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog my-modal" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="exampleModalLabel" style="text-align: center">Edit Student
                            Information</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body clearfix">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Image:</label>
                                    <input type="file" class="form-control" name="file" id="">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">ID:</label>
                                    <input type="text" class="form-control" name="std_id" id="std_id">
                                    <input type="hidden" class="form-control" name="id" id="id">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                    <input type="text" class="form-control" name="email" id="email">
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Phone:</label>
                                    <input type="text" class="form-control" name="phone" id="phone">
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Program:</label>
                                    <input type="text" class="form-control" name="program" id="program">
                                </div>


                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Department:</label>
                                    <input type="text" class="form-control" name="department" id="department">

                                </div>


                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Password:</label>
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>



                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Confirm Password:</label>
                                    <input type="password" class="form-control" name="conf_password" id="conf_password">
                                </div>

                            <div class="modal-footer">
                                 <input type="submit" name="edit_student" class="btn btn-primary" value="Update">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>

                            </div>

                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Edit Course modal ends-->

        <!--Delete Course Modal-->
        <div class="modal fade" id="delete_course" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="exampleModalLabel" style="text-align: center">Confirm</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body clearfix text-center">
                        <h3>Are you sure want to delete this?</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Delete Course modal ends-->


        <div class="footer">
            <div class="container">
                <p style="text-align: center;margin-top: 15px;color: rgb(255, 255, 255);">
                    ©2018 Friends Group. All
                    Rights Reserved.
                </p>
            </div>
        </div>

    </body>
    <script src="../../assets/common_assets/js/jquery.min.js"></script>
    <script src="../../assets/common_assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="../../assets/common_assets/js/datatables.min.js"></script>


    <script>
        $(".nav li ").on("click ", function () {
            $(".nav li ").removeClass("active ");
            $(this).addClass("active ");
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#datatable').DataTable();
        });
    </script>
    <script>
        $(function () {

            $('#login-form-link').click(function (e) {
                $("#login-form").delay(100).fadeIn(100);
                $("#register-form").fadeOut(100);
                $('#register-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
            $('#register-form-link').click(function (e) {
                $("#register-form").delay(100).fadeIn(100);
                $("#login-form").fadeOut(100);
                $('#login-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });

        });
    </script>
    <script type="text/javascript">
   $(document).on('click', '.editstudent', function(){  
           var user_id = $(this).attr("id");  
           $.ajax({  
                url:"edit_student.php",  
                method:"POST",  
                data:{user_id:user_id},  
                dataType:"json",  
                success:function(data){  
                     $('#id').val(data.id);
                     $('#name').val(data.name);
                     $('#email').val(data.email);
                     $('#phone').val(data.phone);
                     $('#std_id').val(data.std_id);
                     $('#program').val(data.program);
                     $('#department').val(data.department);
                     $('#password').val(data.password);
                     $('#conf_password').val(data.conf_password);  
                     
                }  
           });  
      });  
</script>

</html>