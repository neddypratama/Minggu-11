<?php
    $target = "foto/";

    $file = $target. basename($_FILES["myfoto"]["name"]);

    if(move_uploaded_file($_FILES["myfoto"]["tmp_name"],$file)) {
        $id = $_POST["myid"];
        $name = $_POST["myname"];
        $address = $_POST["myaddress"];
        
        include "myconnection.php";
        $query = "UPDATE strudent SET name='$name', address='$address', foto='$file' WHERE id=$id";

        if(mysqli_query($connect, $query)) {
            header('Location:homeCRUD.php');
        } else {
            echo "Gagal mengubah data <br>". mysqli_error($connect);
        }
    
        mysqli_close($connect);
    } else {
        echo "Error";
    }
?>