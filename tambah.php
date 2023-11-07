<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>

<body>
    <?php
    include 'koneksi.php';
    ?>
    Tambah Data Customer
    <form action="proses_tambah.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Id</td>
                <td>:</td>
                <td><input type="number" name="id"></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td>:</td>
                <td><input type="text" name="first_name"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>:</td>
                <td><input type="text" name="last_name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>:</td>
                <td><input type="number" name="phone"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td>:</td>
                <td><input type="text" name="address"></td>
            </tr>
        </table>
        <input type="submit" name="Submit" value="Simpan">
    </form>
</body>

</html>