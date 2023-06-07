<?php
include('headerAdmin.php');
?>
<?php
require "model/config.php";
require "model/update-product.php";
?>
<div class="pr-5 pl-5 pt-2 pb-2 ">
    <h1 class="h3 mb-4 text-gray-800">Update Product</h1>
    <form class="row " action="" method="post">
        <div class="col-md-6">
            <label for="name" class="form-label">Items name:</label>
            <input type="text" name="name" class="form-control" value="<?php echo isset($product['name']) ? $product['name'] : null; ?>" required>
        </div>
        <div class="col-md-6">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" name="price" value="<?php echo isset($product['price']) ? $product['price'] : null; ?>" required>
        </div>
        <div class="col-6">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" name="image" value="<?php echo isset($product['image']) ? $product['image'] : null; ?>" required>
        </div>
        <div class="col-6">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" name="quantity" value="<?php echo isset($product['quantity']) ? $product['quantity'] : null; ?>" required>
        </div>
        <div class="col-md-6">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" value="<?php echo isset($product['description']) ? $product['description'] : null; ?>" required>
        </div>
        <div class="col-md-6">
            <label for="made" class="form-label">Made</label>
            <input type="text" class="form-control" name="made" value="<?php echo isset($product['made_in']) ? $product['made_in'] : null; ?>" required>
        </div>
        <div class="col-md-6">
            <label for="discount" class="form-label">Discount</label>
            <input type="number" class="form-control" name="discount" value="<?php echo isset($product['discount']) ? $product['discount'] : null; ?>">
        </div>
        <div class="col-md-6">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" name="category" value="<?php echo isset($product['categories_type_id']) ? $product['categories_type_id'] : null; ?>" required>
        </div>
        <div class="col-12 mt-4">
            <input type="submit" value="update" name="update" class="btn btn-primary">
            <input type="submit" value="delete" name="delete" class="btn btn-danger">
        </div>
    </form>
</div>

<?php
include('footerAdmin.php');
?>