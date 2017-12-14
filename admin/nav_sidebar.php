<!--
 <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="#"><i class="fa fa-dashboard"></i> Menu's</a>
                    </li>
                    <li>
                        <a href="product.php"><i class="fa fa-gear"></i> Products</a>
                    </li>
					<li>
                        <a href="member.php"><i class="fa fa-users"></i> Members</a>
                    </li>
					<li>
                        <a href="messages.php"><i class="fa fa-envelope"></i> Messages</a>
                    </li>
                    <li>
                        <a href="orders.php"><i class="fa fa-truck"></i> Order</a>
                    </li>
					<li>
                        <a href="user.php"><i class="fa fa-user"></i> User </a>
                    </li>
					   <li>
                        <a href="logout.php"><i class="fa fa-user"></i> Log out </a>
                    </li>
  
                </ul>

            </div>

        </nav>-->

<?php 
    include('connect.php');

    $result = mysql_query("SELECT productID FROM tb_products");
    $prod_rows = mysql_num_rows($result);

    $result = mysql_query("SELECT memberID FROM tb_member");
    $member_rows = mysql_num_rows($result);

    $result = mysql_query("SELECT message_id FROM messages");
    $message_rows = mysql_num_rows($result);

    $result = mysql_query("SELECT orderid FROM order_details");
    $order_rows = mysql_num_rows($result);

    $result = mysql_query("SELECT user_id FROM tb_user");
    $user_rows = mysql_num_rows($result);

    if($order_rows == null)
        $order_rows = 0;

     if($prod_rows == null)
        $prod_rows = 0;
    
    if($member_rows == null)
        $member_rows = 0;

    if($message_rows == null)
        $message_rows = 0;
    
    if($user_rows == null)
        $user_rows = 0;
?>

<div class="ui left fixed vertical menu" style="width: 17%;">
		<div class="ui large floating message">
			<div class="item" style="background: teal;">
		    	<img class="ui small circular image" src="images/45589_tokyo_ghoul.jpg">
		    	<br>
		    	<label style="color: white;">Administrator</label>
		    	<br>
		    	<label style="color: white; font-size: 11px;">admin@gmail.com</label>
		  	</div>
		</div>

	  	<a class="item"  href="product.php">
	  		<h4 class="ui header">
			  <i class="blue big mobile icon"></i>
			  <div class="content">
			    Product
                  <label style="padding-left: 85px;"><div class="blue ui label"><?php echo $prod_rows; ?></div></label>
			  </div>
			</h4>
            </a>    

	  	<a class="item"  href="member.php">
	  		<h4 class="ui header">
			  <i class="blue big users icon"></i>
			  <div class="content">
			    Members
                  <label style="padding-left: 77px;"><div class="blue ui label"><?php echo $member_rows; ?></div></label>
			  </div>
			</h4>
            </a>

	  	<a class="item"  href="messages.php">
	  		<h4 class="ui header">
			  <i class="blue big mail icon"></i>
			  <div class="content">
			    Messages
                   <label style="padding-left: 77px;"><div class="blue ui label"><?php echo $message_rows; ?></div></label>
			  </div>
			</h4>
	  	</a>
    
        <a class="item"  href="delivered.php">
	  		<h4 class="ui header">
			  <i class="blue big shipping icon"></i>
			  <div class="content">
			    Orders
                   <label style="padding-left: 95px;"><div class="blue ui label"><?php echo $order_rows; ?></div></label>
			  </div>
			</h4>
	  	</a>
    
        <a class="item"  href="user.php">
	  		<h4 class="ui header">
			  <i class="blue big user icon"></i>
			  <div class="content">
			    User
                   <label style="padding-left: 111px;"><div class="blue ui label"><?php echo $user_rows; ?></div></label>
			  </div>
			</h4>
	  	</a>
    
        <a class="item"  href="logout.php">
	  		<h4 class="ui header">
			  <i class="blue big sign out icon"></i>
			  <div class="content">
			    Logout
			  </div>
			</h4>
	  	</a>
</div>
