<?php 
include 'koneksi.php';
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
	<link rel="stylesheet" href="css/plyr.css">
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
	<title>UFilmID – Nonton Film Gratis</title>

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
									<a href="index.php" class="header__nav-link">Film</a>
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

	<!-- page title -->
	<section class="section section--first section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">DAFTAR FILM</h2>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="#">UFilmID</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Pilih Film</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- catalog -->
	<div class="catalog" style="padding-top: 3rem;">
		<div class="container">
			<div class="row">
				<?php



				$per_page_record = 12;     
				if (isset($_GET["page"])) {    
					$page  = $_GET["page"];    
				}    
				else {    
					$page=1;    
				}    

				$start_from = ($page-1) * $per_page_record;     

				$query = "SELECT * FROM film LIMIT $start_from, $per_page_record";     
				$rs_result = mysqli_query ($koneksi, $query);    

				while ($data = mysqli_fetch_array($rs_result)) { 

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
					<div class="col-6 col-sm-6 col-md-4 col-lg-3">
						<div class="card">
							<div class="card__cover">
								<img src="img/covers/<?php echo $poster; ?>"class="img-fluid">
								<a href="nonton.php?id=<?php echo $id; ?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="nonton.php?id=<?php echo $id; ?>"><?php echo $judul; ?></a></h3>
								<span class="card__category">
									<a href="#" style="pointer-events: none; cursor: default;"><?php echo $genre; ?></a>
								</span>
								<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $rate; ?></span>
							</div>
						</div>
					</div>
					<!-- end card -->

				<?php } 

				$query = "SELECT COUNT(*) FROM film";     
				$rs_result = mysqli_query($koneksi, $query);     
				$row = mysqli_fetch_row($rs_result);     
				$total_records = $row[0];

				if ($total_records > $per_page_record) {
					?>
					<div class="col-12">
						<ul class="paginator">



							<?php  
						}
						$NUMPERPAGE = $per_page_record; // max. number of items to display per page
						$this_page = "index.php";
  						$data = range(1, $total_records); // data array to be paginated
  						$num_results = count($data);


  						if(!isset($_GET['page']) || !$page = intval($_GET['page'])) {
  							$page = 1;
  						}

  						$linkextra = [];
  						if(isset($_GET['var1']) && $var1 = $_GET['var1']) {
  							$linkextra[] = "var1=" . urlencode($var1);
  						}
  						$linkextra = implode("&amp;", $linkextra);
  						if($linkextra) {
  							$linkextra .= "&amp;";
  						}


  						$tmp = [];
  						for($p=1, $i=0; $i < $num_results; $p++, $i += $NUMPERPAGE) {
  							if($page == $p) {

  								$tmp[] = "<li class='paginator__item paginator__item--active'><a href=\"{$this_page}?{$linkextra}page={$p}\">{$p}</a></li>";
  							} else {
  								$tmp[] = "<li class='paginator__item'><a href=\"{$this_page}?{$linkextra}page={$p}\">{$p}</a></li>";
  							}
  						}


  						for($i = count($tmp) - 2; $i > 0; $i--) {
  							if(abs($page - $i - 1) > 1) {
  								unset($tmp[$i]);
  							}
  						}


  						if(count($tmp) > 1) {
  							echo "<p>";

  							$lastlink = 0;
  							foreach($tmp as $i => $link) {
  								if($i > $lastlink + 1) {
  									echo "<li class='paginator__item'><a href='#' style='pointer-events: none; cursor: default;'>...</a></li>"; 
  								} elseif($i) {
  									echo "";
  								}
  								echo $link;
  								$lastlink = $i;
  							}

  							echo "</p>\n\n";
  						}

  						if ($total_records > $per_page_record) { ?>
  						</ul>
  					</div>

  				<?php } ?>

  				<!-- end paginator -->
  			</div>
  		</div>
  	</div>
  	<!-- end catalog -->

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

  	<!-- JS -->
  	<script src="js/jquery-3.3.1.min.js"></script>
  	<script src="js/bootstrap.bundle.min.js"></script>
  	<script src="js/owl.carousel.min.js"></script>
  	<script src="js/jquery.mousewheel.min.js"></script>
  	<script src="js/jquery.mCustomScrollbar.min.js"></script>
  	<script src="js/wNumb.js"></script>
  	<script src="js/nouislider.min.js"></script>
  	<script src="js/plyr.min.js"></script>
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