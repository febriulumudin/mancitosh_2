<div class="container">
	<div class="row justify-content-center">
		<div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
			<div class="py-5 border-bottom mb-5">
				<h1><?= $nama ?></h1>
				<p class="lead"><?= $deskripsi ?></p>
				<a href="<?= $pendaftaran ?>" class="btn btn-success">Pendaftaran</a>
				<a href="<?= $petunjuk_teknis ?>" class="btn btn-light ms-2">Petunjuk teknis</a>
			</div>
			<h5 class="text-success-emphasis">Tanggal Penting</h5>
			<ul class="timeline">
				<?php foreach ($timeline as $tl) : ?>
					<li>
						<div class="fw-bold"><?= $tl['tanggal'] ?></div>
						<p class="text-body-secondary"><?= $tl['kegiatan'] ?></p>
					</li>
				<?php endforeach; ?>
			</ul>
			<div class="card my-5">
				<div class="card-body">
					<h5 class="card-title pb-2 border-bottom">Narahubung</h5>
					<?php foreach ($contact_person as $cp) : ?>
						<p class="card-text"><strong><?= $cp['nama'] ?></strong> <?= $cp['telepon'] ?></p>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>
