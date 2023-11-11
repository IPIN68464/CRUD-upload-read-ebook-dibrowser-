<?php
include('controller/Koneksi.php');
$coba=new Conn();
$sql=mysqli_query($coba->con,'select * from manage_book;');
$data=[];
while($source=mysqli_fetch_assoc($sql)){
	$data[]=$source;
}
?>
<div id="main" style="display: flex;flex-wrap: wrap;overflow: auto;">
<?php foreach($data as $coba1):?>
	<div style="height: 13rem;text-align: center;border: 1px solid whitesmoke;margin:0.3rem;background-color:coral;border-radius:0.6rem">
		<?php $path_img=('view'.'/'.$coba1['path_cover']);?>
		<?php $path_buku=('view'.'/'.$coba1['path_buku']);?>
		<div style="margin: 0.2rem;height: 10rem;width: 10rem;"><img style="padding:0.5rem;border-radius:50%" src="<?=$path_img;?>" style='max-width: 100%;max-height: 100%;' /></div>
		<a href="<?=$path_buku;?>" style='text-decoration:none;color:whitesmoke;' ><?=$coba1['judul'];?></a>
	</div>
<?php endforeach;?>
</div>