<?php
include "config.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM customer WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="http://example.com/favicon.png" rel="shortcut icon">
</head>

<body>
    <div class="container pt-5">
        <div class="container-fluid">
            <div class="card" style="width: 50%;margin-left: 25%;">
                <div class="card-body">
                    <h3>Form Update Customer</h3>
                    <form action="proses_update.php" method="post" class="row g-3">
                    <?php if (mysqli_num_rows($query) > 0) { ?>
                        <?php
                        while ($data_customer = mysqli_fetch_array($query)) {
                        ?>
                        <input type="text" name="id" class="form-control" value="<?php echo $data_customer['id'] ?>" hidden/>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">First Name</label>
                            <input autocomplete="off" type="text" name="first_name" class="form-control" value=<?php echo $data_customer['first_name'];?> id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Last Name</label>
                            <input autocomplete="off" type="text" name="last_name" class="form-control" value=<?php echo $data_customer['last_name'];?> id="inputPassword4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value=<?php echo $data_customer['email'];?> id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Phone</label>
                            <input type="number" name="phone" class="form-control" value=<?php echo $data_customer['phone'];?> id="inputPassword4">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <textarea name="address" id="" cols="30" rows="3" class="form-control"><?php echo $data_customer['address'] ?></textarea>
                        </div>

                        <div class="col-12" style="margin-left: 23em;">
                            <button type="submit" class="btn btn-primary previous">Back</button>
                            <button type="submit" class="btn btn-primary" name="update" id="update">Submit</button>
                        </div>
                        
                        <?php
                        } ?>
                    <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>