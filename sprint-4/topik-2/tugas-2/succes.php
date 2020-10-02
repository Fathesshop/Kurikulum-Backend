<?php
session_start();
if(!isset($_SESSION["username"])) {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUCCES</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    <div class="jumbotron">
        <h1 class="display-4">SUCCES, LOGIN!</h1>
        <p class="lead">Ini adalah halaman succes login dengan menggunakan session.</p>
        <hr class="my-4">
        <p>HASIL DARI PRINT_R SESSION</p>
        <p><?php print_r($_SESSION);?></p>
        <p class="lead">
            <form action="" method="get">
                <button class="btn btn-danger btn-lg" name="logout" id="logout">KLIK UNTUK LOGOUT</button>
            </form>
            
        </p>
    </div>
    <?php
    if (isset($_GET["logout"])) {
        session_unset();
        session_destroy();
        header("location: login.php");
    }
    ?>
</body>
</html>