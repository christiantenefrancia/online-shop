<?php include('header.php'); ?>
<?php include('admin/connect.php'); 
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
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
    

    
   <!--  <div class="signup">
        <a href="signup.php" class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;Sign Up</a>
    </div> -->
    <div class="ui grid">
    <div class="sixteen wide column">
        <form method="post">
            <div class="ui two column middle aligned very relaxed stackable grid">
              <div class="column">
                <div class="ui form">
                  <h2>&nbsp;&nbsp;&nbsp;Login</h2>
                  <div class="field" style="padding-left: 65px;">
                    
                    <label>Username</label>
                    <div class="ui left icon input">
                      <input type="text" id="inputEmail" name="username" placeholder="Email" style="width: 80%; height: 40px; font-size: 15px;" >
                      <i class="blue user icon"></i>
                    </div>
                  </div>
                  <div class="field" style="padding-left: 65px;">
                    <label>Password</label>
                    <div class="ui left icon input">
                      <input type="password" id="inputPassword" name="password" placeholder="Password" style="width: 80%; height: 20%;">
                      <i class="blue lock icon"></i>
                    </div>
                  </div>
                    <div style="padding-left: 30%;">
                        <button type="submit" class="ui primary button" name="login" style="width: 50%;">
                            <i class="large long arrow right icon"></i>
                            &nbsp;&nbsp;Login
                        </button>
                    </div>
                </div>
              </div>
              <div class="ui vertical divider">
                Or
              </div>
              <div class="center aligned column">
                <a href="signup.php"><div class="ui big green labeled icon button">
                  <i class="signup icon"></i>
                  Sign Up
                </div></a>
              </div>
            </div>



                <!-- <div class="controls" style="padding-left: 30px;">
                    <input type="text" id="inputEmail" name="username" placeholder="Email" style="width: 80%; height: 40px;">
                </div>
                <h5 style="padding-left: 30px;">Password</h5>
                <div class="controls" style="padding-left: 30px;">
                    <input type="password" id="inputPassword" name="password" placeholder="Password" style="width: 80%; height: 20%;">
                </div>
            <div class="control-group">
                <div class="controls" style="padding-left: 45px;">
                    <button type="submit" class="ui primary button" name="login" style="width: 75%;"><i class="long arrow right icon"></i>&nbsp;&nbsp;Login</button>
                </div> -->
                <br>
                <?php
                if (isset($_POST['login'])) 
                {
                    function clean($str) 
                    {
                        $str = @trim($str);
                        if (get_magic_quotes_gpc()) 
                        {
                            $str = stripslashes($str);
                        }
                        return mysql_real_escape_string($str);
                    }
            										
                    $username = clean($_POST['username']);
                    $password = clean($_POST['password']);

                    $query = mysql_query("select * from tb_member where Email='$username' and Password='$password' ") or die(mysql_error());
                    $count = mysql_num_rows($query);
                    $row = mysql_fetch_array($query);
                    if ($count > 0) 
                    {
                        $_SESSION['id'] = $row['memberID'];
            	?>
                    <script>
                        window.location = 'user_iPhone.php';				
                    </script>

                    <?php
                        session_write_close();
                    } 
                    else 
                    {
    					session_write_close();
                    ?>

                    <div class="alert alert-error">Please check your username and password</div>
                    <?php 
                    }
                }
                ?>
            </div>
        </form>
    </div>
    </div>

    <br>
    <br>
 <br>
    <br>
    <br>
    <br>
    <?php 
        include('footer_bottom.php');
    ?>
</body>
</html>