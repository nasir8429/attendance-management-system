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
if (isset($_POST['edit_attendance'])) {
 $course_code = $_POST['course_code'];
 $date = $_POST['date'];
 $attendance = $_POST['attendance'];
 $id=$_POST['id'];
 $editQuery = "UPDATE student_attendance SET course_code='$course_code',date='$date',attendance='$attendance' WHERE id=$id";
      //update query for password change...
    $result = $con->query($editQuery);
    if($result){

      header('location:Attendance.php');
    }else{
      echo "not update";
    }
                      }      
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
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
                        <li>
                            <a href="Student.php">Student</a>
                        </li>

                        <li class="active">
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
                <div class="row" style="text-align: center;">

                    <div class="form-group col-sm-4">
                        <label for="semister" class="col-xs-4" style="line-height: 45px;text-align: center;color: rgb(13, 144, 157);font-size: 22px">
                            Semester:</label>
                        <div class="col-xs-8">
                            <select class="form-control" id="semister" style="height: 45px;">
                                <?php
                                  $student_show_sql = "SELECT DISTINCT semister FROM admin_add_student_course";
                                  $student_show_result = $con->query($student_show_sql);
                                  while ($student_show_row= $student_show_result->fetch_assoc()) {
                                ?>
                                <option value=""><?php echo $student_show_row['semister']?></option>
                                <?php
                                   }
                                 ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="semister" class="col-xs-4" style="line-height: 45px;text-align: center;color: rgb(13, 144, 157);font-size: 20px">
                            Course :</label>
                        <div class="col-xs-8">
                            <select class="form-control" id="semister" style="height: 45px;">
                                <?php
                                  $student_show_sql = "SELECT DISTINCT course_code FROM admin_add_student_course";
                                  $student_show_result = $con->query($student_show_sql);
                                  while ($student_show_row= $student_show_result->fetch_assoc()) {
                                ?>
                                <option value=""><?php echo $student_show_row['course_code']?></option>
                                <?php
                                   }
                                 ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="semister" class="col-xs-4" style="line-height: 45px;text-align: center;color: rgb(13, 144, 157);font-size: 22px">
                            ID:</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" id="recipient-name" style="height: 45px;">
                        </div>
                    </div>

                    <button class="btn btn-primary btn-success" style="margin-bottom: 20px;">Search</button>

                </div>


            </form>
            <div class="row">
                <table id="datatable" class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>semester</th>
                            <th>course code</th>
                            <th>date</th>
                            <th>student Id</th>
                            <th>Attendance</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                  $student_show_sql = "SELECT * FROM student_attendance";
                                  $student_show_result = $con->query($student_show_sql);
                                  while ($student_show_row= $student_show_result->fetch_assoc()) {
                                ?>
                        <tr>
                            <td><?php echo $student_show_row['semister']?></td>
                            <td><?php echo $student_show_row['course_code']?></td>
                            <td><?php echo $student_show_row['date']?></td>
                            <td><?php echo $student_show_row['student_id']?></td>
                            <td><?php echo $student_show_row['attendance']?></td>
                            <td>
                               <button data-toggle="modal" data-target="#edit_course"  class="fa fa-edit edit editattendance" id="<?php echo $student_show_row['id']?>" > edit</button> 
                                <a href="attendance_delete.php?id= <?php echo $student_show_row['id']; ?>"  class="btn btn-sm btn-danger"><i
                                        class="fa fa-trash edit"></i></a>
                            </td>
                        </tr>
                    <?php
                      }
                    ?>
                       

                    </tbody>
                </table>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <p style="text-align: center;margin-top: 15px;color: rgb(255, 255, 255);">
                    ©2018 Friends Group. All
                    Rights Reserved.
                </p>
            </div>
        </div>


        <!--Edit Course Modal-->
        <div class="modal fade" id="edit_course" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog my-modal" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="exampleModalLabel" style="text-align: center">Edit Attendance</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body clearfix">
                        <form method="post" action="">
                            <div class="row">
                               
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Course Code:</label>
                                    <input type="text" class="form-control" name="course_code" id="course_code">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Date:</label>
                                    <input type="text" class="form-control" name="date" id="date">
                                </div>
                                <div class="form-group col-sm-6">
                                    
                                    <input type="hidden" class="form-control" name="id" id="id">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Status:</label>
                                    <select class="form-control" name="attendance" id="attendance">
                                        <option value="Present">Present</option>
                                        <option value="Absent">Absent</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                     <input type="submit" name="edit_attendance" class="btn btn-primary" value="update">
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
   $(document).on('click', '.editattendance', function(){  
           var user_id = $(this).attr("id");  
           $.ajax({  
                url:"edit_attendance.php",  
                method:"POST",  
                data:{user_id:user_id},  
                dataType:"json",  
                success:function(data){  
                     $('#id').val(data.id);
                     $('#semister').val(data.semister);
                     $('#course_code').val(data.course_code);
                     $('#date').val(data.date);
                     $('#attendance').val(data.attendance);
                      
                     
                }  
           });  
      });  
</script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
</html>