<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include 'admin/connect.php'; ?>
<body>
    <?php
   // include('navtop.php');
    include ('navbarfixed.php');
    ?>
    <br>
    <br>
                <div class="ui grid">
                    <div class="three wide column" style="padding-left: 35px;">
                        <h1 class="ui header">
                                <i class="icon-shopping-cart icon-large"></i>
                                <div class="content">
                                        &nbsp;User's Cart
                                </div>
                            </h1>
                    </div>
                    <div class="eleven wide column"></div>
                    <div class="two wide column">
                        <a href="user_iPhone.php">
                            <button class="blue small ui labeled icon button">
                            <i class="reply all icon"></i>
                                Back 
                  
                            </button> 
                        </a>
                    </div>
                </div>
    
                            
                        <div class="ui segment"> 
                            <table class="blue ui selectable celled table">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $cart_table = mysql_query("select  * from order_details where memberID='$ses_id' and status='Pending'") or die(mysql_error());
                                    $cart_count = mysql_num_rows($cart_table);
                                    while ($cart_row = mysql_fetch_array($cart_table)) {
                                        $order_id = $cart_row['orderid'];
                                        $product_id = $cart_row['productID'];
                                        $product_query = mysql_query("select * from tb_products where productID='$product_id'") or die(mysql_error());
                                        $product_row = mysql_fetch_array($product_query);
                                        ?>

                                        <tr>
                                            <td><?php echo $product_row['name']; ?></td>
                                            <td><?php echo $cart_row['price']; ?></td>
                                            <td><?php echo $cart_row['qty']; ?></td>
                                            <td><?php echo $cart_row['total']; ?></td>
                                            <td width="160">
                                                <a href="#orderdel<?php echo $order_id; ?>" role="button" 
                                                   data-toggle="modal" class="small negative ui button">
                                                    <i class="remove icon"></i>
                                                        Remove
                                                </a>
                                            </td>
                                        </tr>
                                        <!-- product delete modal -->
                                    <div id="orderdel<?php echo $order_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            <p style="font-size: 18px;">Are you Sure you Want to <strong>Remove &nbsp;</strong>this item ?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="ui positive button" href="romove_item.php<?php echo '?id=' . $order_id; ?>" >
                                                <i class="checkmark icon"></i>
                                                    Yes
                                            </a>
                                            <button class="ui negative button" data-dismiss="modal" aria-hidden="true">
                                                <i class="remove icon"></i>
                                                    No
                                            </button>
                                        </div>
                                    </div>
                                    <!-- end delete modal -->

                                <?php } ?>

                                </tbody>
                            </table>
                            <br>
                            <?php
                        if ($cart_count != 0) {
                            $result = mysql_query("SELECT sum(total) FROM order_details WHERE memberID='$ses_id' and status = 'Pending'") or die(mysql_error());
                            while ($rows = mysql_fetch_array($result)) {
                                ?>
                            
                            <div style="padding-left: 86%;">
                                <a class="blue large ui label">
                                    <i class="money icon"></i>
                                    Total :&nbsp;<?php echo $rows['sum(total)']; ?>  
                                </a>
                            </div> 
                            <?php }
                            ?>
                            <?php
                        }
                        ?>
                          <br>  
                            <a href="#order" role="button"  data-toggle="modal" class="green ui labeled icon button right floated">
                                <i class="shipping icon"></i>Order Payments?
                            </a>

                        </div>


                        <!-- product order modal -->
                        <div id="order" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-header">
                            </div>
                            <div class="modal-body">
							<h4 class="blue ui block header">
                                <i class="money icon"></i>
                                <div class="content">Payment</div>
                            </h4>
							 <p style="font-size: 18px;">By Continue you Agree to the&nbsp;<strong>Terms and Condition &nbsp;          </strong>of this company.</p>
						
			
					
							<a  href="pay.php<?php echo '?id='.$ses_id; ?>">
                                <button class="ui blue button">
                                    <i class="forward mail icon"></i>
                                    Continue ?
                                </button>
                            </a>
                            </div>
                            <div class="modal-footer">
                                <button class="ui negative button" data-dismiss="modal" aria-hidden="true">
                                    <i class="remove icon"></i>
                                    Cancel
                                </button>
                            </div>
                        </div>
                        <!-- end delete modal -->
    <br>
    <br>
<?php include('footer_bottom.php'); ?>
</body>
</html>