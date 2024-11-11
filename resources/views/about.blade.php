<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @include('components.header')

    <title>about</title>

</head>
<body>

    <div class="bg-white py-24 sm:py-32">
        

        <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
          <div class="max-w-xl">
            <h2 class="text-pretty text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl">TEAM</h2>
            <p class="mt-6 text-lg/8 text-gray-600">Kami adalah kelompok individu dinamis yang penuh semangat terhadap apa yang kami lakukan dan berkomitmen untuk memberikan hasil terbaik bagi klien kami.</p>
          </div>
          <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            <li>
              <div class="flex items-center gap-x-6">
                <img class="h-16 w-16 rounded-full" src="https://img.freepik.com/premium-photo/cat-diary-captivating-photos-kitten-lover_563241-3045.jpg" alt="">
                <div>
                  <h3 class="text-base/7 font-semibold tracking-tight text-gray-900"> {{ $author }}</h3>
                  <p class="text-sm/6 font-semibold text-indigo-600">anu </p>
                </div>
              </div>
            </li>
            <li>
              <div class="flex items-center gap-x-6">
                <img class="h-16 w-16 rounded-full" src="https://img.freepik.com/premium-photo/cat-diary-captivating-photos-kitten-lover_563241-3045.jpg" alt="">
                <div>
                  <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">isi sendiri</h3>
                  <p class="text-sm/6 font-semibold text-indigo-600">anu </p>
                </div>
              </div>
            </li>
            <li>
              <div class="flex items-center gap-x-6">
                <img class="h-16 w-16 rounded-full" src="https://img.freepik.com/premium-photo/cat-diary-captivating-photos-kitten-lover_563241-3045.jpg" alt="">
                <div>
                  <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">isi sendoro</h3>
                  <p class="text-sm/6 font-semibold text-indigo-600">anu </p>
                </div>
              </div>
            </li>

      
            <!-- More people... -->
          </ul>
        </div>
      </div>
      
</body>
</html>