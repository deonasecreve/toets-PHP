<?php
require_once "search.logic.php";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Schoenenvoorraad</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
    <?php if (isset($_POST['searchbar'])): 
    ?>
		<table>
			<thead>
				<tr>
					<th>Merk</th>
					<th>Maat 37</th>
					<th>Maat 38</th>
					<th>Maat 39</th>
					<th>Maat 40</th>
					<th>Maat 41</th>
					<th>Maat 42</th>
				</tr>
			</thead>
			</tbody>

		<tr>
			<td><?=$merken[0]['name']?></td>
			<td><?=$merken[0]['maat_37']?></td>
			<td><?=$merken[0]['maat_38']?></td>
			<td><?=$merken[0]['maat_39']?></td>
			<td><?=$merken[0]['maat_40']?></td>
			<td><?=$merken[0]['maat_41']?></td>
			<td><?=$merken[0]['maat_42']?></td>
		</tr>


	</tbody>
</table>
<?php endif;
?>

<?php if (isset($_POST['maat'])): 
?>
	 <table>
		<thead>
			<th>Merk</th>
			<th><?= $maat;?></th>
		</thead>
		</tbody>
<?php
	foreach ($merken as $merk):
?>

	<tr>
		<td><?=$merk['name']?></td>
		<td><?=$merk[$maat]?></td>
	</tr>


<?php
	endforeach;
?>

<?php
	endif;
?>


<a href="http://localhost/toes%20PHP/">Home</a>
</body>
</html>