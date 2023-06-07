<?php
include('headerAdmin.php');
?>
<?php
require "model/config.php";
require "model/update-user.php";
?>
<div class="pr-5 pl-5 pt-2 pb-2 ">
    <h1 class="h3 mb-4 text-gray-800">Update User</h1>
    <form class="row " action="" method="post">
        <div class="col-md-6">
            <label for="name" class="form-label">Items name:</label>
            <input type="text" class="form-control" name="name" value="<?php echo isset($user['name']) ? $user['name'] : null; ?>" required>
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : null; ?>">
        </div>
        <div class="col-6">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="<?php echo isset($user['email']) ? $user['email'] : null; ?>" required>
        </div>
        <div class="col-6">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="number" class="form-control" name="phone_number" value="<?php echo isset($user['phone_number']) ? $user['phone_number'] : null; ?>" required>
        </div>
        <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" value="<?php echo isset($user['address']) ? $user['address'] : null; ?>" required>
        </div>
        <div class="col-md-6">
            <label for="role_id" class="form-label">Role</label>
            <select name="role_id" class="form-control">
                <option value="1" <?php echo $user['role_id'] == 1 ? 'selected' : null ?>>User</option>
                <option value="2" <?php echo $user['role_id'] == 2 ? 'selected' : null ?>>Admin</option>
            </select>
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