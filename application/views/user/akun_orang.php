<!DOCTYPE html>
<!-- saved from url=(0034)http://localhost/DJnow/profile.php -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Profile | DJNow</title>
		<style type="text/css">
	
			#orange_bar{
				height: 50px;
				background-color: #F2994A;
				color: #FFE5B4;
				list-style-type: none;
					top: 0;
					position: fixed;
					overflow: hidden;
					width: 100%;
					z-index: 1;
					margin-left: -10px;
			}
			#search_box{
				width: 690px;
				height: 23px;
				border-radius: 15px; 
				border:none;
				padding: 4px;
				font-size: 14px;
				text-align: center; 
				background-image: url(res/cari.png);
				background-repeat: no-repeat;
				background-position: right;
				background-size: 15px;
			} 
			#rata{
				margin-top: 10px;
				margin-bottom: -10px;
			}
			#rata1{
				margin-top: 15px;
				margin-bottom: -10px;
				margin-left: 10px;
				color: red;
			}
			#story{
				border:none;
				padding: 4px;
			}
			#img_story{
				width: 60px;
				height: 60px;
				border-radius: 50% ;
				margin-left: 43%;
				margin-top: 50px;
				margin-bottom:6px;
				border:none;
				padding: 4px;
			}
			#nametag{	
				margin-top: -10px;
				font-size: 16px;
			}
			
			#button0{
				width: 420px;
				height: 45px;
				background-color: #F2994A ;
				float: center;
				margin-left: 20px;
				margin-right: 20px;
				border-radius: 10px; 
				border:none;
				padding: 4px;
				font-size: 18px;
			}
			#button1{
				width: 200px;
				height: 45px;
				background-color: #F2994A ;
				float: center;
				margin-left: 20px;
				margin-right: 20px;
				margin-top: 10px;
				border-radius: 10px; 
				border:none;
				padding: 4px;
				font-size: 18px;
			}
			#portofolio{
				width: 200px;
				height: 200px;
			}
		</style>
	</head>
	

	<body style="font-family: calibri; background-color: #FFE5B4;">

		<!-- top bar-->
		<div id="orange_bar">
			<div style="width: 900px; margin:auto;font-size: 30px">
				<img id="rata" src="<?= base_url('assets'); ?>/res/logo.png" width="60" height="30">
				&nbsp;<input type="text" id="search_box" placeholder="Cari di DJNow">
				<a href="<?= base_url('auth/logout'); ?>">
				<img id="rata1" src="<?= base_url('res/navbar_user'); ?>/logout2.png" style="width:20px ; height:20px; float:right;">
				<a>
				<a href="<?= base_url('user/profile '); ?>">
				<img id="rata1" src="<?= base_url('res'); ?>/profile/<?= $aku['foto']?>" style="border-radius:50%; width:20px ; height:20px; float:right;">
				<a>
				<a href="<?= base_url('User/notifikasi'); ?>">
					<img id="rata1" src="<?= base_url('res/navbar_user'); ?>/notifikasi1.png" style="width:20px ; height:20px; float:right;">
				<a>
				<a href="<?= base_url('User'); ?>">
				<img id="rata1" src="<?= base_url('res/navbar_user'); ?>/home4.png" style="width:20px ; height:20px; float:right;">
				<a>
			</div>
		</div>

		<div>
			<div style="width: 900px; margin:auto;font-size: 30px">
				<!--bio profile-->
				<div style="display: flex;">
					<div id="story" style="width:460px;height: 530px; margin: left; margin-left: -5px; margin-top:20px;background-color: #FDFAE6; min-height: 400px;">
						<div>
							<img id="img_story" src="<?= base_url('res'); ?>/profile/<?= $user['foto']?>">	
						</div>
						<div id="nametag" style="text-align: center; font-weight: bold;color: #C13301;">
							<?= '@', $user['username']; ?>
						</div>
						<div id="name" style="text-align: center; font-weight: bold;color: black;">
								<?=  $user['nama_lengkap']; ?>
						</div>
						<br>
						
						<p style="text-align: center;font-size: 18px; font-weight: bold; color: black;">
              <?= $user['user_bio']; ?>
							Kumpulan foto disamping merupakan hasil 
							desainku.
						</p> 
						<p style="text-align: center;font-size: 18px; font-weight: bold; color: black;">
							Kalau tertarik dengan karya desainku, kalian bisa hubungi aku di :

              <?= $user['kontak']; ?> atau
							<?= $user['email']; ?>
						</p> 
					</div>
					
					<!-- PORTOFOLIO	-->
					<div id="story" style="width:460px;height: 530px; margin: left; margin-left: 5px; margin-top:16px;background-color:#FFE5B4; min-height: 400px;">
					<?php $jumlah = count($postingan); ?>
					<?php for ($x = 0; $x < $jumlah ; $x++) : ?>
						<?php $id = $postingan[$x]['id'] ?>
						<a href="<?= base_url('User/postingan?postingan='), $id, '&page=/akun_orang&username=',$user['username']; ?>">
							<img id="portofolio" src="<?= base_url('res/postingan/'), $postingan[$x]['foto']; ?>">
						<a>
					<?php endfor; ?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
