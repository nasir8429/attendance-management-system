<?php   
      session_start();
  include "connection.php";  
  $isLoggedIn = 0;
      if(!(isset($_SESSION['session_id']))){
        //check user login or not...
        echo "not session set up";

      }else{
        
         $student_show_sql = "SELECT * FROM admin_add_student WHERE id=".$_SESSION['session_id'];
         $student_show_result = $con->query($student_show_sql);
         $student_show_row= $student_show_result->fetch_assoc();
         
      }
 ?>
<?php
if (isset($_POST['take_course'])) {
 $course_title = $_POST['course_title'];
 $semister = $_POST['semister'];
 $course_code = $_POST['course_code'];
 $assign_teacher = $_POST['assign_teacher'];
 $student_id = $_POST['student_id'];
 $sql="INSERT INTO student_add_course VALUES ('','$student_id','$course_title','$course_code','$semister','$assign_teacher')";
                            $result=$con->query($sql);
                            if($result){?>
          <!DOCTYPE html>
          <html>
          <head>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <title></title>
          </head>
          <body>
            <script>
            $(document).ready(function(){
              alert('course add successfully');
            });
          </script>
          </body>
          </html>
          
          <?php
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
        <title>Home</title>
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
                        <p class="logo">STUDENT PANEL</p>
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
                            <a href="home_courses.php">Dashboard</a>
                        </li>
                        <li>
                            <a href="view_attendance.php">View Attendance</a>
                        </li>
                        <li class="">
                            <a href="show_attendance.php">percents Attendance</a>
                        </li>
                        <!-- <li class="active">
                            <a href="Take_course.php">Register</a>
                        </li> -->

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-user"></i>
                                <strong>
                                   <?php 
                                     $student_show_sql = "SELECT * FROM admin_add_student WHERE id=".$_SESSION['session_id'];
                                     $student_show_result = $con->query($student_show_sql);
                                     $student_show_row= $student_show_result->fetch_assoc();
                                    echo $student_show_row['name']
                                    ?>
                                    <!-- <?php echo $_SESSION['username']; ?> -->
                                </strong>

                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- <li>
                                    <a href="" data-toggle="modal" data-target="#edit_course">Edit Profile</a>
                                </li> -->
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
           <!--  <form action="" method="post">
                <div class="row" style="text-align: center;">

                    <div class="form-group col-sm-offset-3 col-sm-6">
                        <label for="semister" class="col-xs-4" style="text-align: center;color: rgb(13, 144, 157);font-size: 22px">
                            Semister:</label>
                        <div class="col-xs-8">
                            <select class="form-control" id="semister" style="line-height: 45px;height: 45px;">
                                <option value="">Summer-15</option>
                                <option value="">Summer-15</option>
                                <option value="">Summer-15</option>
                                <option value="">Summer-15</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form> -->
            <div class="row">
                <table id="datatable" class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
                    <caption style="background-color: rgb(16, 129, 139);text-align: center;color: #fff;font-size: 22px">Offered
                        Courses</caption>
                    <thead>
                        <tr>
                            <th>Course Title</th>
                            <th>Course Code</th>
                            <th>Course Teacher</th>
                            <th>Semester</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                      $course_show_sql = "SELECT * FROM admin_add_course";
                     $course_show_result = $con->query($course_show_sql);
                     while ($course_show_row= $course_show_result->fetch_assoc()) {                     
                    ?>  
                     
                        <tr>
                          <form method="post" action=""> 
                            <td>
                              <?php echo $course_show_row['course_title']?>
                              <input type="hidden" name="course_title" value="<?php echo $course_show_row['course_title']?>">  
                            </td>
                            <td>
                              <?php echo $course_show_row['course_code']?>  
                              <input type="hidden" name="course_code" value="<?php echo $course_show_row['course_code']?>"> 
                            </td>
                            <td>
                               <?php echo $course_show_row['assign_teacher']?>  
                               <input type="hidden" name="assign_teacher" value="<?php echo $course_show_row['assign_teacher']?>">
                            </td>
                            <td>
                               <?php echo $course_show_row['semister']?> 
                               <input type="hidden" name="semister" value="<?php echo $course_show_row['semister']?>"> 
                            </td>
                            <td>
                               <!--  <a href="#" data-toggle="modal" class="btn btn-sm btn-success" data-target="#delete_course">Take
                                    Course</a> -->
                                <input type="hidden" name="student_id" value="<?php echo $_SESSION['session_id']?>">  
                                <input type="submit" class="btn btn-sm btn-success" name="take_course" value="take course">  

                            </td>
                            </form>  
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
                        <h1 class="modal-title" id="exampleModalLabel" style="text-align: center">Edit Profile</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body clearfix">
                        <form>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">ID:</label>
                                    <input type="text" class="form-control" id="recipient-name" value="1234" disabled>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Phone:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>


                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                        <h3>Are you sure want to Take this Course?</h3>
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

</html>