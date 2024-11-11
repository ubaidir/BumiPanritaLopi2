<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home' , ['title' => 'Home']);
});

Route::get('/destinasi', function () {
    return view('destinasi', ['title' => 'destinasi', 'all_destinasi' => [
        [
            'id_destinasi' => 1,
            'slug' => 'pantai-bira',
            'title' => 'Pantai Bira',
            'lokasi' => 'Bulukumba, sulsel',
            'gambar' => 'https://i.misteraladin.com/blog/2020/06/30100201/tanjung-bira.jpg',
            'deskripsi' => 'Pantai Bira terletak di Kabupaten Bulukumba, Sulawesi Selatan, Indonesia. Pantai ini dikenal dengan pasir putihnya yang halus, air laut yang jernih, 
                dan pemandangan yang memukau. Dikelilingi oleh perbukitan hijau dan terumbu karang yang indah, Pantai Bira menjadi destinasi wisata yang populer di kalangan wisatawan lokal dan internasional..',
            'judul desc 1' =>'Keindahan Alam Pantai Bira',
            'judul desc 2' =>'Keanekaragaman Bawah Laut yang Menakjubkan',
            'judul desc 3' =>'Fasilitas yang Memadai untuk Wisatawan',
            'desc 1' => 'Pantai Bira terkenal dengan keindahan alamnya, seperti pasir putih halus dan air laut yang jernih, menciptakan suasana yang tenang dan menenangkan. Keindahan ini membuatnya ideal untuk bersantai dan menikmati alam.',
            'desc 2' => 'Keanekaragaman bawah laut di Pantai Bira juga luar biasa, dengan terumbu karang yang indah dan ikan-ikan berwarna-warni, menjadikannya tempat yang sempurna untuk snorkeling dan diving.',
            'desc 3' => 'Selain itu, Pantai Bira dilengkapi dengan fasilitas yang baik, termasuk penginapan dan restoran, memberikan kenyamanan bagi para wisatawan yang datang.',
            
        ],
        [
            'id_destinasi' => 2,
            'slug' => 'lego-legona',
            'title' => 'Lego Legona',
            'lokasi' => 'Makassar, sulsel',
            'gambar' => 'https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/t_htl-mobile/tix-hotel/images-web/2024/10/19/e754bdcf-40f5-4feb-b2c3-bf9420af8ed8-1729301157602-992cec8dc93bdcb1b1248a856ecc56d6.jpg',
            'deskripsi' =>'Lego-legona Bulu Barakka adalah homestay yang terletak di Desa Rammang-Rammang, Kabupaten Maros, Sulawesi Selatan. Tempat ini menawarkan fasilitas yang nyaman bagi para wisatawan yang ingin menginap, 
                dengan fasilitas kamar mandi pribadi dan bersama, kipas angin, televisi, serta area selfie. Homestay ini juga menyediakan sarapan pagi dan memiliki suasana yang tenang, cocok bagi mereka yang ingin menikmati pemandangan alam sekitar​',
            'judul desc 1' =>'Lokasi Strategis dan Akses Mudah ke Atraksi Alam',
            'judul desc 2' =>'Fasilitas Nyaman dengan Harga Terjangkau ',
            'judul desc 3' =>'Suasana Tenang dan Layanan Ramah',
            'desc 1' => 'Lego-legona Bulu Barakka menawarkan lokasi yang strategis, dekat dengan atraksi alam Rammang-Rammang yang mempesona, seperti formasi karst dan wisata perahu. Dengan akses mudah ke dermaga, pengunjung bisa menikmati keindahan alam secara langsung​',
            'desc 2' => 'Selain itu, homestay ini memberikan fasilitas yang nyaman dengan harga terjangkau, mulai dari IDR 250,000 per malam. Tersedia sarapan pagi, area selfie, dan berbagai fasilitas tambahan yang mendukung kenyamanan pengunjung​',
            'desc 3' => 'Kelebihan lainnya adalah suasana yang tenang dan bersih, ideal untuk relaksasi setelah seharian berkeliling. Dengan layanan yang ramah dan fasilitas seperti Wi-Fi serta televisi, Lego-legona Bulu Barakka menjadi tempat yang pas untuk menginap​',
        ],
        [
            'id_destinasi' => 3,
            'slug' => 'pantai-losari',
            'title' => 'Pantai Losari',
            'lokasi' => 'Makassar, sulsel',
            'gambar' => 'https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/182/2023/11/27/losari-3332630521.jpeg',
            'deskripsi' =>'Pantai Losari adalah ikon wisata di Makassar yang terkenal dengan pemandangan matahari terbenam yang memukau. Lokasinya yang strategis di pusat kota membuatnya mudah diakses, dan pengunjung bisa menikmati berbagai 
                kegiatan santai seperti berjalan-jalan atau bersantai di kafe sekitar pantai.',
            'judul desc 1' =>'Keindahan Alam dan Sunset yang Menawan',
            'judul desc 2' =>'Aksesibilitas dan Fasilitas Lengkap',
            'judul desc 3' =>'Pusat Aktivitas dan Hiburan',
            'desc 1' => 'Pantai Losari di Makassar terkenal dengan pemandangan matahari terbenam yang menakjubkan. Pengunjung dapat menikmati panorama indah laut dan langit yang berubah warna saat senja​',
            'desc 2' => 'Sebagai salah satu ikon wisata kota Makassar, Pantai Losari mudah dijangkau dengan berbagai fasilitas pendukung, seperti area parkir, tempat makan, dan kafe yang tersebar di sekitar pantai​',
            'desc 3' => 'Pantai Losari juga menjadi pusat aktivitas lokal, dengan berbagai kegiatan rekreasi seperti jalan-jalan santai, bersepeda, dan menikmati kuliner khas. Tempat ini sering menjadi tujuan favorit warga dan wisatawan',
            
            
        ],
        [
            'id_destinasi' => 4,
            'slug' => 'cpi',
            'title' => 'Central Point of Indonesia  ',
            'lokasi' => 'Makassar, sulsel',
            'gambar' => 'https://sulsel.herald.id/wp-content/uploads/sites/8/2023/03/WhatsApp-Image-2023-03-06-at-21.21.25.jpeg',
            'deskripsi' => 'CPI Makassar (Central Point of Indonesia) adalah pusat perbelanjaan modern yang terletak di jantung kota. Selain tempat belanja, CPI juga menawarkan hiburan keluarga, bioskop, dan berbagai restoran, 
                menjadikannya destinasi yang lengkap untuk berbelanja dan bersantai​',
            'judul desc 1' =>'Lokasi Strategis dan Pusat Perbelanjaan Modern',
            'judul desc 2' =>'Fasilitas Lengkap untuk Keluarga dan Hiburan',
            'judul desc 3' =>'Destinasi Wisata Belanja yang Nyaman dan Modern',
            'desc 1' => 'CPI (Central Point of Indonesia) Makassar adalah pusat perbelanjaan terbesar di kota ini yang terletak strategis di pusat kota. CPI menawarkan berbagai pilihan belanja dari brand internasional hingga produk lokal, serta akses mudah untuk pengunjung​',
            'desc 2' => 'CPI tidak hanya menawarkan tempat belanja, tetapi juga fasilitas hiburan seperti bioskop, area bermain anak, dan berbagai restoran yang cocok untuk keluarga​JADESTA. Tempat ini menjadi tujuan populer untuk bersantai sekaligus berbelanja',
            'desc 3' => 'CPI memiliki desain yang modern dengan suasana yang nyaman, ideal untuk pengunjung yang ingin menikmati belanja dengan pengalaman yang menyenangkan. Selain itu, keberadaannya yang dekat dengan berbagai fasilitas umum menjadikannya tempat yang mudah diakses',
            
        ]
    ]
    ]);
});

Route::get('/destinasi/{slug}', function ($slug) {
    $destinasi = [
        [
            'id_destinasi' => 1,
            'slug' => 'pantai-bira',
            'title' => 'Pantai Bira',
            'lokasi' => 'Bulukumba, sulsel',
            'gambar' => 'https://i.misteraladin.com/blog/2020/06/30100201/tanjung-bira.jpg',
            'deskripsi' => 'Pantai Bira terletak di Kabupaten Bulukumba, Sulawesi Selatan, Indonesia. Pantai ini dikenal dengan pasir putihnya yang halus, air laut yang jernih, 
                dan pemandangan yang memukau. Dikelilingi oleh perbukitan hijau dan terumbu karang yang indah, Pantai Bira menjadi destinasi wisata yang populer di kalangan wisatawan lokal dan internasional..',
            'judul desc 1' =>'Keindahan Alam Pantai Bira',
            'judul desc 2' =>'Keanekaragaman Bawah Laut yang Menakjubkan',
            'judul desc 3' =>'Fasilitas yang Memadai untuk Wisatawan',
            'desc 1' => 'Pantai Bira terkenal dengan keindahan alamnya, seperti pasir putih halus dan air laut yang jernih, menciptakan suasana yang tenang dan menenangkan. Keindahan ini membuatnya ideal untuk bersantai dan menikmati alam.',
            'desc 2' => 'Keanekaragaman bawah laut di Pantai Bira juga luar biasa, dengan terumbu karang yang indah dan ikan-ikan berwarna-warni, menjadikannya tempat yang sempurna untuk snorkeling dan diving.',
            'desc 3' => 'Selain itu, Pantai Bira dilengkapi dengan fasilitas yang baik, termasuk penginapan dan restoran, memberikan kenyamanan bagi para wisatawan yang datang.',
            
        ],
        [
            'id_destinasi' => 2,
            'slug' => 'lego-legona',
            'title' => 'Lego Legona',
            'lokasi' => 'Makassar, sulsel',
            'gambar' => 'https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/t_htl-mobile/tix-hotel/images-web/2024/10/19/e754bdcf-40f5-4feb-b2c3-bf9420af8ed8-1729301157602-992cec8dc93bdcb1b1248a856ecc56d6.jpg',
            'deskripsi' =>'Lego-legona Bulu Barakka adalah homestay yang terletak di Desa Rammang-Rammang, Kabupaten Maros, Sulawesi Selatan. Tempat ini menawarkan fasilitas yang nyaman bagi para wisatawan yang ingin menginap, 
                dengan fasilitas kamar mandi pribadi dan bersama, kipas angin, televisi, serta area selfie. Homestay ini juga menyediakan sarapan pagi dan memiliki suasana yang tenang, cocok bagi mereka yang ingin menikmati pemandangan alam sekitar​',
            'judul desc 1' =>'Lokasi Strategis dan Akses Mudah ke Atraksi Alam',
            'judul desc 2' =>'Fasilitas Nyaman dengan Harga Terjangkau ',
            'judul desc 3' =>'Suasana Tenang dan Layanan Ramah',
            'desc 1' => 'Lego-legona Bulu Barakka menawarkan lokasi yang strategis, dekat dengan atraksi alam Rammang-Rammang yang mempesona, seperti formasi karst dan wisata perahu. Dengan akses mudah ke dermaga, pengunjung bisa menikmati keindahan alam secara langsung​',
            'desc 2' => 'Selain itu, homestay ini memberikan fasilitas yang nyaman dengan harga terjangkau, mulai dari IDR 250,000 per malam. Tersedia sarapan pagi, area selfie, dan berbagai fasilitas tambahan yang mendukung kenyamanan pengunjung​',
            'desc 3' => 'Kelebihan lainnya adalah suasana yang tenang dan bersih, ideal untuk relaksasi setelah seharian berkeliling. Dengan layanan yang ramah dan fasilitas seperti Wi-Fi serta televisi, Lego-legona Bulu Barakka menjadi tempat yang pas untuk menginap​',
        ],
        [
            'id_destinasi' => 3,
            'slug' => 'pantai-losari',
            'title' => 'Pantai Losari',
            'lokasi' => 'Makassar, sulsel',
            'gambar' => 'https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/182/2023/11/27/losari-3332630521.jpeg',
            'deskripsi' =>'Pantai Losari adalah ikon wisata di Makassar yang terkenal dengan pemandangan matahari terbenam yang memukau. Lokasinya yang strategis di pusat kota membuatnya mudah diakses, dan pengunjung bisa menikmati berbagai 
                kegiatan santai seperti berjalan-jalan atau bersantai di kafe sekitar pantai.',
            'judul desc 1' =>'Keindahan Alam dan Sunset yang Menawan',
            'judul desc 2' =>'Aksesibilitas dan Fasilitas Lengkap',
            'judul desc 3' =>'Pusat Aktivitas dan Hiburan',
            'desc 1' => 'Pantai Losari di Makassar terkenal dengan pemandangan matahari terbenam yang menakjubkan. Pengunjung dapat menikmati panorama indah laut dan langit yang berubah warna saat senja​',
            'desc 2' => 'Sebagai salah satu ikon wisata kota Makassar, Pantai Losari mudah dijangkau dengan berbagai fasilitas pendukung, seperti area parkir, tempat makan, dan kafe yang tersebar di sekitar pantai​',
            'desc 3' => 'Pantai Losari juga menjadi pusat aktivitas lokal, dengan berbagai kegiatan rekreasi seperti jalan-jalan santai, bersepeda, dan menikmati kuliner khas. Tempat ini sering menjadi tujuan favorit warga dan wisatawan',
            
            
        ],
        [
            'id_destinasi' => 4,
            'slug' => 'cpi',
            'title' => 'Central Point of Indonesia  ',
            'lokasi' => 'Makassar, sulsel',
            'gambar' => 'https://sulsel.herald.id/wp-content/uploads/sites/8/2023/03/WhatsApp-Image-2023-03-06-at-21.21.25.jpeg',
            'deskripsi' => 'CPI Makassar (Central Point of Indonesia) adalah pusat perbelanjaan modern yang terletak di jantung kota. Selain tempat belanja, CPI juga menawarkan hiburan keluarga, bioskop, dan berbagai restoran, 
                menjadikannya destinasi yang lengkap untuk berbelanja dan bersantai​',
            'judul desc 1' =>'Lokasi Strategis dan Pusat Perbelanjaan Modern',
            'judul desc 2' =>'Fasilitas Lengkap untuk Keluarga dan Hiburan',
            'judul desc 3' =>'Destinasi Wisata Belanja yang Nyaman dan Modern',
            'desc 1' => 'CPI (Central Point of Indonesia) Makassar adalah pusat perbelanjaan terbesar di kota ini yang terletak strategis di pusat kota. CPI menawarkan berbagai pilihan belanja dari brand internasional hingga produk lokal, serta akses mudah untuk pengunjung​',
            'desc 2' => 'CPI tidak hanya menawarkan tempat belanja, tetapi juga fasilitas hiburan seperti bioskop, area bermain anak, dan berbagai restoran yang cocok untuk keluarga​JADESTA. Tempat ini menjadi tujuan populer untuk bersantai sekaligus berbelanja',
            'desc 3' => 'CPI memiliki desain yang modern dengan suasana yang nyaman, ideal untuk pengunjung yang ingin menikmati belanja dengan pengalaman yang menyenangkan. Selain itu, keberadaannya yang dekat dengan berbagai fasilitas umum menjadikannya tempat yang mudah diakses',
            
        ]
    ];

    $isi_destinasi = Arr::first($destinasi, function ($isi_destinasi) use ($slug) {
        return $isi_destinasi['slug'] == $slug;
    });

    return view('isi_destinasi', ['title' => 'isi destinasi', 'isi_destinasi' => $isi_destinasi]);
});

Route::get('/offers', function () {
    return view('offers', ['title' => 'Offers']);
});

Route::get('/about', function () {
    return view('about' ,['title' => 'about'], ['author' => 'Ubaidir Rahman R']);
});

