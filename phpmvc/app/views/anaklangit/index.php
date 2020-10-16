<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6"><?php Flasher::Flash();?></div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">Tambah Data Anak Langit</button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/anaklangit/cari" method="post">
                <div class="input-group">
                <input type="text" class="form-control" placeholder="cari anak langit..." name="keyword" id="keyword" autocomplete="off">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="tombloCari">Cari</button>
                  </div>
                </div>
            </form>
        </div>
    </div>

<div class="row">
    <div class="col-6">
        
        <h3>Daftar Anak Langit</h3>
        <?php foreach ($data['al'] as $al){ ?>
            <ul class="list-group">
                <li class="list-group-item"><?= $al['nama']; ?>
                    <a href="<?= BASEURL; ?>/anaklangit/hapus/<?= $al['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin mau menghapus?')">hapus</a>
                    <a href="<?= BASEURL; ?>/anaklangit/ubah/<?= $al['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $al['id']; ?>">ubah</a>
                    <a href="<?= BASEURL; ?>/anaklangit/detail/<?= $al['id']; ?>" class="badge badge-primary float-right ml-1">detail</a>
                </li>
            </ul>
        <?php } ?>
    </div>
</div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Anak Langit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/anaklangit/tambah" method="post">
        <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="nrp">NRP</label>
                <input type="number" class="form-control" id="nrp" name="nrp">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="kerja">Kerja</label>
                <select class="form-control" id="kerja" name="kerja">
                    <option value="Jaga Awan">Jaga Awan</option>
                    <option value="Kencingin Awan">Kecingin Awan</option>
                    <option value="Mengadu Awan">Mengadu Awan</option>
                    <option value="Bersihin Awan">Bersihin Awan</option>
                </select>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>



