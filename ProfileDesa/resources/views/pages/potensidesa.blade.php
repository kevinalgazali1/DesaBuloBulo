@extends('main')

@section('content')
    <div class="bg-gray-200 mb-8 mt-16">
        <section class="relative">
            <img alt="Nature Cottage" class="w-full h-96 object-cover opacity-200" height="600" src="assets/sawah.jpg"
                width="1920" />
            <div
                class="absolute inset-0 bg-black bg-opacity-60 flex flex-col justify-center items-center text-center text-white p-6">
                <h1
                    class="text-4xl md:text-5xl text-[#FFEB00] text-shadow font-bold transition-transform transform hover:scale-105">
                    Potensi Desa
                </h1>
                <p class="mt-4 text-lg md:text-xl transition-opacity text-shadow duration-300 hover:opacity-80">
                    Mengenal Lebih Jauh Potensi Desa Bulo Bulo
                </p>

            </div>
        </section>
    </div>
    </section>
    <!-- About Section -->

    <section class="py-16 bg-gray-200">
        <div class="container mx-auto px-6 md:px-12 lg:px-24">
            <div class="max-w-6xl mx-auto">
                <div class="flex items-center justify-center mb-8">
                    <div class="flex items-center mb-1">
                        <div class="w-1 bg-blue-500 h-12 mr-4"></div>
                        <h1 class="text-3xl font-bold text-black text-shadow">
                            Komoditas Unggulan Berdasarkan Luas Tanam
                        </h1>
                    </div>

                    <style>
                        .text-shadow {
                            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
                            /* Mengatur bayangan teks */
                        }
                    </style>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="relative">
                        <div class="border-2 border-[#000957] overflow-hidden rounded-lg">
                            <img alt="Philodendron plant leaves" class="w-full h-full object-cover rounded-lg"
                                src="assets/sawah1.png" height="400" width="600" />
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-50 rounded-lg p-6 flex flex-col justify-between">
                            <div>
                                <h2 class="text-3xl font-bold text-white">
                                    Padi
                                </h2>
                                <p class="text-white mt-2 text-justify">
                                    Beras sebagai makanan pokok
                                    menjadi alasan utama area
                                    persawahan mendominasi daerah
                                    bulo-bulo. produktivitas sawah yang
                                    tinggi dapat menjamin ketersediaan
                                    pangan bagi masyarakat desa.
                                    selain padi, sawah juga dapat ditanami
                                    berbagai jenis tanaman seperti
                                    palawija dan buah-buahan. Diversifikasi
                                    dapat meningkatkan pendapatan
                                    petani dan memenuhi kebutuhan gizi
                                    masyarakat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="border-4 border-[#0c4424] overflow-hidden rounded-lg">
                            <img alt="Calathea plant leaves" class="w-full h-full object-cover rounded-lg" height="400"
                                src="assets/karet.png" width="600" />
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-50 rounded-lg p-6 flex flex-col justify-between">
                            <div>
                                <h2 class="text-3xl font-bold text-white">
                                    Karet
                                </h2>
                                <p class="text-white mt-2 text-justify">
                                    Kebun karet merupakan salah satu
                                    komoditi yang banyak dijumpai di Desa
                                    Bulo-bulo. Kebun karet memiliki
                                    potensi pada bidang industri sebagai
                                    bahan produk otomotif serta
                                    alas kaki. Permintaan bahan baku
                                    yang tinggi mempengaruhi taraf
                                    ekonomi masyarakat desa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="bg-gray-200">
        <div class="container mx-auto p-4">
            <div class="flex items-center justify-center mb-8">
                <div class="flex items-center mb-1">
                    <div class="w-1 bg-blue-500 h-12 mr-4"></div>
                    <h1 class="text-3xl font-bold text-black text-shadow">
                        Komoditas Dalam Bidang Peternakan dan Budidaya Ikan
                    </h1>
                </div>

                <style>
                    .text-shadow {
                        text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
                        /* Mengatur bayangan teks */
                    }
                </style>
            </div>
            <div class="flex flex-col md:flex-row items-center bg-gray-300 rounded-lg shadow-lg overflow-hidden">

                <div class="md:w-1/2 p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-1 bg-blue-500 h-12 mr-4 rounded-lg">
                        </div>
                        <h1 class="text-4xl font-bold text-gray-800">
                            Peternakan Sapi
                        </h1>
                    </div>

                    <p class="text-gray-800 text-lg mb-4 leading-relaxed text-justify">
                        Peternakan sapi memiliki beberapa
                        potensi yang sangat besar. hal ini
                        ditunjang oleh ketersediaan lahan
                        dan ketersediaan pakan. Selain itu,
                        potensi pengembangan agrowisata
                        untuk mengintegrasikan peternakan
                        dengan pertanian seperti pembuatan
                        pupuk atau penanaman pakan
                        untuk menunjang praktek pertanian
                        organik
                    </p>
                </div>

                <div class="md:w-1/2 grid grid-cols-1 gap-2 p-2">
                    <img alt="A beautiful waterfall in a lush green forest"
                        class="object-cover cursor-pointer transition-transform transform hover:scale-105 rounded-lg mx-auto"
                        height="200" src="assets/sapi.jpg" width="300" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-200">
        <div class="container mx-auto p-4">
            <div class="flex flex-col md:flex-row items-center bg-gray-300 rounded-lg shadow-lg overflow-hidden">
                <div class="md:w-1/2 grid grid-cols-1 gap-2 p-2">
                    <img alt="A beautiful waterfall in a lush green forest"
                        class="object-cover cursor-pointer transition-transform transform hover:scale-105 rounded-lg mx-auto"
                        height="200" src="assets/ayam.jpg" width="300" />
                </div>
                <div class="md:w-1/2 p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-1 bg-blue-500 h-12 mr-4 rounded-lg">
                        </div>
                        <h1 class="text-4xl font-bold text-gray-800">
                            Peternakan Ayam
                        </h1>
                    </div>

                    <p class="text-gray-800 text-lg mb-4 leading-relaxed text-justify">
                        Peternakan ayam sebagai salah satu
                        mata pencaharian warga Bulo-bulo
                        memiliki potensi pasar yang luas
                        serta potensi pengembangan
                        agrowisata yang tinggi. Daging dan
                        telur ayam merupakan sumber protein
                        hewani yang banyak dibutuhkan
                        masyarakat. hal tersebut membuat
                        permintaan produk peternakan ayam
                        terus meningkat seiring dengan
                        pertumbuhan populasi. Selain
                        peningkatan taraf hidup peternak,
                        pengembangan peternakan ayam
                        dapat di integrasikan dengan kegiatan
                        pertanian seperti penanaman pakan
                        ternak atau pengolahan limbah ternak
                        menjadi pupuk.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-200">
        <div class="container mx-auto p-4">
            <div class="flex flex-col md:flex-row items-center bg-gray-300 rounded-lg shadow-lg overflow-hidden">

                <div class="md:w-1/2 p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-1 bg-blue-500 h-12 mr-4 rounded-lg">
                        </div>
                        <h1 class="text-4xl font-bold text-gray-800">
                            Budidaya Ikan
                        </h1>
                    </div>

                    <p class="text-gray-800 text-lg mb-4 leading-relaxed text-justify">
                        Kolam Budidaya yang ada di
                        wilayah Desa Bulo-Bulo merupakan
                        Kolam Milik Perseorangan dari Warga
                        Desa Setempat. Pada Kolam-Kolam
                        tersebut, warga membudidayakan
                        jenis Ikan seperti Koi, Nila, dan Lele
                    </p>
                </div>

                <div class="md:w-1/2 grid grid-cols-1 gap-2 p-2">
                    <img alt="A beautiful waterfall in a lush green forest"
                        class="object-cover cursor-pointer transition-transform transform hover:scale-105 rounded-lg mx-auto"
                        height="200" src="assets/ikan.jpg" width="300" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-200">
        <div class="container mx-auto p-4">
            <div class="flex items-center justify-center mb-8">
                <div class="flex items-center mb-1">
                    <div class="w-1 bg-blue-500 h-12 mr-4"></div>
                    <h1 class="text-3xl font-bold text-black text-shadow">
                        Komoditas Dalam Bidang Perkebunan
                    </h1>
                </div>

                <style>
                    .text-shadow {
                        text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
                        /* Mengatur bayangan teks */
                    }
                </style>
            </div>
            <div class="flex flex-col md:flex-row items-center bg-gray-300 rounded-lg shadow-lg overflow-hidden">

                <div class="md:w-1/2 p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-1 bg-blue-500 h-12 mr-4 rounded-lg">
                        </div>
                        <h1 class="text-4xl font-bold text-gray-800">
                            Kebun Durian
                        </h1>
                    </div>

                    <p class="text-gray-800 text-lg mb-4 leading-relaxed text-justify">
                        Durian di Desa Bulo Bulo tersebar di
                        Kebun-Kebun Warga dan memiliki
                        produktivitas yang cukup tinggi pada
                        setiap tahunnya
                    </p>
                </div>

                <div class="md:w-1/2 grid grid-cols-1 gap-2 p-2">
                    <img alt="A beautiful waterfall in a lush green forest"
                        class="object-cover cursor-pointer transition-transform transform hover:scale-105 rounded-lg mx-auto"
                        height="200" src="assets/durian.jpg" width="300" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-200">
        <div class="container mx-auto p-4">
            <div class="flex flex-col md:flex-row items-center bg-gray-300 rounded-lg shadow-lg overflow-hidden">
                <div class="md:w-1/2 grid grid-cols-1 gap-2 p-2">
                    <img alt="A beautiful waterfall in a lush green forest"
                        class="object-cover cursor-pointer transition-transform transform hover:scale-105 rounded-lg mx-auto"
                        height="200" src="assets/porang.jpg" width="300" />
                </div>
                <div class="md:w-1/2 p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-1 bg-blue-500 h-12 mr-4 rounded-lg">
                        </div>
                        <h1 class="text-4xl font-bold text-gray-800">
                            Tanaman Porang
                        </h1>
                    </div>

                    <p class="text-gray-800 text-lg mb-4 leading-relaxed text-justify">
                        Tanaman porang merupakan
                        tanaman yang mudah
                        beradaptasi dan dapat tumbuh
                        di berbagai jenis tanah
                        mengandung glukomanan
                        sejenis serat larut
                        yang memiliki banyak kegunaan
                        serta dapat memenuhi gizi
                        masyarakat.
                    </p>

                </div>
            </div>
        </div>
    </section>

    </div>
@endsection
