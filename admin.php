<?php
    include_once 'templates/header.php';
?>

    <div class="container"> 
        <div class="card mt-5">
            <div class="card-header">
                <h1>Registration Form</h1>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Address 1</th>
                        <th scope="col">Address 2</th>
                        <th scope="col">City</th>
                        <th scope="col">State</th>
                        <th scope="col">Zip</th>
                        <th scope="col">Country</th>
                        <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $userList = new ViewUser();
                            $userList->viewAllUsers();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

<?php
    include_once 'templates/footer.php';
?>