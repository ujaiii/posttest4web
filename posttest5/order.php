<?php
require'koneksi.php';

if (isset($_POST["tambah"]))
{
    $nama       = htmlspecialchars($_POST["nama"]);
    $gitar      = htmlspecialchars($_POST["gitar"]);
    $jumlah     = htmlspecialchars($_POST["jumlah"]);
    $alamat     = htmlspecialchars($_POST["alamat"]);
    $pembayaran = htmlspecialchars($_POST["pembayaran"]);
    $pemesanan  = htmlspecialchars($_POST["pemesanan"]);

    $sql = "INSERT INTO data_customer VALUES ('','$nama','$gitar','$jumlah','$alamat','$pembayaran','$pemesanan')";

    $result = mysqli_query($conn, $sql);

    if ( $result ) 
    {
        echo"
            <script>
                alert('Data berhasil ditambah');
                document.location.href = 'kelola.php';
            </script>
        ";
    }
    else
    {
        echo"
            <script>
                alert('Data gagal ditambah');
                document.location.href = 'order.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>

<html>

<head>
    <link rel="icon" href="Gambar/Melody.ico">
    <title >Melody Guitar Store</title>
    <link rel ="stylesheet" href = "style.css">
    <script src="main.js"></script>
</head>
<body>
    <header>
        <nav>
        <div class="wrap">
                <div class="logo"><a href="index.php"><img src="Gambar/Melody.png"></a></div>
                <div class="menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about_us.php">About Us</a></li>
                        <li><a href="order.php">Order</a></li>
                        <li id="katalog"><a href="">Catalogue</a></li>
                        <label id="ubah"></label>
                    </ul>
                </div>
            </div>
            
        </div>
    </nav>
    </header>
    

    <div class="wrap">
        <section class="banner">
            <img src="Gambar/Banner.png"width="100%"></p>
        </section>
    </div>

    <div align="center" class="formulir">
            <form action="" method="post">
                <table border="0" width="80%">
                    <tr class="judul">
                        <td colspan="4" align="center">
                            <strong>
                                <font size="5"> 
                                    <p>Order Gitar!</p>
                                </font>
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td> <br> Nama Costumer</td>
                        <td> <br> :</td>
                        <td> <br> <input type="text" maxlength="100" name="nama" size="50" required=""></td>
                    </tr>
                    <tr>
                        <td> <br> Jenis Barang</td>
                        <td> <br> :</td>
                        <td> <br> <input type="radio" name="gitar" value="Gitar Elektrik"> Gitar Elektrik
                                    <input type="radio" name="gitar" value="Gitar Akustik"> Gitar Akustik</td>

                    </tr>
                    <tr>
                        <td> <br> Jumlah Barang</td>
                        <td> <br> :</td>
                        <td> <br> <input type="number" name="jumlah" required="">
                    </tr>
                    <tr>
                        <td> <br> Alamat Costumer</td>
                        <td> <br> :</td>
                        <td> <br> <textarea name="alamat" required=""></textarea></td>
                    </tr>
                    <tr>
                        <td> <br> Metode Pembayaran</td>
                        <td> <br> :</td>
                        <td> <br> <input type="radio" name="pembayaran" value="Credit" required=""> Credit &emsp;
                        <input type="radio" name="pembayaran" value="Cash" required=""> Cash</td>
                    </tr>
                    <tr>
                        <td> <br> Tanggal Pemesanan </td>
                        <td> <br> :</td>
                        <td> <br> <input type="date" name="pemesanan" >
                    </tr>
                    <tr>
                        <td colspan="4"> <br> <br> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" value="Order" name = "tambah"> | | <input type="reset" value="Reset"> </td>
                    </tr>
                </table>
            </form>
        </div>

    <footer class="footer">
        <h3>Melody Guitar Store</h3>
        <p>
            <br>
            Sampai Jumpa Lagi !
            <br>
        </p>
        <h4>Copyright 2023 - Hudzaifah Alqarani</h4>
    </footer>
    <script src="main.js"></script>
</body>
</html>