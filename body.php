<?php
// TODO aprire una connessione al database
$menuitem = 5;
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
		// TODO leggere i menu dal database
		for($i = 0; $i < $menuitem; $i ++) {
			if ($i % 2 == 0) {
				echo "<td><div class=\"div1\"><a class='link1' onclick=\"clicca('menupage/$i.php')\">$i</a></div></td>";
			} else {
				echo "<th><div class=\"div1\"><a class='link2' onclick=\"clicca('menupage/$i.php')\">$i</a></div></th>";
			}
		}
		?>
		<td><a onclick="clicca()">FINE</a></td>
	</tr>
</table>
</html>
