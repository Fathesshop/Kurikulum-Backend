<br class="mb-4">
<div>
    <?php Flasher::flash(); ?>
</div>
<button type="button" class="btn btn-primary btn-lg btn-block tambahModal" data-toggle="modal" data-target="#tambahModal">Tambah</button>
<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Label</th>
                <th>Penulis</th>
                <th>Gambar</th>
                <th>Isi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['artikel'] as $key => $value) { ?>
                <tr>
                    <td><?= $key+1; ?></td>
                    <td><?= substr($value['judul'], 0, 50) . '...'; ?></td>
                    <td><?= $value['tanggal']; ?></td>
                    <td><?= $value['label']; ?></td>
                    <td><?= $value['penulis']; ?></td>
                    <td><img src="<?= BASEURL; ?>/img/<?= $value['gambar']; ?>" width="100"></img></td>
                    <td><?= substr($value['isi'], 0, 100) . '...'; ?></td>
                    <td>
                        <a href="<?= BASEURL; ?>/admin/update/<?= $value['id']; ?>" class="badge badge-pill badge-warning ubahModal" data-toggle="modal" data-target="#tambahModal" data-id="<?= $value['id']; ?>">Update</a>
                        <a href="<?= BASEURL; ?>/admin/delete/<?= $value['id']; ?>" class="badge badge-pill badge-danger" onclick="return confirm('Apakah Anda Yakin Mau Menghapus?');">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Artikel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/admin/create" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" id="id" name="id">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                    <div class="form-group">
                        <label for="label">Label</label>
                        <select id="label" name="label" class="form-control">
                            <option value="Kisah" readonly>Kisah</option>
                            </option>
                            <option value="Motivasi" readonly>Motivasi</option>
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" value="Fathesshop" readonly>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="hidden" class="form-control" name="gambarhide" id="gambarhide">
                        <input type="file" class="form-control" name="gambar" id="gambar">
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <textarea class="form-control" rows="3" id="isi" name="isi"></textarea>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Posting</button>
                </form>
            </div>
        </div>
    </div>
</div>