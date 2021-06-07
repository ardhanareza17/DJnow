<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>Edit Profile | DJNOW (Design Jaman Now)</title>
        <style type="text/css">
            body {padding-top: 75px; background: #FFE5B4 !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
        </style>
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
        />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    </head>

    <body>
        <!-- INI NAVBAR -->
        <nav class="navbar fixed-top navbar-light shadow bottom" style="box-shadow: 0px 7px 10px 0px rgb(145, 145, 145) !important; background-color: #F2994A; height: 68px;">
            <div class="container-fluid">
                    <div class="pull-right">
                        <a href=<?= base_url('user/profile '); ?>>
                            <img src="<?= base_url('res'); ?>/close.png" alt="Tutup" width="25px" height="25px">
                        </a>    
                    </div>
                    <div class="container" style="margin-left: 144px;">
                        <div class="row">
                            <div class="col-8 text-center" style="margin-left: 125px; margin-right: 125px;">
                                <span class="navbar-brand mb-0 h1" style="font-size: 30px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; color: #C13301;">Edit Profile</span>
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
          <?php echo form_open_multipart('User/edit');?>
            <div class="text-center">
                <img src="<?= base_url('res'); ?>/profile/<?= $user['foto'];?>" class="rounded-circle" alt="Cinque Terre" width="200" height="200">
                <div class="container" style=" margin-top: 15px;">
                  <input type="file" id="editfoto" name="editfoto" style="font-weight: 500; text-decoration: none !important; font-size:17px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                  </input>
                </div>
            </div>
            
          
            <div class="formeditprof" style="margin-right: 42px; margin-left: 42px; margin-top :26px; width: auto; height: auto; background-color: white !important;">
                    <!--Ini form edit nama lengkap-->
                    <div class="form-group row">
                        <div class="col container" >
                            <label form="inputnama" class="col-sm-2 col-form-label" style="font-weight: bold; padding-left: 4px !important; padding-top: 16px !important;">Nama</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control border-top-0 border-end-0 border-start-0" style="border-radius: 0px !important; height: 54px; padding-left: 12px !important; padding-top: 16px !important; padding-bottom: 16px !important;" id="editnama" name="editnama"  placeholder="Full Name" value="<?= $user['nama_lengkap']; ?>">
                            <small class="text-danger"><?= form_error('editnama');  ?></small>
                        </div>
                    </div>
                    <!--clossing edit nama lengkap-->
                    
                    <!--form edit username-->
                    <div class="form-group row">
                        <div class="col container" >
                              <label form="inputusername" class="col-sm-2 col-form-label" style="font-weight: bold; padding-left: 4px !important; padding-top: 16px !important;">Username</label>
                        </div>
                        <div class="col-sm-10">
                          <input type="text" class="form-control border-top-0 border-end-0 border-start-0 " style="border-radius: 0px !important; height: 54px; padding-left: 12px !important; padding-top: 16px !important; padding-bottom: 16px !important;" id="editusername" name="editusername" placeholder="Username" value="<?= $user['username']; ?>" readonly>
                          <small class="text-danger"><?= form_error('editusername');  ?></small>
                        </div>
                    </div>
                    <!--clossing edit username-->

                    <!--form edit password-->
                    <div class="form-group row"> 
                        <div class="col container" >
                              <label form="inputPassword" class="col-sm-2 col-form-label" style="font-weight: bold; padding-left: 4px !important; padding-top: 16px !important;">Password</label>
                        </div>
                        <div class="col-sm-10">
                          <input type="password" class="form-control border-top-0 border-end-0 border-start-0 " style="border-radius: 0px !important; height: 54px; padding-left: 12px !important; padding-top: 16px !important; padding-bottom: 16px !important;" id="editpassword" name="editpassword" placeholder="Password" value="">
                          <small class="text-danger"><?= form_error('editpassword');  ?></small>
                        </div>
                    </div>
                    <!--clossing edit password-->
                    
                    <!--form edit kontak-->
                    <div class="form-group row">
                        <div class="col container" >
                              <label form="inputkontak" class="col-sm-2 col-form-label" style="font-weight: bold; padding-left: 4px !important; padding-top: 16px !important;">Kontak</label>
                        </div>
                        <div class="col-sm-10">
                          <input type="tel" id="phone" name="phone" class="form-control border-top-0 border-end-0 border-start-0 " style="border-radius: 0px !important; height: 54px; padding-top: 16px !important; padding-bottom: 16px !important;" placeholder="Kontak" value="<?= $user['kontak']; ?>">
                        </div>
                    </div>
                    <!--clossing edit kontak-->
                    
                    <!--form edit bio-->
                    <div class="form-group row">
                        <div class="col container" >
                              <label form="inputkontak" class="col-sm-2 col-form-label" style="font-weight: bold; padding-left: 4px !important; padding-top: 16px !important;">Bio</label>
                        </div>
                        <div class="col-sm-10">
                            <textarea class="form-control border-top-0 border-end-0 border-start-0" style="border-radius: 0px !important; height: auto; padding-top: 16px !important; padding-bottom: 16px !important;" id="bio" name="bio" rows="3" value=><?= $user['user_bio']; ?></textarea>
                        </div>
                    </div>
                    <!--clossing edit bio-->
                    
                    <!--tombol simpan-->
                    <div class="container text-nowrap text-center" style="margin-top: 65px;">
                        <button type="submit" style="color: white; background-color: #C13301; width: 330px !important;" class="shadow mb-5 btn btn-lg btn-pink active btn-google" role="button" aria-pressed="true" >Simpan</button>
                    </div>  
                    <!--clossing tombol simpan-->
               
                </form>
            </div>
        </section>
  
        <!-- CLOSING KONTEN -->
      </body>
      <!-- JANGAN DIUBAH-UBAH -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
      <script>
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
          utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
      </script>
</html>