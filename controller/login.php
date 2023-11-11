
<div id='main' style="display: flex;justify-content: center;align-items: center;">
	<div style="border: 1px solid salmon;height: 8rem;width: 15rem;padding: 4rem;border-radius:3rem;background-color: rgba(0, 0, 0, 0.3);display: flex;justify-content: center;align-items: center;">
		<form class="dropDown mainBox" method="post" action="controller/login_logic.php">
		<input  class="btnSize" style="padding:7px;border-radius:2rem;font-family: Vivaldi;" type="text" name="userName" placeholder="User Name ....." autocomplete="off" />
		<input  class="btnSize" style="padding:7px;border-radius:2rem;font-family: Vivaldi" type="password" name="pass" placeholder="Password ....." autocomplete="off" />
		<button style="width: 50px;justify-content: center;display: flex;margin: 1rem;" type='submit' name='submit'><img src='../img/loginBTN.png' style="width: 20px;border-radius: 50%;" /></button>
		<div>
			<label style="padding:3px;margin:5px 5px;text-decoration:none;font-size: 13px;">Tidak punya akun?,<a href='?page=addUser' style="padding:3px;margin:5px 5px;text-decoration:none;font-size: 13px;">Create</a></label>
		</div>
		 <?php if(isset($_GET['err'])):?>
		<div style="justify-content: center;">
			<label style="color:red;font-style:italic;font-size: 15px">
			<?php 
			if($_GET['err'] == 'P1'){
				echo 'User Tidak Ditemukan!';
			}elseif($_GET['err'] == 'P2'){
				echo 'Password Tidak Cocok!';
			}
			;?>
		</div>
		<?php endif;?>
		</form>
	</div>
</div>
