<?php
include('headerAdmin.php');
?>
<?php
require "model/config.php";
require "model/select-order.php";
?>
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Orders</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Product Name</th>
                            <th>Total Price</th>
                            <th>Address</th>
                            <th>Order Date</th>
                            <th>Status</th>
                            <th class="hide-sort"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php SelectOrder(); ?>
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