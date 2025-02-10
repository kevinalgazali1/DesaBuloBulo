@extends('main')

@section('content')
    <div class="bg-gray-200 mb-8 mt-16">

        <div class="max-w-4xl mx-auto p-4">
            <div>
                <div class="flex items-center mb-1">
                    <div class="w-1 bg-blue-500 h-12 mr-4"></div>
                    <h1 class="text-4xl font-bold text-gray-800" style="font-family: 'Poppins', sans-serif;">Infografis</h1>
                </div>
                <h2 class="text-2xl text-gray-600 mb-4" style="font-family: 'Poppins', sans-serif;">Data Umum Desa Bulo Bulo
                </h2>
            </div>
        </div>

        <div class="bg-gray-100 max-w-4xl mx-auto p-4 rounded-lg shadow-md ">
            <div class="max-w-4xl mx-auto p-4">
                <div class="flex items-center">
                    <div class="w-1 bg-blue-500 h-12 mr-4 mb-4"></div>
                    <h1 class="text-3xl font-bold text-blue-600" style="font-family: 'Poppins', sans-serif;">Jumlah Penduduk
                    </h1>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                    <div class="bg-white p-4 rounded-lg shadow flex items-center">
                        <img alt="Illustration of a group of people" class="w-12 h-12 mr-4" height="50"
                            src="assets/penduduk.png" width="50" />
                        <div>
                            <p class="text-gray-600">TOTAL PENDUDUK</p>
                            <p class="text-2xl font-bold text-gray-800">3.113 JIWA</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow flex items-center">
                        <img alt="Illustration of a family" class="w-12 h-12 mr-4" height="50" src="assets/keluarga.png"
                            width="50" />
                        <div>
                            <p class="text-gray-600">JUMLAH DUSUN</p>
                            <p class="text-2xl font-bold text-gray-800">6 DUSUN</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                    <div class="bg-white p-4 rounded-lg shadow flex items-center">
                        <img alt="Illustration of a group of people" class="w-12 h-12 mr-4" height="50"
                            src="assets/imageinfografis/Dusun.png" width="50" />
                        <div>
                            <p class="text-gray-600">JUMLAH KK</p>
                            <p class="text-2xl font-bold text-gray-800">980 KK</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow flex items-center">
                        <img alt="Illustration of a family" class="w-12 h-12 mr-4" height="50"
                            src="assets/imageinfografis/RK.png" width="50" />
                        <div>
                            <p class="text-gray-600">JUMLAH RT</p>
                            <p class="text-2xl font-bold text-gray-800">12 RT</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-white p-4 rounded-lg shadow flex items-center">
                        <img alt="Illustration of a family" class="w-12 h-12 mr-4" height="50"
                            src="assets/imageinfografis/RK.png" width="50" />
                        <div>
                            <p class="text-gray-600">JUMLAH RW</p>
                            <p class="text-2xl font-bold text-gray-800">12 RW</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <div class="max-w-4xl mx-auto p-4 rounded-lg shadow-md mt-8 bg-gray-100">
        <div class="flex items-center mb-4">
            <div class="w-1 bg-blue-500 h-12 mr-4">
            </div>
            <h1 class="text-3xl font-bold text-blue-600">
                Sarana dan Prasarana
            </h1>
        </div>

        <div class="grid grid-cols-1 gap-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a group of people" class="w-12 h-12 mr-4"
                    src="assets/imageinfografis/kantordesa.png" />
                <div>
                    <p class="text-gray-600">
                        KANTOR DESA
                    </p>
                    <p class="text-2xl font-bold text-gray-800">
                        1 UNIT
                    </p>
                </div>
            </div>
        </div>

        <h2 class="text-2xl font-bold text-blue-800 mt-4">
            Sarana Kesehatan
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a group of people" class="w-12 h-12 mr-4"
                    src="assets/imageinfografis/puskesmas.png" />
                <div>
                    <p class="text-gray-600">
                        PUSKESMAS PEMBANTU
                    </p>
                    <p class="text-2xl font-bold text-gray-800">
                        1 BUAH
                    </p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a family" class="w-12 h-12 mr-4" src="assets/imageinfografis/poskesdes.png" />
                <div>
                    <p class="text-gray-600">
                        POSYANDU
                    </p>
                    <p class="text-2xl font-bold text-gray-800">
                        6 BUAH
                    </p>
                </div>
            </div>
        </div>

        <h2 class="text-2xl font-bold text-blue-800 mt-4">
            Prasarana Pendidikan
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a family" class="w-12 h-12 mr-4" src="assets/imageinfografis/tk.png" />
                <div>
                    <p class="text-gray-600">
                        TK
                    </p>
                    <p class="text-1xl font-bold text-gray-800">
                        2 BUAH
                    </p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a house" class="w-12 h-12 mr-4" src="assets/imageinfografis/sd.png" />
                <div>
                    <p class="text-gray-600">
                        SD
                    </p>
                    <p class="text-1xl font-bold text-gray-800">
                        3 BUAH
                    </p>
                </div>
            </div>

        </div>

        <h2 class="text-2xl font-bold text-blue-800 mt-4">
            Prasarana Ibadah
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a group of people" class="w-12 h-12 mr-4"
                    src="assets/imageinfografis/masjid.png" />
                <div>
                    <p class="text-gray-600">
                        MASJID
                    </p>
                    <p class="text-2xl font-bold text-gray-800">
                        8 BUAH
                    </p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a family" class="w-12 h-12 mr-4" src="assets/imageinfografis/mushollah.png" />
                <div>
                    <p class="text-gray-600">
                        MUSHOLLAH
                    </p>
                    <p class="text-2xl font-bold text-gray-800">
                        3 BUAH
                    </p>
                </div>
            </div>
        </div>


        <h2 class="text-2xl font-bold text-blue-800 mt-4">
            Prasarana Umum
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a group of people" class="w-12 h-12 mr-4"
                    src="assets/imageinfografis/bola.png" />
                <div>
                    <p class="text-gray-600">
                        BOLA VOLLI</p>
                    <p class="text-2xl font-bold text-gray-800">
                        1 BUAH
                    </p>
                </div>
            </div>

            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a family" class="w-12 h-12 mr-4"
                    src="assets/imageinfografis/bulutangkis.png" />
                <div>
                    <p class="text-gray-600">
                        BULUTANGKIS
                    </p>
                    <p class="text-2xl font-bold text-gray-800">
                        1 BUAH
                    </p>
                </div>
            </div>
        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a group of people" class="w-12 h-12 mr-4"
                    src="assets/imageinfografis/seni.png" />
                <div>
                    <p class="text-gray-600">
                        KESENIAN / BUDAYA </p>
                    <p class="text-2xl font-bold text-gray-800">
                        1 BUAH
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
