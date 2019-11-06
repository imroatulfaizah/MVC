<!DOCTYPE html>
<html>
<head>
	<title>MVC</title>
</head>
<body>

	<table border="1">
		<tr>
			<th>NPM</th>
			<th>NAMA</th>
			<th>ALAMAT</th>
		</tr>
	

	<?php

		foreach ($data as $row) {
			
	?>

	<tr>
		<td><?php echo $row['npm']; ?></td>
		<td><?php echo $row['nama']; ?></td>
		<td><?php echo $row['alamat']; ?></td>
	</tr>

	<?php

		}

		?>

		</table>

</body>
</html>