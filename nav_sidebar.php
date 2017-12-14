<?php
include('header.php');
?>
<!-- <div id="sidebar" class = "pull-left">

        <h1>&nbsp;CPShoppe</h1>
                <ul>
                    <li class="">
                        <span><a href="index.php" ><i class="icon-home icon-large"></i> Home</a></span>
                    </li>
                    <li>
                        <span><a href="iPhone.php"><i class=" icon-th-large icon-large"></i> Products</a></span>
                    </li>

                    <li>
                        <span><a href="order.php"><i class="icon-shopping-cart icon-large"></i> Order </a></span>
                    </li>

                    <li>
                        <span><a href="about.php"><i class="icon-info-sign icon-large"></i> About Us</a></span>
                    </li>

					<li>
                        <span><a href="contact.php"><i class="icon-phone-sign icon-large"></i> Contact</a></span>
                    </li>

					<li>
                        <span><a href="faq.php"><i class="icon-comment icon-large"></i> FAQ </a></span>
                    </li>

                </ul>
                <?php //include('sidebar.php'); ?>
</div> -->

<div class="ui grid">
    <div class="one wide column"></div>
                <div class="seven wide column">
                   <h1>&nbsp;CPShoppe</h1>
                </div>
                <div class="seven wide column">
                    <br>
                    <div class="blue six item ui secondary pointing menu">
                        <a class="item active" href="index.php" id="home" style="font-size: 18px;" onclick="changeClass(this.id);">
                            Home
                        </a>
                        <a class="item" id="product" href="iPhone.php" style="font-size: 18px;" onclick="changeClass(this.id);">
                            Product
                        </a>
                        <a class="item" id="order" href="order.php" style="font-size: 18px;" onclick="changeClass(this.id);">
                            Order
                        </a>
                        <a class="item" id="contact" href="contact.php" style="font-size: 18px;" onclick="changeClass(this.id);">
                            Contact
                        </a>
                        <a class="item" id="about" href="about.php" style="font-size: 18px;" onclick="changeClass(this.id);">
                            About Us
                        </a>
                        <a class="item" id="faq" href="faq.php" style="font-size: 18px;" onclick="changeClass(this.id);">
                            FAQ
                        </a>
                    </div>
                </div>
                <div class="one wide column"></div>
</div>
<hr>


<script type="text/javascript">

//    window.onload = function()
//    {
//        document.getElementById("home").className = "item";
//        document.getElementById("product").className = "item";
//        document.getElementById("order").className = "item";
//        document.getElementById("contact").className = "item";
//        document.getElementById("about").className = "item";
//        document.getElementById("faq").className = "item";
//        
//        if(localStorage.getItem('status') == "true")
//        {
//            document.getElementById(localStorage.getItem('class')).className = "item active";
//        }
//        else
//            document.getElementById("home").className = "item active";
//        
//        localStorage.setItem('class',null);
//        localStorage.setItem('status',null);
//    }
//    
//    function changeClass(id)
//    {
//        localStorage.setItem('class',id);
//        localStorage.setItem('status',"true");
//    }

</script>