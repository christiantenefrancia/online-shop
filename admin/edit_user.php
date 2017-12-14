
<?php include ('session.php');

$get_id = $_GET['id'];
?>
<?php include ('header.php');?>
<body>
    <div id="wrapper">
        <!--/. NAV TOP  -->
       <?php include ('nav_sidebar.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >  
                         <div class="ui segment" style="width: 45%;">   
                           
                            <form class="form-horizontal" method="post">
								 <h2 class="ui block header">
                                    <i class="blue edit icon"></i>
                                    <div class="content">
                                            Edit User
                                    </div>
                                </h2>
                                <hr>
                                <?php
                                $query = mysql_query("select * from tb_user where user_id='$get_id'") or die(mysql_error());
                                $row = mysql_fetch_array($query);
                                ?>
                                <div class="control-group">
                                    <div class="ui blue medium pointing below label">
                                        Firstname
                                    </div>
                                    <div class="controls">
                                    <input type="text" name="fn" class = "form-control" id="inputEmail" value="<?php echo $row['firstname']; ?>">
                                    </div>
                                </div>
                                <br>
                                <div class="control-group">
                                    <div class="ui blue medium pointing below label">
                                        Lastname
                                    </div>
                                    <div class="controls">
                                        <input type="text"  name="ln"  class = "form-control"  value="<?php echo $row['lastname']; ?>">
                                    </div>
                                </div>
                                <br>
                                <div class="control-group">
                                    <div class="ui blue medium pointing below label">
                                        Username
                                    </div>
                                    <div class="controls">
                                        <input type="text" name="un"  class = "form-control"  value="<?php echo $row['username']; ?>">
                                    </div>
                                </div>
                                <br>
                                <div class="control-group">
                                    <div class="ui blue medium pointing below label">
                                        Password
                                    </div>
                                    <div class="controls">
                                        <input type="text" name="p" class = "form-control" value="<?php echo $row['password']; ?>">
                                    </div>
                                </div>

									<hr/>
                                <div class="control-group">
                                    <div class="controls" style="padding-left: 275px;">
                                    <button type="submit" name="update" class="ui positive button">
                                        <i class="edit icon"></i>
                                        Update
                                    </button>
                                        <span><a href = "user.php" class = "ui negative button"> 
                                            <i class="remove icon"></i>Cancel</a>
                                        </span>
                                    </div>
                                </div>
                            </form>

                            <?php
                            if (isset($_POST['update'])) {

                                $fn = $_POST['fn'];
                                $ln = $_POST['ln'];
                                $un = $_POST['un'];
                                $p = $_POST['p'];

                                mysql_query("update tb_user set firstname='$fn', lastname='$ln' , username='$un' , password='$p'") or die(mysql_error());

                                header('location:user.php');
                            }
                            ?>


                        </div>
                        </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
   <?php include ('script.php');?>
</body>
</html>
