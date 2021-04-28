

              <form form class="logologo" method="post" action="<?= base_url('auth'); ?>">
                  <a href="<?= base_url('auth '); ?>">
                    <img src="<?= base_url('assets/'); ?>res/logo.png" alt="DJNOW (Design Jaman Now)" width="185">
                  </a>
              </form>
              <?= $this->session->flashdata('pesan');  ?>
                <form action='<?= base_url('auth'); ?>' method='post'>
                  <input class=" form-control lengkap w-75" type="text" id="uname" name="username" placeholder="Username" value='<?= set_value('username'); ?>'  >
                  <small class="text-danger"><?= form_error('username');  ?></small> 

                  <input class=" form-control lengkap validate w-75" type="password" id="password" name="password" placeholder="Password">
                  <small class="text-danger"><?= form_error('password');  ?></small> 

                  <div class="d-grid gap-2 col-6 mx-auto text-center w-75">
                    <button type="sumbit" class="btn white-text btn-lg btndaftar">Masuk</button>
                  </div>           
                  <p class="fw-bold atau">──────────────────── ATAU ────────────────────</p>   
                  <div class="container text-nowrap dobellogin">
                    <a href="daftar.html" class="shadow mb-5 btn btn-lg btn-pink active btn-google" role="button" aria-pressed="true" >Login dengan Google</a>
                    <a href="<?= base_url('auth/registration'); ?>" class="shadow mb-5 btn btn-lg btn-light btn-abu active btn-fb" role="button" aria-pressed="true" >Buat akun baru</a>       
                  </div>  
                </form>
              </div>
            </div>
        </div>
    </section>
  
    <!-- Akhir Box Daftar -->

