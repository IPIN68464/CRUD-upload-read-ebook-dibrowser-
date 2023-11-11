<?php
echo $_POST['dat'];
ini_set('display_errors',1);
include('../controller/Koneksi.php');
class Buku extends Conn{
	public function add($judul,$cover,$path){
		mysqli_query($this->con,"insert into manage_book value (null,'$judul','$cover','$path',now());");
	}
	public function del($judul){
		mysqli_query($this->con,"delete from manage_book where judul='$judul';");
	}
	public function edit($judul,$jdl){
		mysqli_query($this->con,"update manage_book set judul='$judul' where judul='$jdl';");
	}
}
if(isset($_POST['submit'])){
	if($_POST['submit'] == 'tambah'){
		if($_FILES['cover']['error'] == 0){
			if($_FILES['buku']['error'] == 0){
				$upload_patch=['uploads/cover','uploads/file'];
				$judul=$_POST['judul'];
				$cover_name=($_FILES['cover']['name']);
				$cover_patch=($_FILES['cover']['tmp_name']);
				$cover_size=($_FILES['cover']['size']);
				$cover_err=($_FILES['cover']['error']);
				$buku_name=($_FILES['buku']['name']);
				$buku_patch=($_FILES['buku']['tmp_name']);
				$buku_size=($_FILES['buku']['size']);
				$buku_err=($_FILES['buku']['error']);
				$cover_ext=explode('.', $cover_name);
				$cover_ext=end($cover_ext);
				$buku_ext=explode('.', $buku_name);
				$buku_ext=end($buku_ext);
				$new_cover_name=$judul.'.'.$cover_ext;
				$new_book_name=$judul.'.'.$buku_ext;
				$cover_new_name=$upload_patch['0'].'/'.$new_cover_name;
				$buku_new_name=$upload_patch['1'].'/'.$new_book_name;
				$query=new Buku;
				$query->add($judul,$cover_new_name,$buku_new_name);
				if ($query){
					if (move_uploaded_file($cover_patch, $cover_new_name)){
						if (move_uploaded_file($buku_patch, $buku_new_name)){
							header('Location: /Home/webblog/?page=add-buku&&up=0');
						}else{
							header('Location: /Home/webblog/?page=add-buku&&up=1');
						}
					}else{
						header('Location: /Home/webblog/?page=add-buku&&up=1');
					}
				}else{
					header('Location: /Home/webblog/?page=add-buku&&up=1');
				};
			}else{
				header('Location: /Home/webblog/?page=add-buku&&up=1');
			}
		}else{
			header('Location: /Home/webblog/?page=add-buku&&up=1');
		}
	}elseif ($_POST['submit'] == 'edit') {
		if(!empty($_POST['judul'])){
			$judul=$_POST['judul'];
			$jdl=$_POST['db_name'];
			if($judul != $jdl){
				$edit=new Buku();
				$edit=$edit->edit($judul,$jdl);
				header('Location: /Home/webblog/?page=edit-buku&&up=0');
			}else{
				header('Location: /Home/webblog/?page=edit-buku&&up=1');
			}
		}
	}elseif ($_POST['submit'] == 'delete') {
		$judul=$_POST['judul'];
		$del=new Buku();
		$hapus=$del->del($judul);
		if($hapus){
			header('Location: /Home/webblog/?page=delete-buku&&up=0');
		}else{
			header('Location: /Home/webblog/?page=add-buku&&up=1');
		}
	}
}else{
	header('Location: /Home/webblog/?page=add-buku&&up=1');
}
?>