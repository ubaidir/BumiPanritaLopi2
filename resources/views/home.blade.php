<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @include('components.header')

    <header class="header-background">
        <!-- Konten header -->
    </header>



    <title>home</title>
</head>
<!-- File: resources/views/home.blade.php -->
{{-- <body style="background-image: url('{{ asset('img/tanjung_bira.jpg') }}'); background-size: cover; background-position: center; height: 100vh;"> --}}
    <!-- Konten halaman Anda -->
<body>

  

    <!--
  This example requires some changes to your config:
  
  
// tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }

-->
<div class="bg-white">  
  {{-- <img src="img/pantai2.webp" alt="tanjung bira" width="100%" style="border-radius: 2%;">
  <a href="https://maps.app.goo.gl/TtmHsrooUTp77tnCA">bulukumba</a> --}}
  <div style="position: relative; display: inline-block; width: 100%;">
    <!-- Gambar Pantai -->
    <img src="img/pantai3.jpg" alt="tanjung bira" width="100%" style="border-radius: 2%;">
  
    <!-- Teks Link di tengah gambar -->
    <div>
      <a href="https://maps.app.goo.gl/TtmHsrooUTp77tnCA" 
         style="position: absolute; top: 75%; left: 20%; transform: translate(-50%, -50%); color: white; font-size: 40px; text-decoration: none; background-color: rgba(0, 0, 0, 0.); padding: 10px; border-radius: 8px;">
        Bumi Panrita Lopi <br>
      </a>      
      <p style="position: absolute; top: 83%; left: 20%; transform: translate(-50%, -50%); color: white; font-size: 20px; text-decoration: none; background-color: rgba(0, 0, 0, 0.); padding: 10px; border-radius: 8px;">
        Surga bahari yang menanti untuk dijelajahi !</p>
    </div>  
  </div>

  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900 text-center">DESTINASI POPULER</h2>
  
      <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="https://www.itrip.id/wp-content/uploads/2020/10/Kegiatan-Pantai-Tanjung-Bira.jpg" 
            alt="pantai bira" 
            class="h-full w-full object-cover object-center lg:h-full lg:w-full rounded-lg">
                 </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="https://maps.app.goo.gl/bEerRDzVooAwewcGA">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Pantai bira
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">Pantai Bira di Sulawesi Selatan terkenal dengan pasir putih halus dan air laut jernih bergradasi biru kehijauan. Destinasi ini ideal untuk snorkeling dan menyelam, dengan terumbu karang alami dan kehidupan bawah laut yang beragam..</p>
            </div>
          </div>
        </div>

       
  
        <!-- More products... -->
      </div>
    </div>
  </div>
  
</body>
</html>