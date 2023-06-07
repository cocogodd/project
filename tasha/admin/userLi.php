<?php
include('headerAdmin.php');
?>
<?php
require "model/config.php";
require "model/select-user.php";
?>
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Users</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone number</th>
                            <th>Address</th>
                            <th>Role</th>
                            <th class="hide-sort"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php SelectUser(); ?>
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