<?php
session_start();
if(isset($_SESSION["username"])) {
    header("location: succes.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
</head>
<body>
    <h1>Login Session</h1>

    <form action="" method="post">
    <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">User</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="username" id="username" placeholder="user">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>
    </div>
    <input class="btn btn-dark btn-lg btn-block" type="submit" name="submit" value="Input">
    </form>
    <?php
    if (isset($_POST["submit"])) {
        if ($_POST["username"]== 'dzul' && $_POST["password"]== 'pondokit') {
            $_SESSION["username"] = $_POST["username"];
            header("location: succes.php");
        } 
    }
    ?>
</body>
</html>