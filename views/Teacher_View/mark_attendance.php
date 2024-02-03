<?php   
      session_start();
      error_reporting(0);
  include "connection.php";  
  $isLoggedIn = 0;
      if(!(isset($_SESSION['session_id']))){
        //check user login or not...
        echo "not session set up";

      }else{
        
        

         $teacher_show_sql = "SELECT * FROM admin_add_teacher WHERE id=".$_SESSION['session_id'];
         $teacher_show_result = $con->query($teacher_show_sql);
         $teacher_show_row= $teacher_show_result->fetch_assoc();
         
      }
 ?>
<?php
 if (isset($_POST['attendance_show'])) {

     $course=$_POST['course'];
     $student_id=$_POST['student_id'];
     $islogin=1;
 }
?>


<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Attendance</title>
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
                        <p class="logo">TEACHER PANEL</p>
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
                            <a href="home_list_course.php">Dashboard</a>
                        </li>
                        <li class="active">
                            <a href="take_attendance.php">Attendance</a>
                        </li>







<!-- 
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false" style="position: relative;">
                                <i class="fa fa-bell">

                                </i>
                                <span class="notification-number">3</span>

                            </a>
                            <ul class="dropdown-menu notification">

                                <li>
                                    <a href="#">
                                        <div class="text-areas">
                                            <p class="message">
                                                <span class="user-name1">user-name</span>
                                                said Something about you
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="text-areas">
                                            <p class="message">
                                                <span class="user-name1">user-name</span>
                                                said Something about you
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false" style="position: relative;">
                                <i class="fa fa-envelope">

                                </i>
                                <span class="notification-number">3</span>

                            </a>
                            <ul class="dropdown-menu notification">

                                <li class="msg-body">
                                    <a href="#" data-toggle="modal" data-target="#reply-msg">
                                        <div class="image-container">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhmUpYYHhalvLQxph1FulRdB6yx-JLqee73jF1UM8FCE6prCve"
                                                alt="userimage" class="user-image">
                                            <span class="user-name">user-name</span>
                                        </div>

                                        <div class="text-areas">
                                            <p class="message">
                                                message from the user message from the user message from the user
                                                message from the user
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li class="msg-body">
                                    <a href="#" data-toggle="modal" data-target="#reply-msg">
                                        <div class="image-container">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhmUpYYHhalvLQxph1FulRdB6yx-JLqee73jF1UM8FCE6prCve"
                                                alt="userimage" class="user-image">
                                            <span class="user-name">user-name</span>
                                        </div>

                                        <div class="text-areas">
                                            <p class="message">
                                                message from the user message from the user message from the user
                                                message from the user
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li class="msg-body">
                                    <a href="#" data-toggle="modal" data-target="#reply-msg">
                                        <div class="image-container">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhmUpYYHhalvLQxph1FulRdB6yx-JLqee73jF1UM8FCE6prCve"
                                                alt="userimage" class="user-image">
                                            <span class="user-name">user-name</span>
                                        </div>

                                        <div class="text-areas">
                                            <p class="message">
                                                message from the user message from the user message from the user
                                                message from the user
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#" data-toggle="modal" data-target="#send-msg">Send Message</a></li>
 -->








                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-user"></i>
                                <strong> -->
                                    <!-- Teacher Name -->
                                    <!-- <?php echo $_SESSION['username']; ?> -->
                                <!-- </strong>

                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="" data-toggle="modal" data-target="#edit_course">Edit Profile</a>
                                    <a href="">Edit Profile</a>
                                </li>
                                <li>
                                    <a href="">logout</a>
                                </li>
                            </ul>
                        </li> -->
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
                            Course code:</label>
                        <div class="col-xs-8">
                            <select class="form-control" name="course" id="semister" style="height: 45px;">    
                            <?php
                            include "connection.php";
                              $course_show_sql = "SELECT * FROM admin_add_course WHERE assign_teacher_id=".$_SESSION['session_id'];
                             $course_show_result = $con->query($course_show_sql);
                             while ($course_show_row= $course_show_result->fetch_assoc()) {
                            ?>
                                <option value="<?php echo $course_show_row['course_code']?>"><?php echo $course_show_row['course_code']?></option>
                            
                            <?php
                              }
                            ?>
                           </select> 
                        </div>
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="semister" class="col-xs-4" style="line-height: 45px;text-align: center;color: rgb(13, 144, 157);font-size: 20px">
                            student id:</label>
                        <div class="col-xs-8">
                            <input type="text" name="student_id" placeholder="student id">
                        </div>
                    </div>
                    
                    
                    <input type="submit" name="attendance_show" value="Show Attendance Marks" class="btn btn-primary btn-success" style="margin-bottom: 20px;">

                </div>


            </form>

            <div class="row">
                <form action="">
                    <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
                        <caption style="background-color: rgb(16, 129, 139);text-align: center;color: #fff;font-size: 22px">Show
                            Attendance</caption>
                        <thead>
                            <tr>
                                
                                <th>Student Id</th>
                                <th> Attendance percents</th>
                                <th> Attendance mark</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($islogin==1) {
                            ?>
                            <?php
                             $course=$course;
                             $student_id=$student_id;
                             $total_sql="SELECT * FROM student_attendance WHERE course_code=$course AND student_id=$student_id ";
                             $total_result = $con->query($total_sql);
                             $total_row=mysqli_num_rows($total_result);
                             //echo $total_row;

                             $present_sql="SELECT * FROM student_attendance WHERE course_code=$course AND student_id=$student_id AND attendance='present'";
                             $present_result = $con->query($present_sql);
                             $present_row=mysqli_num_rows($present_result);
                             //echo $present_row;
                             $count=($present_row/$total_row)*100;
                             //echo $count;
                            ?>
                            <tr>
                                <td><?php echo  $student_id;?></td>
                                <td><?php echo  $count.'%';?></td>
                                <td>
                                    <h5>Total=5</h5></br>
                                    <?php  echo ($count/100)*5; ?>
                                </td>
                            </tr>
                            <?php
                             }
                             else
                             {
                            ?>

                                 <?php
                             // $course=$course;
                             // $student_id=$student_id;
                             $st_show_sql = "SELECT * FROM student_attendance";
                             $st_show_result = $con->query($st_show_sql);
                             while ($st_show_row= $st_show_result->fetch_assoc())
                             {

                                 $course= $st_show_row['course_code'];
                                 $student_id= $st_show_row['student_id']; 
                              

                             $total_sql="SELECT * FROM student_attendance WHERE course_code=$course AND student_id=$student_id ";
                             $total_result = $con->query($total_sql);
                             $total_row=mysqli_num_rows($total_result);
                             //echo $total_row;

                             $present_sql="SELECT * FROM student_attendance WHERE course_code=$course AND student_id=$student_id AND attendance='present'";
                             $present_result = $con->query($present_sql);
                             $present_row=mysqli_num_rows($present_result);
                             //echo $present_row;
                             $count=($present_row/$total_row)*100;
                             //echo $count;
                            ?>
                            <tr>
                                <td><?php echo  $student_id;?></td>
                                <td><?php echo  $count.'%';?></td>
                                <td>
                                    <h5>Total=5</h5></br>
                                    <?php  echo ($count/100)*5; ?>
                                </td>
                            </tr>
                        <?php
                          }
                           }   

                        ?>
                        </tbody>
                    </table>
                    
                </form>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <p style="text-align: center;margin-top: 15px;color: rgb(255, 255, 255);">
                    ©2018 Frirnds Group. All
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
                                <div class="form-group col-sm-6">
                                    <label for="recipient-name" class="col-form-label">Designation:</label>
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


        <!--Reply Message Modal-->
        <div class="modal fade" id="reply-msg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="exampleModalLabel" style="text-align: center">Reply a message</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="">
                        <div class="modal-body clearfix text-center">
                            <textarea name="reply-msg" id="" rows="5" class="form-control" placeholder="Write Your Message"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Reply</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- reply msg modal ends-->

        <!--send Message Modal-->
        <div class="modal fade" id="send-msg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="exampleModalLabel" style="text-align: center">Send a message</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="">
                        <div class="modal-body clearfix text-center">
                            <div class="input-group" style="margin-bottom: 15px">

                                <span class="input-group-addon"><span>ID</span></span>

                                <input type="text" class="form-control" placeholder="ID">

                            </div>
                            <textarea name="reply-msg" id="" rows="5" class="form-control" placeholder="Write Your Message"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Reply</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- send msg modal ends-->

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

    <script>
        $('.msg-body').hover(
            function () {
                $(this).attr("title", "Click To Reply");
            }
        )
    </script>

</html>