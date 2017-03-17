
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Schoenenvoorraad</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>

    <body>

    <h3>Search on brand</h3>
    <form action="search.php" method="post">
		<input type="text" name="searchbar">
		<input type="submit" name="submit" value="search">
	</form>
	
    <form action="search.php" method="post">
    <h3>Search on size</h3>
        <select name="maat" id="maat">
    		<option value="maat_37">size 37</option>
			<option value="maat_38">size 38</option>
			<option value="maat_39">size 39</option>
			<option value="maat_40">size 40</option>
    	</select>
        <input type="submit" name="submit" value="search" />
    </form><br>

<?php
$conn = new mysqli('localhost','root', '', 'schoenmerken');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM merken";
$result = $conn->query($query);
$maten = $result->fetch_all(MYSQLI_ASSOC);
?>
<br>
<table>
	<thead>
		<tr>
			<th>Brand</th>
			<th>Size 37</th>
			<th>Size 38</th>
			<th>Size 39</th>
			<th>Size 40</th>
			<th>Size 41</th>
			<th>Size 42</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	</tbody>
<?php
	foreach ($maten as $maat):
?>
		<tr>
			<td><?=$maat['name']?></td>
			<td><?=$maat['maat_37']?></td>
			<td><?=$maat['maat_38']?></td>
			<td><?=$maat['maat_39']?></td>
			<td><?=$maat['maat_40']?></td>
			<td><?=$maat['maat_41']?></td>
			<td><?=$maat['maat_42']?></td>
			<td><a href="edit.php?id=<?=$maat['id']?>">edit</a></td>
			<td><a href="delete.php?id=<?=$maat['id']?>">delete</a></td>
		</tr>
<?php
	endforeach;
?>
	</tbody>
</table>
</body>
</html>