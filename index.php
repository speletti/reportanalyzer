<?php
// echo var_dump ( $_SERVER );
// echo var_dump ( $_REQUEST );
// echo var_dump ( $_GET );
// echo var_dump ( $_POST );
// echo var_dump($_COOKIE);
?>
<html>
<?php
$key = $_COOKIE["key"];

if ($key == "24me22") {
    echo "<script type=\"text/javascript\">window.location=\"home.php\"</script>";
} else {
    echo "<script type=\"text/javascript\">window.location=\"login.php\"</script>";
}
?>

</html>
