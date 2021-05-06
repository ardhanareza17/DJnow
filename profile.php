<!DOCTYPE html>
	<html>
	<head>
		<title>Profile | DJNow</title>
	</head>
	<style type ="text/css">
	
			#orange_bar{

			height: 50px;
			background-color: #F2994A;
			color: #FFE5B4;
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

	<body style="font-family: calibri; background-color: #FFE5B4;">

		<!-- top bar-->
		<div id="orange_bar">

			<div style="width: 900px; margin:auto;font-size: 30px" >

				<img id="rata" src="res/logo.png"  width="60" height="30" >

				&nbsp<input type="text" id="search_box" placeholder="Cari di DJNow">


				<img id="rata1" src="res/logout2.png" style="width:20px ; height:20px; float:right;" >
				
				 <img id="rata1" src="res/profile.png" style="width:20px ; height:20px; float:right;" >
				
				 <img id="rata1" src="res/notifikasi1.png" style="width:20px ; height:20px; float:right;" >
				
				 <img id="rata1" src="res/home4.png" style="width:20px ; height:20px; float:right;" >

				 <!--bio profile-->
				<div style="display: flex;">
					<div id="story" style="width:460px;height: 530px; margin: left; margin-left: -5px; margin-top:20px;background-color: #FDFAE6; min-height: 400px;">
						<div>
							<img id="img_story" src="res/me.jpg">	
						</div>

						<div id="nametag" style="text-align: center; font-weight: bold;color: #C13301;">
							@Ronsu
						</div>

						<br>
						<p style="text-align: center;font-size: 18px; font-weight: bold; color: black;">
							Hi, perkenalkan saya Ronsu. Meskipun saya 
							bukan sarjana dari bidang per design-an, 
							saya senang dan suka dibidang 
							<span style="color: #C13301"><span><span style="color: #C13301">desain grafis</span></span></span> 
							ini.
							Kumpulan foto disamping juga merupakan hasil 
							desain saya.
						</p> 

						<button id="button0" style="color:white;">
							Edit Profile
						</button>


						<div style="display: flex;">
							
							<button id="button1" style="color:white;">
								Contact
							</button>

							<button id="button1" style="color:white;">
								Email
							</button>
						</div> 

					</div>

					<!-- PORTOFOLIO	-->

					<div id="story" style="width:460px;height: 530px; margin: left; margin-left: 5px; margin-top:16px;background-color:#FFE5B4; min-height: 400px;">

						<img id="portofolio" src="res/desain3.jpg">
						<img id="portofolio" src="res/desain6.jpg">
						<img id="portofolio" src="res/desain5.jpg">
						<img id="portofolio" src="res/desain9.jpg">
						<img id="portofolio" src="res/desain8.jpg">
						<img id="portofolio" src="res/desain7.jpg">
						<img id="portofolio" src="res/desain1.jpg">
						<img id="portofolio" src="res/desain2.jpg">
						<img id="portofolio" src="res/desain4.jpg">


					</div>

				</div>
			</div>
		</div>

	 </body>
</html>