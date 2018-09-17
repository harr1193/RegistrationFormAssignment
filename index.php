<?php
    include_once 'templates/header.php';
?>
    <div class="container"> 
        <div class="card mt-5">
            <div class="card-header">
                <h1>Registration Form</h1>
            </div>
            <div class="card-body">
                <form method="post" id="user-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input class="form-control" type="text" name="firstName" id="firstName">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input class="form-control" type="text" name="lastName" id="lastName">
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address1">Address</label>
                                <input class="form-control" type="text" name="address1" id="address1"> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address2">Address2</label>
                                <input class="form-control" type="address2" name="address2" id="address2">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input class="form-control" type="text" name="city" id="city">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="state">State</label>
                                <input class="form-control" type="text" name="state" id="state">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="zip">Zip</label>
                                <input class="form-control" type="text" name="zip" id="zip">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <select class="form-control" id="country" name="country">
                                    <option value="US">US</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button id="submit" name="submit" type="submit" class="btn btn-large btn-primary btn-block">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<?php
    include_once "templates/footer.php";
?>
