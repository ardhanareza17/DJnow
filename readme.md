<p align="center">
  <a href="">
    <img src="https://github.com/marisanurbaiti/DJnow/blob/main/res/logo.png" alt="DJnow" width=95 height=46>
  </a>

  <h2 align="center">Sistem Informasi DJnow</h2>

  <p align="center">
    Kelompok 4 - Paralel 3 </br>
    Asisten Praktikum: </br>
    - Qoriatul Khairunnisa </br>
    - Indah Puspita
    <br>
  </p>
</p>

## Nama Anggota Kelompok
- Roni Sudarwan (G54170036): <i> Product Manager & Front-end </i>
- Ibnu Fajar (G54170062): <i> Front-end </i>
- Muhammad Reza A (G54180022): <i> Back-end </i>
- Marisa Nurbaiti (G54180051): <i> UI/UX Designer" </i>
</br>

## Desain Jaman Now (DJnow)
**DJnow** yang merupakan singkatan dari ‘Desain Jaman Now’ adalah aplikasi <i> social media </i> berbasis website yang digunakan untuk membantu para desainer untuk mempermudah dalam mempublikasikan hasil desain buatannya.
</br>

## User Analysis
<h3> User Story <h/3> </br>
- Sebagai user, agar dapat mengakses aplikasi DJNOW, saya dapat melakukan registrasi akun baik menggunakan email maupun terhubung dengan akun Google. </br>
- Sebagai user yang telah berhasil membuat akun, agar dapat masuk ke dalam aplikasi, saya dapat melakukan "Login" </br>
- Sebagai seorang user yang telah login, agar dapat mengabadikan karya saya, saya dapat mempublikasikannya di aplikasi DJnow </br>
- Sebagai seorang admin, agar dapat me-validasikan postingan, saya dapat menghapus atau membiarkan postingan tersebut tetap ter-upload </br>
- Sebagai seorang admin, agar dapat memperbanyak kategori yang dapat di telusuri, saya dapat menambahkan kategori yang dapat dipilih user </br>
- Sebagai user yang memiliki akun, agar dapat mencari referensi desain grafis, saya dapat mencari referensi melalui timeline </br>
- Sebagai user yang memiliki akun, agar dapat mengapresiasi sebuah postingan karya, saya dapat memberikan 'Like' dan 'Comment' pada postingan tersebut</br>
- Sebagai user yang memiliki akun, agar dapat mengubah data diri dan portofolio, saya dapat menyunting informasi mengenai data diri saya tersebut </br>
- Sebagai user yang memiliki akun, agar dapat mengetahui informasi mengenai data diri dan portofolio pengguna lain, saya dapat mengunjungi profile pengguna tersebut
- Sebagai user yang memiliki akun, agar dapat menampilkan foto profile saya, saya dapat memasangnya dengan memilih foto yang terdapat pada perangkat saya </br>
- Sebagai seorang designer, agar dapat mengenalkan diri saya, saya dapat menampilkan portofolio diri saya pada bagian 'Profile' </br>
- Sebagai costumer yang memiliki akun, agar dapat melakukan kerjasama dengan designer, saya dapat menghubungi kontak designer yang tertera pada 'Profile' </br>
- Sebagai user yang memiliki akun, agar dapat keluar dari aplikasi, saya dapat melakukan "Log out" </br>
</br>

## Spesifikasi
- <i> Hardware </i> </br>
Processor		: AMD A9 </br>
Graphics Card	: AMD Radeon(TM) R5 Graphics </br>
Memory			: 4 GB </br>
Storage			: 1 TB </br>
- <i> Software </i> </br>
Operating System: Windows 10 </br>
Text Editor/IDE	: Visual Studio Code </br>
Framework		: Bootstrap </br>
Library			: Bootstrap </br>
Database		: MySQL </br>
Server			: Apache </br>
- <i> Tech Stack  </i> </br>
Collaboration Platform	: Github </br>
Teknologi				: PHP, CSS/HTML, dan Javascript </br>
</br>

## Hasil dan Pembahasan
- <i> Use Case Diagram </i>
<p align="center">
<a>
<img src=, width=700>
</a>
</p>

- <i> Activity Diagram </i>
<p align="center">
<a>
<img src=, width=700>
</a>
</p>

- <i> Class Diagram </i>
<p align="center">
<a>
<img src=, width=700>
</a>
</p>

- <i> Entity Relationship Diagram </i>
<p align="center">
<a>
<img src=, width=700>
</a>
</p>

- Arsitektur Sistem
<p align="center">
<a>
<img src="https://github.com/marisanurbaiti/DJnow/blob/main/res/arsitektur%20aplikasi.png", width=700>
</a>
</p>

- Fungsi Utama yang Dikembangkan </br>
Fungsi utama yang dikembangkan yaitu, "Upload foto" untuk me-publikasikan karya; "Home" untuk menampilkan referensi karya-karya oleh desainer; "Like" dan "Comment" untuk memberikan apresiasi terhadap karya; "Profile" untuk menampilkan portofolio diri dan mengunjungi potofolio pengguna lain.

- Fungsi CRUD
1. Create: 
2. Read: 
3. Update: 
4. Delete: 
</br>

## Hasil Implementasi
- Screenshot Sistem
<img src=, width=700> </br>
<img src=, width=700> </br>
<img src=, width=700> </br>
<img src=, width=700> </br>
- Link Aplkikasi (jika sudah deploy)

## Testing
Website ini memiliki beberapa skenario, yaitu:
1. Landing Page: Pengguna akan diarahkan ke landing page ketika menjalankan aplikasi kemudian pengguna akan menuju login page.
2. Login Page: Pengguna akan diminta untuk mengisi kolom "Username", "Password", dan mengaktifkan box "ingat saya". Jika benar, maka akan di arahkan ke laman "Home". Namun apabila pengguna terindikasi bahwa akun tersebut merupakan akun admin, saat login pengguna akan di arahkan menuju laman "Dashboard Admin"
3. Register: Pengguna diminta untuk mengisi data diri berupa nama lengkap, username, alamat email, tanggal lahir, password, dan konfirmasi password. Akan ada peringatan apabila pengisian data tidak sesuai format. Jika berhasil data akan masuk ke database realtime aplikasi, dan akan di arahkan ke laman "Home"
3. Home page: Pengguna dapat menelusuri karya-karya atau unggahan yang telah di unggah oleh desainer.
4. Halaman Unggah: Pengguna dapat mempublikasikan karyanya yang akan muncul di halaman "Home" pengguna lain maupun dirinya sendiri.
5. Halaman notifikasi: Pengguna dapat melihat aktivitas pengguna lain terhadap unggahan-nya.
6. Halaman Profile: Pengguna dapat melihat kumpulan unggahan yang sudah di unggah, dan juga dapat mengubah informasi data diri dengan menekan "Edit Profile", kemudian akan diarahkan ke laman "Edit Profile".
7. Halaman Edit Profile: Pengguna dapat mengubah informasi diri berupa nama, username, kontak, dan biodata. Apabila berhasil mengubah data, maka akan di arahkan ke laman "Profile"
8. Halaman Dashboard Admin: Admin dapat melihat rangkuman informasi mengenai data pengguna, data unggahan, serta kategori yang tersedia.
9. Halaman Data Pengguna: Admin dapat melihat tabel yang berisi informasi mengenai akun user yang terdaftar pada website tersebut.
10. Halaman Data Unggahan: Admin dapat melihat tabel yang berisi informasi mengenai banyaknya unggahan yang telah ter-publikasikan. Admin juga dapat menghapus unggahan pengguna yang tidak memenuhi persyaratan.
11. Halaman Kategori: Admin dapat melihat kategori apa saja yang tersedia pada website dan dapat menambahkan kategori tersebut.
12. Logout : Pengguna dapat keluar dari segala halaman yang terdapat pada sistem dan menuju ke login page.

<!DOCTYPE html>
<html>
<head>
    <title> Penggunaan Tag Tabel</title>
</head>
<body>
  
<table border = "2">
  <tr>
    <th bgcolor="grey" rowspan="1">ID Pengujian</th>
    <th bgcolor="grey" colspan="1">Skenario Tes Deskripsi</th>
    <th bgcolor="grey" colspan="1">Positif/Negatif</th>
    <th bgcolor="grey" colspan="1">Input</th>
    <th bgcolor="grey" colspan="1">Output</th>
 <tr>
    <td>login01</hd>
    <td>User dapat melakukan login menggunakan email dan password dengan benar</hd>
    <td>Positif</hd>
    <td>Username dan Password yang benar</hd>
    <td>Login langsung ke Home Page</hd>
 </tr>
 <tr>
    <td>login02</hd>
    <td>User gagal masuk jika salah memasukan email atau password</hd>
    <td>Negatif</hd>
    <td>Username dan Password yang salah</hd>
    <td>Tidak dapat masuk ke Home Page</hd>
  <tr>
    <td>regis01</hd>
    <td>User mendftarkan diri</hd>
    <td>Positif</hd>
    <td>Nama lengkap, username, alamat email, tanggal lahir, password, dan konfirmasi password terisi semua</hd>
    <td>Terdaftar dan masuk ke Home Page</hd>
 </tr>
 <tr>
    <td>regis02</hd>
    <td>User mendaftarkkan diri namun ada data yang tidak diisi</hd>
    <td>Negatif</hd>
    <td>User mengosongkan alamat email</hd>
    <td>Menunjukkan bagian yang tidak diisi</hd>
  </tr>
 </table>
 </body>
 </html>

## Saran Untuk Pengembangan Selanjutnya
1. Dapat mengeksplorasi lebih jauh bagaimana cara admin untuk me-validasikan sebuah unggahan yang dikirimkan oleh pengguna.

## Link Docs
https://ipb.link/site-djnow </br>
https://ipb.link/github-djnow </br>
https://ipb.link/trello-djnow </br>
