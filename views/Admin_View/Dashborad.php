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
if (isset($_POST['edit_course'])) {
 $course_code = $_POST['course_code'];
 $course_title = $_POST['course_title'];
 $semister = $_POST['semister'];
 $enrolled_student = $_POST['enrolled_student'];
 $department = $_POST['department'];
 $assign_teacher = $_POST['assign_teacher'];
 $assign_teacher_id = $_POST['assign_teacher_id'];
 $id=$_POST['id'];
 $editQuery = "UPDATE admin_add_course SET course_title='$course_title',course_code='$course_code',semister='$semister',enrolled_student='$enrolled_student',department='$department',assign_teacher='$assign_teacher',assign_teacher_id='$assign_teacher_id' WHERE id=$id";
      //update query for password change...
    $result = $con->query($editQuery);
    if($result){

      header('location:Dashborad.php');
    }else{
      echo "not update";
    }
                      }      
?>


<?php
if (isset($_POST['add_course'])) {
 $course_title = $_POST['course_title'];
 $semister = $_POST['semister'];
 $course_code = $_POST['course_code'];
 $enrolled_student = $_POST['enrolled_student'];
 $department = $_POST['department'];
 //$assign_teacher = $_POST['assign_teacher'];
 $assign_teacher_id = $_POST['assign_teacher_id'];
 $sql="INSERT INTO admin_add_course VALUES ('','$course_title','$semister','$course_code','$enrolled_student','$department','','$assign_teacher_id')";
                            $result=$con->query($sql);
                            if($result){
                            }
                            else
                            {
                                echo "not insert";
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
                        <li class="active">
                            <a href="Dashborad.php">Dashboard</a>
                        </li>
                        <li>
                            <a href="Teachers.php">Teacher</a>
                        </li>
                        <li>
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
                        <a href="" class="btn btn-lg btn-success" data-toggle="modal" data-target="#add_course" style="margin-bottom: 15px;">Add
                            New Course</a>

                    </div>
                    <!-- <div class="col-sm-offset-1 col-md-offset-2 col-sm-10 col-md-8">
                        <div class="form-group">
                            <label for="semister" class="col-xs-4" style="line-height: 45px;text-align: center;color: rgb(13, 144, 157);font-size: 22px">Select
                                Semister:</label>
                            <div class="col-xs-8">
                                <select class="form-control" id="semister" style="height: 45px;">
                                    <option value="">Summer-15</option>
                                    <option value="">Summer-15</option>
                                    <option value="">Summer-15</option>
                                    <option value="">Summer-15</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
                </div>


            </form>
            <div class="row">
                <table id="datatable" class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Course Title</th>
                            <th>Course Code</th>
                            <th>Enrolled Students</th>
                            <th>Department</th>
                            <th>Assigned Teacher</th>
                            <th>semester</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                       <?php
                         $course_show_sql = "SELECT * FROM admin_add_course";
                         $course_show_result = $con->query($course_show_sql);
                        while ($course_show_row= $course_show_result->fetch_assoc()) {
                            $assign_teacher_id=$course_show_row['assign_teacher_id'];
                            $assign_course_show_sql = "SELECT * FROM admin_add_teacher WHERE id=$assign_teacher_id";
                            $assign_course_show_result = $con->query($assign_course_show_sql);
                            $assign_course_show_row= $assign_course_show_result->fetch_assoc()
                        ?>  
                       
                        <tr>
                            <td><?php echo $course_show_row['course_title']?></td>
                            <td><?php echo $course_show_row['course_code']?></td>
                            <td><?php echo $course_show_row['enrolled_student']?></td>
                            <td><?php echo $course_show_row['department']?></td>
                            <td><?php echo $assign_course_show_row['name']?></td>
                            <td><?php echo $course_show_row['semister']?></td>
                            <td>
                               <button data-toggle="modal" data-target="#edit_course"  class="fa fa-edit edit editcourse" id="<?php echo $course_show_row['id']?>" > edit</button>        
                                <a href="attendance_delete.php?id= <?php echo $course_show_row['id']; ?>"  class="btn btn-sm btn-danger"><i
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

        <!--Modal For Add Course Starts-->

        <div class="modal fade" id="add_course" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog my-modal" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="exampleModalLabel" style="text-align: center">Add Course</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body clearfix">
                        <form method="post" action="">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Course Title:</label>
                                    <!-- <input type="text" name="course_title" class="form-control" id="recipient-name"> -->
                                    <select class="form-control" name="course_title"  id="recipient-name" style="height: 45px;">
                                    <?php
                                          include "connection.php";
                                          $course_show_sqll = "SELECT * FROM course_title";
                                         $course_show_resultl = $con->query($course_show_sqll);
                                         while ($course_show_rowl= $course_show_resultl->fetch_assoc()) {                     
                                        ?>  
                                            <option value="<?php echo $course_show_rowl['type'];?>"><?php echo $course_show_rowl['type']; ?></option>
                                        <?php
                                         }
                                        ?> 
                                      </select>     
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">select semester:</label>
                                    <select class="form-control" name="semister" id="semister" style="height: 45px;">
                                        <?php
                                          include "connection.php";
                                          $course_show_sqlll = "SELECT * FROM semester";
                                         $course_show_resultll = $con->query($course_show_sqlll);
                                         while ($course_show_rowll= $course_show_resultll->fetch_assoc()) {                     
                                        ?>  
                                            <option value="<?php echo $course_show_rowll['type'];?>"><?php echo $course_show_rowll['type']; ?></option>
                                        <?php
                                         }
                                        ?>    
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Course Code:</label>
                                    <!-- <input type="text" name="course_code" class="form-control" id="recipient-name"> -->
                                    <select class="form-control" name="course_code"  id="recipient-name" style="height: 45px;">
                                    <?php
                                    include "connection.php";
                                          $course_show_sqllll = "SELECT * FROM course_code";
                                         $course_show_resultlll = $con->query($course_show_sqllll);
                                         while ($course_show_rowlll= $course_show_resultlll->fetch_assoc()) {                     
                                        ?>  
                                            <option value="<?php echo $course_show_rowlll['type'];?>"><?php echo $course_show_rowlll['type']; ?></option>
                                        <?php
                                         }
                                        ?> 
                                      </select>  
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Enrolled student:</label>
                                    <input type="text" name="enrolled_student" class="form-control" id="recipient-name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Department:</label>
                                    <!-- <input type="text" name="department" class="form-control" id="recipient-name"> -->
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
                                    <label for="recipient-name" class="col-form-label">Assign Teacher:</label>

                                    <ul class="teacher-list">
                                      <?php
                                         $teacher_show_sql = "SELECT * FROM admin_add_teacher";
                                         $teacher_show_result = $con->query($teacher_show_sql);
                                        while ($teacher_show_row= $teacher_show_result->fetch_assoc()) {
                                        ?>   
                                        <li>
                                            <input type="checkbox" name="assign_teacher_id" class="" id="teacher-1" value="<?php echo $teacher_show_row['id']?>">

                                            <label style="margin-left: 10px;color: #000;font-size: 15px;" for="teacher-1"><?php echo $teacher_show_row['name']?>
                                            </label></br>
                                        </li>
                                       <?php
                                        }
                                       ?> 
                                        
                                    </ul>

                                </div>
                                <div class="modal-footer">
                                        <input type="submit" name="add_course" class="btn btn-primary" value="Save">
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
                        <h1 class="modal-title" id="exampleModalLabel" style="text-align: center">Edit Course</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body clearfix">
                        <form method="post" action="">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Course Title:</label>
                                    <!-- <input type="text" name="course_title" class="form-control" id="recipient-name"> -->
                                    <select class="form-control" name="course_title"  id="recipient-name" style="height: 45px;">
                                    <?php
                                          include "connection.php";
                                          $course_show_sqll = "SELECT * FROM course_title";
                                         $course_show_resultl = $con->query($course_show_sqll);
                                         while ($course_show_rowl= $course_show_resultl->fetch_assoc()) {                     
                                        ?>  
                                            <option value="<?php echo $course_show_rowl['type'];?>"><?php echo $course_show_rowl['type']; ?></option>
                                        <?php
                                         }
                                        ?> 
                                      </select>     
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">select semester:</label>
                                    <select class="form-control" name="semister" id="semister" style="height: 45px;">
                                        <?php
                                          include "connection.php";
                                          $course_show_sqlll = "SELECT * FROM semester";
                                         $course_show_resultll = $con->query($course_show_sqlll);
                                         while ($course_show_rowll= $course_show_resultll->fetch_assoc()) {                     
                                        ?>  
                                            <option value="<?php echo $course_show_rowll['type'];?>"><?php echo $course_show_rowll['type']; ?></option>
                                        <?php
                                         }
                                        ?>    
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Course Code:</label>
                                    <input type="text" name="course_code" id="course_code" class="form-control" >
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Enrolled student:</label>
                                    <input type="text" name="enrolled_student" id="enrolled_student" class="form-control" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Department:</label>
                                    <input type="text" name="department" id="department" class="form-control" >
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Assign Teacher:</label>

                                    <ul class="teacher-list">
                                     <?php
                                         $teacher_show_sql = "SELECT * FROM admin_add_teacher";
                                         $teacher_show_result = $con->query($teacher_show_sql);
                                        while ($teacher_show_row= $teacher_show_result->fetch_assoc()) {
                                        ?>   
                                        <li>
                                            <input type="checkbox" name="assign_teacher_id" class="" id="teacher-1" value="<?php echo $teacher_show_row['id']?>">

                                            <label style="margin-left: 10px;color: #000;font-size: 15px;" for="teacher-1"><?php echo $teacher_show_row['name']?>
                                            </label></br>
                                        </li>
                                       <?php
                                        }
                                       ?>
                                        
                                    </ul>

                                </div>
                                <div class="modal-footer">
                                        <input type="submit" name="edit_course" class="btn btn-primary" value="update">
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
   $(document).on('click', '.editcourse', function(){  
           var user_id = $(this).attr("id");  
           $.ajax({  
                url:"edit_course.php",  
                method:"POST",  
                data:{user_id:user_id},  
                dataType:"json",  
                success:function(data){  
                     $('#id').val(data.id);
                     $('#course_title').val(data.course_title);
                     $('#semister').val(data.semister);
                     $('#course_code').val(data.course_code);
                     $('#enrolled_student').val(data.enrolled_student);
                     $('#department').val(data.department);
                     $('#assign_teacher').val(data.assign_teacher);  
                     
                }  
           });  
      });  
</script>

</html>
