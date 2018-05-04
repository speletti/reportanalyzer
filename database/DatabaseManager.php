<?php
class Connection {
	public $mysqli;
	private $host;
	private $user;
	private $pwd;
	function __construct($host, $user, $pwd) {
		$this->host = $host;
		$this->user = $user;
		$this->pwd = $pwd;
	}
	public function openConnection() {
		$this->mysqli = new mysqli ( $this->host, $this->user, $this->pwd );
		
		if ($this->mysqli->connect_errno == true) {
			echo "Error: Failed to make a MySQL mysqli, here is why: <br>";
			echo "Errno: " . $this->mysqli->connect_errno . "<br>";
			echo "Error: " . $this->mysqli->connect_error . "<br>";
			exit ();
		} else {
			return $this->mysqli;
		}
	}
	public function closeConnection() {
		if ($this->mysqli != null) {
			$this->mysqli->close ();
		} else {
			echo "Connection null!";
			exit ();
		}
	}
	function selectDB($db) {
		if ($db != null && $db != "") {
			$this->mysqli->select_db ( $db );
		} else {
			echo "Database not found!";
			exit ();
		}
	}
}
?>
