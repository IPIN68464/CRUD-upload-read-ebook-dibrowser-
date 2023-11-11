
<?php 
ini_set('display_errors',1);
session_start();
?>
<!DOCTYPE html>
<html lang='eng'>
<head>
	<meta charset='UTF-8'>
	<meta http-equiv='X-UA-Compatible' content='IE-edge'>
	<meta name='viewport' content='width-device-width,initial-scale=1.0'>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Rak Buku Online</title>
	<link rel='icon' href="../img/logo.png">
	<style>
		body{background-color:#00ffff}
*{margin:0}
#Container{margin:0 0 0 14.5%;background-color:#fff6eo;position:absolute;width:85.5%}
#content{padding:0.9%;height: 410px;margin-bottom: 6.0%}
#footer{background-color:#4e73df;justify-content:space-around;height:38px;display:flex;width: 98.5%;margin:auto;align-items: center;color:#ffff;box-shadow: 1px 0px 7px 0.1px black}
.img{margin-top:6%;border-radius:50%;width:90%;box-shadow:1px 0px 3px 0.1px white}
.border-title{background-color:orange;display:flex;margin-bottom:10px;width:100%;height:40px;justify-content:center;align-items:center}
.border-user{width:99%;margin:1% 0 2% 0;padding:0.3%;border-bottom:5px solid orange;display: flex;}
.kotak1{width: 75%;}
.kotak2{width:30%;display: flex;justify-content: center}
.hero{width: 50%;height: 64%}
.TS{text-align: left;font-family: monospace;width:45%}
.danger{background-color: red;padding:.6%;width: 5%;text-align: center;margin:0.1%}
.warning{background-color: orange;padding:.6%;width: 5%;text-align: center;margin:0.1%}
.text{text-decoration: none;color: black;font-family: monospace;}
.kotakBTN{display:flex;}

/* button konfiguration header */
#header{background-color:#f8f9fc;font-face:'Serif';display: flex;justify-content: space-between;font-size: 13px;padding: 1%}
.btnImg{width: 14px;}
.btnImg1{width: 19px;padding:3px;}
.boxInput{font-size: 13px;padding: 1px}
.border{width: 190px;display: flex;justify-content: center;align-items: center;}
.sideBorder{border-left: 1px solid black;margin-left: 5px}

/* attribut umum */
.link{text-decoration: none;color:#e48586}
.linkWhite{text-decoration: none;color:#f8f9fc}
.link1{text-decoration: none;color:#8C3333}
.box{justify-content: center;padding:21px;display: inline-block;border-bottom: 0.1px inset #e48586}
.box1{justify-content: center;padding:5px;display: inline-block}
.box2{font-size: 12px}
.box3{font-size: 11px}
.sorot:hover{border-bottom: 1px solid white}



/* side menu configuration */
#box{width: 150px;display: flex;flex-direction: column;margin: auto;height: 100%}
#side-menu{height:100%;text-align:center;box-shadow:1px 0px 7px 0.1px black;width:14%;z-index:1;display:inline-block;position:fixed;background-color: #4e73df}
.side-icon {margin-top:4%;height:51px;border-radius: 50%;border:1px solid #f8f9fc}
.boxIcon {padding: 4;height:78px;border-bottom:1px solid #f8f9fc}
.borderImg{border-radius: 50%}
.titleBox{border:1px solid black;display: inline-block;width: 20px}
.titleMenu{padding: 12px;line-height: 30px}
.rataKiri{position: relative;left:-40px;color:#f8f9fc;border-bottom:1px solid #e48586;padding:2px}

/* disable link */
.offLink{pointer-events: none;background-color: #435B66}

/* main page konfiguration */
#main{background-color: #f8f9fc;height: 100%;display: flex;border-radius:7px;padding: 35px}
.mainBox{display: flex;justify-content: center;align-items: center;}
.dropDown{display: flex;flex-direction: column;height: 70px;}
.btnSize{width: 100%;margin-top: 3%}
.siZe{width:100%;height: 400px;}

	</style>
</head>
<body>
	<div id='side-menu'>
		<div id='box'>
			<div >
				<a href='#'><img src='view/img/logo_sturbug.jpeg' class='side-icon'/></a>
			</div>
			<div class='link box' >
				<img src='view/img/dashboard.jpeg' class="btnImg borderImg" />
				<a href='?page=dashboard' class="linkWhite">Dashboard</a>
			</div>
			<div class='titleMenu'>
				<label class="rataKiri"><img src='view/img/menu.png' class="btnImg" />Menu</label>
				<div class='link box1' >
					<?php if(isset($_SESSION['iD']) and $_SESSION['iD'] == 1 ):?>
						<img src="view/img/tambah.png" class="btnImg borderImg">
						<a href='?page=add-buku' class="link1">Tambah</a><br>
						<img src="view/img/edit.png" class="btnImg borderImg">
						<a href='?page=edit-buku' class="link1">Rubah</a><br>
						<img src="view/img/deleted.png" class="btnImg borderImg">
						<a href='?page=delete-buku' class="link1">Hapus</a><br>
					<?php endif;?>
					<img src='view/img/ebook.jpeg' class="btnImg borderImg" />
					<a href='?page=ebook' class="link1">Ebook</a>
				</div>
			</div>
		</div>
	</div>
	<div id='Container'>
		<div id='header'>
			<div>
				<form>
					<input type="text" name="search" placeholder="Search For" class="boxInput" size='25px'>
					<button type='submit' name='submit'><img class="btnImg " src="view/img/search.png" / sizes="25"></button>
				</form>
			</div>
			<div>
				<div class="border">
					<div id="jam"><?=date('h:i:s');?></div>
					<img src="view/img/lonceng.png" class="btnImg1">
					<a href="/Home/webblog/controller/logout.php"><img src="view/img/logout.png" class="btnImg1"></a>
					<div class="border sideBorder">
						<a class='link' href="#"><label style="color:blue;margin:4px"><?=isset($_SESSION['ID_Name']) ? strtoupper($_SESSION['ID_Name']) : "My Account"?></label></a>
						<img src="view/img/user.png" class="btnImg1">
					</div>
	
				</div>
			</div>
		</div>
		<div id='content'>
			<?php 
			if( !isset($_GET['page']) or $_GET['page'] == 'dashboard'){
				include('dashboard.php');
			}elseif($_GET['page'] == 'login'){
				include('controller/login.php');
			}elseif($_GET['page'] == 'ebook'){
				if(isset($_SESSION['iD'])){
						include('view/buku.php');
				}else{
						include('controller/login.php');
					}
			}elseif($_GET['page'] == 'addUser'){
				include('addUser.php');
			}elseif($_GET['page'] == 'add-buku'){
				include('add-buku.php');
			}elseif($_GET['page'] == 'edit-buku'){
				include('edit-buku.php');
			}elseif($_GET['page'] == 'delete-buku'){
				include('delete-buku.php');
			}
			?>
		</div>
	</div>
</body>
</html>
