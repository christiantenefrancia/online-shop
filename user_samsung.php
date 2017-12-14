<?php include('session.php'); ?>
<?php include('header.php'); ?>

<?php include('admin/connect.php'); ?>

<body>
    <?php
    //include('navtop.php');
    include ('navbarfixed.php');
    ?>
            <div class="ui grid">
                <div class="one wide column"></div>
                <div class="seven wide column">
                   <h1>&nbsp;CPShoppe</h1>
                </div>
                <div class="seven wide column">
                    <br>
                    <div class="blue six item ui secondary pointing menu">
                        <a class="item" href="index.php" id="home" style="font-size: 18px;">
                            Home
                        </a>
                        <a class="item active" id="product" href="iPhone.php" style="font-size: 18px;">
                            Product
                        </a>
                        <a class="item" id="order" href="order.php" style="font-size: 18px;">
                            Order
                        </a>
                        <a class="item" id="contact" href="contact.php" style="font-size: 18px;">
                            Contact
                        </a>
                        <a class="item" id="about" href="about.php" style="font-size: 18px;">
                            About Us
                        </a>
                        <a class="item" id="faq" href="faq.php" style="font-size: 18px;">
                            FAQ
                        </a>
                    </div>
                </div>
                <div class="one wide column"></div>
        </div>
        <hr>
                        <h2 class="blue ui header" style="padding-left: 28px;">Hello! :)  <?php
                            $user_query = mysql_query("select * from tb_member where memberID='$ses_id'") or die(mysql_error());
                            $row = mysql_fetch_array($user_query);
                            echo $row['Firstname'] . " " . $row['Lastname'];
                            ?>
                        </h2>
                        <h2 style="padding-left: 28px;">List of Our Products</h2>
                        <div style="padding-left: 30px; padding-right: 148px;">
                            <div class="blue ui five item menu">
                              <a class="item" href="user_iPhone.php" id="iPhone">iPhone</a>
                              <a class="item" href="user_lenovo.php" id="lenovo">Lenovo</a>
                              <a class="item" href="user_lg.php" id="lg">LG</a>
                              <a class="item active" href="user_samsung.php" id="samsung">Samsung</a>
                              <a class="item" href="user_cherry.php" id="cherry">Cherry Mobile</a>
                            </div>
                        </div>
                            
                       
                        <ul class="thumbnails" style="padding-left: 8%;">
                            <?php
                            $query = mysql_query("select * from tb_products WHERE category = 'samsung'") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $id = $row['productID'];
								$qty = $row['quantity'];
								
									$query1 = mysql_query("SELECT *,SUM(qty) as qty FROM order_details WHERE productID = '$id' AND status = 'Delivered'");
									$row1 = mysql_fetch_array($query1);
									$total_qty = $qty - $row1['qty'];									
                                ?>

                                <li class="span3">
                                    <div class="thumbnail" style="background: #F8F8FF;">
                                       <h4 class="ui block header">
                                            <i class="blue mobile icon"></i>
                                            <?php echo $row['name']; ?>
                                        </h4>
                                        <hr>


                                        <a  href="#<?php echo $id; ?>"   data-toggle="modal"><img src="admin/<?php echo $row['location'] ?>" class="img-rounded" alt="" width="160" height="200"></a>


                                        <div class="ui tag labels">
                                            Price :&nbsp;
                                            <a class="ui blue label"><?php echo $row['price']; ?></a>
                                        </div>
                                     										<?php if($total_qty > 0){ ?>
                                        <a href="#add<?php echo $id; ?>"   data-toggle="modal" class="green tiny ui labeled icon button">
                                            <i class="add to cart icon"></i>
                                                Add to Cart
                                        </a>
										<?php }else{ ?>
										<span class="label label-important">Out of Stock</span>
										<?php } ?>
                                        <?php include('order_modal.php'); ?>
                                    <?php } ?>
                                    <?php
                                    if (isset($_POST['order'])) {
                                        $member_id = $_POST['member_id'];
                                        $quantity = $_POST['quantity'];
                                        $price = $_POST['price'];
                                        $product_id = $_POST['product_id'];
                                        $total = $quantity * $price;
                                        mysql_query("insert into order_details (memberID,qty,productID,price,total,status) values('$member_id','$quantity','$product_id','$price','$total','Pending')") or die(mysql_query);
                                     /*    header('location:user_wines.php'); */
										?>
												<script>
                                                    alert("Product has been added.");
								                    window.location = 'user_samsung.php';				
								                </script>
										<?php
                                    }
                                    ?>
                        </ul>

                    </div>
        <?php include('footer_bottom.php'); ?>
</body>



</html>