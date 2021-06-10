!DOCTYPE html>
<!-- saved from url=(0037)http://localhost/DJnow/notifikasi.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Notifikasi</title>
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
			#notifbaru{
				width:900px; 
				margin: auto; 
				margin-top:40px;
				background-color: white; 
				min-height: 100px;
				border-radius: 15px; 
				border:none;
				padding: 4px;
			}
			#notifbaru1{
				width:900px; 
				margin: auto; 
				margin-top:20px;
				background-color: white; 
				min-height: 100px;
				border-radius: 15px; 
				border:none;
				padding: 4px;
			}
			#img_story{
				width: 40px;
				height: 40px;
				border-radius: 50% ;
				margin-left: 40px;
				margin-top: 5px;
				margin-bottom: -30px;
				border:none;
				padding: 4px;
			}
			#nametag{
				margin-left:  90px;
				margin-top: -15px;
				font-size: 16px;
			}
			#portofolio{
				float: right;
				height: 100px;
				width: 100px;
				margin-top: -27px;
				margin-right: 60px;	
			}
			#keterangan{

				text-align: left;
				font-size: 16px; 
				color: black;
				margin-left:  90px;
				margin-top: 30px;
				margin-bottom: -20px;
			}
	</style></head>
	
	
	<body style="font-family: calibri; background-color: #FFE5B4;">

		 <!--top bar-->
			<div id="orange_bar">

				<div style="width: 900px; margin:auto;font-size: 30px">
					<img id="rata" src="<?= base_url('assets'); ?>/res/logo.png" width="60" height="30">
          &nbsp;<input type="text" id="search_box" placeholder="Cari di DJNow">
          <a href="<?= base_url('auth/logout'); ?>">
					  <img id="rata1" src="<?= base_url('res/navbar_user'); ?>/logout2.png" style="width:20px ; height:20px; float:right;">				
          <a>
          <a href="<?= base_url('user/profile '); ?>">
            <img id="rata1" src="<?= base_url('res/profile/'), $user['foto'] ;?>" style="border-radius:50%; width:20px ; height:20px; float:right;">				
          <a>
          <a href="<?= base_url('User/notifikasi'); ?>">				
            <img id="rata1" src="<?= base_url('res/navbar_user'); ?>/notifikasi1.png" style="width:20px ; height:20px; float:right;">
          <a>
          <a href="<?= base_url('User'); ?>">
            <img id="rata1" src="<?= base_url('res/navbar_user'); ?>/home4.png" style="width:20px ; height:20px; float:right;">
          <a>
      </div style="width: 900px; margin:auto;font-size: 30px">
      </div>
      

			<div>
				<div >
          <?php for($q=0;$q<count($query);$q++)
          {
                $this->db->select('*');
                $this->db->from('notifikasi');
                $this->db->where_in('id_postingan', $query[$q]);
                $this->db->where('dari_username !=', $user['username']);
                $notif = $this->db->get()->result_array(); ?>     
          <?php for($x=count($notif)-1; $x>=0; $x--) : ?>
          <?php $userlain = $this->db->get_where('user', ['username' => $notif[$x]['dari_username']])->row_array(); 
          $postingan = $this->db->get_where('postingan', ['id' => $notif[$x]['id_postingan']])->row_array();
          $komentar = $this->db->get_where('komentar', ['id' => $notif[$x]['id_like_komentar']])->row_array();?>
          <a href="<?= base_url('User/postingan?username=0&postingan='), $postingan['id'], '&page='; ?>">	
          <div id="notifbaru">
						<img id="img_story" src="<?= base_url('res/profile/'), $userlain['foto']; ?>">
						<div id="nametag" style="font-weight: bold;color: #C13301;">
							<?= $userlain['username']; ?>
						</div>
            <img id="portofolio" src="<?= base_url('res/postingan/'), $postingan['foto']; ?>">
            <?php if($notif[$x]['jenis']==1) { ?>
						<p id="keterangan">
              Menyukai karyamu
            </p>
            <?php } else { ?>
            <p id="keterangan">
              Mengomentari karyamu: "<?= $komentar['isi']; ?>"
            </p>
            <?php } ?>
          </div>
          <a>
          <?php endfor;
          }; ?>
				</div>
			</div>
	
</body></html>
