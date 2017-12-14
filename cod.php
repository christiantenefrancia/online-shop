<?php
include('admin/connect.php');
include('session.php');
?>

<?php include('header.php'); ?>

<body>
    <?php
    include('navbarfixed.php');
    ?>
								
   <br>
    <div class="ui two column centered grid">
		<div class="column">
			<h1 class="blue ui header">
				<i class="shipping icon"></i>
				<div class="content">
					Cash On Delivery
				</div>
			</h1>
			<div class="ui large floating message" style="background: white;">
				<p style="padding-left: 40px;">
					<p style="font-size: 24px;"><strong>You have chosen to pay Cash On Delivery</strong></p>
                    <p style="font-size: 15px;">You need to pay a total of <strong>P
                 <?php
                 $cart_table = mysql_query("select  * from order_details where memberID='$ses_id' and status='Pending'") or die(mysql_error());
                $cart_count = mysql_num_rows($cart_table);
                $address = mysql_query("select address from tb_member where memberID='$ses_id'") or die(mysql_error());
                $contact = mysql_query("select Contact_Number from tb_member where memberID='$ses_id'") or die(mysql_error());
                        if ($cart_count != 0) {
                            $result = mysql_query("SELECT sum(total) FROM order_details WHERE memberID='$ses_id' and status = 'Pending'") or die(mysql_error());
                            while ($rows = mysql_fetch_array($result)) {
                                ?>
                            
                            <?php echo $rows['sum(total)']; ?>  
                            <?php }
                            ?>
                            <?php
                        }
                        ?>
                   </strong> by cash to the shipping agent at the time of delivery.
                </p>
				</p>
            <br>
            <br>
            <h3 class="ui header">
                <i class="home icon"></i>
                <div class="content">
                    Delivery Address
                </div>
            </h3>
            <p style="font-size: 20px;">
            <?php
                while ($row = mysql_fetch_array($address))
                {
            ?>
                    <?php echo $row['address']; ?>
                <?php 
                }
            ?>
                </p>
            <br>
            <p>Primary Contact Number: &nbsp;&nbsp;&nbsp;<strong>
                <?php
                while ($row = mysql_fetch_array($contact))
                {
            ?>
                    <?php echo $row['Contact_Number']; ?>
                <?php 
                }
            ?></strong></p>
            
            <br>
            <br>
            <hr>
            
            <a href="#cod" role="button"  data-toggle="modal" class="blue small ui labeled icon button right floated">
                <i class="check icon"></i>
                Confirm
            </a>
            
            <div id="cod" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <form method="post">
                <?php
                    if (isset($_POST['submit'])) 
                    {
                        $cart_table = mysql_query("select  * from order_details where memberID='$ses_id' and status='Pending'") or die(mysql_error());
                        $contact = mysql_query("select Contact_Number from tb_member where memberID='$ses_id'") or die(mysql_error());
                
                         while ($cart_row = mysql_fetch_array($cart_table)) 
                         {
                            $order_id = $cart_row['orderid'];
                        
                            mysql_query("update order_details set status='Delivered', modeofpayment='COD' where orderid='$order_id'")or                                               die(mysql_error());
                         }
                         ?>
                
                            <script type="text/javascript">
                            alert("Thank You for Purchasing! ! !");
                            window.location= "user_iPhone.php";
                        </script>
                            
                         <?php   
                        }
?>
                
                <?php
                include('admin/connect.php');
                 $cart_table = mysql_query("select  * from order_details where memberID='$ses_id'") or die(mysql_error());
                $contact = mysql_query("select Contact_Number from tb_member where memberID='$ses_id'") or die(mysql_error());
                
                 while ($cart_row = mysql_fetch_array($cart_table)) 
                 {
                        $order_id = $cart_row['orderid'];
                 }
                ?>
                            <div class="modal-header">
                            </div>
                            <div class="modal-body">
							
				<p style="font-size: 20px;"><strong>Just one more step and you are done . . .</strong></p>
                
			     <p style="font-size: 16px;">Enter the mobile confirmation code sent to you via SMS to &nbsp;<strong>
                <?php
                while ($row = mysql_fetch_array($contact))
                {
            ?>
                    <?php echo $row['Contact_Number']; ?>
                <?php 
                }
            ?></strong></p>			
			<br>
				        <input type="text" placeholder="confirmation code" class="ui input" style="height: 35px;">
                            &nbsp;&nbsp;&nbsp;&nbsp;    
                                <button class="ui blue button" name="submit" style="height: 35px;">
                                    Submit
                                </button>
                                <br>
                                <br>
                            <p style="font-size: 15px;">Not received confirmation code SMS ? &nbsp;<a href="#">Resend</a></p>
                            </div>
                            <div class="modal-footer">
                                <button class="ui negative button" data-dismiss="modal" aria-hidden="true">
                                    <i class="remove icon"></i>
                                    Cancel
                                </button>
                            </div>
                    </form>
            </div>
            <br>
            <br>
			</div>
		</div>
    </div>
    
   
    <br>
    <br>
    <br>
    <br>
<?php include('footer_bottom.php'); ?>
</body>



						
                               