<?php include ('session.php');?>	
<?php include ('header.php');?>	
<body>
    
    <div id="wrapper">
       <?php include ('nav_sidebar.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
                            <h1 class="ui block header">
                                <i class="teal mobile icon"></i>
                                <div class="content">
                                        Product Table
                                </div>
                            </h1>
                        <hr style="color: black;">
                        <br>
							 <button class="ui primary button" data-toggle="modal" data-target="#myModal">
                                 <i class="plus icon"></i>
                                Add Product
                            </button>
                        
                        <?php include ('modal_add_product.php');?>
                        <div class="ui segment">
                            <table class="blue ui selectable celled table" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Origin</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include ('connect.php');
                                    $query = mysql_query("select * from tb_products") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $id = $row['productID'];
										
																
										$query1 = mysql_query("SELECT *,SUM(qty) as qty FROM order_details WHERE productID = '$id' AND status =                                               'Delivered'");
										$row1 = mysql_fetch_array($query1);
										$total=$row['quantity'] - $row1['qty'];
										$query2 = mysql_query ("UPDATE product set quantity = '$total' where productID = '$id'");

                                        ?>
                                        <tr>
                                            <td><?php echo $row['name']; ?></td> 
                                            <td><?php echo $row['description']; ?></td> 
                                            <td><?php echo $row['category']; ?></td> 
                                            <td><?php echo $row['originated']; ?></td> 
                                            <td style="text-align:right;"><?php echo number_format($row['price'],2); ?></td> 
                                            <td style="text-align:center;"><?php echo $total; ?></td> 
                                            <td width="50" align="center">
                                                <img src="<?php echo $row['location']; ?>" class="ui circular image" width="60" height="50">
                                            </td> 
                                            <td width="170">
                                                <div class="ui buttons">
                                                <a href="edit_product.php<?php echo '?id=' . $id; ?>" class="ui positive button">
                                                    Edit
                                                </a>
                                                    <div class="or"></div>
                                                <a href="#delete_product<?php echo $id; ?>" role="button"  
                                                    data-target = "#delete_product<?php echo $id;?>" data-toggle="modal" 
                                                   class="ui negative button">
                                                    Delete
                                                </a>
                                           </div> </td>
                                            <!-- product delete modal -->
                                   <?php include ('delete_product_modal.php');?>
                                    <!-- end delete modal -->

                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                    </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
   <?php include ('script.php');?>
</body>
</html>
