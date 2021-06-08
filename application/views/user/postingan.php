<!DOCTYPE html>
<!-- saved from url=(0037)http://localhost/DJnow/postingan2.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Postingan</title>
	<style type="text/css">
		#kiri{
			width:820.8px;
			height: 659px; 
			margin: left;  
			margin-top:-10px;
			margin-left: -10px;
			margin-bottom: -10px;
			margin-right: -10px;
			background-color: #FFE5B4;
			min-height: 400px;
		}
		#kanan{
			width:547.2px;
			height: 659px; 
			margin: right;  
			margin-top:-10px;
			margin-left: 10px;
			margin-bottom: -10px;
			margin-right: -10px;
			background-color: #F2994A;
			min-height: 400px;
			letter-spacing: 
		}
		#close{
			margin-top:15px;
			margin-left: 60px;
			margin-bottom: 21px;
			width: 20px;	
			height: 20px;
			color: #C13301;
		}
		#logo{
			margin-top:15px;
			margin-bottom: 10px;
			margin-right: 10px;
			margin-left: 10px;
			width: 90px;
			height: 45px;
		}
		#image{
			margin-top: -12px;
			width: 530px;
			height: 570px;
			margin-right: 120px;
			margin-left: 100px;

			
		}
		#klik_kanan{
			width: 15px;
			height: 30px;
			margin-bottom:270px;
		}
		#klik_kiri{
			width: 15px;
			height: 30px;
			margin-bottom:270px;
			margin-left: 20px;
		}
		#line{
			margin-top: 60px;
			margin-bottom: -60px;
		}
		#line1{
			margin-top: 30px;
			margin-bottom: -60px;
		}
		#img_story{
			width: 40px;
			height: 40px;
			border-radius: 50% ;
			margin-left: 80px;				
			margin-top: 80px;
			margin-bottom: 10px;
			border:none;
			padding: 4px;
		}
		#nametag{
			margin-left:  140px;
			margin-top: -50px;
			font-size: 16px;
			
		}
		#img_story1{
			width: 40px;
			height: 40px;
			border-radius: 50% ;
			margin-left: 80px;				
			margin-top: 80px;
			margin-bottom: -80px;
			border:none;
			padding: 4px;
		}
		#nametag1{
			margin-left:  140px;
			margin-top: 30px;
			margin-bottom: -80px;
			font-size: 16px;
			
		}
		#segitiga{
			height:0px;
			width:0px;
			border-left:solid 17.5px #FFD300;
			border-top:solid 17.5px transparent;
			border-bottom:solid 17.5px transparent;
			float: right;
			margin-top: -30px;
			margin-right: 80px;

		}
		#persegi {
   			height: 35px;
   			width: 100px;  			
   			background: #FFD300;
			float: right;
			margin-top: -30px;
		}
		#teks{
			margin-top: 80px;
			margin-bottom: -120px;
			margin-left: 140px;
		}
		#reply{
			float: right;
			margin-top: 60px;
			margin-bottom: -120px;
			margin-right: -100px;
		}
		#like{

			margin-left: 65px;
			margin-top: 450px;
			margin-bottom: 4px;
			height: 30px;
			width: 30px;
		}
		#teks2{
			margin-left: 110px;
			margin-top: -35px;
		}
		#download{
			margin-top: -40px;
			float: right;
			margin-bottom: -10px;
			margin-right: 100px;
			height: 30px;
			width: 30px;
		}
		#share{
			margin-top: -40px;
			float: right;
			margin-bottom: -10px;
			margin-right: 60px;
			margin-left: 10px
			height: 30px;
			width: 30px;
		}
		#komentar{
			width: 450px;
			height: 31px;
			margin-left: 45px ; 
			background-color: #E0DFD5;
			border:none;
			padding: 4px;
			border-radius: 15px;
			background-image: url(res/send1.png);
			background-repeat: no-repeat;
			background-position: right;
			background-size: 30px;
		}
	</style></head>

	

	<body style="font-family: calibri; background-color: #FFE5B4;">

		<div style="display: flex;">
			<div id="kiri">
      <a href="<?php if($username == 0){ echo base_url('User'),$halaman; } else {?> <?= base_url('User'),$halaman, '?username=',$username; }?>">
        <img id="close" src="<?= base_url('res'); ?>/postingan2_files/close.png">
      <a>
				<img id="logo" src="<?= base_url('res'); ?>/postingan2_files/logo.png">	
				<br>
				<!--<img id="klik_kiri" src="<?= base_url('res'); ?>/postingan2_files/kiri.png">-->
				<img id="image" src="<?= base_url('res/postingan/'), $postingan['foto']; ?>">
				<!--<img id="klik_kanan" src="<?= base_url('res'); ?>/postingan2_files/kanan1.png">-->
			</div>
			<div id="kanan">
				<hr id="line" align="right" width="100%" height="1px" color="#C13301" size="1">
				<div>
					<img id="img_story" src="<?= base_url('res/profile/'), $user['foto']; ?>">	
				</div>
				<div id="nametag" style="font-weight: bold;color: #C13301;">
							<?= $user['username']; ?>	
				</div>
<?php 
			//	<!-- box ujung segitiga -->
			//	<div id="segitiga"></div>
			//	<div id="persegi">
			//			<p style="text-align: center;margin-top: 9px; font-size: 14px; font-weight: bold; color: black;"> Grafis
			//			</p>
			//	</div>
      ?>
       <hr id="line1" align="right" width="100%" height="1px" color="#C13301" size="1">
				
				<div>
					<img id="img_story1" src="<?= base_url('res'); ?>/postingan2_files/profile.png">	
				</div>
				<div id="nametag1" style="font-weight: bold;color: #C13301;">
							Noname
				</div>
				<p id="teks" style="text-align: left;font-size: 16px; color: black;">
								Keren, bisakah kita berkolaborasi?
							</p> 
				<span id="reply" style="color: #C13301"><span><span style="color: #C13301">Reply</span></span></span>

				<div>
					<img id="like" src="<?= base_url('res'); ?>/postingan2_files/like1.png">
					<p id="teks2" style="color:#C13301;font-weight: bold;font-size: 16px;">
						3 likes
					</p>
					<img id="share" src="<?= base_url('res'); ?>/postingan2_files/share.png">
					<img id="download" src="<?= base_url('res'); ?>/postingan2_files/download.png">
					<input type="text" id="komentar" placeholder="	tambah komentar">
				</div>
			</div>
		</div> 

	
</body></html>