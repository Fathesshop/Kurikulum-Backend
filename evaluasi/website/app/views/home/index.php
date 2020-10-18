<main role="main">
  <br class="mb-5">
  <div class="container post">
    <div class="row">
      <?php foreach ($data['artikel'] as $key) { ?>
        <div class="col-md-4 col-sm-6 mb-3">
          <div class="card mb-4 box-shadow shadow-lg">
            <img class="card-img-top rounded " src="<?= BASEURL; ?>/img/<?= $key['gambar']; ?>">
            <div class="card-body">
              <p class="card-text"><?= $key['judul']; ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="<?= BASEURL; ?>/artikel/<?= $key['id']; ?>" class="btn login_btn">Tampil</a>
                </div>
                <small class="text-muted"><?= $key['tanggal']; ?></small>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</main>