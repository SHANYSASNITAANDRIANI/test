<?php
 include'koneksi.php';

 $data = mysqli_query($conn, " SELECT *FROM tb_gambar WHERE id_gambar = '" . $_GET ['id'] . "'");
 $r = mysqli_fetch_array($data);

 $nama = $r [' nama'];
 $file = $r [' file'];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Halaman Edit</title>

	<style type="text/css">
		body{
			background-image: url(cd.jpeg);
			background-size: 100%;
		}
		*{
			margin: 0;
			padding: 0;
			font-family: sans-serif;	
		}
		a{
			text-decoration: none;
			color: white;
		}
		header{
			width: 100%;
			height: 55px;
			border: 0px solid black;
			background: black;
			color: white;
		}
		header ul li{
			width: 10%;
			height: 50px;
			border: 1px solid black;
			float: left;
			list-style: none;
			text-align: center;
			line-height: 50px;
		}
		a:hover{
			color: yellow;
		}
		form{
			font-family: sans-serif;
			position: absolute;
			top: 20%;
			left: 40%;
			line-height: 50px;
		}
		h2{
			position: absolute;
			top: 15%;
			left: 40%;
		}
		td[type="submit"]{
			text-align: center;
		}
	</style>
</head>
<body>
<header>
	<ul>
		<li><a href="">Galery</a></li>
		<li><a href="">concact</a></li>
	</ul>
</header>
	<h2> Silahkan Masukan Yang Anda Inginkan  </h2>

<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<? php echo $nama ?> "></td>
		</tr>
		<tr>
			<td>Pilih file</td>
			<td>:</td>
			<td><input type="hidden" name="img" value="<?php echo $file ?>">
				<input type="file" name="gambar"/></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><img src="gambar/ <?php echo $file ?>" width="150px" heigh="150px"/></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="kirim" value="update"></td>
			<td><a href="data.php"><input type="button" name="kembali" value="kembali"></a></td>
		</tr>
	</table>
</form>
	<?php
	 if(isset($_POST['kirim'])){
	 	$nama = $_POST['nama'];
	 	$nama_file = $_FILES['gambar']['name'];
	 	$source = $_FILES['gambar']['tmp_name'];
	 	$folder = './gambar/';

	 
	 if($nama_file != ''){
	 	move_uploaded_file($source, $folder . $nama_file);
	 	$update = mysqli_query ($conn, "UPDATE tb_gambar SET 
	 		nama = '". $nama."',
	 		file = '". $nama_file . "'
	 		WHERE id_gambar = '" . $_GET ['id']."'
	 		");

	 	if($update){
	 		echo 'BERHASIL UPDATE GAMBAR';
	 	}
	 	else{
	 		echo 'GAGAL UPDATE GAMBAR';
	 	}
	 }
	 else{
	 	$update = mysqli_query ($conn, "UPDATE tb_gambar SET 
	 		nama = '". $nama."',
	 		");
	 	if($update){
	 		echo 'BERHASIL UPDATE GAMBAR';
	 	}
	 	else{
	 		echo 'GAGAL UPDATE GAMBAR';
	 	}
	 }
	 }
	?>
</body>
</html> 