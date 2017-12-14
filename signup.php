<?php include('header.php'); ?>
<?php include('admin/connect.php'); ?>
<body>
    <?php include('navtop.php'); ?> 
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
                        <a class="item active" id="order" href="order.php" style="font-size: 18px;">
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
        
                        <?php
                        if (isset($_POST['save'])) 
                        {
                            $pass_error = '';
                            $e_firstname = '';
                            $e_lastname = '';
                            $e_password = '';
                            $e_rpassword = '';
                            $e_address = '';
                            $e_cn = '';
                            $e = '';


                            $password = $_POST['password'];
                            $rpassword = $_POST['rpassword'];
                            $firstname = $_POST['firstname'];
                            $lastname = $_POST['lastname'];
                            $eaddress = $_POST['eaddress'];
                            $address = $_POST['address'];
                            $cn = $_POST['cn'];

            $pattern = "/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i";
                                        //Input Validations

                            if (!preg_match($pattern, $eaddress)) {
                                $e = "Invalid Email Address";
                            }

                            if ($firstname == "") {
                                $e_firstname = 'FirstName is Required';
                            }
                            if ($lastname == "") {
                                $e_lastname = 'LastName is Required';
                            }
                            if ($address == "") {
                                $e_address = 'Address is Required';
                            }

                            if ($cn == "") {
                                $e_cn = 'Contact Number is Required';
                            }
                            if ($password != $rpassword) {
                                $pass_error = 'Password Does Not Match';
                            } else {
                                $pass_error = '';
                            }
                            if ($password == "") {
                                $e_password = 'Password is Required';
                            }
                            if ($rpassword == "") {
                                $e_rpassword = 'Re Type Password';
                            }


                            if ($firstname != "" && $password == $rpassword && $lastname != "" && $eaddress != "" 
                                && $cn != "" && $address != "" && preg_match($pattern,$eaddress) ) 
                            {
                                mysql_query("insert into tb_member (Firstname,Lastname,Email,Password,Contact_Number,address) values
                                         ('$firstname','$lastname','$eaddress','$password','$cn','$address')") or die(mysql_error());
                        ?>

                        <script type="text/javascript">
                            alert("You are Succesfully Register Please Login Your Account");
                            window.location= "order.php";
                        </script>

                        <?php
                            }
                        }
                        ?>
            <div class="ui grid">
            <div class="five wide column"></div>
            <div class="six wide column">
                <div class="ui segment">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                        <h2 class="ui block header">
                                <div class="content">
                                        Sign Up
                                </div>
                                <i class="blue signup icon"></i>
                            </h2>
                            <div class="control-group">
                                <div class="ui blue medium pointing below label">
                                       Email Address
                                    </div>
                                <br>
                                <input type="email" name="eaddress" id="inputEmail"  placeholder="Email Address . . ." style="width: 70%; height: 12%;">
                                                <?php if (isset($_POST['save'])) { ?>
                                                <div class="wrongs"> <?php echo $e; ?></div>
                                                <?php } ?>                                                  
                            </div>
                        
                            <div class="control-group">
                                <div class="ui blue medium pointing below label">
                                        Password
                                    </div>
                                <br>
                            <input type="password" name="password" id="inputPassword" placeholder="Password . . ." style="width: 70%; height: 12%;">
                                        <?php if (isset($_POST['save'])) { ?>
                                    <div class="wrongs"> <?php echo $e_password; ?></div>
                                        <?php } ?>
                            </div>
                        
                            <div class="control-group">
                                <div class="ui blue medium pointing below label">
                                        Re-type password
                                    </div>
                                <br>
                    <input type="password" name="rpassword" id="inputPassword" placeholder="Re-Type Password . . ." style="width: 70%; height: 12%;">
                                                    <!-- error -->
                                    <?php if (isset($_POST['save'])) { ?>
                                    <div class="wrongs"><?php echo $e_rpassword; ?> </div>
                                    <?php } ?>
                                    <?php if (isset($_POST['save'])) { ?>
                                    <div class="wrongs"><?php echo $pass_error; ?></div>
                                    <?php } ?>
                                                <!-- error -->
                            </div>
                        
                            <div class="control-group">
                                <div class="ui blue medium pointing below label">
                                        Firstname
                                    </div>
                                <br>
            <input type="text" name="firstname" id="inputEmail" placeholder="Firstname . . ." class="form-control" style="width: 70%; height: 12%;">
                                    <?php if (isset($_POST['save'])) { ?>
                                    <div class="wrongs"><?php echo $e_firstname; ?> </div>
                                    <?php } ?>
                            </div>
                        
                            <div class="control-group">
                                <div class="ui blue medium pointing below label">
                                       Lastname
                                    </div>
                                <br>
                                    <input type="text" name="lastname" id="inputEmail" placeholder="Lastname . . ." style="width: 70%; height: 12%;">
                                    <?php if (isset($_POST['save'])) { ?>
                                    <div class="wrongs"><?php echo $e_lastname; ?> </div>
                                    <?php } ?>
                            </div>

                            <div class="control-group">
                                <div class="ui blue medium pointing below label">
                                       Address
                                    </div>
                                <br>
                                    <input type="text" name="address" id="inputEmail" placeholder="Address . . ." style="width: 70%; height: 12%;">
                                    <?php if (isset($_POST['save'])) { ?>
                                    <div class="wrongs"><?php echo $e_address; ?> </div>
                                    <?php } ?>
                            </div>

                            <div class="control-group">
                                <div class="ui blue medium pointing below label">
                                        Contact Number
                                    </div>
                                <br>
                                    <input type="text" name="cn" id="inputEmail" placeholder="Contact Number . . ." style="width: 70%; height: 12%;">
                                    <?php if (isset($_POST['save'])) { ?>
                                    <div class="wrongs"><?php echo $e_cn; ?> </div>
                                    <?php } ?>
                            </div>

                            <div class="control-group" style="padding-left: 42%;">
                                <button name="save" class="green ui labeled icon button">
                                    <i class="signup icon"></i>
                                    Sign Up
                                </button>
                            </div>
                        </form>
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