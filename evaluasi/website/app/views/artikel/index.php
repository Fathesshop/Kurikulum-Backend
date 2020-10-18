<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="thumbnail">
                <br class="mb-4">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= BASEURL; ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/label/<?= $data['artikel']['label']; ?>"><?= $data['artikel']['label']; ?></a></li>
                                <li class="breadcrumb-item"><?= $data['artikel']['judul']; ?></li>
                            </ol>
                        </nav>
                        <div class="panel panel-default">
                            <div class="panel-heading post-thumb">
                                <img class="img-thumbnail" src="<?= BASEURL; ?>/img/<?= $data['artikel']['gambar']; ?>" width="100%" />
                            </div>
                            <div class="panel-body post-body">
                                <h2 class="post-title">
                                    <?= $data['artikel']['judul']; ?>
                                </h2>
                                <div class="post-author">
                                    <i class="fa fa-user"> by <?= $data['artikel']['penulis']; ?></i>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="caption">
                            <p><?= $data['artikel']['isi']; ?></p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <br class="mb-4">
            <div class="card shadow-lg" style="max-width: 540px;">
                <div class="card-body">
                    <div class="row no-gutters">
                        <?php foreach ($data['newartikel'] as $key) { ?>
                            <div class="col-md-4">
                                <img src="<?= BASEURL; ?>/img/<?= $key['gambar']; ?>" class="card-img">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="<?= BASEURL; ?>/artikel/<?= $key['id']; ?>" class="card-title">
                                        <h5><?= $key['judul']; ?></h5>
                                    </a>
                                    <p class="card-text"><small class="text-muted"><?= $key['tanggal']; ?></small></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="comment">
                        <label>
                            <h2>Leave a coment</h2>
                        </label>
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" id="usr">
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="pwd">
                        </div>
                        <div class="form-group">
                            <label for="comment">Comment:</label>
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-info" value="Kirim Komentar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>