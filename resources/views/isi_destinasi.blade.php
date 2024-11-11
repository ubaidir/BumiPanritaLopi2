<html>
  <head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  </head>
  <body class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
      <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
        <div>
          <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
            {{ $isi_destinasi['title'] }}
          </h2>
          <p class="mt-4 text-lg text-gray-500">
            {{ $isi_destinasi['deskripsi'] }}
          </p>
        </div>
        <div class="mt-10 lg:mt-0">
          <img alt="A desk setup with a keyboard, headphones, and a smartphone stand" class="rounded-lg shadow-lg" height="400" src="{{ $isi_destinasi['gambar'] }}" width="600"/>
        </div>
      </div>

      <div class="mt-10">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
          <div class="text-center">
            <h3 class="mt-4 text-lg font-medium text-gray-900">
              {{ $isi_destinasi['judul desc 1'] }}
            </h3>
            <p class="mt-2 text-base text-gray-500">
              {{ $isi_destinasi['desc 1'] }}
            </p>
          </div>

          <div class="text-center">
            <h3 class="mt-4 text-lg font-medium text-gray-900">
              {{ $isi_destinasi['judul desc 2'] }}
            </h3>
            <p class="mt-2 text-base text-gray-500">
              {{ $isi_destinasi['desc 2'] }}
            </p>
          </div>

          <div class="text-center">
            <h3 class="mt-4 text-lg font-medium text-gray-900">
              {{ $isi_destinasi['judul desc 3'] }}
            </h3>
            <p class="mt-2 text-base text-gray-500">
              {{ $isi_destinasi['desc 3'] }}
            </p>
            <a href="/destinasi" class="inline-flex items-center rounded-md bg-yellow-100 px-2 py-1 mt-4 text-xs font-medium text-black-700 ring-1 ring-inset ring-blue-700/10 hover:underline">
              kembali &laquo;
            </a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
