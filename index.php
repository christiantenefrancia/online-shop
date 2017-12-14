<?php
include('header.php');
?>
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
                        <a class="item active" href="index.php" id="home" style="font-size: 18px;">
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
                <br>
                <div class="ui grid">
                    <div class="one wide column"></div>
                    <div class="fourteen wide column">                        <!-- image slider -->
                        <div class="slider-wrapper theme-default">
                            <div id="slider" class="nivoSlider">
                                <img src="admin/images/url_2.jpg"/>
                                <img src="admin/images/url11_2.jpg"/>
                                <img src="admin/images/url56.jpg"/>
                                <img src="admin/images/url344.jpg"/>
                                <img src="admin/images/332334.jpg"/>
                                <img src="admin/images/424487.jpg"/>
                                <img src="admin/images/anime-couple-kiss-kirito-asuna-sunset-sword-art-online-hd-wallpaper-1920x1080.jpg"/>
                            </div>
                        </div>
                

                    <!-- end slider -->
			        <div class="one wide column"></div> 
    			    <h2 class="blue ui header">
                        <i class="blue tags icon"></i>
                        <div class="content">
                            Featured Items
                        </div>
                    </h2>


                <!-- </div>
                    <div id="body">
                        <div class="body">
                            <ul>
                                <li>
								
                                    <a class="figure" href="#pic1" data-toggle = "modal"><img class = "image-rounded" src="pics/HANDBAG/bags1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a class="figure" href="#pic2" data-toggle = "modal" ><img class = "image-rounded" src="pics/SCHOOL/bagS1.jpg" alt=""></a>

                                </li>
                                <li>
                                    <a class="figure" href="#pic3" data-toggle = "modal" ><img class = "image-rounded" src="pics/TRAVEL/bagT1.jpg" alt=""></a>

                                </li>
                                <li>
                                    <a class="figure"  href="#pic4" data-toggle = "modal" ><img class="img-rounded" src="pics/TRAVEL/bagT2.jpg" alt=""></a>         
                                </li>

                            </ul>

                          <?php //include ('modal_latest.php');?>
                        </div>

                    </div> -->

                    <div class="ui grid">
                        <div class="two wide column"></div>
                        <div class="fourteen wide column" style="background: ">
                            <div class="ui small images">
                                <a class="figure" href="#pic1" data-toggle="modal"><img class="ui small circular image" src="pics/0iphone-4s-black.png"></a>
                            
                                <a class="figure" href="#pic2" data-toggle="modal"><img class="ui small circular image" src="pics/lenovo-smartphone-ideaphone-k900-back-1.jpg"></a>
                            
                                <a class="figure" href="#pic3" data-toggle="modal"><img class="ui small circular image" src="pics/Cherry-Mobile-Cubix-Cube.jpg"></a>
                            
                                <a class="figure" href="#pic4" data-toggle="modal"><img class="ui small circular image" src="pics/s6-1.jpg"></a>
                            
                                <a class="figure" href="#pic5" data-toggle="modal"><img class="ui small circular image" src="pics/LG-Optimus-G-Pro-Phone-Unveiled.jpg"></a>
                             <?php include ('modal_latest.php');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <br>
    <br>
    <br>
     <?php
    include('footer_bottom.php');
    ?>
</body>
</html>