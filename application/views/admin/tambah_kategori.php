<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>Tambah Kategori | DJNOW (Design Jaman Now)</title>
        <style type="text/css">
            body {padding-top: 75px; background: #FFE5B4 !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
        </style>
    </head>

    <body>
        <!-- INI NAVBAR -->
        <nav class="navbar fixed-top navbar-light shadow bottom" style="box-shadow: 0px 7px 10px 0px rgb(145, 145, 145) !important; background-color: #F2994A; height: 68px;">
            <div class="container-fluid">
                    <div class="pull-right">
                        <a href="<?= base_url('Admin/kategori'); ?>">
                            <img src="<?= base_url('res'); ?>/close.png" alt="Tutup" width="25px" height="25px">
                        </a>    
                    </div>
                    <div class="container" style="margin-left: 144px;">
                        <div class="row">
                            <div class="col-8 text-center" style="margin-left: 125px; margin-right: 125px;">
                                <span class="navbar-brand mb-0 h1" style="font-size: 30px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; color: #C13301;">Tambah Kategori</span>
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                </div>
            </div>
          </nav>
        <!-- CLOSING NAVBAR -->

        <!-- TAMBAH KONTEN DI BAWAH INI -->
        <section class="container" style=" padding-top: 20px; width: 837px; height: auto; background-color: white !important;">
            
            <div class="formeditprof" style="margin-right: 42px; margin-left: 42px; margin-top :26px; width: auto; height: auto; background-color: white !important;">
                <form action="<?= base_url('Admin/tambah_kategori'); ?>" method="post">
                    <!--Ini form edit nama lengkap-->
                    <div class="form-group row">
                        <div class="col container" >
                            <label form="inputnamakategori" class="col col-form-label" style="font-weight: bold; padding-left: 4px !important; padding-top: 16px !important;">Nama</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="nama_kategori" class="form-control border-top-0 border-end-0 border-start-0" style="border-radius: 0px !important; height: 54px; padding-left: 12px !important; padding-top: 16px !important; padding-bottom: 16px !important;" id="namakategori" placeholder="Nama Kategori">
                        </div>
                    </div>
                    <!--clossing edit nama lengkap-->
                    
                    <!--form edit username-->
                    <div class="form-group row">
                        <div class="col container" >
                              <label form="pilihwarna" class="col col-form-label" style="font-weight: bold; padding-left: 4px !important; padding-top: 16px !important;">PiliH Warna</label>
                        </div>
                        <div class="col-sm-10">
                          <input type="color" name="pilih_warna" value="#36B167" class="form-control border-top-0 border-end-0 border-start-0 " style="max-width: 80px;  height: 54px; padding-left: 12px !important; padding-top: 16px !important; padding-bottom: 16px !important;" id="pilihwarna">
                        </div>
                    </div>
                    <!--clossing edit username-->
                    
                    <!--tombol simpan-->
                    <div class="container text-nowrap text-center" style="margin-top: 65px;">
                        <button type="submit" style="color: white; background-color: #36B167; width: 330px !important;" class="shadow mb-5 btn btn-lg btn-pink active btn-google" role="button" aria-pressed="true" >Tambah Kategori</button>
                    </div>  
                    <!--clossing tombol simpan-->
               
                </form>
            </div>
        </section>
  
        <!-- CLOSING KONTEN -->
      </body>
      <!-- JANGAN DIUBAH-UBAH -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>