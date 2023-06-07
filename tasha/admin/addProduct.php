<?php
include('headerAdmin.php');
?>
<?php
 require "model/config.php";
 require "model/add-product.php";
?>
<div class="pr-5 pl-5 pt-2 pb-2 ">
<h1 class="h3 mb-4 text-gray-800">Add Product</h1>
<form class="row " action="" method="post">
    <div class="col-md-6">
        <label for="name" class="form-label">Items name:</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="col-md-6">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" name="price" required>
    </div>
    <div class="col-6">
        <label for="image" class="form-label">Image</label>
        <input type="text" class="form-control" name="image" required>
    </div>
    <div class="col-6">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="number" class="form-control" name="quantity"  required>
    </div>
    <div class="col-md-6">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" name="description"  required>
    </div>
    <div class="col-md-6">
        <label for="made" class="form-label">Made</label>
        <input type="text" class="form-control" name="made" required>
    </div>
    <div class="col-md-6">
        <label for="discount" class="form-label">Discount</label>
        <input type="number" class="form-control" name="discount" >
    </div>
    <div class="col-md-6">
        <label for="category" class="form-label">Category</label>
        <input type="text" class="form-control" name="category" required>
    </div>
    <div class="col-12 mt-4">
        <input type="submit" value="Add" name="add" class="btn btn-primary">
        <input type="submit" value="Cancel" name="cancel" class="btn btn-danger">
    </div>
</form>
</div>

<?php
include('footerAdmin.php');
?>