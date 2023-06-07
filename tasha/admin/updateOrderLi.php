<?php
include('headerAdmin.php');
?>
<?php
require "model/config.php";
require "model/update-order.php";
?>
<div class="pr-5 pl-5 pt-2 pb-2 ">
    <h1 class="h3 mb-4 text-gray-800">Update Order</h1>
    <form class="row " action="" method="post">
        <div class="col-md-6">
            <label for="user" class="form-label">User</label>
            <input type="text" name="user" value="<?php echo isset($order['user']) ? $order['user'] : null; ?>" required>
        </div>
        <div class="col-md-6">
            <label for="product_name" class="form-label">Product Name</label>
            <input type="text" name="product_name" value="<?php echo isset($order['product_name']) ? $order['product_name'] : null; ?>" required>
        </div>
        <div class="col-6">
            <label for="total_price" class="form-label">Total Price</label>
            <input type="text" name="total_price" value="<?php echo isset($order['total_price']) ? $order['total_price'] : null; ?>" required>
        </div>
        <div class="col-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" value="<?php echo isset($order['address']) ? $order['address'] : null; ?>" required>
        </div>
        <div class="col-md-6">
            <label for="order_date" class="form-label">Order Date</label>
            <input type="text" name="order_date" value="<?php echo isset($order['order_date']) ? $order['order_date'] : null; ?>" required>
        </div>
        <div class="col-md-6">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" value="<?php echo isset($order['status']) ? $order['status'] : null; ?>" required>
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