<?php
ini_set('display_errors', 1);
class Script{
	public static function msg(){
		echo "<script type='text/javascript'>";
		echo "alert('Proses Berhasil')";
		echo "</script>";
	}
	public static function msg_err(){
		echo "<script type='text/javascript'>";
		echo "alert('Proses Gagal')";
		echo "</script>";
	}
}
class Conn{
	public $host='localhost';
	public $akun='Website';
	public $pass_akun='4r1f1n';
	public $db='restaurant';
	public $con;

	public function __construct(){
		$Getcon=mysqli_connect($this->host,$this->akun,$this->pass_akun,$this->db);
		$this->con=$Getcon;
		return $Getcon;
	}
};
?>