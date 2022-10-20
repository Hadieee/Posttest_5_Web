<?php
    require "connect.php";
    
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM barang WHERE id=$id");

    if ($result){
        echo "
        <script> 
            alert ('data berhasil dihapus');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "
        <script> 
            alert ('gagal dihapus');
            document.location.href = 'delete.php';
        </script>";
    }


?>  