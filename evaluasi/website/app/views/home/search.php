<main role="main">
  <div class="container post">
    <div class="row">
      <?php foreach ($data['search'] as $key) { ?>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="<?= BASEURL; ?>/img/<?= $key['gambar']; ?>" alt="Card image cap">
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