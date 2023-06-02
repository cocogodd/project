<?php
    function SelectOrder() {
        $sql = "SELECT * FROM project.order";
        $result = connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo
                '<tr class="content">
                    <td>' . $row['user'] . '</td>
                    <td>' . $row['product_name'] . '</td>
                    <td>' . $row['total_price'] . '</td>
                    <td>' . $row['address'] . '</td>
                    <td>' . $row['order_date'] . '</td>
                    <td>' . $row['status'] . '</td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="' . $row['id'] . '">
                            <input type="submit" name="update" value="update">
                        </form>
                    </td>
                </tr>';
            }
        }
    }

    if (isset($_POST['update'])) {
        $sql = "UPDATE project.order SET status = 'Delivery complete' WHERE id = " . $_POST['id'];
        Connect()->query($sql);
    }
?>