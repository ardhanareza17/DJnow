<!DOCTYPE html>
	<html>
	<head>
		<title>Home | DJNow</title>
	</head>
	<style type ="text/css">
	
			#orange_bar{

			height: 50px;
			background-color: #F2994A;
			color: #FFE5B4;
			}
			#search_box{
				width: 450px;
				height: 20px;
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
				width: 450px;
				height: 150px;
				margin-bottom: 10px;
				margin-top: 10px;
				text-align: center;
				background-color: #E0DFD5;
				border:none;
				padding: 4px;
			}

			#option{
				width: 200px;
				height: 40px;
				background-color: #F2994A;
				float: right;
				margin-top: 40px;
				margin-right: 20px;
				
			}

			#button1{
				width: 200px;
				height: 40px;
				background-color: #C13301 ;
				float: right;
				margin-top: -85px;
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
				width: 376px;
				height: 376px;
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
				width: 350px;
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

	</style>

	<body style="font-family: calibri; background-color: #FFE5B4;">

		<!-- top bar-->
		<div id="orange_bar">

			<div style="width: 800px; margin-top:-10px; margin-left:250px;font-size: 30px" >

				<img id="rata" src="res/logo.png"  width="60" height="30" >

				&nbsp &nbsp &nbsp<input type="text" id="search_box" placeholder="Cari di DJNow"> 

				<img id="rata1" src="res/logout2.png" style="width:20px ; height:20px; float:right;" >
				
				&nbsp &nbsp <img id="rata1" src="res/profile.png" style="width:20px ; height:20px; float:right;" >
				
				&nbsp &nbsp <img id="rata1" src="res/notifikasi1.png" style="width:20px ; height:20px; float:right;" >
				
				&nbsp &nbsp <img id="rata1" src="res/home4.png" style="width:20px ; height:20px; float:right;" >


				<!--box status-->
				<div id="status" style="width:800px; margin: auto; margin-top:20px;background-color: white; min-height: 125px;">

						<img id="profile_pic" src="res/profile.png">

						&nbsp <input type="img" id="upload_img" placeholder="upload desain anda disini" >

						
							<select id="option"  >
								<option >Pilih Kategori</option>

							</select>	
							
							<button id="button1"> Ajukan verifikasi upload </button>


				</div>

				<!--timeline story desain-->
				<div style="display: flex;">
					<div id="story" style="width:410px;height: 530px; margin: left; margin-left: 10px; margin-top:20px;background-color: white; min-height: 400px;">
						<div>
							<img id="img_story" src="res/me.jpg">	
						</div>

						<div id="nametag" style="font-weight: bold;color: #C13301;">
							Ronsu
						</div>

						<img id="img_feed" src="res/rumah.png">

						<a> 
							<img id="icon" src="res/like.png">
						</a>

						<a>
							<img id="icon1" src="res/share.png" >
						</a>

						<a >
							<img id="icon1" src="res/download.png">
						</a>

						<input type="text" id="komentar" placeholder="	tambah komentar" >


					</div>

					<div id="story" style="width:410px;height: 530px; margin:right; margin-top:20px; margin-left: 20px; background-color: white; min-height: 400px;">

						<div>
							<img id="img_story" src="res/aku.jpg">	
						</div>

						<div id="nametag" style="font-weight: bold;color: #C13301;">
							Roni
						</div>

						<img id="img_feed" src="res/busana.jpg">

						<a> 
							<img id="icon" src="res/like.png">
						</a>

						<a>
							<img id="icon1" src="res/share.png" >
						</a>
						
						<a >
							<img id="icon1" src="res/download.png">
						</a>

						<input type="text" id="komentar" placeholder="	tambah komentar" > 
					</div>
					
				</div>
				

			</div>
		</div>
	 </body>
</html>
