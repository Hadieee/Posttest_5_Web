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
                <a href="admin.php" class="create-items">Read Items</a>
                <a href="admin-logout.php">Logout</a>
            </div>
        </div>
    </nav>
    <div class="description">
        <div>
            <h2>Welcome To</h2>
            <h1>Kingston's Coffee</h1>
        </div>
    </div>

    <div class="content read">
        
    </div>

    <div class='admin'>
        <div id='input_form'>
            <form action="admin.php" method='post' autocomplete="off">
                <table width='10%' id='table_input'>
                    <tr>
                        <td colspan=3 align=center height=80px style='background: brown'>
                            <h1>Input Data Coffee</h1>
                        </td>
                    </tr>
                    <tr>
                        <td align=center><label for="merek" style="font-size:20px">Merek Barang</label></td>
                        <td>:</td>
                        <td align=center><input type="text" id='merek' name='merek' placeholder='Merek Barang' class='input' required></td>
                    </tr>
                    <tr>
                        <td align=center><label for="nama" style="font-size:20px">Nama Barang</label></td>
                        <td>:</td>
                        <td align=center><input type="text" id='nama' name='nama' placeholder='Merek Barang' class='input' required></td>
                    </tr>
                    <tr>
                        <td align=center><label for="trans" style="font-size:20px">Tipe Barang</label></td>
                        <td>:</td>
                        <td align=center>
                            <input type="radio" id='Makanan' name='trans' value='Makanan' style="font-size:20px" required>
                            <label for="Makanan">Makanan</label>
                            <input type="radio" id='Minuman' name='trans' value='Minuman' style="font-size:20px" required>
                            <label for="Minuman">Minuman</label>
                        </td>
                    </tr>
                    <tr>
                        <td align=center><label for="harga" style="font-size:20px">Harga Benda</label></td>
                        <td>:</td>
                        <td align=center><input type="number" id='harga' name='harga' placeholder='Harga Benda' class='input' required></td>
                    </tr>
                    <tr>
                        <td align=center><label for="ketersediaan" style="font-size:20px">Ketersediaan Barang</label></td>
                        <td>:</td>
                        <td align=center><input type="number" id='ketersediaan' name='ketersediaan' placeholder='Ketersediaan Barang' class='input' required></td>
                    </tr>
                    <tr>
                        <td colspan=3 align=center height=70px><input type="submit" value="Submit" name="submit" class="Button2"></td>
                    </tr>
                </table>
            </form>
        </div>



        <script>
            function changeBtn() {
                let change = document.getElementById("surprise");
                change.style.transform = "rotate(50deg)";
                change.style.margin = "10px";

            }
        </script>

        <footer id="footer">
            Copyright &copy; 2022
            Designed by Hadiee<br>
            <button onclick="changeBtn()" id="surprise">sstt!!</button>
        </footer>
</body>

</html>