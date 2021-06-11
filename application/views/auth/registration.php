
    <!-- Box Daftar -->
    
                <form class="logologo">
                  <a href="<?= base_url('auth'); ?>">
                    <img src="<?= base_url('assets/'); ?>res/logo.png" alt="DJNOW (Design Jaman Now)" width="185">
                  </a>
                </form>
                <form class="user" method="post" action = "<?= base_url('auth/registration'); ?>">
                  <input class=" form-control lengkap w-75" type="text" id="fullname" name="namalengkap" placeholder="Nama Lengkap" value="<?= set_value('namalengkap');?>">
                  <small class="text-danger"><?= form_error('namalengkap');  ?></small> 
                  
                  <input class=" form-control lengkap w-75" type="text" id="uname" name="username" placeholder="Username" value="<?= set_value('username');?>">
                  <small class="text-danger"><?= form_error('username');  ?></small> 
                  
                  <input class=" form-control lengkap w-75" type="email" id="email" name="email" placeholder="Alamat Email" value="<?= set_value('email');?>">
                  <small class="text-danger"><?= form_error('email');  ?></small> 
                  
                  <input class=" form-control datepicker lengkap w-75" type="date" id="datebirth" name="datebirth" placeholder="Tanggal Lahir" value="<?= set_value('datebirth');?>">
                  <small class="text-danger"><?= form_error('datebirth');  ?></small> 
                  
                  <input class=" form-control lengkap validate w-75" type="password" id="password" name="password" placeholder="Password">
                  
                  <input class=" form-control lengkap w-75" type="password" id="password2" name="password2" placeholder="Konfirmasi Password">
                  <small class="text-danger"><?= form_error('password');  ?></small> 
                  <div class="d-grid gap-2 col-6 mx-auto text-center w-75">
                    <button type="sumbit" class="btn white-text btn-lg btndaftar">Buat Akun</button>
                  </div>                 
                  <p class="fw-bold atau">──────────────────── ATAU ────────────────────</p>   
                  <div class="container text-nowrap dobellogin">
                    <a href="daftar.html" class="shadow mb-5 btn btn-lg btn-pink active btn-google" role="button" aria-pressed="true" >Login dengan Google</a>
                    <a href="<?= base_url('auth'); ?>" class="shadow mb-5 btn btn-lg btn-light btn-abu active btn-fb" role="button" aria-pressed="true" >Masuk</a>       
                  </div>  
                </form>
              </div>
            </div>
        </div>
    </section>
  
    <!-- Akhir Box Daftar -->
