<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>DJNOW (Design Jaman Now)</title>
        <style type="text/css">
            body { background: #FFE5B4 !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
        </style>
    </head>
    <body>
    <!--NAVBAR-->
        <nav class="navbar fixed-top navbar-light" style="border-radius: 0px;  background-color: none; height: 68px;">
            <div class="container" style="margin-top: -8px;">
                <div class="row" style=" margin-left: -125px;">
                    <div class="col" style="padding-top: 10px; max-width: 52px; background-color: none;"> 
                    <a href="<?php if($username == 0){ echo base_url('User'),$halaman; } else {?> <?= base_url('User'),$halaman, '?username=',$username; }?>">
                      <img src="<?= base_url('res'); ?>/close.png" alt="Tutup" width="25px" height="25px">
                    </a>
                    </div>
                    <div class="col" style="width: 100vw; background-color: none;">
                        <img src="<?= base_url('res'); ?>/logo.png" width="95px" height="46px">
                    </div>
                    <div class="col" style="margin-top: -8px; margin-bottom: -15px; max-width: 550px; background-color: #F2994A;">
                        
                    </div>
                </div> 
            </div>
        </nav>
        <!--CLOSE NAVBAR-->

        <!--KONTEN-->
        <div class="container" style="margin-left: 0px; height: 100vh;">
            <div class="row" style="height: 100vh; width: 100vw; padding-top: 68px;">
                <div class="col d-flex flex-wrap align-items-center" style="max-width: 100px; background-color: none;">
                    <a href="#">
                        <img src="<?= base_url('res'); ?>/kiri.png" width="32px" height="32px" alt="Post Sebelumnya" data-toggle="tooltip" data-placement="bottom" title="Post Sebelumnya">
                    </a>
                </div>
                <div class="col d-flex flex-wrap align-items-center justify-content-center" style=" background-color: none;">
                    <img src="<?= base_url('res/postingan/'), $postingan['foto']; ?>" width="450px" height="500px" alt="">
                </div>
                <div class="col d-flex flex-wrap align-items-center justify-content-end" style="max-width: 100px; background-color: none;">
                    <a href="#">
                        <img src="<?= base_url('res'); ?>/kanan.png" width="32px" height="32px" alt="Post Selanjutnya" data-toggle="tooltip" data-placement="bottom" title="Post Selanjutnya">
                    </a>
                </div>
                <div class="col" style="max-width: 550px; background-color: #F2994A;">
                    <div class="row border-top border-bottom" style=" border: 0 0 0 1px solid transparent !important; border-color: #C13301 !important; height: 68px; background-color:#F2994A;">
                        <div class="userupload" style="width: 100vw;">
                            <div class="row">
                                <div class="pengupload" style="margin-top: 5px; max-width: 495px; margin-left: 27px; background-color: none;">
                                    <div class="row">
                                        <div class="col" style="max-width: 60px; height: 55px;">
                                            <div class="potoprofil d-flex flex-wrap align-items-center justify-content-center">
                                                <img src="<?= base_url('res/profile/'), $user['foto']; ?>" class="rounded-circle" width="55px" height="55px" alt="">
                                            </div>
                                        </div>
                                        <div class="col" style="margin-left: 3px; margin-top:4px;">
                                            <div class="row" style="margin-left: -23px;">
                                                <a href="<?= base_url('user/akun_orang?username='),$user['username']; ?>" style="font-weight: 700; color: #C13301; text-decoration: none;">
                                                  <?= $user['username']; ?>
                                                </a>
                                            </div>
                                            <div class="row" style="font-weight: 400; color: #C13301;">
                                                <?= $postingan['tanggal_posting']; ?>
                                            </div>
                                        </div>
                                        <div class="col d-flex align-items-center" style="max-width: 145px;">
                                            <a href="#">
                                                <img src="<?= base_url('res'); ?>/grafis_tag.png" width="130px" height="35" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row  border-bottom" style="border-color: #C13301 !important; overflow-y: auto; height: 355px; max-height: 355px; margin:15px; background-color: #F2994A;">
                        <div class="col">

                            <!--KOTAK KOMENTAR-->
                            <!--KOMENTAR 1-->
                            <?php for($kom = 0 ; $kom < count($komentar); $kom++) :  ?>
					                  <?php $username_komen = $komentar[$kom]['username']; 
				                      $akun = $this->db->get_where('user', ['username' => $username_komen])->row_array();?>
                            <div class="row user-komentar" style="margin-left: 1px; margin-top: 5px; margin-bottom: 4px; background-color: #F2994A;">
                                <div class="col" style="max-width: 60px; height: 55px;">
                                    <div class="potoprofil d-flex flex-wrap align-items-center justify-content-center">
                                        <img src="<?= base_url('res/profile/'), $akun['foto']; ?>" class="rounded-circle" width="55px" height="55px" alt="">
                                    </div>
                                </div>
                                <div class="col" style="margin-left: 3px; margin-top:4px;">
                                    <div class="row" style="margin-left: -23px;">
                                        <a href="<?= base_url('user/akun_orang?username='),$akun['username']; ?>" style="font-weight: 700; color: #C13301; text-decoration: none;">
                                            <?= $akun['username']; ?>
                                        </a>
                                    </div>
                                    <div class="row" style="font-weight: 500; color: black;">
                                        <?= $komentar[$kom]['isi']; ?>
                                    </div>
                                </div>
                                <div class="col d-flex align-items-center" style="font-weight: 500; opacity: 0.5;  max-width: 80px;">
                                   <a href="#" style="text-decoration: none; color:#C13301;">Balas</a>
                                </div>
                            </div> 
                            <?php endfor; ?>
                            <!--KOMENTAR 2
                            <div class="row user-komentar" style="margin-left: 1px; margin-top: 5px; margin-bottom: 4px; background-color: none;">
                                <div class="col" style="max-width: 60px; height: 55px;">
                                    <div class="potoprofil d-flex flex-wrap align-items-center justify-content-center">
                                        <img src="<?= base_url('res'); ?>/posting1.png" class="rounded-circle" width="55px" height="55px" alt="">
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

                            KOMENTAR 3
                            <div class="row user-komentar" style="margin-left: 1px; margin-top: 5px; margin-bottom: 4px; background-color: none;">
                                <div class="col" style="max-width: 60px; height: 55px;">
                                    <div class="potoprofil d-flex flex-wrap align-items-center justify-content-center">
                                        <img src="<?= base_url('res'); ?>/posting1.png" class="rounded-circle" width="55px" height="55px" alt="">
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

                            KOMENTAR 4
                            <div class="row user-komentar" style="margin-left: 1px; margin-top: 5px; margin-bottom: 4px; background-color: none;">
                                <div class="col" style="max-width: 60px; height: 55px;">
                                    <div class="potoprofil d-flex flex-wrap align-items-center justify-content-center">
                                        <img src="<?= base_url('res'); ?>/posting1.png" class="rounded-circle" width="55px" height="55px" alt="">
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

                            KOMENTAR 5
                            <div class="row user-komentar" style="margin-left: 1px; margin-top: 5px; margin-bottom: 4px; background-color: none;">
                                <div class="col" style="max-width: 60px; height: 55px;">
                                    <div class="potoprofil d-flex flex-wrap align-items-center justify-content-center">
                                        <img src="<?= base_url('res'); ?>/user1.png" class="rounded-circle" width="55px" height="55px" alt="">
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

                            KOMENTAR 6
                            <div class="row user-komentar" style="margin-left: 1px; margin-top: 5px; margin-bottom: 4px; background-color: none;">
                                <div class="col" style="max-width: 60px; height: 55px;">
                                    <div class="potoprofil d-flex flex-wrap align-items-center justify-content-center">
                                        <img src="<?= base_url('res'); ?>/posting1.png" class="rounded-circle" width="55px" height="55px" alt="">
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

                            CLOSE KOTAK KOMENTAR-->
                        </div>
                    </div>
                    <div class="row d-flex align-items-center" style="height: 40px; margin-left: 15px; margin-right: 15px; background-color: none;">
                        <!--Tombol Suka-->
                        <?php $this->db->select('username');
                              $this->db->from('suka');
                              $this->db->where('id_postingan =', $postingan['id']);
                              $user_suka = $this->db->get()->result_array();
                              $isi = [];
                              for($ar = 0 ; $ar<count($user_suka); $ar++){
                                $baru =array_values($user_suka[$ar]);
                                $isi = array_merge($isi , $baru );
                              }
                              if( in_array($aku['username'], $isi)) { ?>
                        <div class="col" style="max-width: 45px; max-height:45px;">
                            <a href="<?= base_url('User/suka?suka=0&username='), $username, "&id_postingan=", $postingan['id'],"&page=",$halaman; ?>">
                                <img src="<?= base_url('res'); ?>/love_button.png" alt="Disukai" width="35px" height="30px">
                            </a>
                        </div>
                        <div class="col">
                            Anda <?php if(count($user_suka)-1 == 0){echo "menyukai ini";} else{echo "dan ", count($user_suka)-1, " orang lainnya menyukai ini" ;} ?>
                        </div>
                              
                        
                        <?php }else { ?>
                                <div class="col" style="max-width: 45px; max-height:45px;">
                                  <a href="<?= base_url('User/suka?suka=1&username='), $username, "&id_postingan=", $postingan['id'],"&page=",$halaman; ?>">
                                    <img src="<?= base_url('res/bar_postingan'); ?>/like_bolong.png" alt="Disukai" width="35px" height="30px">
                                  </a>
                                </div>
                                <div class="col">
                                  <?= count($user_suka), " orang menyukai ini"; ?>
                                </div>
                        <?php } ?>


                        <!--Tombol Download dan Share-->
                        <div class="col" style="margin-right: 3px; max-width: 40px; max-height:40px;">
                            <a href="#">
                                <img src="<?= base_url('res'); ?>/download.png" width="30px" height="30px"  alt="Unduh">
                            </a>
                        </div>
                        <div class="col" style="margin-right: 15px; max-width: 40px; max-height:40px;">
                            <a href="#">
                                <img  src="<?= base_url('res'); ?>/share.png" width="30px" height="30px"  alt="Unduh">
                            </a>
                        </div>
                        <!--CLOSE TOMBOL-->

                    </div>
                    <!--KOTAK KETIK KOMEN-->
                    <div class="row" style=" height: 40px; margin-left: 15px; margin-right: 15px; background-color:none ;">
                        <div class="col">
                            <input style="border-radius: 50px;" type="text" class="form-control" placeholder="Ketik Komentar" aria-label="Komentar" aria-describedby="basic-addon1">
                        </div>
                        <!--TOMBOL KIRIM KOMEN-->
                        <div class="col" style="margin-left: -15px; max-width: 55px; margin-top: 5px;">
                            <a href="#">
                                <img  src="<?= base_url('res'); ?>/kirimkomentar.png" width="30px" height="30px"  alt="Kirim Komentar">
                            </a>
                        </div>
                    </div>
                    <!--CLOSE KOTAK KOMEN-->
                </div>
            </div>
        </div>
        <!--CLOSE KONTEN-->


    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>