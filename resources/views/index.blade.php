<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQ Aplikasi Mojocaakti</title>
    <link rel="stylesheet" href="" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"
      defer
    ></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=line-clamp"></script>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      rel="stylesheet"
    />
    
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

   <style>
      .font-poppins {
        font-family: "poppins", sans-serif;
      }
   
    </style>



  </head>


  



  <body class="bg-[#F3F6FB]">
    <main class="">
      
      <div class="">

        

        <nav

      

          class="bg-[url('/asset/image/backhround-terang.svg')] bg-cover bg-center bg-no-repeat h-[200px] md:h-[200px] lg:h-[400px] xl:h-[300px] w-full lg:mt-[60px] "
        >

        <img src=" {{ asset('asset/image/logo kab moker.svg')}}" class="lg:hidden w-[200px]" alt="">

          <div class="flex justify-between items-center sm:mt-[-64px]">
            <img class="w-[70px] mt-2 ml-6 md:w-[90px] lg:w-[100px] hidden lg:block" src="{{asset('asset/image/logo kab.svg')}}" alt="" />

            <div class="hidden sm:block mt-[-50px] flex text-center ml-[50px] lg:ml-[150px] lg:mt-[5px] sm:ml-[225px] md:ml-[305px] md:mt-[-50px] xl:ml-[150px]  ">
              <p class="text-[30px] font-bold text-white mt-5 mr-3 lg:text-[35px] md:mt-[45px] lg:mt-[-20px] ">
                <span class="text-[#FCAC57]"> Selamat </span> Datang <br>
              <p class=" text-[15px] text-white font-semibold lg:text-[20px]">
                 Di Pusat <span class="text-[#FCAC57]"> Panduan Aplikasi</span>  Mojocaakti
              </p>
              </p>
            </div>


          <img class="w-[150px] mt-5 mr-3 sm:mt-[-10px] md:w-[190px] lg:w-[250px] hidden lg:block" src="{{asset('asset/image/logo maja.svg')}}" alt="" />
            
              <!-- 🔘 Tombol Kategori -->
            <div class="lg:hidden p-4 relative sm:ml-[0] sm:mt-[0] md:mt-[-10px] md:ml-[0px] ml-[300px] mt-[-60px]  "> 
              <button id="toggleKategori" class="flex items-center justify-between w-full bg-[#A01010] px-4 py-2 rounded-lg shadow text-gray-300  font-semibold ">
                ☰
              </button>

              <div id="kategoriMenu" class="absolute left-[-100px] mt-2 w-[150px] bg-[#F7FAFC] rounded-lg shadow-md p-4 space-y-2 text-sm text-gray-700 transition-all duration-300 transform scale-95 opacity-0 invisible z-50  ">
                <ul>
                  <li><a href="/Datakeluarga" class="block hover:bg-gray-200 rounded px-2 py-1 hover:text-[#A01010]">cara menambah data keluarga</a></li>
                  <li><a href="/registrasi" class="block hover:bg-gray-200 rounded px-2 py-1 hover:text-[#A01010]">Cara registrasi</a></li>
                  <li><a href="/panduan" class="block hover:bg-gray-200 rounded px-2 py-1 hover:text-[#A01010]">Panduan ganti password di aplikasi</a></li>
                  <li><a href="/cuaca" class="block hover:bg-gray-200 rounded px-2 py-1 hover:text-[#A01010]">Cara memantau cuaca melalui aplikasi Mojocaakti</a></li>
                  <li><a href="/itr" class="block hover:bg-gray-200 rounded px-2 py-1 hover:text-[#A01010]">Panduan Layanan ITR</a></li>
                  <li><a href="/krk" class="block hover:bg-gray-200 rounded px-2 py-1 hover:text-[#A01010]">Cara mengakses KRK</a></li>
                </ul>
              </div>
            </div>


          </div>
          

            <div class="hidden lg:block  text-white lg:text-[15px] lg:mt-[80px] lg:ml-[15px] xl:text-[18px]  xl:ml-[100px] xl:mt-[25px] ">
              <p>
                " Akses <span class="text-[#FCAC57] font-bold">Semua Layanan </span>Publik <br>
                kabupaten <span class="text-[#FCAC57] font-bold"> Mojokerto</span> dalam Satu Aplikasi"
              </p>
            </div>

          <div class="flex justify-center mt-[30px] sm:mt-[30px] md:mt-[10px] lg:mt-[-108px] xl:mt-[-136.5px]">

            

            <div class=" hidden sm:block bg-white h-[50px] w-[150px] px-3 py-2 flex text-[9px] font-bold text-[#A01010] mt-[30px] mr-3 shadow-[0_20px_60px_rgba(255,0,0,0.4)] md:mt-[60px] md:w-[160px] md:text-[9.5px] lg:mt-[180px]  lg:w-[250px] lg:h-[60px] lg:text-[12px] lg:tracking-wide lg:leading-[2] xl:mt-[150px]     "
             data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" data-aos-once="true">
            <p>Dr. H. Muhammad Barraa, <br class="lg:hidden">
            Lc., Mhum. <br>
            <span class="font-normal text-black opacity-[80%]">Bupati Mojokerto</span></p>
            </div>
            

            <img
              class="w-[75px] h-[125px] md:w-[75px] md:h-[120px] lg:w-[170px] lg:h-[250px] xl:w-[120px] xl:h-[175px] sm:mt-[-35px] sm:ml-[30px] md:mt-[0] lg:mt-[0] xl:mt-[49.5px] mt-[-38.5px]"
              src=" {{ asset('asset/image/Gus Bara.png ')}}"
              alt=""
            />
            <img
              class="w-[75px] h-[125px] md:w-[75px] md:h-[120px] lg:w-[170px] lg:h-[250px]  xl:w-[120px] xl:h-[175px] sm:mt-[-35px] md:mt-[0] lg:mt-[0] xl:mt-[49.5px] mt-[-38.5px]"
              src="{{ asset('asset/image/Mas rijal.png') }}"
              alt=""
            />
            

            <div class="hidden sm:block bg-white h-[50px] w-[150px] px-3 py-2 flex text-[9px] font-bold text-[#A01010] mt-[30px] ml-[35px] shadow-[0_20px_60px_rgba(255,0,0,0.4)] md:mt-[60px] md:w-[160px] md:text-[9.5px]  lg:mt-[180px] lg:w-[250px] lg:h-[60px] lg:text-[12px] lg:tracking-wide lg:leading-[2]  xl:mt-[150px] 
              "  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" data-aos-once="true">
            
            <p>dr. Muhammad Rizal <br class="lg:hidden">
            Octavian <br>
            <span class="font-normal text-black opacity-[80%]">Wakil Bupati Mojokerto</span></p>
            </div>

          </div>

        </nav>
      </div>
   <section>
  <div class="bg-white w-full shadow-sm py-4">
    
    <!-- Container fleksibel -->
    <div class="flex justify-center gap-4 flex-wrap">

      <div class="hidden md:block w-[1px] h-auto bg-gray-300">  </div>

      
      <div class="bg-[#A01010] text-white rounded-md py-3 px-4 text-sm font-semibold">
         FAQ Panduan Penggunaan Aplikasi Mojocaakti
      </div>

      <div class="hidden md:block w-[1px] h-auto bg-gray-300">  </div>

    
     

    </div>
  </div>
  </section>


 <section class="md:px-[150px] mt-[70px]  ">
  
  <div class="flex flex-col md:flex-row gap-[50px]">

    <!-- Sidebar Kategori -->
   <aside class="w-full md:w-1/4 bg-[#F7FAFC] rounded-lg p-4 hidden lg:block">
  <h2 class="font-bold text-gray-800 mb-4">Layanan</h2>
  <ul class="space-y-2 text-sm text-gray-700">
    <li><a href="/panduan" class="block rounded px-2 py-1 hover:bg-gray-200 hover:text-[#A01010] sm:line-clamp-2">Cara mengubah password di aplikasi Mojocaakti</a></li>
    <li><a href="/Datakeluarga" class="block rounded px-2 py-1 hover:bg-gray-200 hover:text-[#A01010] sm:line-clamp-2">Cara menambahkan Data Keluarga</a></li>
    <li><a href="/registrasi" class="block rounded px-2 py-1 hover:bg-gray-200 hover:text-[#A01010] sm:line-clamp-2">Panduan Registrasi aplikasi Mojocaakti</a></li>
    <li><a href="/cuaca" class="block rounded px-2 py-1 hover:bg-gray-200 hover:text-[#A01010] sm:line-clamp-2">Cara memantau cuaca melalui aplikasi Mojocaakti</a></li>
    <li><a href="/itr" class="block rounded px-2 py-1 hover:bg-gray-200 hover:text-[#A01010] sm:line-clamp-2">Panduan Layanan ITR</a></li>
    <li><a href="/krk" class="block rounded px-2 py-1 hover:bg-gray-200 hover:text-[#A01010] sm:line-clamp-2">Panduan Layanan KRK</a></li>
  </ul>
</aside>


    <!-- Card Section -->
    <div class="md:w-[1000px] w-full  flex flex-col gap-10  p-[33px] sm:p-[50px] md:p-[50px]  justify-center items-center mt-[-40px]">
      <!-- Card 1 -->
    
      <a href="/Datakeluarga">
        <div class="shadow-md bg-white text-black rounded-[20px] py-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
          <p class="text-center font-semibold text-[21px] w-full md:text-left px-10 line-clamp-2">
            <i class="fas fa-book text-[#A01010] text-xl mr-3 mt-1"></i>
            Cara Menambahkan data keluarga anda di aplikasi mojocaakti
          </p>
          <p class="mt-5 opacity-[80%] text-center md:text-left px-10 line-clamp-2">
           Langkah pertama, klik ikon profil di pojok kanan atas halaman utama aplikasi. Ikon ini biasanya menampilkan gambar atau inisial pengguna. Menu pengaturan akun akan muncul setelahnya.
                
                Klik tombol "Lengkapi data keluarga" berwarna biru pada halaman Profil Pengguna, kemudian isi data anggota keluarga sesuai dengan identitas resmi.
                
                Pada halaman Data Keluarga, klik tombol "+ Tambah Data Keluarga" berwarna hijau untuk menambahkan anggota keluarga yang terdaftar dalam Kartu Keluarga (KK). Pastikan setiap isian sesuai dengan data resmi di KTP dan KK agar proses verifikasi Dispendukcapil
                
                Silakan isi formulir tambah data keluarga dengan benar dan sesuai identitas di KTP dan Kartu Keluarga.
                
                jika data sudah teriisi semuaa silahkan klik tombol 'Konfirmasi Penambahan' untuk menambahkan data keluarga
                
                jika sudah muncul notifikasi Berhasil, maka SELAMAT kamu telah berhasil menambahkan data keluarga slahkan cek kembali di bagian Data Keluarga
                 

          </p>
        </div>
      </a>
    

      <!-- Card 2 -->
      <a href="/registrasi">
        <div class="shadow-md bg-white text-black rounded-[20px] py-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" data-aos-once="true">
          <p class="text-center font-semibold text-[21px] w-full md:text-left px-10 line-clamp-2">
            <i class="fas fa-book text-[#A01010] text-xl mr-3 mt-1"></i>
           Panduan registrasi awal di aplikasi Mojocaakti
          </p>
          <p class="mt-5 opacity-[80%] text-center md:text-left px-10 line-clamp-2">
           Jika belum memiliki akun, klik “Daftar di sini” untuk melakukan pendaftaran.
             
            
            Masukkan nomor WhatsApp aktif Anda untuk menerima kode verifikasi. Kode akan dikirim otomatis ke nomor yang Anda isi. Pastikan nomor dimulai dengan 08 dan benar. Setelah menekan tombol “Kirim Kode Verifikasi”
             
            
            Setel mendapatkan kode verifikasi dari Whatsapp, masukkan kode yang telah di dapat dan tekan tombol konfirmasi untuk menuju ke halaman berikutnya
             
            
            isi form data diri secara lengkap, pastikan data teriisi dengan benar!
             
            
            Isi data akun dengan lengkap dan sesuai. Masukkan NIK, Nomor Kartu Keluarga, dan alamat email aktif yang digunakan. Buat kata sandi dengan aman dan ulangi kembali untuk konfirmasi. Aktifkan opsi “Tampilkan Kata Sandi” jika ingin memastikan kebenarannya se
             
            
            Ambil foto sambil memegang KTP sesuai petunjuk, lalu unggah file KTP dengan ukuran maksimal 1MB dan format JPG, JPEG, atau PNG. Pastikan foto jelas dan sesuai sebelum menekan tombol “Selesaikan Pendaftaran”.
             
            
            Setelah semua langkah pendaftaran selesai, akan muncul notifikasi bahwa akun berhasil didaftarkan. Akun Anda akan diverifikasi oleh tim dan notifikasi hasil verifikasi akan dikirimkan melalui WhatsApp maksimal dalam waktu 2×24 jam.
             

          </p>
        </div>
      </a>

      <!-- Card 3 -->
      <a href="/panduan">
        <div class="shadow-md bg-white text-black rounded-[20px] py-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" data-aos-once="true">
          <p class="text-center font-semibold text-[21px] w-full md:text-left px-10 line-clamp-2">
            <i class="fas fa-book text-[#A01010] text-xl mr-3 mt-1"></i>
            Ubah Kata Sandi Mojocaakti Kamu Sekarang – Aman & Anti Ribet!
          <p class="mt-5 opacity-[80%] text-center md:text-left px-10 line-clamp-2">
           Panduan mengubah sandi akun aplikasi Mojocaakti
            
            Langkah pertama, klik ikon profil di pojok kanan atas halaman utama aplikasi. Ikon ini biasanya menampilkan gambar atau inisial pengguna. Menu pengaturan akun akan muncul setelahnya.
             
            
            Setelah masuk ke halaman Profil Pengguna, klik tombol “Ubah Sandi” berwarna oranye di sebelah kanan bawah informasi akun Anda seperti yang ditunjukkan pada gambar.
             
          
            Masukkan sandi lama kamu terlebih dahulu, kemudian ketikkan sandi baru yang ingin digunakan. Setelah itu, konfirmasi sandi baru dengan mengetikkannya kembali pada kolom yang tersedia. Jika sudah, tekan tombol “Ubah Sekarang” untuk menyimpan perubahan sandi.
             
            
            Setelah menekan tombol “Ubah Sekarang”, akan muncul notifikasi “Berhasil” sebagai tanda bahwa kata sandi kamu telah berhasil diperbarui. Kamu dapat menutup pesan ini dan melanjutkan penggunaan aplikasi dengan kata sandi baru.
             

          </p>
        </div>
      </a>


      <!-- Card 4 -->
      <a href="/cuaca">
        <div class="shadow-md bg-white text-black rounded-[20px] py-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" data-aos-once="true">
          <p class="text-center font-semibold text-[21px] w-full md:text-left px-10 line-clamp-2">
            <i class="fas fa-book text-[#A01010] text-xl mr-3 mt-1"></i>
            Cara Memantau cuaca wilayah Mojokerto melalui aplikasi Mojocaakti
          <p class="mt-5 opacity-[80%] text-center md:text-left px-10 line-clamp-2">
          Panduan memantau cuaca wilayah mojokerto melalu apilkasi Mojocaakti

            
            Setelah membuka aplikasi MOJOCAAKTI, kamu akan langsung berada di halaman utama. Untuk melihat prakiraan cuaca, scroll ke bagian Portal & Layanan Publik, lalu tap ikon “Cuaca” bergambar awan dan petir.
             
            
            Begitu masuk fitur Cuaca, pengguna langsung melihat suhu dan kondisi terkini di Kabupaten Mojokerto. Disediakan prakiraan cuaca per jam agar aktivitas harian bisa direncanakan lebih tepat. Gunakan dropdown “Pilih Wilayah” untuk cek info cuaca tiap kecamat
             
            
            Gunakan menu dropdown untuk memilih wilayah kecamatan yang ingin kamu lihat prakiraan cuacanya. Mulai dari Bangsal hingga Puri, kamu bisa memantau kondisi cuaca tiap kecamatan di Kabupaten Mojokerto secara real-time dan akurat.
             


          </p>
        </div>
      </a>

      <!-- Card 5 -->
      <a href="/itr">
        <div class="shadow-md bg-white text-black rounded-[20px] py-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" data-aos-once="true">
          <p class="text-center font-semibold text-[21px] w-full md:text-left px-10 line-clamp-2">
            <i class="fas fa-book text-[#A01010] text-xl mr-3 mt-1"></i>
            Cara Melakukan pengajuan untuk layanan ITR


          <p class="mt-5 opacity-[80%] text-center md:text-left px-10 line-clamp-2">
          Panduan pengajuan Layanan ITR

            
            Untuk akses layanan ITR, pilih ikon Tata Ruang pada halaman utama Mojocaakti. Layanan ini memberikan informasi peruntukan ruang sesuai rencana wilayah Kabupaten Mojokerto—membantu memastikan kesesuaian lokasi sebelum pengajuan izin atau pembangunan.
             
           
            Lanjutkan dengan klik Layanan ITR untuk mengakses informasi peruntukan ruang di lokasi yang kamu butuhkan.
            
            
            klik tambah pengajuan pada halaman layanan ITR Isi formulir permohonan ITR secara lengkap. Data seperti nama pemohon, alamat, dan informasi bidang tanah wajib diisi agar permohonan dapat diproses dengan benar oleh Dinas terkait.
             
           
            Periksa kembali seluruh data yang telah diisi. Jika sudah sesuai, klik tombol Kirim untuk mengajukan permohonan. Status permohonan dapat dilihat melalui menu Riwayat Permohonan.
            


          </p>
        </div>
      </a>


      <!-- Card 6 -->

       <a href="/krk">
        <div class="shadow-md bg-white text-black rounded-[20px] py-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" data-aos-once="true">
          <p class="text-center font-semibold text-[21px] w-full md:text-left px-10 line-clamp-2">
            <i class="fas fa-book text-[#A01010] text-xl mr-3 mt-1"></i>
            Cara Melakukan pengajuan untuk layanan KRK




          <p class="mt-5 opacity-[80%] text-center md:text-left px-10 line-clamp-2">
          
            Panduan pengajuan Layanan KRK

                          
              Untuk akses layanan KRK, pilih ikon Tata Ruang pada halaman utama Mojocaakti. Layanan ini memberikan informasi peruntukan ruang sesuai rencana wilayah Kabupaten Mojokerto—membantu memastikan kesesuaian lokasi sebelum pengajuan izin atau pembangunan.
               
             
              Lanjutkan dengan klik Layanan ITR untuk mengakses informasi peruntukan ruang di lokasi yang kamu butuhkan.
              
             
              klik tambah pengajuan pada halaman layanan ITR Isi formulir permohonan KRK secara lengkap. Data seperti nama pemohon, alamat, dan informasi bidang tanah wajib diisi agar permohonan dapat diproses dengan benar oleh Dinas terkait.
              
              
              Periksa kembali seluruh data yang telah diisi. Jika sudah sesuai, klik tombol Kirim untuk mengajukan permohonan. Status permohonan dapat dilihat melalui menu Riwayat Permohonan.
               
              
              ika sudah maka akan mendapatkan notifikasi otomatis terkait status permohonan. Pantau progres tanpa harus datang ke kantor. Praktis dan efisien!
               


          </p>
        </div>
      </a>





    </div>
  </div>
</section>




      <section class="bg-white">
        <div
          class="bg-white flex flex-col md:flex-row justify-between items-star md:items-center w-full h-auto md:h-[100px] mt-[100px] px-4 py-4 gap-4 items-center"
        >
          <!-- KIRI (Teks) -->
          <div class="md:px-[150px] line-clamp-2">
            <p class="text-center md:text-left opacity-[80%]">
              <span class="font-bold text-[20px] text-[#A01010]">Tidak menemukan apa yang anda cari?</span>
              <br />
              Berbincang pada kami melalui chat atau email untuk mendapatkan bantuan lebih lanjut.
            </p>
          </div>

          <!-- KANAN (Link) -->
        <div class="flex gap-2 lg:px-[120px]  ">

          <a class="bg-[#A01010] text-white rounded-md px-4 py-2 flex items-center gap-2" href="">
          <i data-lucide="send" class="w-4 h-4"></i>
           Chat Kami
            </a>
          <a class="bg-[#A01010] text-white rounded-md px-4 py-2 flex items-center gap-2" href="https://mail.google.com/mail/?view=cm&fs=1&to=diskominfo@mojokertokab.go.id">
          <i data-lucide="mail" class="w-4 h-4"></i>
            Email Kami
              </a>
        </div>

      </div>
          <div class=" h-[1px] bg-gray-500 mt-3 ml-[150px] mr-[150px] "></div>
          <div class=" flex md:ml-[160px] ml-[125px] sm:ml-[250px] lg:ml-[165px] xl:ml-[165px]">
          <p class="mt-3 opacity-[70%] text-center">@Mojokertokab.id</p>
         </div>
      </section>
    </main>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
    AOS.init({
      once: true // optional kalau kamu nggak mau pakai `data-aos-once="true"` satu per satu
     });
    </script>


    <script>
    lucide.createIcons();
    </script>
    
   <script>
  const toggleBtn = document.getElementById('toggleKategori');
  const menu = document.getElementById('kategoriMenu');

  toggleBtn.addEventListener('click', () => {
    menu.classList.toggle('invisible');
    menu.classList.toggle('opacity-0');
    menu.classList.toggle('scale-95');
  });
</script>




  </body>
</html>
