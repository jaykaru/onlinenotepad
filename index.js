//once the form is submitted
$('#signupForm').submit(function (event) {

    //prevent default php processing
    event.preventDefault();
    // //collect user input
    var datapost = $(this).serializeArray();
    console.log(datapost);
    //send them to signup using ajax
    $.ajax({
        url: "signup.php",
        type: "POST",
        data: datapost,
        success: function (data) {
            if (data) {
                $('#SignupMessage').html(data);
            }
        },
        error: function () {
            $('#SignupMessage').html('<div class="alert alert-danger">There was error with Ajax call please signup later</div>');

        }

    });

});
