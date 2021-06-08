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
                  <img src="<?= base_url('res'); ?>/logo.png" alt="DJNOW (Design Jaman Now)" width="95px" height="46px">
                </a>
              </div>
              <div class="col-4 text-end my-auto" style="width:auto; margin-right: 217px; ">
                <a href="<?= base_url('auth/logout'); ?>">
                  <img src="<?= base_url('res'); ?>/out.png" alt="DJNOW (Design Jaman Now)" width="30px" height="30px">
                </a>
              </div>
            </div>
        </nav>

        <div class="main-wrapper">
            <!--PANEL KIRI-->
            <div class="section left col-sm-3" style=" background-color: #C13301;max-width: 346px !important;">
                <div class="half" style="margin: 0px;">
                    <div class="row">
                        <div class="col" style="max-width: 96px; background-color: #D03903;">
                          <img src="<?= base_url('res'); ?>/adminlogo.png" width="51px" height="51px" style="margin-bottom: 15px; margin-top: 31px; margin-left: 19px;">
                        </div>
                        <div class="col" style="max-width: auto !important; background-color: #D03903;">
                          <div style="font-size: 16px; font-weight: 500; color: #FFE5B4; margin-top: 45px; margin-left: -15px !important;">
                           <?= $admin['nama_lengkap']; ?>
                          </div>
                        </div>
                    </div>
                    <div class="row" style="margin-left: -15px !important; margin-right: -15px;">
                        <a class="col" type="button" href="<?= base_url('Admin'); ?>" style="max-width:96px; height: 64px; background-color: #C13301;">
                          <img src="<?= base_url('res'); ?>/dashboard.png" width="36px" height="36px" style="margin-top:14px; margin-left: 33px;">
                        </a>
                        <a class="col" type="button" href="<?= base_url('Admin'); ?>" style="text-decoration: none; height: 64px; background-color: #C13301;">
                          <div style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; color: black; font-size: 16px; margin-left: -12px; margin-top: 20px;">
                            Dashboard
                          </div>
                        </a>
                    </div>
                    <div class="row" style="margin-left: -15px !important; margin-right: -15px;">
                        <a class="col" type="button" href="<?= base_url('Admin/tabel_pengguna'); ?>" style="max-width:96px; height: 64px; background-color: #C13301;">
                          <img src="<?= base_url('res'); ?>/pengguna.png" width="36px" height="36px" style="margin-top:14px; margin-left: 33px;">
                        </a>
                        <a class="col" type="button" href="<?= base_url('Admin/tabel_pengguna'); ?>"  style="text-decoration: none; height: 64px; background-color: #C13301;">
                          <div style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; color: black; font-size: 16px; margin-left: -12px; margin-top: 20px;">
                            Tabel Data Pengguna
                          </div>
                        </a>
                    </div>
                    <div class="row" style="margin-left: -15px !important; margin-right: -15px;">
                        <a class="col" type="button" href="<?= base_url('Admin/tabel_unggahan'); ?>"  style="max-width:96px; height: 64px; background-color: #C13301;">
                          <img src="<?= base_url('res'); ?>/unggahan.png" width="36px" height="36px" style="margin-top:14px; margin-left: 33px;">
                        </a>
                        <a class="col" type="button" href="<?= base_url('Admin/tabel_unggahan'); ?>"  style=" text-decoration: none; height: 64px; background-color: #C13301;">
                          <div style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; color: black; font-size: 16px; margin-left: -12px; margin-top: 20px;">
                            Tabel Data Unggahan
                          </div>
                        </a>
                    </div>
                    <div class="row" style="margin-left: -15px !important; margin-right: -15px;">
                        <div class="col"  style="max-width:96px; height: 64px; background-color: #F2994A;">
                          <img src="<?= base_url('res'); ?>/kategori_active.png" width="36px" height="36px" style="margin-top:14px; margin-left: 33px;">
                        </div>
                        <div class="col"  style="text-decoration: none; height: 64px; background-color: #F2994A;">
                          <div style="color:#FDFAE6 !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; color: black; font-size: 16px; margin-left: -12px; margin-top: 20px;">
                            Kategori
                          </div>
                        </div>
                    </div>
                    <div class="row" style=" background-color:#C13301 ;"></div>
                </div>
            </div>
            <div class="section1 right col-xs-9">
                <div class="datapengguna" style="margin-right: 20px; margin-top: 12px; margin-left: 32px; background-color: #FDFAE6;">
                    <div style="color: #C13301; font-weight: bold; font-size: 30px !important; margin-left: 18px; padding-top: 18px; padding-bottom:20px;">
                      Data Kategori
                    </div>
                  </div>
                <div class="row" style="height: 100vh; margin-top:5px; font-size:16px;  margin-right: 20px; margin-left: 32px; background-color: #FDFAE6;">
                    <div class="col" style="margin-left: 10px !important; margin-top: 10px;">
                        <button type="button" class="btn text-start" style="width: 190px; font-weight: 500; border-radius: 8px; margin-bottom: 20px; font-size: 24px; color: #FDFAE6; background-color: #36B167;">
                            + Tambah
                        </button>
                    </div>
                    <div class="col text-end" style="margin-right: 12px !important; margin-top: 10px;">
                      Total Kategori : <?= count($kategori); ?>
                    </div>
                    <!--CLOSE PANEL KIRI-->
                    

                    <!--PANEL KANAN-->
                    <div class="row" style="margin-right: 0px; margin-left: 0px; margin-top: -235px; font-size: 16px;">
                    <?php $jml_kategori=count($kategori);
                    for($z=0; $z<$jml_kategori; $z++): ?>
                    <?php $postingan_kategori = $this->db->get_where('postingan', ['kategori' => $z+1])->result_array();
                    $jml_posting_kategori = count($postingan_kategori); ?>
                        <div class="container" style="width: 300px;">
                                <div class="col" style="border-radius: 8px; background-color: <?= $kategori[$z]['warna'] ?>;">
                                    <div class="row">
                                        <div class="col align-self-center position-absolute">
                                            <div class="row" style="opacity: 0.7; font-weight: 700; margin-left: 20px; font-size: 37px;">
                                                <?= $kategori[$z]['nama']; ?>
                                            </div>
                                        </div>
                                        <div class="col text-end">
                                            <img style="margin-bottom: 5px; margin-right: 20px; margin-top: 15px;" src="<?= base_url('res/kategori/'), $kategori[$z]['logo']; ?>" width="85px" height="95px">
                                        </div>
                                    </div>
                                    <div class="row" style="background-color: white; opacity: 0.3;">
                                        <div class="col text-center">
                                            Total Unggahan : <?= $jml_posting_kategori; ?>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <?php endfor ; ?>
                        
                    </div>
                </div>
                <!--CLOSE PANEL KANAN-->
    </body>
    <!-- JANGAN DIUBAH-UBAH -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>