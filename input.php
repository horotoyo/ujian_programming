<!DOCTYPE html>
<html>
<head>
	<title>Input CRUD</title>
</head>
<body>
<form action="proses.php?aksi=tambah" method="POST">
	<table>
		<tr>
			<td><label for="nama">Nama</label></td>
			<td>:</td>
			<td><input type="text" name="nama" id="nama" required></td>
		</tr>
		<tr>
			<td><label for="email">Email</label></td>
			<td>:</td>
			<td><input type="email" name="email" id="email" required></td>
		</tr>
		<tr>
			<td><label for="password">Password</label></td>
			<td>:</td>
			<td><input type="text" name="password" id="password" required></td>
		</tr>
		<tr>
			<td colspan="3">
				<button type="submit">Submit</button>
			</td>
		</tr>
	</table>
</form>
</body>
</html>