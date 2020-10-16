<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['al']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['al']['nrp']; ?></h6>
            <p class="card-text"><?= $data['al']['email']; ?>.</p>
            <p class="card-text"><?= $data['al']['kerja']; ?>.</p>
            <a href="<?= BASEURL; ?>/anaklangit" class="card-link">Kembali</a>
        </div>
    </div>

</div>