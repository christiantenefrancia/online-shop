<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <title>
      Surf N' Shop
    </title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="css/semantic.css" />
</head>
    
    
<body style="background-image: url('images/Laptop-Keyboard-Hd-Screen-Background.jpg');">    
<br>
<br>
<br>
<br>
<br>
<br>
<form method = "post" style="width: 25%;">
<!--
    <h1>Administrator Log in</h1>
    <div class="inset">
        <label for="email">USERNAME</label>
        <div class="ui input">
            <input type="text" name="username" id="email" placeholder="Username">
        </div>
      
        <label for="password">PASSWORD</label>
        <div class="ui input">
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
  </div>
    
   <center>
       <p class="p-container" >
            <input type="submit" name="go" id="go" value="Log in">
        </p>
  </center>
-->
    <div class="ui segment">
        <a href="../index.php"><i class="big blue arrow left icon"></i></a>
      <h2 class="ui right floated header">Administrator Log in</h2>
        <div class="ui clearing divider"></div>
        <div class="field" style="padding-left: 50px;">
            <label>Username</label>
            <div class="ui left icon input">
              <input type="text" name="username" id="email" placeholder="Username">
              <i class="blue user icon"></i>
            </div>
          </div>
      <div class="field" style="padding-left: 50px;">
          <br>
        <label>Password</label>
        <div class="ui left icon input">
          <input type="password" name="password" id="password" placeholder="Password">
          <i class="blue lock icon"></i>
        </div>
      </div>
        <br>
        <div style="padding-left: 85px;">
            <button type="submit" class="ui blue submit button" name="go" id="go" style="width: 60%;">Login</button>
        </div>
    </div>   
</form>
    
    
<?php
include('connect.php');
    
    if(isset($_POST['go']))
    {						
        $username=$_POST['username'];
        $password=$_POST['password'];
								
        $result = mysql_query("SELECT * FROM tb_user WHERE username = 	'$username' AND password = '$password'") or die(mysql_error());	
        $row = mysql_fetch_array($result);
        $numberOfRows = mysql_num_rows($result);				
																
        if ($numberOfRows == 0) 
        {
            echo " <br><center><font color= 'red' size='3'>Please fill up the fields correctly</center></font>";
        } 
        else if ($numberOfRows > 0)
        {
            session_start();
            $_SESSION['id'] = $row['user_id'];
            header("location:product.php");	
        }	
							
    }
?>
</body>
</html>
