<?php
include('admin/connect.php');
include('session.php');
$get_id=$_GET['id'];

			
						function createRandomPassword() {
					$chars = "abcdefghijkmnopqrstuvwxyz023456789";
					srand((double)microtime()*1000000);
					$i = 0;
					$pass = '' ;
					while ($i <= 7) {
						$num = rand() % 33;
						$tmp = substr($chars, $num, 1);
						$pass = $pass . $tmp;
						$i++;
					}
					return $pass;
				}
				$confirmation = createRandomPassword();
						

/* mysql_query("update order_details set status='Pending',transaction_code='$confirmation',modeofpayment='Online' where MemberID='$get_id'")or die(mysql_error());
 */


?>

<?php include('header.php'); ?>

<body>
    <?php
    include('navbarfixed.php');
    ?>
      <h1 class="ui header" style="padding-left: 15px;">
            <i class="blue money icon"></i>
            <div class="content">
                Payment
            </div>
        </h1>   
                    <div class="ui segment">
                    <div class="ui grid">
                        <div class="sixteen wide column">
						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr"  method="post">
                        <div class="ui two column middle aligned very relaxed stackable grid">
                            <div class="column">
                            <div class="ui form">
                            <input type="hidden" name="cmd" value="_xclick" />
                            <input type="hidden" name="business" value="CPShoppe@gmail.com" />
                            <input type="hidden" name="item_name" value="Cellphone" />
								
                               <?php
                                    $cart_table = mysql_query("select  * from order_details where memberID='$ses_id'") or die(mysql_error());
                                    $cart_count = mysql_num_rows($cart_table);
                                    while ($cart_row = mysql_fetch_array($cart_table)) {
                                        $order_id = $cart_row['orderid'];
                                        $product_id = $cart_row['productID'];
                                        $product_query = mysql_query("select * from tb_products where productID='$product_id'") or die(mysql_error());
                                        $product_row = mysql_fetch_array($product_query);
                                        ?>
                            
                           <input type="hidden" name="item_number" value="<?php $confirmation; ?>" />

                           <?php } ?>
                           
                            <?php
                            if ($cart_count != 0) {
                                $result = mysql_query("SELECT sum(total) FROM order_details WHERE memberID='$ses_id' and status = ''") or die(mysql_error());
                                while ($rows = mysql_fetch_array($result)) {
                                    ?>
                                    <input type="hidden" name="amount" value="<?php echo $rows['sum(total)']; ?>" />
                                <?php }
                            } ?>


                            <input type="hidden" name="no_shipping" value="<?php echo 2; ?>" />
                            <input type="hidden" name="no_note" value="2" />
                            <input type="hidden" name="currency_code" value="PHP" />
                            <input type="hidden" name="lc" value="GB" />
                            
                            <input type="image" src="paypal_button.png" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" style="margin-left: 200px;" class="img-rounded" />
                            <img alt="fdff" border="0" src="paypal_button.png" width="1" height="1" />
                            <!-- Payment confirmed -->
                            <input type="hidden" name="return" value="https://tameraplazainn.x10.mx/savingreservation.php?confirmation<?php echo $confirmation; ?>" />
                            <!-- Payment cancelled -->
                            <input type="hidden" name="cancel_return" value="http://tameraplazainn.x10.mx/cancel.php" />
                            <input type="hidden" name="rm" value="2" />
                            <input type="hidden" name="notify_url" value="http://tameraplazainn.x10.mx/ipn.php" />
                            <input type="hidden" name="custom" value="any other custom field you want to pass" />
							
					
                                 </div>
              </div>
              <div class="ui vertical divider">
                Or
              </div>
              <div class="center aligned column">
                <a href="cod.php"><div class="ui large blue labeled icon button">
                  <i class="shipping icon"></i>
                  COD ( Cash On Delivery )
                </div></a>
              </div>
                                </div>
                        </form> 
                    
                    </div>
    </div>
                        </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<?php include('footer_bottom.php'); ?>
</body>
</html>



						
                               