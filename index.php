<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data Customer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                include "koneksi.php";
                $query = mysqli_query($conn, "SELECT * FROM customer ORDER BY id ASC");
                ?>

                <center>
                    <h2>DATA CUSTOMER:</h2>
                </center>
                <a class="btn btn-info" style="margin-bottom:5px" href="tambah.php?"> + Tambah Data </a>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>
                            id
                        </th>
                        <th>
                            First Name
                        </th>
                        <th>
                            Last Name
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Phone
                        </th>
                        <th>
                            Address
                        </th>
                        <th>
                            Created At
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                    <?php
                    if (mysqli_num_rows($query) > 0) {
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                    ?>
                            <tr>
                                <td> <?php echo $data["id"] ?></td>
                                <td> <?php echo $data["first_name"] ?> </td>
                                <td> <?php echo $data["last_name"] ?> </td>
                                <td> <?php echo $data["email"] ?></td>
                                <td> <?php echo $data["phone"] ?></td>
                                <td> <?php echo $data["address"] ?></td>
                                <td> <?php echo $data["created_at"] ?></td>
                                <td> <a class="btn btn-danger" style="padding: 5px;" href="proses_delete.php?id=<?php echo $data["id"] ?>">Delete</a> &nbsp; <a class="btn btn-warning" href="edit.php?id=<?php echo $data["id"] ?>">Edit</a></td>

                            </tr>
                        <?php } ?>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</html>