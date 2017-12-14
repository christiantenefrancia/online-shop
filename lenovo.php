<?php include('header.php'); ?>
<?php include('admin/connect.php'); ?>


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

    <br>
    <br>

    <h3>&emsp;&emsp;List of Our Products</h3>
   <div style="padding-left: 30px; padding-right: 148px;">
    <div class="blue ui five item menu">
      <a class="item" href="iPhone.php" id="iPhone">iPhone</a>
      <a class="item active" href="lenovo.php" id="lenovo">Lenovo</a>
      <a class="item" href="lg.php" id="lg">LG</a>
      <a class="item" href="samsung.php" id="samsung">Samsung</a>
      <a class="item" href="cherry.php" id="cherry">Cherry Mobile</a>
    </div>
</div>
    <br>

    <ul class="thumbnails" style="padding-left: 8%;">
        <?php
        $query = mysql_query("select * from tb_products WHERE category = 'lenovo'") or die(mysql_error());
        while ($row = mysql_fetch_array($query)) 
        {
            $id = $row['productID'];
            ?>
                                
            <li class="span3">
                <div class="thumbnail">
                    <img data-src="holder.js/300x200" alt="">
                    <div class="alert alert-info"><?php echo $row['name']; ?></div>
                    <hr>
                    <a  href="#<?php echo $id; ?>" data-toggle="modal"><img src="admin/<?php echo $row['location'] ?>" alt="" width="160" height="200"></a>
                    <div class="ui tag labels">
                        Price:&nbsp;
                        <a class="ui blue label"> P&nbsp;<?php echo $row['price']; ?></a>
                    </div>
                </div>
            </li>

            <!-- picture modal -->
            <div id="<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header"></div>
                <div class="modal-body">
                    <div class="span2">
                        <img src="admin/<?php echo $row['location']; ?>" width="200" height="200" class="img-rounded">      
                    </div>
                    <div class="span3" style="padding-left: 10px;">
                        <p>Name</p>
                        <div class="alert alert-success">&nbsp;&nbsp;<?php echo $row['name'] ?></div>
                        <p>Description</p>
                        <div class="alert alert-success">&nbsp;&nbsp;<?php echo $row['description'] ?></div>
                        <p>Origin</p>
                        <div class="alert alert-success">&nbsp;&nbsp;&nbsp;&nbsp;Made in: <?php echo $row['originated'] ?> </div>
                        <p>Price</p>
                        <div class="alert alert-success">&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['price'] ?></div>    
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="ui negative button" data-dismiss="modal" aria-hidden="true">
                        <i class="remove icon"></i>Close</button>
                </div>
            </div>
        <?php } ?>
        <!-- end modal -->
    </ul>
                    <!-- <div id="footer">
                        <?php //include('footer.php'); ?>
                    </div> -->
    <?php
    include('footer_bottom.php');
    ?>
</body>
</html>