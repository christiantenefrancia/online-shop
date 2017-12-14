<html>

<script type="text/javascript">
    $(document).ready(function() {
        $('.nav').navgoco();
    });
</script>



<body>
	<?php include('header.php'); ?>
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
                        <a class="item" id="contact" href="contact.php" style="font-size: 18px;">
                            Contact
                        </a>
                        <a class="item" id="about" href="about.php" style="font-size: 18px;">
                            About Us
                        </a>
                        <a class="item active" id="faq" href="faq.php" style="font-size: 18px;">
                            FAQ
                        </a>
                    </div>
                </div>
                <div class="one wide column"></div>
</div>
<hr>

    <!-- <h3>Frequently Asked Question</h3>
	<div id="accordion">
		<h3>What is the mode of payment uses in this site ?</h3>
		<div><li style = "color:red;"> This site uses pay-pal transaction as the primary mode of payments.</li> </div>
		<h3>How long can the transaction will be process ?</h3>
		<div>As soon as the pay-pal account is already settled on </div>
		<h3>As customer how will I be assure that the products will be on-hand? </li> </h3>
		<div><li style = "color:red;">As the account has been already process and been deducted from the customer the product will be at the customer's hand not less than 3 day's depend's on the location.</li></div>
		<h3>Do you offer discount?</h3>
		<div><li style = "color:red;">Yes absolutely but only seasonal.</li></div>
	</div> -->
    
    <h1>&nbsp;&nbsp;Frequently Asked Questions</h1>
    <br>
    <br>
	
    <div class="ui grid">
      <div class="five wide column" style="padding-left: 30px;">
          <h2 class="blue ui header">
              <i class="help icon"></i>
              <div class="content">
                Questions
              </div>
            </h2>
        <div class="blue ui vertical fluid tabular menu">
          <a class="item active" id="1" onclick="changeDiv(this.id)">
            What is the mode of payment uses in this site ?
          </a>
          <a class="item" id="2" onclick="changeDiv(this.id)">
            How long can the transaction will be process ?
          </a>
          <a class="item" id="3" onclick="changeDiv(this.id)">
            As customer how will I be assure that the products will be on-hand ?
          </a>
          <a class="item" id="4" onclick="changeDiv(this.id)">
            Do you offer discount ?
          </a>
        </div>
      </div>
        
      <div class="ten wide column">
          <h2 class="blue ui header">
              <i class="info icon"></i>
              <div class="content">
                 Answer
              </div>
            </h2>
        <div class="blue ui segment" style="height: 25%; font-size: 20px;">
            <div class="ui raised segment">
              <a class="ui pink ribbon label">Details</a>
              <p id="div1">This site uses pay-pal transaction as the primary mode of payments.</p>
            </div>
        </div>
      </div>
        <div class="one wide column"></div>
    </div>

    <br>
    <br>
    <br>
    <?php
    include('footer_bottom.php');
    ?>

<script type="text/javascript">
    
    var active = "1";
    
    function changeDiv(id)
    {
        if(id == "1")
            document.getElementById("div1").innerHTML = "This site uses pay-pal transaction as the primary mode of payments.";
        else if(id == "2")
            document.getElementById("div1").innerHTML = "As soon as the pay-pal account is already settled on.";
        else if(id == "3")
             document.getElementById("div1").innerHTML = "As the account has been already process and been deducted from the customer the product                           will be at the customer's hand not less than 3 day's depend's on the location.";
        else
             document.getElementById("div1").innerHTML = "Yes absolutely but only seasonal.";
        
        document.getElementById(id).className = "item active";
        document.getElementById(active).className = "item";
        active = id;
    }
</script>
</body>
</html>