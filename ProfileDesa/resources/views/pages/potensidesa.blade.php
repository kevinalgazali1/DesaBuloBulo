@extends('main')

@section('content')
    <section class="relative">
        <img alt="Nature Cottage" class="w-full h-96 object-cover" height="600" src="images/potensii.jpg" width="1920" />
        <div
            class="absolute inset-0 bg-black bg-opacity-60 flex flex-col justify-center items-center text-center text-white p-6">
            <h1
                class="text-4xl md:text-5xl text-[#f4a222] text-shadow font-bold transition-transform transform hover:scale-105">
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


    <section class="container mx-auto py-16 bg-[#10442c] text-white">
        <div class="container mx-auto px-6 md:px-12 lg:px-24">
            <div class="flex items-center justify-center mb-8">
                <div class="flex items-center mb-1">
                    <div class="w-1 bg-blue-500 h-12 mr-4"></div>
                    <h1 class="text-3xl font-bold text-[#f4a222] text-shadow">
                        Potensi Kebudayaan
                    </h1>
                </div>

                <style>
                    .text-shadow {
                        text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
                        /* Mengatur bayangan teks */
                    }
                </style>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                <div class="relative">
                    <div class="border-4 border-[#0c4424] overflow-hidden rounded-lg">
                        <img alt="Air Purifying plant leaves" class="w-full h-full object-cover" height="400"
                            src="imagespotensidesa/makamsampul.jpg" width="600" />
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-50 p-6 flex flex-col justify-between">
                        <div>
                            <h2 class="text-3xl font-bold text-white">
                                Makam Prasejarah
                            </h2>
                            <p class="text-white mt-2">
                                Para Leluhur To'do Bangkalaloe
                            </p>
                        </div>
                        <!-- <div class="self-end">
                            <button class="bg-white text-black rounded-full p-2">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div> -->
                    </div>
                </div>
                <div class="relative">
                    <div class="border-4 border-[#0c4424] overflow-hidden rounded-lg">
                        <img alt="Low Light Tolerant plant leaves" class="w-full h-full object-cover" height="400"
                            src="imagespotensidesa/rumahsampul.jpg" width="600" />
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-50 p-6 flex flex-col justify-between">
                        <div>
                            <h2 class="text-3xl font-bold text-white">
                                Balla' Lompoa
                            </h2>
                            <p class="text-white mt-2">
                                Rumah Adat Desa
                            </p>
                        </div>
                        <!-- <div class="self-end">
                            <button class="bg-white text-black rounded-full p-2">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div> -->
                    </div>
                </div>
                <div class="relative">
                    <div class="border-4 border-[#0c4424] overflow-hidden rounded-lg">
                        <img alt="Another plant leaves" class="w-full h-full object-cover rounded-lg" height="400"
                            src="imagespotensidesa/sejarahsampul.jpg" width="600" />
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-50 p-6 flex flex-col justify-between">
                        <div>
                            <h2 class="text-3xl font-bold text-white">
                                Sejarah To'do Bangkalaloe
                            </h2>
                            <p class="text-white mt-2">
                                Sejarah Desa Bangkalaloe
                            </p>
                        </div>
                        <!-- <div class="self-end">
                            <button class="bg-white text-black rounded-full p-2">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div> -->
                    </div>
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
                            Makam Prasejarah
                        </h1>
                    </div>

                    <p class="text-gray-800 text-lg mb-4 leading-relaxed text-justify">
                        Kompleks Makam Kuno Joko meruoakan situs purbakala dari zaman megalitikum atau zaman batu besar.
                        Tempat pemakaman para Toddo Bangkalaloe dan keluarganya yang kini menjadi cagar budaya. Makam ini
                        terletak di Dusun Joko, Desa Bangkalaloe
                    </p>

                    <p class="text-gray-800 text-lg mb-4 leading-relaxed text-justify">

                    </p>

                </div>

                <div class="md:w-1/2 grid grid-cols-2 gap-2 p-2">
                    <img alt="A beautiful waterfall in a lush green forest"
                        class="w-full h-full object-cover cursor-pointer transition-transform transform hover:scale-105 rounded-lg"
                        height="200" onclick="openModal(this.src)" src="imagespotensidesa/makam1.jpg"
                        width="300" />
                    <img alt="A beautiful waterfall in a lush green forest"
                        class="w-full h-full object-cover cursor-pointer transition-transform transform hover:scale-105 rounded-lg"
                        height="200" onclick="openModal(this.src)" src="imagespotensidesa/makam2.jpg"
                        width="300" />
                    <img alt="A beautiful waterfall in a lush green forest"
                        class="w-full h-full object-cover cursor-pointer transition-transform transform hover:scale-105 rounded-lg"
                        height="200" onclick="openModal(this.src)" src="imagespotensidesa/makam3.jpg"
                        width="300" />
                    <img alt="A beautiful waterfall in a lush green forest"
                        class="w-full h-full object-cover cursor-pointer transition-transform transform hover:scale-105 rounded-lg"
                        height="200" onclick="openModal(this.src)" src="imagespotensidesa/makam4.jpg"
                        width="300" />
                    <img alt="A beautiful waterfall in a lush green forest"
                        class="w-full h-full object-cover cursor-pointer transition-transform transform hover:scale-105 rounded-lg"
                        height="200" onclick="openModal(this.src)" src="imagespotensidesa/makam5.jpg"
                        width="300" />
                    <img alt="A beautiful waterfall in a lush green forest"
                        class="w-full h-full object-cover cursor-pointer transition-transform transform hover:scale-105 rounded-lg"
                        height="200" onclick="openModal(this.src)" src="imagespotensidesa/makam6.jpg"
                        width="300" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-200">
        <div class="container mx-auto p-4">
            <div class="flex flex-col md:flex-row items-center bg-gray-300 rounded-lg shadow-lg overflow-hidden">
                <div class="md:w-1/2 grid grid-cols-2 gap-2 p-2">
                    <img alt="A beautiful waterfall in a lush green forest"
                        class="w-full h-full object-cover cursor-pointer transition-transform transform hover:scale-105 rounded-lg"
                        height="200" onclick="openModal(this.src)" src="imagespotensidesa/rumah1.jpg"
                        width="300" />
                    <img alt="A beautiful waterfall in a lush green forest"
                        class="w-full h-full object-cover cursor-pointer transition-transform transform hover:scale-105 rounded-lg"
                        height="200" onclick="openModal(this.src)" src="imagespotensidesa/rumah2.jpg"
                        width="300" />
                    <img alt="A beautiful waterfall in a lush green forest"
                        class="w-full h-full object-cover cursor-pointer transition-transform transform hover:scale-105 rounded-lg"
                        height="200" onclick="openModal(this.src)" src="imagespotensidesa/rumah3.jpg"
                        width="300" />
                    <img alt="A beautiful waterfall in a lush green forest"
                        class="w-full h-full object-cover cursor-pointer transition-transform transform hover:scale-105 rounded-lg"
                        height="200" onclick="openModal(this.src)" src="imagespotensidesa/rumah4.jpg"
                        width="300" />
                    <img alt="A beautiful waterfall in a lush green forest"
                        class="w-full h-full object-cover cursor-pointer transition-transform transform hover:scale-105 rounded-lg"
                        height="200" onclick="openModal(this.src)" src="imagespotensidesa/rumah5.jpg"
                        width="300" />
                    <img alt="A beautiful waterfall in a lush green forest"
                        class="w-full h-full object-cover cursor-pointer transition-transform transform hover:scale-105 rounded-lg"
                        height="200" onclick="openModal(this.src)" src="imagespotensidesa/rumah6.jpg"
                        width="300" />
                </div>
                <div class="md:w-1/2 p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-1 bg-blue-500 h-12 mr-4 rounded-lg">
                        </div>
                        <h1 class="text-4xl font-bold text-gray-800">
                            Balla' Lompoa
                        </h1>
                    </div>

                    <p class="text-gray-800 text-lg mb-4 leading-relaxed text-justify">
                        .Balla' Lompoa adalah rumah peningglan
                    </p>
                    <p class="text-gray-800 text-lg mb-4 leading-relaxed text-justify">
                        .
                    </p>
                    <p class="text-gray-800 text-lg mb-4 leading-relaxed text-justify">
                        .
                    </p>

                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container mx-auto p-4">
            <div class="flex flex-col md:flex-row items-center bg-gray-300 rounded-lg shadow-lg overflow-hidden">

                <div class="md:w-1/2 p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-1 bg-blue-500 h-12 mr-4 rounded-lg">
                        </div>
                        <h1 class="text-4xl font-bold text-gray-800">
                            Sejarah To'do Bangkalaloe
                        </h1>
                    </div>
                    <p class="text-gray-800 text-lg mb-4 leading-relaxed text-justify">

                    </p>
                    <p class="text-gray-800 text-lg mb-4 leading-relaxed text-justify">
                        To'do Bangkalaloe bermula pada masa Manangga memegang jabatan pemerintahan yang disebut sebagai
                        "ketua" (Daeng Toa)m pada era itu pula hutan mattatakang terjadi perseteruan untuk mendapatkan
                        burung emas oleh empat daerah pionir/To'do Appaka (Layu, Lentu, Batujala, Bangkalaloe).
                    </p>
                    <p class="text-gray-800 text-lg mb-4 leading-relaxed text-justify">
                        .Akhirnya untuk mengatasi kemungkinan-kemungkinan sengketa yang parah, maka ide pembentukan raja /
                        kerajaan binamu dicetuskan. Saat itu lahirnya istilah "Toddo" sebagai dewam adat yang menetaplan dan
                        melantik raja. Manangga adalah Toddo bangkalaloe I. </p>
                </div>
                <div class="md:w-1/2 grid grid-cols-1 md:grid-cols-2 gap-2 p-2">
                    <img alt="A beautiful waterfall in a lush green forest"
                        class="w-full h-full object-cover cursor-pointer transition-transform transform hover:scale-105 rounded-lg"
                        height="800" onclick="openModal(this.src)" src="imagespotensidesa/sejarah1.jpg"
                        width="600" />
                    <div class="grid grid-rows-2 gap-2">
                        <img alt="A beautiful waterfall in a lush green forest"
                            class="w-full h-full object-cover cursor-pointer transition-transform transform hover:scale-105 rounded-lg"
                            height="400" onclick="openModal(this.src)" src="imagespotensidesa/sejarah2.jpg"
                            width="600" />
                        <img alt="A beautiful waterfall in a lush green forest"
                            class="w-full h-full object-cover cursor-pointer transition-transform transform hover:scale-105 rounded-lg"
                            height="400" onclick="openModal(this.src)" src="imagespotensidesa/sejarah3.jpg"
                            width="600" />
                    </div>
                </div>
            </div>
        </div>
    </section>







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
                        <div class="border-4 border-[#0c4424] overflow-hidden rounded-lg">
                            <img alt="Philodendron plant leaves" class="w-full h-full object-cover rounded-lg"
                                height="400" src="images/padi.jpg" width="600" />
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-50 rounded-lg p-6 flex flex-col justify-between">
                            <div>
                                <h2 class="text-3xl font-bold text-white">
                                    Padi
                                </h2>
                                <p class="text-white mt-2">
                                    Tersebar Di Seluruh Penjuru Desa Bangkalaloe
                                </p>
                            </div>
                            <!-- <div class="self-end">
                                <button class="bg-white text-black rounded-full p-2">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div> -->
                        </div>
                    </div>
                    <div class="relative">
                        <div class="border-4 border-[#0c4424] overflow-hidden rounded-lg">
                            <img alt="Calathea plant leaves" class="w-full h-full object-cover rounded-lg" height="400"
                                src="images/jagung.jpg" width="600" />
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-50 rounded-lg p-6 flex flex-col justify-between">
                            <div>
                                <h2 class="text-3xl font-bold text-white">
                                    Jagung
                                </h2>
                                <p class="text-white mt-2">
                                    Tersebar Di Seluruh Penjuru Desa Bangkalaloe
                                </p>
                            </div>
                            <!-- <div class="self-end">
                                <button class="bg-white text-black rounded-full p-2">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
    </section>



    <section class="container mx-auto py-16 bg-[#10442c] text-white">
        <div class="container mx-auto px-6 md:px-12 lg:px-24">
            <div class="flex items-center justify-center mb-8">
                <div class="flex items-center mb-1">
                    <div class="w-1 bg-blue-500 h-12 mr-4"></div>
                    <h1 class="text-3xl font-bold text-[#f4a222] text-shadow">
                        Komoditas Unggulan Berdasarkan Nilai Ekonomi
                    </h1>
                </div>

                <style>
                    .text-shadow {
                        text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
                        /* Mengatur bayangan teks */
                    }
                </style>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                <div class="relative">
                    <div class="border-4 border-[#0c4424] overflow-hidden rounded-lg">
                        <img alt="Air Purifying plant leaves" class="w-full h-full object-cover" height="400"
                            src="images/bawangmerah.jpg" width="600" />
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-50 p-6 flex flex-col justify-between">
                        <div>
                            <h2 class="text-3xl font-bold text-white">
                                Bawang Merah
                            </h2>
                            <p class="text-white mt-2">
                                Bawang merah adalah salah satu komoditas penting yang banyak digunakan dalam masakan
                                Indonesia.
                            </p>
                        </div>
                        <!-- <div class="self-end">
                            <button class="bg-white text-black rounded-full p-2">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div> -->
                    </div>
                </div>
                <div class="relative">
                    <div class="border-4 border-[#0c4424] overflow-hidden rounded-lg">
                        <img alt="Low Light Tolerant plant leaves" class="w-full h-full object-cover" height="400"
                            src="images/cabeasli.jpg" width="600" />
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-50 p-6 flex flex-col justify-between">
                        <div>
                            <h2 class="text-3xl font-bold text-white">
                                Cabai
                            </h2>
                            <p class="text-white mt-2">
                                Cabai memberikan rasa pedas yang khas dan merupakan bahan utama dalam banyak hidangan.
                            </p>
                        </div>
                        <!-- <div class="self-end">
                            <button class="bg-white text-black rounded-full p-2">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div> -->
                    </div>
                </div>
                <div class="relative">
                    <div class="border-4 border-[#0c4424] overflow-hidden rounded-lg">
                        <img alt="Another plant leaves" class="w-full h-full object-cover rounded-lg" height="400"
                            src="images/lontar.jpg" width="600" />
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-50 p-6 flex flex-col justify-between">
                        <div>
                            <h2 class="text-3xl font-bold text-white">
                                Gula Merah
                            </h2>
                            <p class="text-white mt-2">
                                Gula merah adalah pemanis alami yang sering digunakan dalam berbagai resep tradisional.
                            </p>
                        </div>
                        <!-- <div class="self-end">
                            <button class="bg-white text-black rounded-full p-2">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
