<!DOCTYPE html>
<!-- saved from url=(0031)http://localhost/DJnow/home.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Home | DJNow</title>
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

			#status{
				border-radius: 15px; 
				border:none;
				padding: 4px;
			}

			#profile_pic{
				width: 50px;
				height: 50px;
				border-radius: 50%;
				margin-left: 30px;
				margin-top: 60px;
				margin-bottom: -30px;
				border:none;
				padding: 4px;
			}

			#upload_img{
				width: 300px;
				height: 40px;
				margin-bottom: 120px;
				margin-top: -100px;
				text-align: center;
				background-color: #E0DFD5;
				border:none;
				padding: 4px;
			}

			#option1{
				width: 200px;
				height: 40px;
				background-color: #F2994A;
				margin-top: -163px;
				margin-right: 240px;
				float: right;
			}

			#button1{
				width: 200px;
				height: 40px;
				background-color: #C13301 ;
				float: right;
				margin-top: -163px;
				margin-right: 20px;
			}

			#story{
				border-radius: 15px; 
				border:none;
				padding: 4px;
			}

			#img_story{
				width: 40px;
				height: 40px;
				border-radius: 50% ;
				margin-left: 10px;
				margin-top: 5px;
				margin-bottom: -30px;
				border:none;
				padding: 4px;
			}
			#nametag{
				margin-left:  60px;
				margin-top: -10px;
				font-size: 16px;
			}

			#img_feed{
				width: 435px;
				height: 435px;
				margin-top: 15px;
			}

			#icon{
				margin-top: 3px;
				margin-bottom: -3px;
				margin-left: 10px;
				lighting-color: #C13301;
				height:25px ; 
				width: 25px ;
			}

			#icon1{
				float: right;
				margin-top: 3px;
				margin-bottom: -3px;
				margin-right: 20px;
				lighting-color: #C13301;
				height:25px ; 
				width: 25px ;
			}

			#komentar{
				width: 400px;
				height: 26px;
				margin-left: 10px ; 
				background-color: #E0DFD5;
				border:none;
				padding: 4px;
				border-radius: 9px;
				background-image: url(res/send1.png);
				background-repeat: no-repeat;
				background-position: right;
				background-size: 25px;
			}

			#persegi {
   				height: 35px;
   				width: 100px;  			
   				background: #FFD300;
				float: right;
				margin-top: -30px;
			}		
			
			#segitiga{
				height:0px;
				width:0px;
				
				border-top:solid 17.5px transparent;
				border-bottom:solid 17.5px transparent;
				float: right;
				margin-top: -30px;
				margin-right: 20px;
			}

			#persegi1 {
	   			height: 35px;
	   			width: 100px;  			
				float: right;
				margin-top: -30px;
			}		
			
			#segitiga1{
				height:0px;
				width:0px;
				border-left:solid 17.5px #EFDB82;
				border-top:solid 17.5px transparent;
				border-bottom:solid 17.5px transparent;
				float: right;
				margin-top: -30px;
				margin-right: 20px;
			}
			
	</style></head>
	
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
        <img id="rata1" src="<?= base_url('res'); ?>/profile/<?= $user['foto']?>"  style="border-radius:50%; width:20px ; height:20px; float:right;">	
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
				<!--box status-->
				<div id="status" style="width:900px; margin: auto; margin-top:20px;background-color: white; min-height: 0px;">
					<?php echo form_open_multipart('User/upload');?>
						<img id="profile_pic" src="res/profile/<?= $user['foto']?>">
						&nbsp; 
						<input type="file" id="upload_img" name="upload_img" label="Pilih Gambar" <?php // placeholder="upload desain anda disini" ?>>		
						<div>
							<select id="option1" name="kategori" style="cursor: pointer;" >
								<option value="desain" style="cursor: pointer;">Pilih Kategori</option>
								<?php for($k=0;$k<count($kategori);$k++) : ?>
								<option value= <?= $kategori[$k]['nama']; ?>><?= $kategori[$k]['nama']; ?></option>
								<?php endfor; ?>
							</select>
						</div>
						<!--<select id="option">
							<option>Pilih Kategori</option>
						</select>	-->
						<div style="margin-top:-80px; cursor:pointer;">
							<button style="cursor:pointer;" type="submit" id="button1"> Upload </button>
						</div>
					</form>				
				</div>

				<!--timeline story desain-->
				<?php $isi = [];
				for($l = 0 ; $l<count($suka); $l++){
                            $isi[$l] =$suka[$l]['id_postingan'];
                              } ?>
				<?php $jumlah = count($postingan); ?>
				<?php for ($x = ($jumlah+$jumlah%2)/2 - 1; $x >= 0 ; $x--) : ?>
				<?php $id_kategori = $postingan[$jumlah-1]['kategori']; ?>
					<div style="display: flex;">
						<?php 
							$akun1 = $this->db->get_where('user', ['username' => $postingan[$jumlah-1]['username']])->row_array(); ?>
							<div id="story" style="width:460px;height: 600px; margin: left; margin-left: 0px; margin-top:20px;background-color: white; min-height: 400px;">
								<div>
									<a href="<?= base_url('user/akun_orang?username='),$akun1['username']; ?>">
									<img id="img_story" src="<?= base_url('res/profile/'), $akun1['foto']; ?>">	
									<a>
								</div>

								<div id="nametag" style="font-weight: bold;color: #C13301;">
									<?= $akun1['username']; ?>
								</div>
							
							<!-- box ujung segitiga -->
					 
							<div id="segitiga" style="border-left:solid 17.5px <?= $kategori[$id_kategori-1]['warna']; ?>;"></div>
							<div id="persegi" style= "background: <?= $kategori[$id_kategori-1]['warna']; ?>;">
							<p style="text-align: center;margin-top: 9px; font-size: 14px; font-weight: bold; color: black;"> <?= $kategori[$id_kategori-1]['nama']; ?>
							</p>
							</div>
							<?php $id = $postingan[$jumlah-1]['id'] ?>
							<a href="<?= base_url('User/postingan?username=0&postingan='), $id, '&page='; ?>">	
								<img id="img_feed" src="<?= base_url('res/postingan/'), $postingan[$jumlah-1]['foto']; ?>">
							<a>
								<?php  if( in_array($id, $isi)) { ?>
								<a href="<?= base_url('User/suka_home?suka=0&id_postingan='), $postingan[$jumlah-1]['id']; ?>"> 
									<img id="icon" src="<?= base_url('res/bar_postingan'); ?>/like_merah.png">
								</a>
								<?php } else { ?>
								<a href="<?= base_url('User/suka_home?suka=1&id_postingan='), $postingan[$jumlah-1]['id']; ?>"> 
									<img id="icon" src="<?= base_url('res/bar_postingan'); ?>/like_bolong.png">
								</a>
								<?php } ?>
								<a>
									<img id="icon1" src="<?= base_url('res/bar_postingan'); ?>/share_merah.png">
								</a>
								<a>
									<img id="icon1" src="<?= base_url('res/bar_postingan'); ?>/download_merah.png">
								</a>
								<input type="text" id="komentar" placeholder="	tambah komentar">
							</div>
						
					
						<?php if($jumlah-2>=0){
											$akun2 = $this->db->get_where('user', ['username' => $postingan[$jumlah-2]['username']])->row_array(); ?>
										<?php $id_kategori = $postingan[$jumlah-2]['kategori']; ?>
											<div id="story" style="width:460px;height: 600px; margin:right; margin-top:20px; margin-left: 20px; background-color: white; min-height: 400px;">
												<div>
													<a href="<?= base_url('user/akun_orang?username='),$akun2['username']; ?>">
														<img id="img_story" src="<?= base_url('res/profile/'), $akun2['foto']; ?>">	
													<a>
												</div>
												<div id="nametag" style="font-weight: bold;color: #C13301;">
													<?= $akun2['username']; ?>
												</div>
					
					<!-- box ujung segitiga -->
					 <div id="segitiga1"style="border-left:solid 17.5px <?= $kategori[$id_kategori-1]['warna']; ?>;"></div>
					<div id="persegi1" style= "background: <?= $kategori[$id_kategori-1]['warna']; ?>;">
					<p style="text-align: center;margin-top: 9px; font-size: 14px; font-weight: bold; color: black;"> <?= $kategori[$id_kategori-1]['nama']; ?>
					</p>
					</div>
					<?php $id = $postingan[$jumlah-2]['id'] ?>
							<a href="<?= base_url('User/postingan?username=0&postingan='), $id, '&page='; ?>">	
												<img id="img_feed" src="<?= base_url('res/postingan/'), $postingan[$jumlah-2]['foto']; ?>">
												<a>
												<?php  if( in_array($id, $isi)) { ?>
												<a href="<?= base_url('User/suka_home?suka=0&id_postingan='), $postingan[$jumlah-2]['id']; ?>"> 
													<img id="icon" src="<?= base_url('res/bar_postingan'); ?>/like_merah.png">
												</a>
												<?php } else { ?>
												<a href="<?= base_url('User/suka_home?suka=1&id_postingan='), $postingan[$jumlah-2]['id']; ?>"> 
													<img id="icon" src="<?= base_url('res/bar_postingan'); ?>/like_bolong.png">
												</a>
												<?php } ?>
												<a>
													<img id="icon1" src="<?= base_url('res/bar_postingan'); ?>/share_merah.png">
												</a>
												<a>
													<img id="icon1" src="<?= base_url('res/bar_postingan'); ?>/download_merah.png">
												</a>
												<input type="text" id="komentar" placeholder="	tambah komentar">
											</div>
							<?php  }?> 
					
						<?php $jumlah = $jumlah - 2; ?>
					
							
					</div>				
				<?php endfor; ?>

				</div>
		</div>

					
			
	</body>
	</html>
	