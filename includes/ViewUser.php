<?php
    include_once 'User.php';
    class ViewUser extends User {
        public function escape($html) {
            return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
        }

        public function viewAllUsers() {
            $datas = $this->getAllUsers();
            foreach ($datas as $data) {
                echo '<tr>';
                echo '  <th scope="row">' . $this->escape($data["Id"]) . '</th>';
                echo '  <td>' . $this->escape($data["FirstName"]) . '</td>';
                echo '  <td>' . $this->escape($data["LastName"]) . '</td>';
                echo '  <td>' . $this->escape($data["Address1"]) . '</td>';
                echo '  <td>' . $this->escape($data["Address2"]) . '</td>';
                echo '  <td>' . $this->escape($data["City"]) . '</td>';
                echo '  <td>' . $this->escape($data["StateLoc"]) . '</td>';
                echo '  <td>' . $this->escape($data["Zip"]) . '</td>';
                echo '  <td>' . $this->escape($data["Country"]) . '</td>';
                echo '  <td>' . $this->escape($data["date"]) . '</td';
                echo '</tr>';
            }
        }
    }
?>