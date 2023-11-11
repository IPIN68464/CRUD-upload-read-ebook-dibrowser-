<?php 
require('controller/Koneksi.php');
if(isset($_GET['up'])){
	if($_GET['up']== 0){
		Script::msg();
	}elseif($_GET['up']==1){
		Script::msg_err();
	}
}
?>
<div style="background-color:#E0F4FF;height: 120%;width:100%;border-radius:0.5rem;">
	<div style="display: flex;">
			<div style="line-height: 2rem;position: relative;top: 10rem;left: 18rem;padding: 1rem;">
				<form action="/Home/webblog/view/menu-admin.php" method="post" enctype="multipart/form-data" style="font-family: Courier New;">
					<div style="display: flex;"><label>Judul Buku</label>&nbsp;<input type="text" id='judul' name="judul" autofocus style="margin-left: 10rem;height: 1.1rem;width: 20rem;" /><br></div>
					<?php $dat=date('d-m-y');?>
					<div><label>Tanggal Upload</label>&nbsp;<label name='$dat' style="margin-left:7.7rem"><?=$dat;?></label><br></div>
					<div><label>Cover Buku</label><input name='cover' type="file" style="margin-left:10.7rem" /></div>
					<div><label>Files Buku</label><input name='buku' type="file" style="margin-left:10.7rem" /></div>
					<button name='submit' value='tambah'>Tambah</button>
				</form>
			</div>
	</div>
</div>