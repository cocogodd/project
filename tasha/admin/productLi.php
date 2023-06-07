<?php
include('headerAdmin.php');
?>
<?php
require "model/config.php";
require "model/select-product.php";
?>
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Products</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <a class="btn btn-info mb-4" style="background-color: #E95616; border:0" href="addProduct.php">Add Product</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Items name</th>
                            <th>Quantity</th>
                            <th>Price/product</th>
                            <th class="hide-sort"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php SelectProduct(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

</div>


<?php
include('footerAdmin.php');
?>