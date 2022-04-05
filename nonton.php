<?php 
include 'koneksi.php';
$id = $_GET['id'];

if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$komentar = $_POST['komentar'];
	$tanggal = date('Y-m-d');

	mysqli_query($koneksi, "INSERT INTO komentar(id_film,nama,komentar,tanggal) VALUES('$id', '$nama', '$komentar', '$tanggal')");

	header('location: nonton.php?id='.$id);
}

$query=mysqli_query($koneksi, "SELECT * FROM film WHERE id='$id'");

while ($data=mysqli_fetch_assoc($query)) {
	$id = $data['id'];
	$judul = $data['judul'];
	$poster = $data['poster'];
	$vidio = $data['vidio'];
	$genre = $data['genre'];
	$deskripsi = $data['deskripsi'];
	$rate = $data['rate'];
	$tahun = $data['tahun'];
	$waktu = $data['waktu'];
	$negara = $data['negara'];
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet"> 

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/photoswipe.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/refresh.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title><?php echo $judul; ?> - UFilmID</title>

</head>
<body class="body" id="main">

	<!-- header -->
	<header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<a href="index.php" class="header__logo">
								<img src="img/logo.svg" alt="">
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								<!-- dropdown -->
								<li class="header__nav-item">
									<a href="index.php" class="header__nav-link">UFilmID</a>
								</li>
								<!-- end dropdown -->

								<li class="header__nav-item">
									<a href="about.php" class="header__nav-link">Tentang</a>
								</li>

							</ul>
							<!-- end header nav -->

							<!-- header auth -->
							<div class="header__auth">
								<button class="header__search-btn" type="button">
									<i class="icon ion-ios-search"></i>
								</button>
							</div>
							<!-- end header auth -->

							<!-- header menu btn -->
							<button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<!-- end header menu btn -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header search -->
		<form action="#" class="header__search">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
							<input type="text" placeholder="Search for a movie, TV Series that you are looking for">

							<button type="button">search</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- end header search -->
	</header>
	<!-- end header -->

	<!-- details -->
	<section class="section details">
		<!-- details background -->
		<div class="details__bg" data-bg="img/home/home__bg.jpg"></div>
		<!-- end details background -->

		<!-- details content -->
		<div class="container">

			<div class="row">
				<!-- title -->
				<div class="col-12">
					<h1 class="details__title"><?php echo $judul; ?></h1>
				</div>
				<!-- end title -->

				<!-- player -->
				<div class="col-12">
					<video controls crossorigin playsinline width="100%" controlsList="nodownload noplaybackrate">
						<!-- Video files -->

						<source src="film/<?php echo $vidio; ?>" type="video/mp4" size="1080"/>

							<!-- Caption files -->
							<!-- <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default/>
								<track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt"/> -->

								<!-- Fallback for browsers that don't support the <video> element -->
									<a href="film/<?php echo $vidio; ?>" download>Download</a>
								</video>
							</div>
							<!-- end player -->

							<!-- content -->
							<div class="col-12" style="padding-top: 3rem;">
								<div class="card card--details">
									<div class="row">
										<!-- card cover -->
										<div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-5">
											<div class="card__cover">
												<img class="poster" align="center" src="img/covers/<?php echo $poster; ?>" alt="">
											</div>
										</div>
										<!-- end card cover -->

										<!-- card content -->
										<div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-7">
											<div class="card__content">
												<div class="card__wrap">
													<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $rate; ?></span>
												</div>

												<ul class="card__meta">
													<li><span>Genre:</span> <a href="#"><?php echo $genre; ?></a></li>
													<li><span>Tahun Rilis:</span> <?php echo $tahun; ?></li>
													<li><span>Durasi:</span> <?php echo $waktu; ?></li>
													<li><span>Negara:</span> <a href="#"><?php echo $negara; ?></a> </li>
												</ul>

												<div class="card__description card__description--details">
													<?php echo $deskripsi; ?>
												</div>
											</div>
										</div>
										<!-- end card content -->
									</div>
								</div>
							</div>
							<!-- end content -->
						</div>
					</div>
					<!-- end details content -->
				</section>
				<!-- end details -->

				<!-- content -->
				<section class="content">
					<div class="content__head">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<!-- content title -->
									<h2 class="content__title">Komentar</h2>
									<!-- end content title -->
									<!-- end content tabs nav -->

									<!-- content mobile tabs nav -->
									<div class="content__mobile-tabs" id="content__mobile-tabs">
										<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<input type="button" value="Comments">
											<span></span>
										</div>
									</div>
									<!-- end content mobile tabs nav -->
								</div>
							</div>
						</div>
					</div>

					<div class="container">
						<div class="row">
							<div class="col-12">
								<!-- content tabs -->
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
										<div class="row">
											<!-- comments -->
											<div class="col-12">
												<div class="comments">
													<ul class="comments__list">

														<?php 
														$query=mysqli_query($koneksi, "SELECT * FROM komentar WHERE id_film='$id'");

														while ($data=mysqli_fetch_assoc($query)) {
															$komentar_nama = $data['nama'];
															$komentar_komentar = $data['komentar'];
															$komentar_tanggal = $data['tanggal'];
															?>

															<li class="comments__item">
																<div class="comments__autor">
																	<img class="comments__avatar" src="img/user.png" alt="">
																	<span class="comments__name"><?php echo htmlspecialchars($komentar_nama); ?></span>
																	<span class="comments__time"><?php echo date('d-m-Y', strtotime($komentar_tanggal)); ?></span>
																</div>
																<p class="comments__text"><?php echo htmlspecialchars($komentar_komentar); ?></p>
															</li>

														<?php } ?>

													</ul>

													<form action="nonton.php?id=<?php echo $id; ?>" method="post" class="form">
														<input type="hidden" id="text" name="id" class="form__input" value="<?php echo $id; ?>" required>
														<input type="text" id="text" name="nama" class="form__input" placeholder="Nama Anda" required>
														<textarea id="text" name="komentar" class="form__textarea" placeholder="Komentar Anda" required></textarea>
														<button type="submit" name="submit" class="form__btn">Kirim</button>
													</form>
												</div>
											</div>
											<!-- end comments -->
										</div>
									</div>
								</div>
								<!-- end content tabs -->
							</div>

							<!-- sidebar -->
							<div class="col-12">
								<div class="row">
									<!-- section title -->
									<div class="col-12">
										<h2 class="section__title section__title--sidebar">Film Lainnya...</h2>
									</div>
									<!-- end section title -->

									<?php 
									$query=mysqli_query($koneksi, "SELECT * from film ORDER BY tahun DESC LIMIT 8");

									$cek=mysqli_num_rows($query);

									if($cek>0){

									}

									while ($data=mysqli_fetch_assoc($query)) {
										$id = $data['id'];
										$judul = $data['judul'];
										$poster = $data['poster'];
										$vidio = $data['vidio'];
										$genre = $data['genre'];
										$deskripsi = $data['deskripsi'];
										$rate = $data['rate'];
										$tahun = $data['tahun'];
										$waktu = $data['waktu'];
										$negara = $data['negara'];
										?>

										<!-- card -->
										<div class="col-6 col-sm-4 col-lg-3">
											<div class="card">
												<div class="card__cover">
													<img src="img/covers/<?php echo $poster; ?>" alt="">
													<a href="nonton.php?id=<?php echo $id; ?>" class="card__play">
														<i class="icon ion-ios-play"></i>
													</a>
												</div>
												<div class="card__content">
													<h3 class="card__title"><a href="nonton.php?id=<?php echo $id; ?>"><?php echo $judul; ?></a></h3>
													<span class="card__category">
														<?php echo $genre; ?>
													</span>
													<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $rate; ?></span>
												</div>
											</div>
										</div>
										<!-- end card -->

									<?php } ?>


								</div>
							</div>
							<!-- end sidebar -->
						</div>
					</div>
				</section>
				<!-- end content -->

				<!-- footer -->
				<footer class="footer">
					<div class="container">
						<div class="row">
							<!-- footer list -->
							<div class="col-12 col-md-3">
								<h6 class="footer__title">Install Aplikasinya</h6>
								<ul class="footer__app">
									<!-- <li><a href="#"><img src="img/Download_on_the_App_Store_Badge.svg" alt=""></a></li> -->
									<li><a href="#"><img src="img/google-play-badge.png" alt=""></a></li>
								</ul>
							</div>
							<!-- end footer list -->

							<!-- footer list -->
							<div class="col-6 col-sm-4 col-md-3">
								<h6 class="footer__title">Lainnya</h6>
								<ul class="footer__list">
									<li><a href="about.php">Tentang</a></li>
									<li><a href="https://www.uteknoid.website">Website Kami</a></li>
								</ul>
							</div>
							<!-- end footer list -->

							<!-- footer list -->
							<div class="col-6 col-sm-4 col-md-3">
								<h6 class="footer__title">Sosial Media</h6>
								<ul class="footer__list">
									<ul class="footer__social">
										<li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i> Facebook</a></li>
										<li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i> Instagram</a></li>
										<li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i> Twitter</a></li>
									</ul>
								</ul>
							</div>
							<!-- end footer list -->

							<!-- footer list -->
							<div class="col-12 col-sm-4 col-md-3">
								<h6 class="footer__title">Hubungi Kami</h6>
								<ul class="footer__list">
									<li><a href="mailto:info@uteknoid.website">info@uteknoid.website</a></li>
								</ul>
							</div>
							<!-- end footer list -->

							<!-- footer copyright -->
							<div class="col-12">
								<div class="footer__copyright">
									<small>Copyright &copy; <?php echo date('Y'); ?> <a target="_blank" href="https://www.uteknoid.website">UTeknoID</a></small>
								</div>
							</div>
							<!-- end footer copyright -->
						</div>
					</div>
				</footer>
				<!-- end footer -->

				<!-- Root element of PhotoSwipe. Must have class pswp. -->
				<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		<!-- Background of PhotoSwipe. 
			It's a separate element, as animating opacity is faster than rgba(). -->
			<div class="pswp__bg"></div>

			<!-- Slides wrapper with overflow:hidden. -->
			<div class="pswp__scroll-wrap">

				<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
				<!-- don't modify these 3 pswp__item elements, data is added later on. -->
				<div class="pswp__container">
					<div class="pswp__item"></div>
					<div class="pswp__item"></div>
					<div class="pswp__item"></div>
				</div>

				<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
				<div class="pswp__ui pswp__ui--hidden">

					<div class="pswp__top-bar">

						<!--  Controls are self-explanatory. Order can be changed. -->

						<div class="pswp__counter"></div>

						<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

						<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

						<!-- Preloader -->
						<div class="pswp__preloader">
							<div class="pswp__preloader__icn">
								<div class="pswp__preloader__cut">
									<div class="pswp__preloader__donut"></div>
								</div>
							</div>
						</div>
					</div>

					<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

					<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

					<div class="pswp__caption">
						<div class="pswp__caption__center"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- JS -->
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.mousewheel.min.js"></script>
		<script src="js/jquery.mCustomScrollbar.min.js"></script>
		<script src="js/wNumb.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.morelines.min.js"></script>
		<script src="js/photoswipe.min.js"></script>
		<script src="js/photoswipe-ui-default.min.js"></script>
		<script src="js/main.js"></script>

		<script src="js/index.umd.min.js"></script>
		<script>
			PullToRefresh.init({
				mainElement: '#main',
				onRefresh: function() {
					location.reload();
				},
			});
		</script>
	</body>

	</html>