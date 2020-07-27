<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Andri Blog</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
	 <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Andri Portofolio</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><acti <a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="galery.php">Galerry</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
 	<h2>Tampilan</h2><br>
 	<a href="index.php">Upload</a><br><br>
 <table border="2">
 	<tr>
 		<td>No</td>
 		<td>Nama</td>
 		<td>gambar</td>
 		<td>keterangan</td>
 	</tr>
 	<?php
 	$query = mysqli_query ($conn, " SELECT * FROM tb_gambar");
 	while ($row = mysqli_fetch_array($query)){
 	?>
 	 	<tr>
 		<td><? php echo $row ['id_gambar'] ?></td>
 		<td><? php echo $row ['nama'] ?></td>
 		<td><img src="gambar/ <? php echo $row ['file'] ?>"></td>
 		<td>
 			<a href="edit.php? id= <? php echo $row ['id_gambar'] ?>"> Edit | </a>
 			<a href="hapus.php"> Hapus</a>
 		</td>
 	</tr>
 	<?php } ?>
 </table>
</body>
</html>