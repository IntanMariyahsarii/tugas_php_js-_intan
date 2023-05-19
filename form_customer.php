<?php
include "config.php";
$query = mysqli_query($conn, "INSERT INTO FROM customer ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Add Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="http://example.com/favicon.png" rel="shortcut icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .warning-text {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container pt-5">
        <div class="container-fluid">
            <div class="card" style="width: 50%;margin-left: 25%;">
                <div class="card-body">
                    <h3>Form Add Customer</h3>
                    <form action="proses_add.php" method="post" class="row g-3" id="myForm">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">First Name</label>
                            <input autocomplete="off" type="text" name="first_name" class="form-control" id="first_name">
                            <div id="message_first_name" class="warning-text"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Last Name</label>
                            <input autocomplete="off" type="text" name="last_name" class="form-control" id="last_name">
                            <div id="message_last_name" class="warning-text"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                            <div id="message_email" class="warning-text"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Phone</label>
                            <input type="number" name="phone" class="form-control" id="phone">
                            <div id="message_phone" class="warning-text"></div>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <textarea name="address" id="address" cols="30" rows="3" class="form-control"></textarea>
                            <div id="message_address" class="warning-text"></div>
                        </div>

                        <div class="col-12" style="margin-left: 23em;">
                            <button type="submit" class="btn btn-primary previous">Back</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<script>
    $(document).ready(function() {
        $(document).ready(function() {
            $('#myForm').submit(function() {
                var first_name = $('#first_name').val().length;
                var last_name = $('#last_name').val().length;
                var email = $('#email').val().length;
                var phone = $('#phone').val().length;
                var address = $('#address').val().length;

                if (first_name == 0) {
                    $("#message_first_name").text("First name cannot be empty!");
                } else {
                    $("#message_first_name").text("");
                }

                if (last_name == 0) {
                    $("#message_last_name").text("Last name cannot be empty!");
                } else {
                    $("#message_last_name").text("");
                }

                if (email == 0) {
                    $("#message_email").text("Email cannot be empty!");
                } else {
                    $("#message_email").text("");
                }

                if (phone == 0) {
                    $("#message_phone").text("Phone cannot be empty!");
                } else {
                    $("#message_phone").text("");
                }

                if (address == 0) {
                    $("#message_address").text("Address cannot be empty!");
                } else {
                    $("#message_address").text("");
                }

                if (first_name != 0 && last_name != 0 && email != 0 && phone != 0 && address != 0) {
                    return true;
                } else {
                    return false;
                }
            });
        });
    });
</script>