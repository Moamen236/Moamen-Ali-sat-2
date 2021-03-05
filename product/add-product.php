<?php include "header.php"?>

<form method="POST" action="handle-add-product.php">
    <div class="form-group">
        <label>Name*</label>
        <input type="text" class="form-control" name="username">
    </div>
    <div class="form-group">
        <label>price*</label>
        <input type="text" class="form-control" name="price">
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" rows="3" name="description"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Submit" name="submit"></input>
</form>
</div>


</body>

</html>