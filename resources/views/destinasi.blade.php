<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @include('components.header')
    


    <title>destinasi</title>
</head>
<body>


<div class="bg-gray-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 ">
      <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
        <h2 class="text-2xl font-bold text-gray-900">Destinasi</h2>
        <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:gap-y-12 lg:space-y-0">

          {{-- isi konten --}}
          @foreach ($all_destinasi as $isi_destinasi)  
            {{-- $all_destinasi adalah array yang dikirim dari web.php 
            dan isi_destinasi adalah variabel yang dibikin sendiri --}}
            <div>
              <div class="group relative">
                <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                  <img src="{{ $isi_destinasi['gambar'] }}" alt="tanjung bira" class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-6 text-sm text-gray-500">
                  <a href="/destinasi/{{ $isi_destinasi['slug'] }}">
                    <span class="absolute inset-0"></span>
                    {{ $isi_destinasi['title'] }}
                  </a>
                </h3>
                <p class="text-base font-semibold text-gray-900">{{ $isi_destinasi['lokasi'] }}</p>
              </div>
              <a href="/destinasi/{{ $isi_destinasi['slug'] }}" class="inline-flex items-center rounded-md bg-yellow-100 px-2 py-1 mt-4 text-xs font-medium text-black-700 ring-1 ring-inset ring-blue-700/10 hover:underline">
                Kunjungi &raquo;
              </a> {{-- tombol untuk kunjungi destinasi | ganti link nya --}} 
            </div> {{-- div untuk satu destinasi --}}
          @endforeach
          
        </div>
      </div>
    </div>
  </div>
  
    
</body>
</html>

