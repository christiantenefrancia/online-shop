<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form  method="post" enctype="multipart/form-data">       
                    <div class="control-group">
                         <div class="ui blue medium pointing below label">
                            Name
                        </div>
                        <input type="text" name="name" class = "form-control" placeholder="Name . . .">              
                    </div>
                    <br>
                    <div class="control-group">
                        <div class="ui blue medium pointing below label">
                            Description
                        </div>
                        <div class="controls">
                            <input type="text" class = "form-control"  name="description"  placeholder="Description . . ." >
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <div class="ui blue medium pointing below label">
                            Category
                        </div>
                        <div class="controls">
                            <select type="text" name="category" class = "form-control" placeholder="Category . . ." >
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
                            <input type="text" name="originated" class = "form-control" placeholder="Origin . . .">
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <div class="ui blue medium pointing below label">
                            Price
                        </div>
                        <div class="controls">
                            <input type="text" name="price"  class = "form-control" placeholder="Price . . ." >
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <div class="ui blue medium pointing below label">
                            Quantity
                        </div>
                        <div class="controls">
                            <input type="text" name="quantity" placeholder="Quantity . . ."  class = "form-control" >
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
                    <div class = "modal-footer">
				        <button name = "go" class="ui primary button">
                            <i class="checkmark icon"></i>
                            Save
                        </button>
				        <button type="button" class="ui negative button" data-dismiss="modal">
                            <i class="remove icon"></i>
                            Close
                        </button>                                      
				    </div>
                    </form>  
				</div>
            </div>
									  
        <?php include ('connect.php');
        if (isset($_POST['go'])) 
        {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $category = $_POST['category'];
            $originated = $_POST['originated'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];

            //image
            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $image_name = addslashes($_FILES['image']['name']);
            $image_size = getimagesize($_FILES['image']['tmp_name']);
            
            move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
            $location = "upload/" . $_FILES["image"]["name"];

            mysql_query("insert into tb_products (name,description,category,originated,price,quantity,location)
                        values ('$name','$description','$category','$originated','$price','$quantity','$location')
                        ") or die(mysql_error());

            header('location:product.php');
        }
        ?>
    </div>
</div>