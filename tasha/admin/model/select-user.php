<?php
    function SelectUser() {
        $sql = "SELECT * FROM user";
        $result = Connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo
                '<tr class="content">
                    <td>' . $row['name'] . '</td>
                    <td>' . $row['email'] . '</td>
                    <td>' . $row['phone_number'] . '</td>
                    <td>' . $row['address'] . '</td>
                    <td>' . ($row['role_id'] == 1 ? 'User' : 'Admin') . '</td>
                    <input type="hidden" name="id" value="' . $row['id'] . '">
                    <td><a href="updateUserLi.php?id=' . $row['id'] . '"><input type="button" name="update" value="update"></a></td>
                </tr>';
            }
        }
    }
?>