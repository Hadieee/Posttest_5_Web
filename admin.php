<?php
session_start();
require("connect.php");
$barang = [];
$hasil = mysqli_query($conn, "SELECT * FROM barang");
while ($baris = mysqli_fetch_assoc($hasil)) {
    $barang[] = $baris;
}

if (isset($_POST["submit"])) {
    $merek = $_POST['merek'];
    $nama = $_POST['nama'];
    $tipe = $_POST['trans'];
    $harga = $_POST['harga'];
    $stok = $_POST['ketersediaan'];
    $id = count($barang) + 1;
    $tambah = "INSERT INTO barang VALUE($id, '$merek', '$nama', '$tipe', $harga, $stok)";
    $hasil = mysqli_query($conn, $tambah);
    if ($hasil) {
        header("Location: admin.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Kingston's Coffee</title>
    <link rel="browser tab icon" href="img/coffe-logo.png">
    <style>
        <?php include "style.css" ?>
    </style>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
</head>


<body>
    <nav class="navbar">
        <div class="container">
            <div class="navbar-menu">
                <a href="admin-input.php" class="create-items"">Create Items</a>
                <a href=" admin-logout.php">Logout</a>
            </div>
        </div>
    </nav>
    <div class="description-admin">
        <div>
            <h2>Welcome To</h2>
            <h1>Kingston's Coffee</h1>
        </div>
    </div>

    <div class="content read">
        <div id = tabel>
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Merek</td>
                        <td>Nama</td>
                        <td>Tipe</td>
                        <td>Harga</td>
                        <td colspan="2">Ketersediaan</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($barang as $data) : ?>
                        <tr>
                            <td><?= $data['id'] ?></td>
                            <td><?= $data['merek'] ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['tipe'] ?></td>
                            <td><?= $data['harga'] ?></td>
                            <td><?= $data['stok'] ?></td>
                            <td class="actions">
                                <a href="admin-update.php?id=<?php echo $data['id'];?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="admin-delete.php?id=<?php echo $data['id'];?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function form_muncul() {
            var form = document.getElementById("input_form");
            if (form.style.display == "none") {
                form.style.display = "flex";
            } else {
                form.style.display = "none";
            }
        }

        function changeBtn() {
            let change = document.getElementById("surprise");
            change.style.transform = "rotate(50deg)";
            change.style.margin = "10px";

        }
    </script>

    <footer id="footer-admin">
        Copyright &copy; 2022
        Designed by Hadiee<br>
        <button onclick="changeBtn()" id="surprise">sstt!!</button>
    </footer>
</body>

</html>