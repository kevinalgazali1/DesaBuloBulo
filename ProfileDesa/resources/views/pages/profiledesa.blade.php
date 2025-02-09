@extends('main')

@section('content')
    <div class="font-roboto ml-10 mr-10">
        <div class="container mx-auto px-4 py-8 mt-14">
            <div class="flex flex-col md:flex-row items-center md:items-start">
                <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-8">
                    <div class="relative">
                        <img alt="Foto Kepala Desa" class="rounded-full border-4 border-[#344CB7]" height="200"
                            src="assets/kades.png" width="200" />
                    </div>
                    <div class="mt-4 text-center md:text-left">
                        <h2 class="text-xl font-bold text-gray-800">
                            MAPPILAWA MAPPA, S.E
                        </h2>
                        <p class="text-gray-500">
                            Kepala Desa Bulo Bulo
                        </p>
                    </div>
                </div>
                <div class="flex-grow">


                    <h1 class="text-2xl font-bold text-gray-800">
                        VISI
                    </h1>

                    <div class="mt-4 border-l-4 border-gray-300 pl-4">
                        <p class="text-3xl font-bold text-gray-500">
                            MEWUJUDKAN
                        </p>
                        <p class="text-2xl font-bold">
                            MASYARAKAT YANG MANDIRI, PRODUKTIF YANG BERKARAKTER RELIGIUS MENUJU BULO BULO YANG SEJAHTERA
                        </p>
                    </div>



                    <h1 class="text-2xl font-bold text-gray-800 mt-4">
                        MISI
                    </h1>
                    <div class="mt-4 border-l-4 border-gray-300 pl-4 text-xl">
                        <p class="text-black mb-2">
                            1. Meningkatkan Tata Kelola Desa Pemerintahan Desa Yang Akuntabel Dan Optimalisasi Pelayanan
                            Publik
                        </p>
                        <p class="text-black mb-2">
                            2. Meningkatkan Kualitas Pelayanan Kesehatan Masyarakat Desa
                        </p>
                        <p class="text-black mb-2">
                            3. Meningkatkan Kualitas Sumber Daya Manusia dan Pendidikan Anak yang Berkarakter Religius
                        </p>
                        <p class="text-black mb-2">
                            4. Mewujudkan Tata Kelola Pertanian dan Berdaya Sains Untuk Meningkatkan Ketahanan Pangan
                        </p>
                        <p class="text-black mb-2">
                            5. Meningkatkan Pembangunan Infrastruktur Pedesaan Secara Partisipatif Untuk Kelancaran Kegiatan
                            Masyarakat
                        </p>
                        <p class="text-black mb-2">
                            6. Penguatan Kelembagaan dan Meningkatkan Pengembangan Usaha Ekonomi Produktif Masyarakat Desa
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container mx-auto px-8 p-4 bg-[#344CB7] text-white">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-full">
                <div class="flex items-center mb-1">
                    <div class="w-1 bg-blue-500 h-12 mr-4"></div>
                    <h1 class="text-4xl font-bold text-[#FFEB00]">BAGAN DESA</h1>
                </div>
                <h2 class="text-2xl text-white mb-4 font-bold">
                    Struktur Organisasi Desa Bulo-Bulo
                </h2>

                <div class="bg-white shadow-md rounded-lg overflow-hidden mt-4">
                    <div class="p-5">
                        <img alt="Struktur Organisasi Pemerintahan Desa Bangkalaloe" class="w-full h-auto object-cover"
                            height="400" src="assets/struktur.png" width="1200" />
                    </div>
                </div>
                <div class="container mx-auto px-8 p-4 bg-white rounded-lg text-black mt-4">
                    <p class="mb-4 text-justify mr-4" style="font-family: 'Poppins', sans-serif;">
                        Kepala desa memiliki peran utama dalam menyelenggarakan pemerintahan desa, melaksanakan
                        pembangunan, serta melakukan pembinaan dan pemberdayaan masyarakat. Dalam menjalankan tugasnya,
                        kepala desa dibantu oleh perangkat desa yang memiliki fungsi administrasi dan pengelolaan
                        berbagai aspek pemerintahan desa.
                    </p>
                    <p class="mb-4 text-justify mr-4" style="font-family: 'Poppins', sans-serif;">
                        Sekretaris desa bertanggung jawab dalam urusan administrasi pemerintahan, termasuk tata kelola
                        naskah, arsip, ekspedisi, serta pengelolaan aset desa. Selain itu, terdapat kepala urusan umum dan
                        perencanaan yang mengurus administrasi surat-menyurat, penyusunan anggaran, serta inventarisasi data
                        desa. Kepala urusan keuangan memiliki tugas utama dalam mengelola sumber pendapatan desa, verifikasi
                        administrasi keuangan, serta pencatatan pengeluaran desa untuk memastikan transparansi keuangan.
                    </p>
                    <p class="mb-4 text-justify mr-4" style="font-family: 'Poppins', sans-serif;">
                        Selain itu, terdapat kepala seksi kesejahteraan sosial dan pelayanan yang bertanggung jawab atas
                        pembangunan sarana prasarana pendidikan, kesehatan, dan motivasi sosial masyarakat, termasuk
                        pembinaan budaya dan pemberdayaan ekonomi warga. Kepala seksi pemerintahan berperan dalam mengatur
                        tata kelola pemerintahan desa, mengawasi ketertiban dan perlindungan masyarakat, serta mengelola
                        administrasi kependudukan.
                    </p>
                    <p class=" text-justify mr-4" style="font-family: 'Poppins', sans-serif;">Terakhir, kepala kewilayahan
                        memiliki tanggung jawab dalam mengawasi ketertiban masyarakat dan
                        menjaga stabilitas keamanan lingkungan desa. Mereka berperan dalam mendukung upaya pembangunan
                        wilayah serta pembinaan kesadaran masyarakat dalam menjaga lingkungan dan ketertiban sosial. Semua
                        peran ini berkontribusi dalam menciptakan pemerintahan desa yang efektif dan berorientasi pada
                        kesejahteraan masyarakat.</p>
                </div>

                <h2 class="text-2xl text-white mb-4 mt-4 font-bold">
                    Struktur Badan Permusyawaratan Desa (BPD) Desa Bulo-Bulo
                </h2>

                <div class="bg-white shadow-md rounded-lg overflow-hidden mt-4">
                    <div class="p-5">
                        <img alt="Struktur Organisasi Pemerintahan Desa Bangkalaloe" class="w-full h-auto object-cover"
                            height="400" src="assets/bpd.png" width="1200" />
                    </div>
                </div>

                <div class="container mx-auto px-8 p-4 bg-white rounded-lg text-black mt-4">
                    <p class="mb-4 text-justify mr-4" style="font-family: 'Poppins', sans-serif;">
                        Badan Permusyawaratan Desa (BPD) merupakan lembaga yang berperan dalam menjalankan fungsi
                        pemerintahan desa secara demokratis. Keberadaan BPD diatur dalam Peraturan Daerah Nomor 1 Tahun
                        2018, yang menegaskan bahwa BPD berfungsi sebagai wakil masyarakat dalam pemerintahan desa. Anggota
                        BPD terdiri dari penduduk desa yang ditetapkan berdasarkan keterwakilan wilayah.
                    </p>
                    <p class="mb-4 text-justify mr-4" style="font-family: 'Poppins', sans-serif;">
                        Fungsi utama BPD mencakup pembahasan dan penyepakatan rancangan peraturan desa bersama kepala desa,
                        menampung serta menyalurkan aspirasi masyarakat, serta melaksanakan pengawasan terhadap kinerja
                        kepala desa. Selain itu, BPD memiliki berbagai tugas penting, seperti menggali dan mengelola
                        aspirasi masyarakat, menyelenggarakan musyawarah desa, serta membentuk panitia pemilihan kepala
                        desa. Dalam menjalankan tugasnya, BPD juga berperan dalam menciptakan hubungan kerja yang harmonis
                        antara pemerintah desa dan lembaga desa lainnya, serta melakukan evaluasi terhadap Laporan
                        Penyelenggaraan Pemerintahan Desa (LPPD). Lebih lanjut, BPD juga memiliki kewenangan dalam
                        melaksanakan tugas lain yang diatur dalam ketentuan peraturan perundang-undangan.
                    </p>
                    <p class="text-justify mr-4" style="font-family: 'Poppins', sans-serif;">
                        Sebagai mitra pemerintah desa, BPD berfungsi untuk menjembatani kepentingan masyarakat dengan
                        pemerintah desa agar tercipta tata kelola pemerintahan yang lebih transparan dan akuntabel. Hal ini
                        menunjukkan bahwa BPD memiliki peran strategis dalam membangun desa yang lebih baik melalui
                        pengawasan, musyawarah, dan kerja sama dengan kepala desa serta masyarakat desa.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-8 p-4 bg-gray-200 text-white">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-full">
                <div class="flex items-center mb-1">
                    <div class="w-1 bg-blue-500 h-12 mr-4"></div>
                    <h1 class="text-4xl font-bold text-gray-800">PETA SARANA DAN INFRASTRUKTUR DESA</h1>
                </div>
                <h2 class="text-2xl text-gray-500 mb-4">
                    Desa Bulo Bulo
                </h2>

                <div class="bg-white shadow-md rounded-lg overflow-hidden mt-4">
                    <div class="p-5">
                        <img alt="Struktur Organisasi Pemerintahan Desa Bangkalaloe" class="w-full h-auto object-cover"
                            height="400" src="imagesstruktur/mapdesa.jpg" width="1200" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
