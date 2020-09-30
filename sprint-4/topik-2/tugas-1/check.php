 <?php
    if (isset($_POST["submit"])) {
        if ($_POST["username"]== 'dzul' && $_POST["password"]== 'pondokit') {
            setcookie("user", $_POST["username"], time() + 3600, "/");
            header("location: succes.php");
        } 
    }
    if (isset($_GET["logout"])) {
        unset($_COOKIE["user"]);
        setcookie("user", null, -3600, "/");
        header("location: index.php");
    }
 
?>