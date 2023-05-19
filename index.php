<?php
include "config.php";
$query = mysqli_query($conn, "SELECT * FROM customer ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="http://example.com/favicon.png" rel="shortcut icon">
</head>

<body>
    <div class="container pt-5">
        <div class="container-fluid">
            <div class="card" style="padding-left: 2%;padding-right: 2%;">
                <div class="card-body">
                    <a class="btn btn-primary" href="form_customer.php" role="button" style="width: 15%;margin-top: 17px;margin-bottom: 17px;font-size:14px"><i class="icon-plus"></i>&nbsp;Tambah customer</a>
                    <table id="tableData" class="table table-striped display compact" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (mysqli_num_rows($query) > 0) { ?>
                                <?php
                                $no = 1;
                                while ($data_customer = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $data_customer["first_name"] ?></td>
                                        <td><?php echo $data_customer["last_name"] ?></td>
                                        <td><?php echo $data_customer["email"] ?></td>
                                        <td><?php echo $data_customer["phone"] ?></td>
                                        <td><?php echo $data_customer["address"] ?></td>
                                        <td>
                                            <a href="update_customer.php?id=<?php echo $data_customer["id"] ?>" class="btn btn-primary" role="button"><i class="icon-pencil"></i></a>
                                            <a href="proses_delete.php?id=<?php echo $data_customer["id"] ?>" class="btn btn-danger" role="button"><i class="icon-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php $no++;
                                } ?>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>

<script>
    $(document).ready(function() {
        $('#tableData').DataTable();
    });
</script>