<?php 
require('Koneksi.php');
$coba=new Conn();
$sql=mysqli_query($coba->con,'select * from manage_users;');
$data=[];
while($source=mysqli_fetch_assoc($sql)){
	$data[]=$source;
}

ini_set('display_errors',1);
if(isset($_POST['submit'])){
	$userName=$_POST['userName'];
	$password=$_POST['pass'];
	foreach($data as $data1){
		$user_db=$data1['Nama'];
		$id_db=$data1['Id'];
		$pass_db=$data1['Password'];
		if($userName === $user_db){
			if($password === $pass_db){
				session_start();
				$_SESSION['iD']=$id_db;
				$_SESSION['state']=True;
				$_SESSION['ID_Name']="$user_db";
				header('Location: /Home/webblog/?page=ebook');
				break;
			}else{
				header('Location: /Home/webblog/?page=login&&err=P2');
			}
		}else{
			header('Location: /Home/webblog/?page=login&&err=P1');
		}				
	}
}else{
	header('Location: /Home/webblog/');
};
	
?>