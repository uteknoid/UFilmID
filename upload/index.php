
<?php 

include '../koneksi.php';

if(isset($_POST['submit'])) {
	$lokasi_file = $_FILES['poster']['tmp_name'];
	$nama_file   = $_FILES['poster']['name'];
	$folder = "../img/covers/$nama_file";
	if (move_uploaded_file($lokasi_file,"$folder")){
		$judul = $_POST['judul'];
		$genre = $_POST['genre'];
		$deskripsi = $_POST['deskripsi'];
		$rating = $_POST['rating'];
		$tahun = $_POST['tahun'];
		$durasi = $_POST['durasi'];
		$negara = $_POST['negara'];
		$film = $_POST['film'];

		$result = mysqli_query($koneksi, "INSERT INTO film(judul,poster,vidio,genre,deskripsi,rate,tahun,waktu,negara) VALUES('$judul','$nama_file','$film','$genre','$deskripsi','$rating','$tahun','$durasi','$negara')");

		echo '<script>alert("Berhasil menambah film."); document.location="index.php";</script>';
	}else{
		echo "Poster gagal di upload";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>UFilmID - Submit Film</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<div class="container">
		<h2 style="text-align: center;" class="mb-5 mt-5">Submit Film</h2>
		<form action="index.php" method="post" enctype="multipart/form-data">
			<div class="form-group mb-3">
				<label>Judul:</label>
				<input type="text" class="form-control" placeholder="Judul Film" name="judul" required="required">
			</div>
			<div class="form-group mb-3">
				<label>Poster:</label>
				<input type="file" accept="image/*" class="form-control" name="poster" required="required">
			</div>	
			<div class="form-group mb-3">
				<label>Genre:</label>
				<input type="text" class="form-control" placeholder="Genre Film" name="genre" required="required">
			</div>
			<div class="form-group mb-3">
				<label>Deskripsi/Sinopsis:</label>
				<textarea class="form-control" name="deskripsi" required="required"></textarea>
			</div>
			<div class="form-group mb-3">
				<label>Rating:</label>
				<input type="text" class="form-control" placeholder="Rating Film" name="rating" required="required">
			</div>
			<div class="form-group mb-3">
				<label>Tahun:</label>
				<input type="number" class="form-control" placeholder="Tahun Film" name="tahun" required="required">
			</div>
			<div class="form-group mb-3">
				<label>Durasi:</label>
				<input type="text" class="form-control" placeholder="Durasi Film" name="durasi" required="required">
			</div>
			<div class="form-group mb-3">
				<label>Negara:</label>
				<input type="text" class="form-control" placeholder="Negara Asal Film" name="negara" required="required">
			</div>
			<div class="form-group mb-3">
				<label>Film:</label>
				<input type="text" class="form-control" name="film" required="required">
			</div>			
			<input type="submit" name="submit" value="Submit" class="btn btn-primary btn-block" placeholder="Film">
		</form>
	</div>

</body>
</html>