<?php include ('session.php');?>	
<?php include ('header.php');?>	
<body>
    <div id="wrapper">
    <!--/. NAV TOP  -->
       <?php include ('nav_sidebar.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <h1 class="ui block header">
                <i class="teal user icon"></i>
                <div class="content">
                    User Table
                </div>
            </h1>
            <hr style="color: black;">
            <br>
            <button class="ui primary button" data-toggle="modal" data-target="#joke">
                <i class="plus icon"></i>
                Add User
            </button>
            <?php include ('add_user_modal.php');?>
            <div class="ui segment">   
                <table cellpadding="0" cellspacing="0" border="0" class="blue ui selectable celled table" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = mysql_query("select * from tb_user") or die(mysql_error());
                    while ($row = mysql_fetch_array($query)) 
                    {
                        $user_id = $row['user_id'];
                        ?>
                        <tr class="odd gradeX">
                            <td><?php echo $row['username']; ?></td> 
                            <td>*****</td> 
                            <td><?php echo $row['firstname']; ?></td> 
                            <td><?php echo $row['lastname']; ?></td> 
                            <td width="170">
                            <div class="ui buttons">
                                <a href="edit_user.php<?php echo '?id=' . $user_id; ?>" class="ui positive button">
                                    Edit
                                </a>
                                <div class="or"></div>
                                <a href="#delete_user<?php echo $user_id; ?>" role="button"  data-toggle="modal" class="ui negative button">
                                    Delete
                                </a>
                            </div>
                            </td>
                        </tr>
									
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <?php include ('delete_user_modal.php');?>
        </div>
         <!-- /. PAGE WRAPPER  -->
    </div>
     <!-- /. WRAPPER  -->
    
    <!-- JS Scripts-->
    <!-- jQuery Js -->
   <?php include ('script.php');?>
</body>
</html>
