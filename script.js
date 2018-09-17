$(document).ready(function() {


    $('#submit').click(function(e){
        e.preventDefault();

        var firstName = $("#firstName").val();
        var lastName = $("#lastName").val();
        var address1 = $("#address1").val();
        var address2 = $("#address2").val();
        var city = $("#city").val();
        var state = $("#state").val();
        var zip = $("#zip").val();
        var country = $("#country").val();
        var fields = [firstName, lastName, address1, city, state, zip];

        if (!areFieldsEmpty(fields))
        {
            console.log("None Empty");
            if (IsValidZipCode(zip)) {
                console.log(country);
                var postData = $("#user-form").serializeArray();
                $.ajax({
                type: "POST",
                url: "includes/newUser.php",
                dataType: "text",
                data: {
                    action: 'createUser',
                    firstName: firstName,
                    lastName: lastName,
                    address1: address1,
                    address2: address2,
                    city: city,
                    state: state,
                    zip: zip,
                    country: country
                },  success : function(response){
                    alert("Form submitted");
                    window.location = "confirmation.php"
                }
                });
            }
        }
    });
});

function areFieldsEmpty(fields) {
    var anyEmpty = false;
    fields.forEach(element => {
        if (element == '')
            anyEmpty = true;
    });
    if (anyEmpty) {
        alert('Error: A field is empty');
        return anyEmpty;
    }
}

function IsValidZipCode(zip) {
    var isValid = /^[0-9]{5}(?:-[0-9]{4})?$/.test(zip);
    if (!isValid) {
        alert('Invalid ZipCode');
        return false;
    }
    return true;
}