<?php
    $target = "foto/";

    $file = $target. basename($_FILES["myfoto"]["name"]);

    if(move_uploaded_file($_FILES["myfoto"]["tmp_name"],$file)) {
        $name = $_POST["myname"];
        $address = $_POST["myaddress"];
        
        include "myconnection.php";
        $query = "INSERT INTO strudent(name, address, foto) VALUE('$name', '$address', '$file')";

        if(mysqli_query($connect, $query)) {
            echo "Data baru berhasil ditambahkan!";
        } else {
            echo "Data baru gagal ditambahkan! <br>". mysqli_error($connect);
        }
        mysqli_close($connect);
    } else {
        echo "Error";
    }
?>