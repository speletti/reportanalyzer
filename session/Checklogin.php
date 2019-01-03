<html>
<head>
<link rel="stylesheet" type="text/css" href="../style/stili.css">
</head>
<?php
include '../database/DatabaseManager.php';
include '../database/SqlManager.php';

$valide = false;
$username = $_POST["username"];
$password = $_POST["password"];

$connection = new Connection("127.0.0.1", "root", "");

$connection->openConnection();
$connection->selectDB("test");

$queryManager = new QueryManager($connection);

$sql = "select * from utenti where nome = '" . $username . "'";

$result = $queryManager->query($sql);

$rownumber = $queryManager->getNumRows();

if ($rownumber > 0) {
    $valide = true;
}

if ($valide == true) {
    setcookie("key", "24me22", time() + 3600);
    echo "<script type=\"text/javascript\">window.location=\"../home.php\"</script>";
} else {
    echo "<span class=\"access_denied\">Credenziali errate</span>";
}
?>
</html>
<?php
$queryManager->close();
$connection->closeConnection();
?>