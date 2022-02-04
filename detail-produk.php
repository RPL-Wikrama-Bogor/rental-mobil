<?php
    error_reporting(0);
    include 'db.php';

    $produk = mysqli_query($con, "SELECT * FROM tb_produk WHERE produk_id = '".$_GET['id']."'");
    $p = mysqli_fetch_object($produk);
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Mobil</title>
    <link rel="stylesheet" type="text/css" href="logincss/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <h1><a href="index.php">Fast Car</a></h1>
            <ul>
                <li><a href="index.php">Menu</a></li>
            </ul>
        </div>
    </header>
    <!-- DESKRIPSI PRODUK -->
    <div class="section">
        <div class="container">
           <h3> Detail Mobil</h3>
            <div class="box">
                <div class="col-2">
                    <img src="mobil/<?php echo $p->produk_gambar ?>"width="100%">
                </div>
                <div class="col-2">
                    <h3><?php echo $p->produk_name?></h3><br>
                    <h4>Rp. <?php echo number_format($p->produk_price)?></h4>
                    <p>Detail :<br>
                        <?php echo $p->produk_deskripsi?>
                    </p>
                    <a href="pesan.php">
                    <input type="submit" name="submit" value="Pesan">

                </div>
            </div>
        </div>
    </div>
</body>
</html>