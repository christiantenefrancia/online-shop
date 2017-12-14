<?php include ('session.php');?>	
<?php include ('header.php');?>	
<body>
    <div id="wrapper">
       <?php include ('nav_sidebar.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <h1 class="ui block header">
                <i class="teal mail icon"></i>
                <div class="content">
                    Messages Table
                </div>
            </h1>
            <hr style="color: black;">
            <br>	
            <div class="ui segment">   
                <table cellpadding="0" cellspacing="0" border="0" class="blue ui selectable celled table" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Name of Sender</th>
                            <th>Email Address</th>
                            <th>Message</th>      
                        </tr>
                    </thead>
                    <tbody>
                        <?php include ('connect.php');
                        $query = mysql_query("select * from messages ORDER BY message_id DESC;") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) 
                        {
                            $message_id = $row['message_id'];
                            ?>
                            <tr>
                                <td style = "width:150px";><?php echo $row['name']; ?></td> 
                                <td style = "width:200px";><?php echo $row['Email']; ?></td> 
                                <td style = "width:600px;"><?php echo $row['message']; ?></td> 	
				                <?php } ?>
				            </tr>
                    </tbody>
                </table>
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
