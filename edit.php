<!DOCTYPE html>
<html>
<head>
	<title>Edit CRUD</title>
</head>
<body>
<?php 
include 'koneksi.php';
$db = new database();
?>
<form action="proses.php?aksi=update" method="POST">
<?php
foreach($db->edit($_GET['id']) as $row){
?>
	<input type="hidden" name="id" value="<?= $row['id'] ?>">
	<table>
		<tr>
			<td><label for="nama">Nama</label></td>
			<td>:</td>
			<td><input type="text" name="nama" id="nama" value="<?= $row['nama'] ?>"></td>
		</tr>
		<tr>
			<td><label for="email">Email</label></td>
			<td>:</td>
			<td><input type="email" name="email" id="email" value="<?= $row['email'] ?>"></td>
		</tr>
		<tr>
			<td><label for="password">Password</label></td>
			<td>:</td>
			<td><input type="text" name="password" id="password" value="<?= $row['password'] ?>"></td>
		</tr>
		<tr>
			<td colspan="3">
				<button type="submit">Submit</button>
			</td>
		</tr>
	</table>
<?php } ?>
</form>
</body>
</html>