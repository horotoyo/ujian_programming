<?php 
 
class database{
 
	var $host 	= "localhost";
	var $uname 	= "root";
	var $pass 	= "123";
	var $db 	= "ujian";
 
	public function __construct(){
		$this->konek = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		return $this->konek;
	}
 
	public function tampil_data(){
		$sql			= "SELECT * FROM users";
		$data 			= mysqli_query($this->konek, $sql);
		while($row 		= mysqli_fetch_assoc($data)){
			$result[] 	= $row;
		}
		return $result;
 
	}
 
	public function input($nama,$email,$password){
		$sql = "INSERT INTO users (nama, email, password) VALUES('$nama', '$email', '$password')";
		mysqli_query($this->konek, $sql);
	}
 
	public function hapus($id){
		$sql = "DELETE FROM users WHERE id='$id'";
		mysqli_query($this->konek, $sql);
	}

	public function edit($id){
		$sql			= "SELECT * from users where id='$id'";
		$data 			= mysqli_query($this->konek, $sql);
		while($d 		= mysqli_fetch_assoc($data)){
			$hasil[] 	= $d;
		}
		return $hasil;
	}
	 
	public function update($id, $nama,$email,$password){
		$sql = "UPDATE users SET nama = '$nama', email = '$email', password = '$password' WHERE id='$id'";
		mysqli_query($this->konek, $sql);
	}
} 
?>