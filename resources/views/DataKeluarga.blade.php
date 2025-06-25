<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Panduan Tambah Data Keluarga</title>
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
                  <li><a href="/Datakeluarga" class="block bg-gray-200 rounded px-2 py-1 text-[#A01010]">cara menambah data keluarga</a></li>
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
      
<section class="md:px-[150px] mt-[50px]    ">
  
<div class="flex flex-col md:flex-row gap-[50px]">

    <!-- Sidebar Kategori -->
   <aside class="w-full md:w-1/4 bg-[#F7FAFC] rounded-lg p-4 hidden lg:block  ">
  <h2 class="font-bold text-gray-800 mb-4">Layanan</h2>
  <ul class="space-y-2 text-sm text-gray-700">
    <li><a href="/panduan" class="block rounded px-2 py-1 hover:bg-gray-200 hover:text-[#A01010] sm:line-clamp-2 ">Cara mengubah password di aplikasi Mojocaakti</a></li>
    <li><a href="/Datakeluarga" class="block bg-gray-200 text-[#A01010] rounded px-2 py-1 sm:line-clamp-2">Cara menambahkan Data Keluarga</a></li>
    <li><a href="/registrasi" class="block rounded px-2 py-1 hover:bg-gray-200 hover:text-[#A01010] sm:line-clamp-2">Panduan Registrasi aplikasi Mojocaakti</a></li>
    <li><a href="/cuaca" class="block rounded px-2 py-1 hover:bg-gray-200 hover:text-[#A01010] sm:line-clamp-2">Cara memantau cuaca melalui aplikasi Mojocaakti</a></li>
    <li><a href="/itr" class="block rounded px-2 py-1 hover:bg-gray-200 hover:text-[#A01010] sm:line-clamp-2">Panduan Layanan ITR</a></li>
    <li><a href="/krk" class="block rounded px-2 py-1 hover:bg-gray-200 hover:text-[#A01010] sm:line-clamp-2">Panduan Layanan KRK</a></li>
  </ul>
</aside>


<section class=" lg:mt-[0] mt-[-30px] px-2  ">

    
    <div>
      <a href="/index">
        <button class="back-btn bg-[#A01010] lg:bg-gray-500 rounded-full shadow-md lg:hover:bg-[#A01010] text-gray-200 hover:text-white px-4 py-2 text-sm">
          <i class="fas fa-arrow-left"></i>
           Kembali ke menu utama
        </button>
      </a>
       
    </div>

    <div class="text-[30px] font-bold mt-3 leading-[35px] text-left ">
        <p>Cara Menambahkan data keluarga anda di aplikasi mojocaakti</p>
    </div>

    <div class=" h-[1px] bg-gray-500  opacity-[50%] mt-3 xl:w-[950px] w-[350px] md:w-[650px]  "></div>
    <!-- content section -->
    <div>
        <div class="flex flex-row items-start gap-2 mt-5 ">
            <aside class=" bg-[#A01010] w-[5px] h-[70px]"></aside>

         
                <h1 class=" mt-[10px] text-[28px] text-gray-800 font-semibold leading-[35px] text-left">
                Panduan menmabah data keluarga di aplikasi Mojocaakti</h1>

        </div>
        <br class="csh-new-line">

     @foreach ($data as $index => $item)
        <div class="mb-[20px]" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
           <div class="flex gap-2 text-[10px]  mt-8 items-center">
             <span class="w-8 h-8 bg-[#A01010] rounded-full flex justify-center items-center text-white text-[15px] font-bold shrink-0">
            {{ $index + 1 }}
              </span>

              <span class=" justify-center font-semibold  text-left text-sm">{{ $item->title }}</span>
            </div>
              <div class="flex justify-center items-center ">
                @if ($item->image)

                <img class="mt-5 flex w-[300px] " src="{{ asset('storage/' . $item->image) }}" alt="Gambar Langkah {{ $index + 1 }}" 
                @endif

             />
            

        </div>
     @endforeach

    </div> 


    <br class="csh-new-line">

    <div class="border-t  border-b py-4 text-center text-slate-500  border-gray-300">
      <div class="flex justify-center items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        <span>Diperbarui pada: {{ $item->updated_at->format('d/m/Y') }}</span>
      </div>
    </div>

</section>





  
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
