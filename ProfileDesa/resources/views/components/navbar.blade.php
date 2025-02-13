<style>
    /* CSS untuk navbar responsif */
    @media (max-width: 700px) {
        #nav-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background-color: #000957;
            padding: 1rem;
            z-index: 1000;
        }

        #nav-menu.active {
            display: block;
        }

        #nav-menu ul {
            flex-direction: column;
            gap: 0.5rem;
        }

        #nav-menu ul li {
            width: 100%;
        }

        #nav-menu ul li a {
            display: block;
            padding: 0.5rem 1rem;
        }
    }

    /* Tambahkan transisi untuk efek halus */
    .nav-link {
        transition: color 0.3s ease;
    }

    /* Warna teks saat aktif */
    .nav-link.active {
        color: #f4a222;
        font-weight: bold;
    }

    .hover-zoom:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease-in-out;
    }
</style>

<header
    class="fixed top-0 left-0 right-0 bg-[#000957] p-2 flex items-center z-50 shadow-lg rounded-b-xl transition-all duration-300">
    <div class="container mx-auto flex items-center ml-4">
        <div class="flex items-center">
            <img alt="Logo of bulobulo"
                class="h-12 w-12 mr-4 rounded-full shadow-md"
                height="70" src="assets/logokab.png" width="70" />
            <div>
                <h1 class="text-[#FFEB00] text-xl font-bold tracking-wider">Desa Bulo Bulo</h1>
                <p class="text-white text-sm">Kabupaten Bulukumba</p>
            </div>
        </div>
        <!-- Tambahkan ikon hamburger di sini -->
        <button id="hamburger" class="md:hidden text-white text-2xl ml-auto">
            <i class="fas fa-bars"></i>
        </button>
        <nav id="nav-menu" class="ml-auto hidden md:block">
            <ul class="flex space-x-4 text-white">
                <li class="group relative">
                    <a class="relative z-10 font-bold nav-link px-3 py-2 
                        group-hover:text-white 
                        transition-all duration-300"
                        href={{ route('beranda') }}>
                        Beranda
                        <span
                            class="absolute inset-0 bg-white bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10 rounded-lg"></span>
                    </a>
                </li>
                <li class="group relative">
                    <a class="relative z-10 font-bold nav-link px-3 py-2 
                        group-hover:text-white 
                        transition-all duration-300"
                        href={{ route('profiledesa') }}>
                        Profile Desa
                        <span
                            class="absolute inset-0 bg-white bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10 rounded-lg"></span>
                    </a>
                </li>
                <li class="group relative">
                    <a class="relative z-10 font-bold nav-link px-3 py-2 
                        group-hover:text-white 
                        transition-all duration-300"
                        href={{ route('infografis') }}>
                        Infografis
                        <span
                            class="absolute inset- 0 bg-white bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10 rounded-lg"></span>
                    </a>
                </li>
                <li class="group relative">
                    <a class="relative z-10 font-bold nav-link px-3 py-2 
                        group-hover:text-white 
                        transition-all duration-300"
                        href={{ route('potensidesa') }}>
                        Potensi Desa
                        <span
                            class="absolute inset-0 bg-white bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10 rounded-lg"></span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('nav-menu');

        hamburger.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });

        // Tutup menu saat mengklik di luar menu
        document.addEventListener('click', function(event) {
            if (!hamburger.contains(event.target) && !navMenu.contains(event.target)) {
                navMenu.classList.remove('active');
            }
        });
    });
</script>
