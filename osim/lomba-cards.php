<div class="container">
    <div class="card mb-4 d-none">
        <div class="card-body">
            <h5 class="card-title">JUDUL LOMBA</h5>
            <p class="card-text"><mark>Deskripsi Lomba</mark> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod accusantium blanditiis commodi quia! Exercitationem non ea nam, et incidunt enim.</p>
            <a href="#" class="btn btn-success">Pendaftaran</a>
            <a href="#" class="btn btn-light ms-2">Petunjuk Teknis</a>
        </div>
    </div>
    <?php foreach ($detail_lomba as $lomba) : ?>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title"><?= $lomba['nama'] ?></h5>
                <p class="card-text"><?= $lomba['deskripsi'] ?></p>
                <a href="<?= $lomba['link_pendaftaran'] ?>" class="btn btn-success">Pendaftaran</a>
                <a href="<?= $lomba['link_petunjuk_teknis'] ?>" class="btn btn-light ms-2">Petunjuk Teknis</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>