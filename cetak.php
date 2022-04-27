<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan</title>
    <link rel="Stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1 align="center">DATA MAHASISWA</h1>
    <br>
    <table>
        <tr>
            <th> ID </th>
            <th> Nama </th>
            <th> Alamat </th>
            <th> Foto </th>
        </tr>
        <?php
            include "myconnection.php";

            $query = "SELECT * FROM strudent";
            $result = mysqli_query($connect, $query);

            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td> <?php echo $row["id"]; ?> </td>
            <td> <?php echo $row["name"]; ?> </td>
            <td> <?php echo $row["address"]; ?> </td>
            <td> <img src="./<?php echo $row["foto"];?>"> </td>
        </tr>
        <?php
                }
            }
        ?>
    </table>
    <script>
        window.print();
    </script>
</body>
</html>