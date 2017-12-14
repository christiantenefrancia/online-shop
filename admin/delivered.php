<?php include ('header.php');?>	
<body>
    <div id="wrapper">
    <!--/. NAV TOP  -->
    <?php include ('nav_sidebar.php');?>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <h1 class="ui block header">
            <i class="teal shipping icon"></i>
            <div class="content">
                Orders Table
            </div>
        </h1>
        <hr style="color: black;">
        <br>
        <div class="ui two item menu">
            <a class="item active">Delivered</a>
            <a href="orders.php" class="item">Pending Orders</a>
        </div>
        <div class="ui segment">   
            <table class="blue ui selectable celled table" id="dataTables-example">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Customer Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                        <th>Status</th>
				        <th>Mode of Payment</th>				
                    </tr>
                </thead>
                <tbody>
                    <?php include ('connect.php');
                    $cart_table = mysql_query("select  * from order_details where status='Delivered'") or die(mysql_error());
                    $cart_count = mysql_num_rows($cart_table);
                    while ($cart_row = mysql_fetch_array($cart_table)) 
                    {
                        $order_id = $cart_row['orderid'];
                        $product_id = $cart_row['productID'];
                        $member_id = $cart_row['memberID'];
                        $product_query = mysql_query("select * from tb_products where productID='$product_id'") or die(mysql_error());
                        $product_row = mysql_fetch_array($product_query);
                        $member_query = mysql_query("select * from tb_member where memberID = '$member_id'")or die(mysql_error());
				        $member_row=mysql_fetch_array($member_query);
                        ?>
                        <tr>  
                            <td><?php echo $product_row['name']; ?></td>
                            <td><?php echo $member_row['Firstname']." ".$member_row['Lastname']; ?></td>
                            <td><?php echo $cart_row['price']; ?></td>
                            <td><?php echo $cart_row['qty']; ?></td>
                            <td><?php echo $cart_row['total']; ?></td>
                            <td><?php echo $cart_row['status']; ?></td>
				            <td><?php echo $cart_row['modeofpayment']; ?></td>				
                        </tr>
                        <?php } ?>
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
