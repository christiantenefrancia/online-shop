<?php include('header.php'); ?>
<body>
    <?php
    include('navtop.php');
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
                        <a class="item" id="product" href="iPhone.php" style="font-size: 18px;">
                            Product
                        </a>
                        <a class="item" id="order" href="order.php" style="font-size: 18px;">
                            Order
                        </a>
                        <a class="item active" id="contact" href="contact.php" style="font-size: 18px;">
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

    <div class="ui grid">
    	<!-- <div class = "panel panel-well span6 alert alert-success">	
            <form method = "POST" >
                <label for="name"><span>name</span>
                    <input type="text" name="name" id="name">
                </label>
                <label for="email2"><span>email</span>
                    <input type="text" name="Email" id="email2">
                </label>
                <label for="message"><span>message</span>
                    <textarea id="message" style = "resize:none;" name = "message" cols="30" rows="10"></textarea>
                </label>
                                    
                <button   class="btn btn-success" name = "submit" ><i class="icon-envelope icon-large"></i>&nbsp;Submit</button>
    							
            </form>
    	</div> -->
        <div class="three wide column"></div>
        <div class="eight wide column">
            <h2>Contact Us</h2>
            <form class="ui form" method="POST" style="padding-left: 40px;">
                <label>Name</label>
                    <div class="ui left icon input">
                        <input type="text" id="name" name="name" placeholder="Name" style="width: 80%; height: 40px;">
                        <i class="blue user icon"></i>
                    </div>
                    <br>
                    <br>
                <label>Email</label>
                    <div class="ui left icon input">
                        <input type="text" id="email2" name="Email" placeholder="Email" style="width: 80%; height: 40px;">
                        <i class="blue mail icon"></i>
                    </div>
                    <br>
                    <br>
                <label>Message</label>
                    <div class="field">
                        <textarea id="message" name="message"></textarea>
                    </div>

                    <br>
                    <div class="field">
                      <button class="blue ui button" type="submit" name="submit" style="width: 100%;">
                        <i class="large send icon"></i>
                        &nbsp;&nbsp;Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

	<?php 
    include ('admin/connect.php');				
	if (isset ($_POST ['submit']))					
	{
		$name = $_POST['name'];	
		$Email = $_POST['Email'];
		$message = $_POST['message'];
						
		mysql_query("insert into messages(name,Email,message) VALUES('$name','$Email','$message')");
		echo "<script>alert('Your Messages Successfully Sent');
				header ('location :../index.php');
			</script>";
	}
    ?>

    <?php
        include('footer_bottom.php');
    ?>
</body>
</html>