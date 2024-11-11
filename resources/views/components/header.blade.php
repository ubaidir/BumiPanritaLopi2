<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://fonts.googleapis.com/css2?family=Cutive&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>{{ $title }}</title>
</head>
<body x-data="{ isOpen: false }">
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full shadow-lg z-50 px-6 lg:px-8 py-4" style="background-color: rgb(241, 250, 255);" aria-label="Global">
        <div class="mx-auto flex max-w-7xl items-center justify-between">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                  <div class="flex items-center space-x-2">
                    <span class="font-bold text-color-527A9A" style="font-family: 'Cutive', serif;">Bumi Panrita Lopi</span>
                </div>
                
                
                </a>
    
            </div>

            <!-- Mobile Menu Button -->
            <div class="flex lg:hidden">
                <button type="button" @click="isOpen = !isOpen" class="text-gray-700 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="/home" class="text-sm font-semibold text-gray-900">Home</a>
                <a href="/destinasi" class="text-sm font-semibold text-gray-900">Destinasi</a>
                <a href="/offers" class="text-sm font-semibold text-gray-900">Offers</a>
                <a href="/about" class="text-sm font-semibold text-gray-900">About</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                {{-- <a href="#" class="text-sm font-semibold text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a> --}}
                <a href="#" class="inline-flex items-center rounded-md bg-blue-10 px-2 py-1 text-xs font-medium text-black-700 ring-1 ring-inset ring-blue-700/10">
                  sign-up
                </a>     
                <a href="#" class="inline-flex items-center rounded-md bg-blue-100 px-2 py-1 text-xs font-medium text-black -700 ring-1 ring-inset ring-blue-700/10">
                  Login
                </a>
                                     
                {{-- <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Log-In</span> --}}
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div x-show="isOpen" x-transition class="lg:hidden fixed inset-0 z-40 w-full bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://sim-lab.jtik.ft.unm.ac.id/assets/images/jtiklogin.png" alt="jtik">
            </a>
            <button type="button" @click="isOpen = false" class="text-gray-700 focus:outline-none">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="mt-6 space-y-6">
            <a href="/home" class="block text-base font-semibold text-gray-900">Home</a>
            <a href="/destinasi" class="block text-base font-semibold text-gray-900">Destinasi</a>
            <a href="/offers" class="block text-base font-semibold text-gray-900">Offers</a>
            <a href="/about" class="block text-base font-semibold text-gray-900">About</a>
        </div>
        <div class="mt-6 border-t border-gray-200 pt-6">
            <a href="#" class="block text-base font-semibold text-gray-900">Log in</a>
        </div>
    </div>

    <!-- Content -->

</body>
</html>
