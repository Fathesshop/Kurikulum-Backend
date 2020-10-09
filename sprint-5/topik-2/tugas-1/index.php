<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Ruang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<div class="fixed-top">
  <div class="collapse" id="navbarToggleExternalContent" >
    <div class="bg-dark p-4">
      <h5 class="text-white h4">Autoloader PHP</h5>
      <span class="text-muted">Program class bangun datar (lingkaran, segitiga, dan persegi) dengan memanfaatkan autoloader tanpa composer.</span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <img src="img/pondok.svg" class="d-inline-block align-top" alt="" loading="lazy">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm">
            <div class="btn btn-dark btn-lg btn-block mt-5">MENGHITUNG LINGKARAN</div>
                <form action="" method="post">
                    <div class="form-group ">
                        <label for="formGroupExampleInput">Masukkan nilai phi</label>
                        <input type="text" class="form-control" id="phi" name="phi" value="3.14" readonly>
                    </div>
                    <div class="form-group">
                        <label>Masukkan nilai jari-jari</label>
                        <input type="text" class="form-control" id="jari-jari" name="jari" placeholder="jari-jari">
                    </div>
                    <button type="submit" class="btn btn-outline-primary btn-block" name="bulat">HITUNG</button>
                </form>
            </div>
            <div class="col-sm">
            <div class="btn btn-primary btn-lg btn-block mt-5">MENGHITUNG PERSEGI</div>  
                <form action="" method="post">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Masukkan nilai panjang</label>
                        <input type="text" class="form-control" id="panjang" name="panjang" placeholder="panjang">
                    </div>
                    <div class="form-group">
                        <label>Masukkan nilai lebar</label>
                        <input type="text" class="form-control" id="lebar" name="lebar" placeholder="lebar">
                    </div>
                    <button type="submit" class="btn btn-outline-dark btn-block" name="persegi">HITUNG</button>
                </form>
            </div>
            <div class="col-sm">
            <div class="btn btn-dark btn-lg btn-block mt-5">MENGHITUNG SEGITIGA</div>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Masukkan nilai alas</label>
                        <input type="text" class="form-control" id="alas" name="alas" placeholder="alas">
                    </div>
                    <div class="form-group">
                        <label>Masukkan nilai tinggi</label>
                        <input type="text" class="form-control" id="tinggi" name="tinggi" placeholder="tinggi">
                    </div>
                    <button type="submit" class="btn btn-outline-primary btn-block" name="segitiga">HITUNG</button>
                </form>
            </div>
        </div>
    </div>
</body>
<footer>
    <?php
    use bangun\bulat;
    use bangun\persegi;
    use bangun\segitiga;
    require_once __DIR__ . '/vendor/autoload.php';
    
    if (isset($_POST["bulat"])) {
        $bulat = new bulat();
        $phi = $_POST["phi"];
        $jari = $_POST["jari"];
        $keliling_bulat = $bulat->keliling($phi, $jari);
        $luas_bulat = $bulat->luas($phi, $jari);
    ?>
        <div class="card text-white bg-dark mb-3 text-center mt-5">
            <h1><div class="card-header">HITUNG LINGKARAN</div></h1 >
            <div class="card-body">
                <h5 class="card-title">Hasil keliling dan luas lingkaran</h5>
                <p class="card-text"><?= "keliling = " . $keliling_bulat . "cm"; ?></p>
                <p class="card-text"><?= "luas = " . $luas_bulat . "cm"; ?></p>
            </div>
        </div>
    <?php
    } elseif (isset($_POST["persegi"])) {
        $persegi = new persegi();
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $keliling_persegi = $persegi->keliling($panjang,$lebar);
        $luas_persegi = $persegi->luas($panjang,$lebar);
    ?>
        <div class="card text-white bg-dark mb-3 text-center mt-5">
            <h1><div class="card-header">HITUNG PERSEGI</div></h1 >
            <div class="card-body">
                <h5 class="card-title">Hasil keliling dan luas persegi</h5>
                <p class="card-text"><?= "keliling = " . $keliling_persegi . "cm"; ?></p>
                <p class="card-text"><?= "luas = " . $luas_persegi . "cm"; ?></p>
            </div>
        </div>
    <?php
    } elseif (isset($_POST["segitiga"])) {
        $segitiga = new segitiga();
        $alas = $_POST["alas"];
        $tinggi = $_POST["tinggi"];
        $keliling_segitiga = $segitiga->keliling($alas);
        $luas_segitiga = $segitiga->luas($alas,$tinggi);
        ?>
        <div class="card text-white bg-dark mb-3 text-center mt-5">
            <h1><div class="card-header">HITUNG SEGITIGA</div></h1 >
            <div class="card-body">
                <h5 class="card-title">Hasil keliling dan luas segitiga</h5>
                <p class="card-text"><?= "keliling = " . $keliling_segitiga . "cm"; ?></p>
                <p class="card-text"><?= "luas = " . $luas_segitiga . "cm"; ?></p>
            </div>
        </div>
    <?php
    }

    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</footer>
</html>