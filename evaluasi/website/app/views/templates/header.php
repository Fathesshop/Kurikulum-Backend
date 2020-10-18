<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </link>
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
  <!-- Meta Icon -->
  <link rel="shortcut icon" href="<?= BASEURL; ?>/img/favicon.ico">

  <title>Fathesshop</title>
  <style>
    a:hover {
      color: #000;
    }

    a {
      color: #4267b2;
    }

    .login_btn {
      width: 100%;
      background: #4267b2 !important;
      color: white !important;
    }

    .login_btn:focus {
      box-shadow: none !important;
      outline: 0px !important;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="<?= BASEURL; ?>">
      <img src="<?= BASEURL; ?>/img/logonav.png" width="30" height="30">
      Fathesshop.com
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
        </li>
      </ul>
      <form action="<?= BASEURL; ?>/home/search" method="post" class="form-inline mr-1 my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Cari Artikel..." name="search" id="search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" id="tombolsearch">Cari</button>
      </form>
      <span class="navbar">
        <a href="<?= BASEURL; ?>/login" class="btn btn-outline-success mr-2">Login</a>
        <a href="<?= BASEURL; ?>/admin/logout" class="btn btn-outline-danger" onclick="return confirm('Apakah Anda Yakin Mau Log Out?');">Log Out</a>
      </span>
    </div>
  </nav>

  <br>