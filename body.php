<?php
include 'database/DatabaseManager.php';
include 'database/SqlManager.php';

$connection = new Connection ( "127.0.0.1", "root", "" );

$connection->openConnection ();
$connection->selectDB ( "test" );

$queryManager = new QueryManager ( $connection );

$sql = "select codice,desclung,descbre from menu";
// $sql .= " where codice = 0";
// echo $sql . "<br>";
$result = $queryManager->query ( $sql );

$rownumber = $queryManager->getNumRows ();

echo "<script type='text/javascript'>
function clicca(param){
var myFrame = document.getElementById('frm'); 
myFrame.src = param;
}
</script>";
?>
<html>
<table border="1">
	<tr>
		<?php
		$i = 0;
		while ( $row = $result->fetch_object () ) {
			
			$class = "link";
			if ($i % 2 == 0) {
				$class = "link1";
			} else {
				$class = "link2";
			}
			
			echo "<th><div class=\"div1\"><a class='$class' onclick=\"clicca('menupage/$row->codice.php')\">$row->desclung</a></div></th>";
			$i ++;
		}
		?>
		<td><div class="div1">
				<a onclick="clicca()">FINE</a>
			</div></td>
	</tr>
</table>
</html>
<?php
$queryManager->close ();
$connection->closeConnection ();
?>
