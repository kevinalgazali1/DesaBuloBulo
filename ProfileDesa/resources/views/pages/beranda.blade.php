@extends('main')

@section('content')

    <body class="bg-gray-200">
        <div class="relative">
            <img alt="Background image of a park with a clock tower and trees" class="w-full h-[400px] object-cover"
                height="400" src="assets/desa.jpeg" width="1920" />
            <div class="absolute inset-0 bg-gradient-to-r from-[#344CB7] to-transparent"></div>
            <div class="absolute inset-0 flex items-center justify-start p-10">
                <div class="text-white">
                    <div class="border-l-4 border-white-500 pl-4">
                        <h1 class="text-3xl text-[#FFEB00] font-bold" style="font-family: 'Poppins', sans-serif;">Selamat
                            Datang,</h1>
                        <h2 class="text-4xl font-bold" style="font-family: 'Poppins', sans-serif;">
                            Di Website Profile
                            <br />
                            Desa Bulo Bulo
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-8 p-4 text-gray-800">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-2/3">
                    <div class="flex items-center mb-1">
                        <div class="w-1 bg-blue-500 h-12 mr-4"></div>
                        <h1 class="text-4xl font-bold text-gray-800" style="font-family: 'Poppins', sans-serif;">Profile
                        </h1>
                    </div>
                    <h2 class="text-2xl text-gray-500 mb-4" style="font-family: 'Poppins', sans-serif;">Desa Bulo Bulo</h2>
                    <p class="mb-4 text-justify mr-4" style="font-family: 'Poppins', sans-serif;">
                        Desa Bulo Bulo merupakan salah satu Desa yang ada di Kecamatan Bulukumpa Kabupaten Bulukumba
                        Provinsi Sulawesi Selatan. Asal kata Bulo Bulo berasal dari ungkapan Ma'bbulo Sipeppa dari bahasa
                        bugis yang berarti bersatu dengan teguh atau rukun bagaikan sebatang bambu yang kokoh.
                    </p>
                    <p class="mb-4 text-justify mr-4" style="font-family: 'Poppins', sans-serif;">
                        Luas wilayah Desa ini seluas 17,5 Kilometer persegi. Desa Bulo-Bulo memiliki batas wilayah yang
                        jelas dengan beberapa desa dan kelurahan di sekitarnya. Di sebelah utara, desa ini berbatasan dengan
                        Kelurahan Ballasaraja dan Kelurahan Tanete. Sementara itu, di bagian selatan, desa ini berbatasan
                        langsung dengan Kelurahan Palampang yang berada di Kecamatan Rilau Ale. Di sisi barat, Desa
                        Bulo-Bulo berbatasan dengan Desa Bonto Bulaeng serta Desa Balangtaroang. Sedangkan di bagian timur,
                        desa ini berbatasan dengan Desa Salassae.
                    </p>
                </div>
                <div class="md:w-1/3 flex justify-center md:justify-end">
                    <div class="text-center w-full">
                        <img src="assets/desa.jpeg" alt="Lokasi Desa Bulo Bulo"
                            class="w-full h-400 object-cover rounded-lg shadow-lg transition-transform duration-300 hover:scale-105" />
                        <p class="text-sm text-gray-500 mt-2 font-semibold tracking-wide">
                            Desa Bulo Bulo, Kecamatan Bulukumpa, Bulukumba
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container mx-auto px-8 p-4 bg-[#344CB7] text-white">
            <div class="flex flex-col md:flex-row">
                <div class=" ml-4">
                    <div class="flex items-center mb-1">
                        <div class="w-1 bg-blue-500 h-12 mr-4"></div>
                        <h1 class="text-4xl font-bold text-[#FFEB00]" style="font-family: 'Poppins', sans-serif;">Sejarah
                        </h1>
                    </div>
                    <h2 class="text-2xl text-white mb-4"style="font-family: 'Poppins', sans-serif;">Desa Bulo Bulo</h2>
                    <p class="mb-4 text-justify text-white"style="font-family: 'Poppins', sans-serif;">
                        Desa Bulo-Bulo memiliki sejarah panjang yang erat kaitannya dengan budaya dan perjuangan masyarakat
                        setempat. Nama “Bulo-Bulo” berasal dari bahasa Bugis, yaitu “Ma’bulo sippeppa,” yang berarti bersatu
                        dengan teguh, seperti batang bambu yang kokoh. Wilayah ini sejak dahulu kala sudah menjadi tempat
                        bermukim bagi masyarakat Bugis yang menjunjung tinggi nilai kebersamaan dan gotong royong. Sebelum
                        kemerdekaan Indonesia, desa ini masih berbentuk Gallarang, yaitu sistem pemerintahan adat yang
                        dipimpin oleh seorang kepala adat.
                    </p>
                    <p class="mb-4 text-justify text-white"style="font-family: 'Poppins', sans-serif;">
                        Pada masa perjuangan kemerdekaan, masyarakat Desa Bulo-Bulo turut serta dalam pergerakan melawan
                        penjajah. Salah satu momen bersejarah terjadi pada tanggal 19 September 1945, ketika para pemuda
                        desa mengibarkan Bendera Merah Putih untuk pertama kalinya di Kabupaten Bulukumba. Pengibaran ini
                        dipimpin oleh tokoh-tokoh seperti H. Mappiase, Dolo Daeng Bella, dan Mandor Muhammad Kasim. Momen
                        ini menjadi simbol keberanian dan semangat patriotisme masyarakat Bulo-Bulo dalam mempertahankan
                        kemerdekaan Indonesia.
                    </p>
                    <p class="mb-4 text-justify text-white"style="font-family: 'Poppins', sans-serif;">
                        Wilayah tempat pengibaran bendera tersebut masih dikenang hingga kini, ditandai dengan batu hitam di
                        tengah kebun cengkeh. Setiap tanggal 17 Agustus, masyarakat Desa Bulo-Bulo memperingati momen
                        bersejarah tersebut sebagai bagian dari penghormatan kepada para pahlawan lokal. Keberanian para
                        tokoh desa dalam memperjuangkan kemerdekaan juga membentuk identitas masyarakat yang menjunjung
                        tinggi nilai persatuan dan nasionalisme.
                    </p>
                    <p class="mb-4 text-justify text-white"style="font-family: 'Poppins', sans-serif;">
                        Pada tahun 1965, sistem pemerintahan Gallarang diubah menjadi sistem desa sesuai dengan kebijakan
                        pemerintah Indonesia dalam menyederhanakan struktur pemerintahan lokal. Pada saat itu, Desa
                        Bulo-Bulo digabungkan dengan Gallarang Bulukumba menjadi satu wilayah administratif yang lebih
                        besar. Perubahan ini memberikan dampak besar terhadap perkembangan tata kelola desa, terutama dalam
                        bidang pemerintahan dan pembangunan infrastruktur.
                    </p>
                    <p class="mb-4 text-justify text-white"style="font-family: 'Poppins', sans-serif;">
                        Seiring waktu, pertumbuhan penduduk dan perluasan wilayah menyebabkan perlunya pemekaran desa. Pada
                        tahun 1986, Desa Bulo-Bulo resmi dimekarkan menjadi dua desa, yaitu Desa Bulo-Bulo dan Desa
                        Salassae. Pemekaran ini bertujuan untuk meningkatkan pelayanan kepada masyarakat serta mempercepat
                        pembangunan di masing-masing wilayah. Sejak saat itu, kedua desa berkembang secara mandiri, meskipun
                        tetap memiliki keterkaitan historis dan budaya yang kuat.
                    </p>
                    <p class="mb-4 text-justify text-white"style="font-family: 'Poppins', sans-serif;">
                        Pada tahun 1988, pemilihan kepala desa pertama kali dilakukan secara demokratis di Desa Bulo-Bulo.
                        Sejak saat itu, pemerintahan desa semakin berkembang dengan adanya sistem kepemimpinan yang lebih
                        terstruktur. Berbagai kebijakan telah diterapkan untuk meningkatkan kesejahteraan masyarakat,
                        termasuk pembangunan infrastruktur jalan, fasilitas pendidikan, serta pemberdayaan ekonomi berbasis
                        pertanian dan perdagangan.
                    </p>
                    <p class="mb-4 text-justify text-white"style="font-family: 'Poppins', sans-serif;">
                        Hingga saat ini, Desa Bulo-Bulo terus berkembang sebagai desa yang maju dengan tetap mempertahankan
                        nilai-nilai adat dan sejarahnya. Masyarakatnya tetap menjunjung tinggi semangat gotong royong,
                        seperti yang diwariskan oleh para leluhur mereka. Dengan kekayaan sejarah dan budaya yang
                        dimilikinya, Desa Bulo-Bulo menjadi bagian penting dalam perjalanan sejarah Kabupaten Bulukumba dan
                        terus berkontribusi dalam pembangunan daerah.
                    </p>
                </div>
            </div>
        </div>


        <div class="max-w-6xl mx-auto p-4">
            <div class="flex items-center mb-1">
                <div class="w-1 bg-blue-500 h-12 mr-4"></div>
                <h1 class="text-4xl font-bold text-gray-800">Peta Lokasi Desa</h1>
            </div>
            <p class="text-gray-500">Peta Lokasi Desa Bulo Bulo</p>
            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-2xl font-bold text-gray-800">Desa Bulo Bulo</h2>
                    <hr class="my-4" />
                    <p class="text-gray-500 font-semibold">Batas Desa</p>
                    <div class="grid grid-cols-2 gap-4 mt-2">
                        <div>
                            <p class="text-gray-500">Utara</p>
                            <p class="text-gray-800">
                                Kelurahan Ballasaraja dan Kelurahan Tanete
                            </p>
                        </div>
                        <div>
                            <p class="text-gray-500">Timur</p>
                            <p class="text-gray-800">Desa Salassae</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Selatan</p>
                            <p class="text-gray-800">Kelurahan Palampang</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Barat</p>
                            <p class="text-gray-800">Desa Bonto Bulaeng dan Desa Balangtaroang</p>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-gray-500 font-semibold">Garis Lintang Selatan</p>
                            <p class="text-gray-800">5°21’-25”</p>
                        </div>
                        <div>
                            <p class="text-gray-500 font-semibold">Garis Bujur Timur</p>
                            <p class="text-gray-800">120°08’-51”</p>
                        </div>
                        <div>
                            <p class="text-gray-500 font-semibold">Luas Desa</p>
                            <p class="text-gray-800">17.500 m²</p>
                        </div>

                        <div>
                            <p class="text-gray-500 font-semibold">Jumlah Penduduk</p>
                            <p class="text-gray-800">3.113 Jiwa</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="text-center w-full">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34137.44337795082!2d120.13612445995858!3d-5.362361425939203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbea7802561d13f%3A0xf2f20f232e5fac4c!2sBulo-Bulo%2C%20Kec.%20Bulukumpa%2C%20Kabupaten%20Bulukumba%2C%20Sulawesi%20Selatan!5e1!3m2!1sid!2sid!4v1738597262177!5m2!1sid!2sid"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p class="text-sm text-gray-500 mt-2">
                            Lokasi Desa Bulo Bulo, Kecamatan Bulukumpa, Bulukumba
                        </p>
                    </div>
                </div>
            </div>
        </div>




        <div class="px-8 p-8 flex bg-[#344CB7] items-center justify-center mt-4 mb-8 monografi">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-white mb-8">Data Monografi</h1>
                <div class="flex justify-center space-x-8">
                    <div class="text-center">
                        <p class="text-4xl font-bold text-[#FFEB00]">6</p>
                        <p class="text-gray-100">Dusun</p>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl font-bold text-[#FFEB00]">3.113</p>
                        <p class="text-gray-100">Jumlah Penduduk</p>
                    </div>
                    <div class=" text-center">
                        <p class="text-4xl font-bold text-[#FFEB00]">17,5 Km<sup>2</sup></p>
                        <p class="text-gray-100">Luas Desa</p>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl font-bold text-[#FFEB00]">21</p>
                        <p class="text-gray-100">RT</p>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl font-bold text-[#FFEB00]">12</p>
                        <p class="text-gray-100">RW</p>
                    </div>
                </div>
                <div class="mt-8">
                    <a href={{ route('infografis') }} class="text-white flex items-center justify-center">
                        <i class="fas fa-arrow-right mr-2"></i> Selengkapnya
                    </a>
                </div>
            </div>
        </div>



        <script>
            // Script untuk mengatur navbar aktif
            document.addEventListener('DOMContentLoaded', function() {
                // Dapatkan URL halaman saat ini
                const currentLocation = location.pathname.split('/').pop();

                // Pilih semua link navigasi
                const navLinks = document.querySelectorAll('.nav-link');

                // Loop melalui setiap link
                navLinks.forEach(link => {
                    // Tambahkan event listener klik
                    link.addEventListener('click', function() {
                        // Hapus kelas active dari semua link
                        navLinks.forEach(l => {
                            l.classList.remove('active');
                        });

                        // Tambahkan kelas active ke link yang diklik
                        this.classList.add('active');
                    });

                    // Tandai link yang sesuai dengan halaman saat ini
                    if (link.getAttribute('href') === currentLocation) {
                        link.classList.add('active');
                    }
                });
            });
        </script>
        <style>
            .hover-zoom:hover {
                transform: scale(1.05);
                transition: transform 0.3s ease-in-out;
            }

            @media (max-width: 768px) {
                .monografi h1 {
                    font-size: 1.5rem;
                    /* Ukuran lebih kecil */
                }

                .monografi p {
                    font-size: 1.1rem;
                    /* Ukuran lebih kecil */
                }
            }
        </style>
    @endsection
