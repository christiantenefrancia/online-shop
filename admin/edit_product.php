<?php include ('session.php');?>	
<?php
include('header.php');
$get_id = $_GET['id'];
?>
<body>
    <div id="wrapper">
    <!--/. NAV TOP  -->
    <?php include ('nav_sidebar.php');?>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div class="ui segment" style="width: 45%;">    
            <?php include ('connect.php');
            $query = mysql_query("select * from tb_products where productID='$get_id'") or die(mysql_error());
            $row = mysql_fetch_array($query);
            ?>			
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="control-group">
                    <div class="ui blue medium pointing below label">
                        Name
                    </div>
                    <div class="controls">
                        <input type="text" name="name" id="inputEmail" class = "form-control" value="<?php echo $row['name']; ?>">
                    </div>
                </div>
                <br>
                <div class="control-group">
                    <div class="ui blue medium pointing below label">
                        Description
                    </div>
                    <div class="controls">
                        <input type="text"  name="description"  class = "form-control" value="<?php echo $row['description']; ?>">
                    </div>
                </div>
                <br>
                <div class="control-group">
                    <div class="ui blue medium pointing below label">
                        Category
                    </div>
                    <div class="controls">
                        <select type="text" name="category" class = "form-control" >
                            <option><?php echo $row['category'];  ?></option>
				            <option></option>
                            <option>CherryMobile</option>
                            <option>iPhone</option>
                            <option>Lenovo</option>
                            <option>LG</option>
                            <option>Samsung</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="control-group">
                    <div class="ui blue medium pointing below label">
                        Origin
                    </div>
                    <div class="controls">
                        <input type="text" name="originated" class = "form-control"  value="<?php echo $row['originated']; ?>">
                    </div>
                </div>
                <br>
                <div class="control-group">
                    <div class="ui blue medium pointing below label">
                        Price
                    </div>
                    <div class="controls">
                        <input type="text" name="price"  class = "form-control" value="<?php echo $row['price']; ?>">
                    </div>
                </div>
                <br>
                <div class="control-group">
                    <div class="ui blue medium pointing below label">
                       Quantity
                     </div>
                    <div class="controls">
                        <input type="text" name="quantity" class = "form-control"  value="<?php echo $row['quantity']; ?>">
                    </div>
                </div>
                <br>
                <div class="control-group">
                    <div class="ui blue medium pointing below label">
                        Image
                    </div>
                    <div class="controls">
                        <input type="file" name="image"> 
                    </div>
                </div>				
                <hr/>
                <div class="control-group">
                    <div class="controls" style="padding-left: 275px;">
                        <button type="submit" name="update" class="ui positive button">
                            <i class="edit icon"></i>Update
                        </button>
                        <span><a href = "product.php" class = "ui negative button"> 
                            <i class="remove icon"></i>Cancel</a>
                        </span>
                    </div>
                </div>
            </form>

    <?php
    if (isset($_POST['update'])) 
    {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $originated = $_POST['originated'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_name = addslashes($_FILES['image']['name']);
        $image_size = getimagesize($_FILES['image']['tmp_name']);

        move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
        $location = "upload/" . $_FILES["image"]["name"];

        mysql_query("update tb_products set             name='$name',description='$description',category='$category',originated='$originated',price='$price',quantity='$quantity',location='$location' where productID='$get_id'") or die(mysql_query());
        header('location:product.php');
    }
    ?>
        </div>
    </div>
</div>
     <!-- /. WRAPPER  -->
    
    <!-- JS Scripts-->
    <!-- jQuery Js -->
   <?php include ('script.php');?>
</body>
</html>
