<?php
include_once 'Db.php';
    class User extends Db {
        protected function getAllUsers() {
            $sql = "SELECT * FROM userinfo";
            $connection = $this->connect();
            
            $statement = $connection->prepare($sql);
            $statement->execute();
            $data = $statement->fetchAll();
            
            return $data;
        }

        public function createUser() {
            try  {
                $connection = $this->connect();
                $new_user = array(
                    "FirstName" => $_POST['firstName'],
                    "LastName"  => $_POST['lastName'],
                    "Address1" => $_POST['address1'],
                    "Address2" => $_POST['address2'],
                    "City" => $_POST['city'],
                    "StateLoc" => $_POST['state'],
                    "Zip" => $_POST['zip'],
                    "Country" => $_POST['country']
                );
        
                $sql = sprintf(
                        "INSERT INTO userinfo (%s) values (%s)",
                        implode(", ", array_keys($new_user)),
                        ":" . implode(", :", array_keys($new_user))
                );
                
                $statement = $connection->prepare($sql);
                $statement->execute($new_user);
            } catch(PDOException $error) {
                echo $sql . "<br>" . $error->getMessage();
            }
        }
    }
?>