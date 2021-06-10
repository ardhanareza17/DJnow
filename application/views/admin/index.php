<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>DJNOW (Design Jaman Now)</title>
        <style type="text/css">
            body {padding-top: 70px; background: #FFE5B4 !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
        </style>
    </head>

    <body>
      <!-- INI NAVBAR -->
        <nav class="navbar fixed-top navbar-light shadow bottom" style="border-radius: 0px; box-shadow: 0px 5px 7px 0px rgb(70, 70, 70) !important; background-color: #F2994A; height: 68px;">
          <div class="container-fluid" style="margin-left: 216px;">
            <div class="row">
              <div class="col" style="width:950px;">
                <a href="#">
                  <img src="res/logo.png" alt="DJNOW (Design Jaman Now)" width="95px" height="46px">
                </a>
              </div>
              <div class="col-4 text-end my-auto" style="width:auto; margin-right: 217px; ">
                <a href="<?= base_url('auth/logout'); ?>">
                  <img src="res/out.png" alt="DJNOW (Design Jaman Now)" width="30px" height="30px">
                </a>
              </div>
            </div>
        </nav>

        <div class="main-wrapper">
            <!--KONTEN PANEL KIRI-->
            <div class="section left col-sm-3" style="background-color: #C13301; max-width: 346px !important;">
                <div class="half" style="margin: 0px;">
                    <div class="row">
                        <div class="col" style="max-width: 96px; background-color: #D03903 !important;">
                          <img src="res/adminlogo.png" width="51px" height="51px" style="margin-bottom: 15px; margin-top: 31px; margin-left: 19px;">
                        </div>
                        <div class="col" style="max-width: auto !important; background-color: #D03903 !important;">
                          <div style="font-size: 16px; font-weight: 500; color: #FFE5B4; margin-top: 45px; margin-left: -15px !important;">
														<?= $admin['nama_lengkap']; ?>
                          </div>
                        </div>
                    </div>
	
                    	<div class="row" style="margin-left: -15px !important; margin-right: -15px;">
												<div class="col"  style="max-width:96px; height: 64px; background-color: #F2994A;">
                          <img src="res/dashboard_active.png" width="36px" height="36px" style="margin-top:14px; margin-left: 33px;">
												</div>
                        <div class="col"  style="text-decoration: none; height: 64px; background-color: #F2994A;">
                          <div style="color: #FDFAE6 !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; color: black; font-size: 16px; margin-left: -12px; margin-top: 20px;">
                            Dashboard
                          </div>
                        </div>
											</div>
					
                    <div class="row" style="margin-left: -15px !important; margin-right: -15px;">
                        <a class="col" type="button" href="<?= base_url('Admin/tabel_pengguna'); ?>" style="max-width:96px; height: 64px; background-color: #C13301;">
                          <img src="res/pengguna.png" width="36px" height="36px" style="margin-top:14px; margin-left: 33px;">
                        </a>
                        <a class="col" type="button" href="<?= base_url('Admin/tabel_pengguna'); ?>" style="text-decoration: none; height: 64px; background-color: #C13301;">
                          <div style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; color: black; font-size: 16px; margin-left: -12px; margin-top: 20px;">
                            Tabel Data Pengguna
                          </div>
                        </a>
										</div>
                    <div class="row" style="margin-left: -15px !important; margin-right: -15px;">
                        <a class="col" type="button" href="<?= base_url('Admin/tabel_unggahan'); ?>" style="max-width:96px; height: 64px; background-color: #C13301;">
                          <img src="res/unggahan.png" width="36px" height="36px" style="margin-top:14px; margin-left: 33px;">
                        </a>
                        <a class="col" type="button" href="<?= base_url('Admin/tabel_unggahan'); ?>" style="text-decoration: none; height: 64px; background-color: #C13301;">
                          <div style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; color: black; font-size: 16px; margin-left: -12px; margin-top: 20px;">
                            Tabel Data Unggahan
                          </div>
                        </a>
                    </div>
                    <div class="row" style="margin-left: -15px !important; margin-right: -15px;">
                        <a class="col" type="button" href="<?= base_url('Admin/kategori'); ?>" style="max-width:96px; height: 64px; background-color: #C13301;">
                          <img src="res/kategori.png" width="36px" height="36px" style="margin-top:14px; margin-left: 33px;">
                        </a>
                        <a class="col" type="button" href="<?= base_url('Admin/kategori'); ?>" style="text-decoration: none; height: 64px; background-color: #C13301;">
                          <div style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; color: black; font-size: 16px; margin-left: -12px; margin-top: 20px;">
                            Kategori
                          </div>
                        </a>
                    </div>
                    <div class="row" style=" background-color:#C13301 ;"></div>
                </div>
            </div>
            <!--CLOSE KONTEN PANEL KIRI-->

            <!--KONTEN PANEL KANAN-->
            <div class="section1 right col-xs-9">
                <div class="row" style="margin-right: 0px; margin-left: 7px; margin-top: 50px; font-size: 16px;">
                    <div class="container" style="width: 300px;">
                        <a href="<?= base_url('Admin/tabel_pengguna'); ?>" style="color: black; text-decoration: none;">
                            <div class="col" style="border-radius: 8px; background-color: #55B853;">
                                <div class="row">
                                    <div class="col align-self-center position-absolute">
                                        <div class="row" style="font-weight: 700; margin-left: 20px; font-size: 37px;">
																						<?php $jml_akun=count($user); ?>
																						<?= $jml_akun; ?>
                                        </div>
                                        <div class="row" style="font-weight: 400; margin-bottom:5px; font-size: 15px; margin-left: 20px;">
                                            Pengguna Terdaftar
                                        </div>
                                    </div>
                                    <div class="col text-end">
                                        <img style="margin-bottom: 5px; margin-right: 20px; margin-top: 15px;" src="res/user_registered.png" width="65px" height="95px">
                                    </div>
                                </div>
                                <div class="row" style="border-radius: 8px; margin:auto; background-color: white; opacity: 0.3;">
                                    <div class="col text-center">
                                        Selengkapnya
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="container" style="width: 300px;">
                        <a href="<?= base_url('Admin/tabel_unggahan'); ?>" style=" color: black; text-decoration: none;">
                            <div class="col" style="border-radius: 8px; background-color: #F62E2E;">
                                <div class="row">
                                    <div class="col align-self-center position-absolute">
                                        <div class="row" style="font-weight: 700; margin-left: 20px; font-size: 37px;">
																					<?php $jml_postingan=count($postingan); ?>
																					<?= $jml_postingan; ?>
                                        </div>
                                        <div class="row" style="font-weight: 400; margin-bottom:5px; font-size: 15px; margin-left: 20px;">
                                            Unggahan
                                        </div>
                                    </div>
                                    <div class="col text-end">
                                        <img style="opacity: 0.4; margin-bottom: 5px; margin-right: 20px; margin-top: 43px;" src="res/up.png" width="88px" height="67px">
                                    </div>
                                </div>
                                <div class="row" style="border-radius: 8px; margin:auto; background-color: white; opacity: 0.3;">
                                    <div class="col text-center">
                                        Selengkapnya
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="container" style="width: 300px;">
                        <a href="<?= base_url('Admin/kategori'); ?>" style=" color: black; text-decoration: none;">
                            <div class="col" style="border-radius: 8px; background-color: #787EB4;">
                                <div class="row">
                                    <div class="col align-self-center position-absolute">
                                        <div class="row" style="font-weight: 700; margin-left: 20px; font-size: 37px;">
                                            <?= count($kategori); ?>
                                        </div>
                                        <div class="row" style="font-weight: 400; margin-bottom:5px; font-size: 15px; margin-left: 20px;">
                                            Kategori
                                        </div>
                                    </div>
                                    <div class="col text-end">
                                        <img style="opacity: 0.4; margin-bottom: 5px; margin-right: 20px; margin-top: 15px;" src="<?= base_url('res/kategori/Group.png'); ?>" width="85px" height="95px">
                                    </div>
                                </div>
                            <div class="row" style="border-radius: 8px; margin:auto; background-color: white; opacity: 0.3;">
                                <div class="col text-center">
                                    Selengkapnya
                                </div>
                            </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>  
            <!--CLOSE KONTEN PANEL KANAN-->
        </div>
    </body>
    <!-- JANGAN DIUBAH-UBAH -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>