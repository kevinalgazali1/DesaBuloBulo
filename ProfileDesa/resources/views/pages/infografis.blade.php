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

    <div class="bg-gray-200 mb-8">
        <div class="bg-gray-100 max-w-4xl mx-auto p-4 rounded-lg shadow-md">
            <div class="flex items-center">
                <div class="w-1 bg-blue-500 h-12 mr-4"></div>
                <h1 class="text-3xl font-bold text-blue-600" style="font-family: 'Poppins', sans-serif;">Berdasarkan
                    Pekerjaan</h1>
            </div>
            <div class="flex justify-center">
                <img alt="" class="rounded-lg" height="400" src="assets/imageinfografis/piepekerjaan.png"
                    width="mx-auto" />
            </div>

        </div>
    </div>
    </div>

    <div class="bg-gray-200 mb-8">
        <div class="max-w-4xl mx-auto p-4 rounded-lg shadow-md bg-gray-100">
            <div class="flex items-center mb-1">
                <div class="w-1 bg-blue-500 h-12 mr-4"></div>
                <h1 class="text-3xl font-bold text-blue-600" style="font-family: 'Poppins', sans-serif;">Berdasarkan Lulusan
                    Pendidikan Umum</h1>
            </div>
            <div class="flex justify-center mt-6">
                <img alt="" class="rounded-lg" height="400" src="assets/imageinfografis/piechart pendidikan.png"
                    width="mx-auto" />
            </div>
            <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-4 p-4">
                <!-- Left Column -->
                <div class="bg-white shadow-md rounded-lg w-full md:w-1/2">
                    <div class="flex items-center p-4">
                        <div class="w-1 bg-blue-500 h-12 mr-4"></div>
                        <h1 class="font-bold text-blue-600" style="font-family: 'Poppins', sans-serif; font-size:18px;">
                            Lulusan Pendidikan Khusus</h1>
                    </div>
                    <div class="p-4 border-b">
                        <div class="flex items-center">
                            <img alt="Illustration of a family" class="w-12 h-12 mr-4"
                                src="assets/imageinfografis/pesantren.png" />
                            <div>
                                <p class="text-gray-600">
                                    PONDOK PESANTREN
                                </p>
                                <p class="text-2xl font-bold">
                                    2 ORANG
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center">
                            <img alt="Illustration of a family" class="w-12 h-12 mr-4"
                                src="assets/imageinfografis/keagamaan.png" />
                            <div>
                                <p class="text-gray-600">
                                    PENDIDIKAN KEAGAMAAN
                                </p>
                                <p class="text-2xl font-bold">
                                    27 ORANG
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="shadow-md rounded-lg w-full md:w-1/2 bg-white">
                    <div class="flex items-center p-4">
                        <div class="w-1 bg-blue-500 h-12 mr-4"></div>
                        <h1 class="font-bold text-blue-600" style="font-family: 'Poppins', sans-serif; font-size:18px;">
                            Tidak Lulus Dan Tidak Sekolah</h1>
                    </div>
                    <div class="p-4 border-b">
                        <div class="flex items-center">
                            <img alt="Illustration of a family" class="w-12 h-12 mr-4"
                                src="assets/imageinfografis/tidaklulus.png" />
                            <div>
                                <p class="text-gray-600">
                                    TIDAK LULUS
                                </p>
                                <p class="text-2xl font-bold">
                                    9 ORANG
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center">
                            <img alt="Illustration of a family" class="w-12 h-12 mr-4"
                                src="assets/imageinfografis/tidaksekolah.png" />
                            <div>
                                <p class="text-gray-600">
                                    TIDAK BERSEKOLAH
                                </p>
                                <p class="text-2xl font-bold">
                                    1017 ORANG
                                </p>
                            </div>
                        </div>
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
                <img alt="Illustration of a group of people" class="w-12 h-12 mr-4" src="assets/imageinfografis/masjid.png" />
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
                <img alt="Illustration of a group of people" class="w-12 h-12 mr-4" src="assets/imageinfografis/bola.png" />
                <div>
                    <p class="text-gray-600">
                        BOLA VOLLI</p>
                    <p class="text-2xl font-bold text-gray-800">
                        1 BUAH
                    </p>
                </div>
            </div>

            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a family" class="w-12 h-12 mr-4" src="assets/imageinfografis/bulutangkis.png" />
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
                <img alt="Illustration of a group of people" class="w-12 h-12 mr-4" src="assets/imageinfografis/seni.png" />
                <div>
                    <p class="text-gray-600">
                        KESENIAN / BUDAYA </p>
                    <p class="text-2xl font-bold text-gray-800">
                        1 BUAH
                    </p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a family" class="w-12 h-12 mr-4" src="assets/imageinfografis/sumurdesa.png" />
                <div>
                    <p class="text-gray-600">
                        SUMUR DESA
                    </p>
                    <p class="text-2xl font-bold text-gray-800">
                        2 BUAH
                    </p>
                </div>
            </div>
        </div>





        <h2 class="text-2xl font-bold text-blue-800 mt-4">
            Prasarana Transportasi
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a group of people" class="w-12 h-12 mr-4"
                    src="assets/imageinfografis/jalandesa.png" />
                <div>
                    <p class="text-gray-600">
                        JALAN DESA (ASPAL / BETON)
                    </p>
                    <p class="text-2xl font-bold text-gray-800">
                        2 KM
                    </p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a family" class="w-12 h-12 mr-4" src="assets/imageinfografis/jalankabup.png" />
                <div>
                    <p class="text-gray-600">
                        JALAN KABUPATEN (ASPAL / BETON)
                    </p>
                    <p class="text-2xl font-bold text-gray-800">
                        5 KM
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a group of people" class="w-12 h-12 mr-4"
                    src="assets/imageinfografis/jalanprov.png" />
                <div>
                    <p class="text-gray-600">
                        JALAN PROVINSI (ASPAL / BETON)
                    </p>
                    <p class="text-2xl font-bold text-gray-800">
                        5 KM
                    </p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a family" class="w-12 h-12 mr-4" src="assets/imageinfografis/jembatan.png" />
                <div>
                    <p class="text-gray-600">
                        JEMBATAN BESI
                    </p>
                    <p class="text-2xl font-bold text-gray-800">
                        1 BUAH
                    </p>
                </div>
            </div>
        </div>






        <h2 class="text-2xl font-bold text-blue-800 mt-4">
            Prasarana Air Bersih
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a group of people" class="w-12 h-12 mr-4"
                    src="assets/imageinfografis/airbersih.png" />
                <div>
                    <p class="text-gray-600">
                        PENGOLAHAN AIR BERSIH </p>
                    <p class="text-2xl font-bold text-gray-800">
                        4 BUAH
                    </p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a family" class="w-12 h-12 mr-4" src="assets/imageinfografis/sumurgali.png" />
                <div>
                    <p class="text-gray-600">
                        SUMUR GALI
                    </p>
                    <p class="text-2xl font-bold text-gray-800">
                        86 BUAH
                    </p>
                </div>
            </div>
        </div>

        <h2 class="text-2xl font-bold text-blue-800 mt-4">
            Prasarana Sanitasi dan Irigasi
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a group of people" class="w-12 h-12 mr-4" src="assets/imageinfografis/mck.png" />
                <div>
                    <p class="text-gray-600">
                        MCK UMUM
                    </p>
                    <p class="text-2xl font-bold text-gray-800">
                        2 BUAH
                    </p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a family" class="w-12 h-12 mr-4" src="assets/imageinfografis/jamban.png" />
                <div>
                    <p class="text-gray-600">
                        JAMBAN KELUARGA </p>
                    <p class="text-2xl font-bold text-gray-800">
                        741 BUAH
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a group of people" class="w-12 h-12 mr-4"
                    src="assets/imageinfografis/saluran drainase.png" />
                <div>
                    <p class="text-gray-600">
                        SALURAN DRAINASE </p>
                    <p class="text-2xl font-bold text-gray-800">
                        4000 METER
                    </p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a family" class="w-12 h-12 mr-4" src="assets/imageinfografis/pintu air.png" />
                <div>
                    <p class="text-gray-600">
                        PINTU AIR
                    </p>
                    <p class="text-2xl font-bold text-gray-800">
                        5 BUAH
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-center">
                <img alt="Illustration of a group of people" class="w-12 h-12 mr-4"
                    src="assets/imageinfografis/saluran irigasi.png" />
                <div>
                    <p class="text-gray-600">
                        SALURAN IRIGASI</p>
                    <p class="text-2xl font-bold text-gray-800">
                        3500 METER
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
