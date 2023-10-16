<?php
require'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM data_customer");

$posttest = [];

while ($row = mysqli_fetch_assoc($result)) {
    $posttest[] = $row;
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

    <button><a href="order.php">Tambah Data</a></button>
    <table border = 0>
        <tr>
            <th>No</th>
            <th>Nama Customer</th>
            <th>Jenis Barang</th>
            <th>Jumlah Barang</th>
            <th>Alamat Customer</th>
            <th>Metode Pembayaran</th>
            <th>Tanggal Pemesanan</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; foreach ($posttest as $cust) : ?>
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $cust['nama'];?></td>
            <td><?php echo $cust['gitar'];?></td>
            <td><?php echo $cust['jumlah'];?></td>
            <td><?php echo $cust['alamat'];?></td>
            <td><?php echo $cust['pembayaran'];?></td>
            <td><?php echo $cust['pemesanan'];?></td>
            <!-- <td><a href="<?php echo $cust['Nomor'];?>">Edit</a> | <a href="<?php echo $cust['Nomor'];?>"onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini ?')"> Hapus </a></td> -->
        </tr>
        <?php $i++; endforeach;?>
    </table>
    
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