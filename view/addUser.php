<div style="width: 100%;">
	<div style="display: flex;justify-content: center;">
		<h3>ADD Account</h3>
	</div>
	<br>
	<div style="display: flex;flex-direction: column;line-height: 45px;width: 80%;margin: auto;border-radius: 5px;background-color:#F8F0E5;padding:15px">
		<ul>
			<form>
				<div style="display: flex;">
					<div style="margin-right: 40px;">
						<li style="list-style: none"><label for='auserName'>User name&nbsp;</label></li>
						<li style="list-style: none"><label for='aP'>User Password</label></li>
						<li style="list-style: none;" for='aE'><label for="aE">User mail</label></li>
					</div>
					<div>
						<li style="list-style: none"><input id=auserName type="text" name="auserName" placeholder="User Name" /></li>
						<li style="list-style: none"><input id='aP' type="passwrd" name="apass" placeholder="User Password"></li>
						<li style="list-style: none"><input type="email" name="aMail" id='aE' placeholder="User Mail"></li>
					</div>
				</div>
				<div style="border:1px solid #7EAA92; width: 350px;padding:5px;line-height: 18px;margin: 10px 0;">
					<li style="list-style: none;"><label style="position: relative;top:-17px;background-color:#F8F0E5" for='aJK'>Jenis Kelamin</label></li>
					<li style="list-style: none;"><input type="radio" name="aJK" value="Laki-laki" id='aJK'>&nbsp;Laki - Laki</input>
					<input type="radio" name="aJK" value="Peremuan" id='aJK'>&nbsp;Perempuan</input></li>
				</div>
				<li style="list-style: none;"><label>Foto Profile&nbsp;</label><input type="file" name="aFile" />
				</li>
				<button type="submit" name="submit">Submit</button>
			</form>
		</ul>
	</div>
</div>