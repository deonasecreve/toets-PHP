<?php
$conn = new mysqli('localhost','root', '', 'schoenmerken');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "";
	if (isset($_POST["searchbar"])){
		$merk= $_POST["searchbar"];
		$query = "SELECT * FROM merken WHERE name = '$merk'";
	} elseif (isset($_POST["maat"])){
		$maat= $_POST["maat"];
		$query = "SELECT name, $maat FROM merken ";
	}
	
$result = $conn->query($query);
$merken = $result->fetch_all(MYSQLI_ASSOC);

?>
