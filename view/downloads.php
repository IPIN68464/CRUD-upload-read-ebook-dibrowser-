<?php 
ini_set('display_errors',1);
$file='https://media.geeksforgeeks.org/wp-content/uploads/gfg-40.png';
$lane=basename($file);
if(file_put_contents($lane,file_get_contents($file))){
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename=' .basename($file));
	header('Content-Lenght: '.filesize($file));
	readfile($file);
	exit;
}else{
	echo 'File tidak ditemukan';
}
?>