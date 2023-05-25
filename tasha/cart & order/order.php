<?php
include('header.php');
?>
<?php
    $conn = new mysqli('localhost:3307', 'root', '12345678', 'project');
    if ($conn->connect_error) {
        die("ket noi that bai" . $conn->connect_error);
    }

    function close($stmt, $conn)
    {
        $stmt->close();
        $conn->close();
    }

    $sql = "SELECT * FROM project.order WHERE user = '" . $_SESSION['user'] . "'";
    $result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./order.css">

</head>

<body>
    <div class="container">
        <div class="order">
            <div class="heading">
                <h3>This is your order!</h3>
            </div>
            <table>
                <tr class="rows">
                    <td>Items name</td>
                    <td>Total Prices</td>
                    <td>Address</td>
                    <td>Order date</td>
                    <td>Status</td>
                </tr>
                <?php
                    while ($order = mysqli_fetch_assoc($result)) {
                ?>
                <tr class="content">
                    <td><?php echo $order["product_name"] ?></td>
                    <td><?php echo number_format($order['total_price']) . 'VND' ?></td>
                    <td><?php echo $order["address"] ?></td>
                    <td><?php echo $order["order_date"] ?></td>
                    <td><?php echo $order["status"] ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>

</body>

<?php
include('footer.php');
?>

</html>