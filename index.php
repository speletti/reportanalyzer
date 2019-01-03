<?php
// echo var_dump ( $_SERVER );
// echo var_dump ( $_REQUEST );
// echo var_dump ( $_GET );
// echo var_dump ( $_POST );
// echo var_dump($_COOKIE);
?>
<?php
include 'session/CheckSession.php';
$session = new CheckSession();
$session->check();
echo "<script type=\"text/javascript\">window.location=\"home.php\"</script>";
?>
