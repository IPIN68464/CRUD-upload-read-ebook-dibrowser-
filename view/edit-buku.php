<?php 
require('controller/Koneksi.php');
if(isset($_GET['up'])){
	if($_GET['up']== 0){
		Script::msg();
	}elseif($_GET['up']==1){
		Script::msg_err();
	}
}
$view_data=new Conn();
	$data_source=mysqli_query($view_data->con,'select * from manage_book');
	$view_data_book=[];
	while($clone=mysqli_fetch_assoc($data_source)){
		$view_data_book[]=$clone;
	}
?>
<div style="background-color:#E0F4FF;height: 120%;width:100%;border-radius:0.5rem;">
	<div style="padding: 1rem;">
	<?php foreach ($view_data_book as $book):?>
		<a style="border:1px solid darksalmon;background-color:coral;padding:0.5rem;border-radius:0.5rem;text-decoration:none;" href="?page=edit-buku&&jdl=<?=$book['judul'];?>&&pc=<?=$book['path_cover'];?>&&pb=<?=$book['path_buku'];?>&&tu=<?=$book['tanggal_upload'];?>"><?=$book['judul'];?></a>
	<?php endforeach;?>
	</div>
	<div style="display: flex;">
			<div style="line-height: 2rem;position: relative;top: 10rem;left: 18rem;padding: 1rem;">
				<?php if(isset($_GET['jdl'])):?>
					<form action="/Home/webblog/view/menu-admin.php" method="post" enctype="multipart/form-data" style="font-family: Courier New;">
						<div style="display: flex;"><label>Judul Buku</label>&nbsp;<input type="text" id='judul' name="judul" value="<?=$_GET['jdl'];?>" autofocus style="margin-left: 10rem;height: 1.1rem;width: 20rem;" /><br></div>
						<input name='db_name' type="hidden" value="<?=$_GET['jdl'];?>">
						<div><label>Tanggal Upload</label>&nbsp;<label style="margin-left:7.7rem"><?=$_GET['tu'];?></label><br></div>
						<div><label>Cover Buku</label><input value="<?=$_GET['jdl'];?>" name='cover' type="file" style="margin-left:10.7rem" /></div>
						<div><label>Files Buku</label><input name='buku' type="file" style="margin-left:10.7rem" /></div>
						<button name='submit' value='edit'>Tambah</button>
					</form>
				<?php endif;?>
			</div>
	</div>
</div>