<!-- order modal -->
<form method="POST">
    <div id="add<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
        </div>
        <div class="modal-body">
            <!-- hidden -->
            <input type="hidden" name="product_id" value="<?php echo $id; ?>">
            <input type="hidden" name="member_id" value="<?php echo $ses_id; ?>">
            <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
            <!-- end hidden -->
            <div class="span2">
                <img src="admin/<?php echo $row['location']; ?>" width="200" height="200" class="img-rounded">      
            </div>
            <div class="span3">
                <div class="ui disabled input"> <p>&nbsp;Name:</p></div>   
                <div class="ui teal label" style="width: 90%; font-size: 16px;"><?php echo $row['name'] ?></div>
                <br>
                <br>
                <div class="ui disabled input"> <p>&nbsp;Price:</p></div>
                <div class="ui teal label" style="width: 90%; font-size: 16px;">P&nbsp;<?php echo $row['price'] ?></div>
                <br>
                <br>
                <div class="ui disabled input"> <p>&nbsp;Quantity:</p></div>
                <div><input id="cnet" class="ui input" max="<?php echo $total_qty; ?>" type="number" style="width: 90px; height: 30px;" name="quantity" value="1" required></div>
                <br>
				<div class="ui disabled input">In stock Item: </div> 
                <label class="ui teal label">&nbsp;<?php echo $total_qty; ?></label>
                <br>
				<br>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="order" class="ui positive button">
                <i class="plus icon"></i>
                    Add
            </button>
            <button class="ui negative button" name="order" data-dismiss="modal" aria-hidden="true">
                <i class="remove icon"></i>
                    Cancel
            </button>
        </div>
        </li>
</form>
<!-- picture modal -->
<div id="<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    </div>
    <div class="modal-body">

        <div class="span2">

            <img src="admin/<?php echo $row['location']; ?>" width="200" height="200" class="img-rounded">      
        </div>
        <div class="span3">
            <div class="ui disabled input"> <p>&nbsp;Description:</p></div>   
            <div class="ui teal label" style="width: 90%; font-size: 16px;"><?php echo $row['description'] ?></div>
            <br>
            <br>
            <div class="ui disabled input"> <p>&nbsp;Origin:</p></div>
            <div class="ui teal label" style="width: 90%; font-size: 16px;"><?php echo $row['originated'] ?></div>
            <br>
            <br>
            <div class="ui disabled input"> <p>&nbsp;Price:</p></div>
            <div class="ui teal label" style="width: 90%; font-size: 16px;">P&nbsp;<?php echo $row['price'] ?></div>
        </div>





    </div>
    <div class="modal-footer">
        <button class="ui negative button" data-dismiss="modal" aria-hidden="true">
            <i class="remove icon"></i>
            Close
        </button>

    </div>
</div>
<!-- end modal -->