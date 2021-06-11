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
			
			border-top:solid 17.5px transparent;
			border-bottom:solid 17.5px transparent;
			float: right;
			margin-top: -30px;
			margin-right: 80px;

		}
		#persegi {
   			height: 35px;
   			width: 100px;  			
   	
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
			width: 420px;
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
		#kirim_komentar1{
			position: absolute;
			left: 93.77%;
			right: 3.44%;
			top: 90.01%;
			bottom: 5.49%;

			opacity: 0.5;
		}
		#kirim_komen{
			height: 36px;
			width: 40.102325439453125px;
			left: 1350.30224609375px;
			top: 721px;
			bottom: 5.49%;
			border-radius: 0px;
			opacity: 0.5;
			margin-bottom:-13px;
			margin-right:0px;
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
 
        <!-- box ujung segitiga -->
        <?php $id_kategori = $postingan['kategori']; ?>
				<div id="segitiga" style="border-left:solid 17.5px <?= $kategori[$id_kategori-1]['warna']; ?>;"></div>
				<div id="persegi" style= "background: <?= $kategori[$id_kategori-1]['warna']; ?>;">
						<p style="text-align: center;margin-top: 9px; font-size: 14px; font-weight: bold; color: black;"> <?= $kategori[$id_kategori-1]['nama']; ?>
						</p>
				</div>
     
				
				<?php for($kom = 0 ; $kom < count($komentar); $kom++) :  ?>
					<?php $username_komen = $komentar[$kom]['username']; 
				$akun = $this->db->get_where('user', ['username' => $username_komen])->row_array();?>
				<div class="row user-komentar" style="margin-left: 1px; margin-top: 5px; margin-bottom: 4px; background-color: #F2994A;">
                                <div class="col" style="max-width: 60px; height: 55px;">
                                    <div class="potoprofil d-flex flex-wrap align-items-center justify-content-center">
                                        <img src="res/user1.png" class="rounded-circle" width="55px" height="55px" alt="">
                                    </div>
                                </div>
                                <div class="col" style="margin-left: 3px; margin-top:4px;">
                                    <div class="row" style="margin-left: -23px;">
                                        <a href="#" style="font-weight: 700; color: #C13301; text-decoration: none;">
                                            ptr_tanjung
                                        </a>
                                    </div>
                                    <div class="row" style="font-weight: 500; color: black;">
                                        Keren, bisakah kita berkolaborasi?
                                    </div>
                                </div>
                                <div class="col d-flex align-items-center" style="font-weight: 500; opacity: 0.5;  max-width: 80px;">
                                   <a href="#" style="text-decoration: none; color:#C13301;">Balas</a>
                                </div>
                            </div> 

				<?php endfor; ?>

				<div>
					<img id="like" src="<?= base_url('res'); ?>/postingan2_files/like1.png">
					<p id="teks2" style="color:#C13301;font-weight: bold;font-size: 16px;">
						<?= count($suka); ?> likes
					</p>
					<img id="share" src="<?= base_url('res'); ?>/postingan2_files/share.png">
					<img id="download" src="<?= base_url('res'); ?>/postingan2_files/download.png">
					<form action="<?= base_url('User/komentar?id='), $postingan['id'],"&page=",$halaman,"&username=",$username; ?>" method="post">
						<input type="text" name="komentar" id="komentar" placeholder="	tambah komentar">
						<button type="submit" id="kirim_komen" >
						<img id="kirim_komen" src="<?= base_url('res'); ?>/kirim_komentar.png">
						</button>
					</form>
				</>
			</div>
		</div> 

	
</body></html>
