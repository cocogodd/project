<?php
    function SelectProduct() {
        $sql = "SELECT * FROM product";
        $result = Connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo
                '<tr class="content">
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['name'] . '</td>
                    <td>' .  $english_format_number= number_format($row['quantity']) . '</td>
                    <td>' . $english_format_number= number_format($row['price'])  . '</td>
                    <input type="hidden" name="id" value="' . $row['id'] . '">
                    <td><a href="updateProductLi.php?id=' . $row['id'] . '"><i class="fa-solid fa-pen-to-square" style="color: #E95616"></i></a></td>
                </tr>';
            }
        }
    }
?>