<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= isset($title) ? $title . ' - ' : '' ?>Mancitosh</title>
	<meta name="description" content="<?= $description ?? 'Laman resmi Mancitosh MAN 1 Ponorogo' ?>">

	<!-- assets -->
	<link rel="stylesheet" href="<?= $url ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= $url ?>/fonts/bootstrap-icons/bootstrap-icons.min.css">
	<link rel="stylesheet" href="<?= $url ?>/css/style.css">
	<link rel="stylesheet" href="<?= $url ?>/css/style-padding.css">
</head>
<body>
<div class="container">

	<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
	  <div class="container">
		<a class="navbar-brand" href="#">Mancitosh</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
		  <div class="navbar-nav">
			<a class="nav-link active" aria-current="page" href=" <?= $url ?>">Home</a>
			<a class="nav-link" href="#">Bidang Lomba</a>
			<a class="nav-link" href="#">Poster</a>
			<a class="nav-link disabled" aria-disabled="true"></a>
		  </div>
		</div>
	  </div>
	</nav>
</div>
		<!--<div class="col-12 col-md-6 col-lg-8 order-2">
				<ul class="nav align-text-left">
					<li class="nav-item">
						<a href="<?= $url ?>/vlog.php" class="nav-link link-body-emphasis border-dark">VLOG</a>
					</li>
					<li class="nav-item">
						<a href="<?= $url ?>/poster.php" class="nav-link link-body-emphasis border-dark">DESAIN POSTER</a>
					</li>
					<li class="nav-item">
						<a href="<?= $url ?>/mtq.php" class="nav-link link-body-emphasis border-dark">MTQ</a>
					</li>
					<li class="nav-item">
						<a href="<?= $url ?>/puisi-kandungan-alquran.php" class="nav-link link-body-emphasis border-dark">PUISI KANDUNGAN AL-QUR'AN</a>
					</li>
				</ul>
			</div>-->
			<!--<div class="col-6 col-md-3 col-lg-2 order-2 order-md-3 text-end">
				<a href="#" class="btn btn-success">FORM</a>
			</div>-->
		</div>
	</div>