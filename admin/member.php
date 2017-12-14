<?php include ('session.php');?>	
<?php include ('header.php');?>	
<body>
    <div id="wrapper">
       <?php include ('nav_sidebar.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <h1 class="ui block header">
                <i class="teal users icon"></i>
                <div class="content">
                    Members Table
                </div>
            </h1>
            <hr style="color: black;">
            <br>		
            <div class="ui segment">   
                <table class="blue ui selectable celled table" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Address</th>      
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include ('connect.php');
                        $query = mysql_query("select * from tb_member") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) 
                        {
                            $member_id = $row['memberID'];
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $row['Firstname']; ?></td> 
                                <td><?php echo $row['Lastname']; ?></td> 
                                <td><?php echo $row['Email']; ?></td> 
                                <td><?php echo $row['Contact_Number']; ?></td> 
                                <td><?php echo $row['address']; ?></td> 
                                <td width="100">
                                    <a href="#delete_member<?php echo $member_id; ?>" role="button"  
                                        data-target = "#delete_member<?php echo $member_id;?> "data-toggle="modal" 
                                        class="ui negative button">
                                        Delete
                                    </a>
                                </td>
                                <!-- user delete modal -->
								<?php include ('delete_member_modal.php');?>
                                <!-- end delete modal -->
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
    <!-- /. WRAPPER  -->
    
    <!-- JS Scripts-->
    <!-- jQuery Js -->
   <?php include ('script.php');?>
</body>
</html>
