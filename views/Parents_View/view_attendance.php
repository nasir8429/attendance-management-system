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
         $std_id=$student_show_row['std_id'];

         $notification_sql_show_for_offer="SELECT * FROM teacher_send_message WHERE student_id=$std_id ";
         $notification_result_show_for_offer = $con->query($notification_sql_show_for_offer);
         $notification_row_for_offer=mysqli_num_rows($notification_result_show_for_offer);

         $attendance_show_sql = "SELECT * FROM student_attendance WHERE student_id=$std_id";
         $attendance_show_result = $con->query($attendance_show_sql);

         $student_show_sqlk = "SELECT * FROM admin_add_student WHERE id=".$_SESSION['session_id'];
         $student_show_resultk = $con->query($student_show_sqlk);
         $student_show_rowk= $student_show_resultk->fetch_assoc();
         $now_st_id=$student_show_rowk['std_id'];

         
      }
 ?>
<?php
if (isset($_POST['message_send'])) {
 $student_id=$_POST['student_id'];   
 $teacher_email = $_POST['teacher_email'];
 $message = $_POST['message'];
  $sql="INSERT INTO parents_send_message VALUES ('','$teacher_email','$student_id','$message')";
                            $result=$con->query($sql);
                            if($result){
                            }
                            else
                            {
                                echo "not insert";
                            }
                    }        
 
 ?>
 <?php
if (isset($_POST['reply_message'])) {
 $student_id=$_POST['student_id'];   
 $teacher_id = $_POST['teacher_id'];
 $message = $_POST['message'];
  $sql="INSERT INTO parents_send_message VALUES ('','$teacher_id','$student_id','$message')";
                            $result=$con->query($sql);
                            if($result){
                            }
                            else
                            {
                                echo "not insert";
                            }
                    }        
 
 ?>
 <?php
error_reporting(0);
include "connection.php";
if (isset($_POST['show_attendance'])) {
 $semister = $_POST['semister'];
 $course_code = $_POST['course_code'];
 $student_id = $_POST['student_id'];
 //echo $student_id;

 $islog=1;
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
                        <p class="logo">GUARDIAN PANEL</p>
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
                        <!-- <li>
                            <a href="home_courses.html">Dashboard</a>
                        </li> -->
                        <li class="active">
                            <a href="view_attendance.php">View Attendance</a>
                        </li>
                        <li class="">
                            <a href="show_attendance.php">percents Attendance</a>
                        </li>
                       <!--  <li>
                            <a href="Take_course.html">Register</a>
                        </li> -->
                            

                         <li class="dropdown">
                           <!--  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false" style="position: relative;">
                                <i class="fa fa-bell">

                                </i>
                                <span class="notification-number">3</span>

                            </a> -->
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
                        
                                <span class="notification-number"><?php echo  $notification_row_for_offer;?></span>

                            </a>
                            <ul class="dropdown-menu notification">

                                <?php
                                     $student_message_show_sql = "SELECT * FROM teacher_send_message WHERE student_id=$std_id";
                                     $student_message_show_result = $con->query($student_message_show_sql);
                                    
                                     while ( $student_message_show_row= $student_message_show_result->fetch_assoc()) {
                                        $teacher_id=$student_message_show_row['teacher_id'];
                                        $teacher_message_show_sql = "SELECT * FROM admin_add_teacher WHERE id=$teacher_id";
                                     $teacher_message_show_result = $con->query($teacher_message_show_sql);
                                     $teacher_message_show_row= $teacher_message_show_result->fetch_assoc();

                                         
                                    
                                ?>

                                <li class="msg-body">
                                    
                                    
                                        <div class="image-container">
                                            <img src="../Admin_view/uploads/<?php echo $teacher_message_show_row['image'];?>"
                                                alt="userimage" class="user-image">
                                            <span class="user-name"><?php echo $teacher_message_show_row['name'];?></span>
                                        </div>

                                        <div class="text-areas">
                                            <p class="message">
                                                <?php echo $student_message_show_row['message']?>
                                            </p>
                                        </div>

                                       <!--  <button data-toggle="modal" data-target="#reply-msg"  class="fa fa-edit edit editattendance" id="<?php echo $teacher_attendence_show_row['id']?>" > reply</button> -->

                                        <button type="button" id="<?php echo $student_message_show_row['id'] ?>" data-toggle="modal" data-target="#reply-msg" class="fas fa-reply reply" value="reply">
                                            reply
                                        </button>
                                   
                                </li>
                                <?php
                                   }
                                ?>
                                
                            </ul>
                        </li>
                        <li><a href="#" data-toggle="modal" data-target="#send-msg">Send Message</a></li>



                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-user"></i>
                                <strong>
                                   <?php echo  $student_show_row['name'];?>
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

                    <div class="form-group col-sm-6">
                        <label for="semister" class="col-xs-4" style="text-align: center;color: rgb(13, 144, 157);font-size: 22px">
                            Semester:</label>
                        <div class="col-xs-8">
                            <select class="form-control" name="semister" style="line-height: 45px;height: 45px;">
                                <?php
                                  $student_show_sql = "SELECT DISTINCT semister FROM admin_add_student_course WHERE std_id=".$_SESSION['session_id'];
                                  $student_show_result = $con->query($student_show_sql);
                                  while ($student_show_row= $student_show_result->fetch_assoc()) {
                                ?>
                                <option value="<?php echo $student_show_row['semister']?>"><?php echo $student_show_row['semister']?></option>
                                <?php
                                  }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="semister" class="col-xs-4" style="line-height: 45px;text-align: center;color: rgb(13, 144, 157);font-size: 20px">
                            Course code:</label>
                        <div class="col-xs-8">
                            <select class="form-control" name="course_code" style="height: 45px;">
                                <?php
                                 $student_show_sql = "SELECT DISTINCT course_code FROM admin_add_student_course WHERE std_id=".$_SESSION['session_id'];
                                  $student_show_result = $con->query($student_show_sql);
                                  while ($student_show_row= $student_show_result->fetch_assoc()) {
                                ?>
                                <option value="<?php echo $student_show_row['course_code']?>"><?php echo $student_show_row['course_code']?></option>
                                <?php
                                  }
                                ?>
                            </select>
                            <input type="hidden" name="student_id" value="<?php echo $now_st_id?>">
                        </div>
                    </div>
                    <!-- <button class="btn btn-primary btn-success" style="margin-bottom: 20px;">Search</button> -->
                    <input type="submit" name="show_attendance" class="btn btn-primary btn-success" style="margin-bottom: 20px;" value="Search">

                </div>


            </form>
            <?php
              if ($islog==1) {
            ?>

            <div class="row">
                <table id="datatable" class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>semester</th>
                            <th>course code</th>
                            <th>Date</th>
                            <th>Status</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                 // $student_show_sql = "SELECT * FROM admin_add_student WHERE id=".$_SESSION['session_id'];
                                 //  $student_show_result = $con->query($student_show_sql);
                                 //  $student_show_row= $student_show_result->fetch_assoc();
                                 //  $std_id=$student_show_row['std_id'];
                                  //echo $std_id;
                                $course_code=$course_code;
                                $semister=$semister;
                                $student_id=$student_id;

                                  $student_show_attendance_sql = "SELECT * FROM student_attendance WHERE student_id=$student_id AND course_code=$course_code";
                                  $student_show_attendance_result = $con->query($student_show_attendance_sql);
                                  while ($student_show_attendance_row= $student_show_attendance_result->fetch_assoc()) {
                                ?>
                        <tr>
                            <td><?php echo $student_show_attendance_row['semister']?></td>
                            <td><?php echo $student_show_attendance_row['course_code']?></td>
                            <td><?php echo $student_show_attendance_row['date']?></td>
                            <td><?php echo $student_show_attendance_row['attendance']?></td>
                        </tr>

                    <?php
                      }
                    ?>     


                    </tbody>
                </table>
            </div>
        </div>




            <?php
              }
              else
              {
            ?>



            <div class="row">
                <table id="datatable" class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>semester</th>
                            <th>course code</th>
                            <th>Date</th>
                            <th>Status</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                 $student_show_sql = "SELECT * FROM admin_add_student WHERE id=".$_SESSION['session_id'];
                                  $student_show_result = $con->query($student_show_sql);
                                  $student_show_row= $student_show_result->fetch_assoc();
                                  $std_id=$student_show_row['std_id'];
                                  //echo $std_id;

                                  $student_show_attendance_sql = "SELECT * FROM student_attendance WHERE student_id=$std_id";
                                  $student_show_attendance_result = $con->query($student_show_attendance_sql);
                                  while ($student_show_attendance_row= $student_show_attendance_result->fetch_assoc()) {
                                ?>
                        <tr>
                            <td><?php echo $student_show_attendance_row['semister']?></td>
                            <td><?php echo $student_show_attendance_row['course_code']?></td>
                            <td><?php echo $student_show_attendance_row['date']?></td>
                            <td><?php echo $student_show_attendance_row['attendance']?></td>
                        </tr>

                    <?php
                      }
                    ?>     


                    </tbody>
                </table>
            </div>
        </div>
        <?php
         }
        ?>

        <div class="footer">
            <div class="container">
                <p style="text-align: center;margin-top: 15px;color: rgb(255, 255, 255);">
                    ©2018 Mannas Group. All
                    Rights Reserved.
                </p>
            </div>
        </div>

        <!--Edit Course Modal-->
        <div class="modal fade" id="edit_course" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog my-modal" role="document">
                <div class="modal-content">
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
                    <form action="" method="post">
                        <div class="modal-body clearfix text-center">
                            <textarea name="message" id="" rows="5" class="form-control" placeholder="Write Your Message"></textarea>
                            <input type="hidden" name="student_id" id="student_id">
                            <input type="hidden" name="teacher_id" id="teacher_id">
                        </div>
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-primary">Reply</button> -->
                            <input type="submit" name="reply_message"  class="btn btn-primary" value="Reply">
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
                    <form action="" method="post">
                        <div class="modal-body clearfix text-center">
                            <div class="input-group" style="margin-bottom: 15px">

                                <span class="input-group-addon"><span>Email</span></span>

                                <!-- <input type="email" name="teacher_email" class="form-control" placeholder="teacher email"> -->

                                <select name="teacher_email">
                                    <?php
                                        $teacher_show_sql = "SELECT * FROM admin_add_teacher";
                                         $teacher_show_result = $con->query($teacher_show_sql);
                                         
                                         while ($teacher_show_row= $teacher_show_result->fetch_assoc()) {
                                         
                                    ?>
                                    <option value="<?php echo $teacher_show_row['id'];?>">
                                        <?php echo $teacher_show_row['email'];?>
                                    </option>

                                    <?php
                                        }
                                    ?>
                                </select>
                               

                            </div>
                             <input type="hidden" name="student_id" value="<?php echo  $std_id;?>">
                            <textarea name="message" id="" rows="5" class="form-control" placeholder="Write Your Message"></textarea>
                        </div>
                        <div class="modal-footer">
                            
                            <input type="submit" name="message_send" class="btn btn-primary" value="send" >
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
    <script type="text/javascript">
   $(document).on('click', '.reply', function(){  
           var user_id = $(this).attr("id");  
           $.ajax({  
                url:"reply_message.php",  
                method:"POST",  
                data:{user_id:user_id},  
                dataType:"json",  
                success:function(data){  
                     $('#student_id').val(data.student_id);

                     $('#teacher_id').val(data.teacher_id);
                     //$('#student_id').val(data.id);
                      
                     
                }  
           });  
      });  
</script>

</html>