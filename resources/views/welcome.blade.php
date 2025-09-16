<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Raendhana Ilmi Vadhiasih</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f3f4f6;
            color: #1f2937;
            overflow-x: hidden;
        }

        .bg-custom-yellow {
            background-color: #FFF9CB;
        }

        .btn-gradient {
            background-image: linear-gradient(to right, #FC8DBA, #FFF9CB);
        }

        .text-pink-custom {
            color: #ED6495;
        }

        .text-pink-darker {
            color: #FC8DBA;
        }

        .shadow-custom-pink {
            box-shadow: 0 10px 15px -3px rgba(252, 141, 186, 0.3), 0 4px 6px -2px rgba(252, 141, 186, 0.1);
        }

        /* Animasi */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .animate-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .fade-in {
            animation: fadeIn 1.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
</head>

<body class="min-h-screen bg-custom-yellow flex flex-col">

    <header class="fixed top-0 left-0 w-full z-50 p-4 ">
        <div class="max-w-5xl mx-auto flex justify-between items-center">
            <x-navbar />
        </div>
    </header>

    <main class="flex flex-col items-center justify-center flex-grow p-6 md:p-10 mt-44 text-center fade-in">
        <p class="text-gray-700 font-bold text-base sm:text-lg md:text-3xl">
            Hello, I am
        </p>

        <h1 class="text-center font-bold text-pink-custom leading-tight mt-2 text-4xl sm:text-5xl md:text-6xl lg:text-6xl xl:text-7xl max-w-full">
            RAENDHANA ILMI VADHIASIH
        </h1>

        <p class="text-lg sm:text-xl md:text-3xl font-semibold text-gray-800 mt-2">
            WEB DEVELOPER | QUALITY ASSURANCE & UI/UX
        </p>

        <p class="text-gray-700 font-medium text-sm sm:text-base md:text-2xl mt-2">
            Ensuring stable, user-friendly, and high-quality digital products.
        </p>

        <button class="btn-gradient font-bold py-2 px-6 sm:py-3 sm:px-8 rounded-full mt-4 shadow-md hover:opacity-90 transition-opacity duration-300 text-sm sm:text-base">
            More About Me
        </button>

        <div class="flex items-center justify-center mt-6 space-x-6">
            <a href="https://github.com/username" target="_blank"
                class="text-gray-800 hover:text-pink-custom transition-colors duration-300">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.438 9.8 8.205 11.387.6.113.82-.26.82-.577 0-.285-.01-1.04-.015-2.04-3.338.725-4.042-1.613-4.042-1.613-.546-1.387-1.333-1.756-1.333-1.756-1.09-.745.082-.729.082-.729 1.205.084 1.84 1.238 1.84 1.238 1.07 1.835 2.807 1.305 3.492.998.108-.775.418-1.305.76-1.605-2.665-.305-5.466-1.332-5.466-5.932 0-1.31.468-2.38 1.236-3.22-.124-.303-.536-1.524.117-3.176 0 0 1.008-.322 3.3 1.23a11.52 11.52 0 013.003-.404c1.02.005 2.045.137 3.003.404 2.29-1.552 3.296-1.23 3.296-1.23.656 1.652.244 2.873.12 3.176.77.84 1.234 1.91 1.234 3.22 0 4.61-2.803 5.624-5.475 5.922.43.372.814 1.104.814 2.227 0 1.606-.015 2.898-.015 3.293 0 .32.216.694.825.576C20.565 21.796 24 17.298 24 12c0-6.63-5.37-12-12-12z" />
                </svg>
            </a>

            <a href="https://www.linkedin.com/in/raendhana-ilmi-vadhiasih" target="_blank"
                class="text-gray-800 hover:text-pink-custom transition-colors duration-300">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M20.447 20.452H17.3V14.9c0-1.314-.026-3.003-1.828-3.003-1.829 0-2.11 1.43-2.11 2.906v5.649h-3.147V9h3.021v1.561h.043c.421-.797 1.449-1.637 2.983-1.637 3.189 0 3.777 2.099 3.777 4.823v6.704zM5.337 7.433a1.833 1.833 0 11-.003-3.667 1.833 1.833 0 01.003 3.667zM6.963 20.452H3.71V9h3.253v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.728v20.543C0 23.226.792 24 1.771 24h20.451C23.205 24 24 23.226 24 22.271V1.728C24 .774 23.205 0 22.225 0z" />
                </svg>
            </a>
        </div>
    </main>

    <section id="about" class="container mx-auto px-10 py-12 md:py-48 animate-on-scroll">
        <h2 class="text-center text-3xl sm:text-5xl font-bold text-gray-800 mb-12 animate-on-scroll">About Me</h2>

        <div class="flex flex-col md:flex-row items-center md:items-start justify-center gap-10 lg:gap-20">
            <div
                class="relative w-64 h-64 sm:w-72 sm:h-72 lg:w-80 lg:h-80 rounded-2xl overflow-hidden shadow-lg transform rotate-6 hover:rotate-0 transition-transform duration-300 bg-pink-300 p-2 animate-on-scroll">
                <div class="absolute inset-0 bg-gradient-to-br from-pink-300 to-yellow-200 opacity-75 rounded-2xl z-0">
                </div>
                <img src="{{asset('image/ilmi-cans.png')}}" alt="Raendhana Ilmi"
                    class="relative z-10 w-full h-full object-cover rounded-xl border-4 border-white shadow-md">
            </div>

            <div class="max-w-xl text-center md:text-left animate-on-scroll">
                <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Who Am I</h3>
                <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-6">
                    Saya Ilmi, lulusan D3 Rekayasa Perangkat Lunak Aplikasi dengan pengalaman web development dan UI/UX.
                    Saat ini saya fokus pada Quality Assurance dengan menekankan pengujian fungsional, usability, dan
                    regresi. Saya terbiasa menyusun test case, melakukan UAT, serta mendokumentasikan bug report untuk
                    meningkatkan kualitas aplikasi. Tujuan saya adalah memastikan produk digital berjalan stabil, mudah
                    digunakan, dan sesuai kebutuhan pengguna.
                </p>

                <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Personal Info</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-3 text-gray-700 text-base md:text-lg">
                    <div>
                        <p><strong class="font-semibold">Education :</strong> Telkom University, Rekayasa Perangkat
                            Lunak Aplikasi</p>
                        <p><strong class="font-semibold">GPA :</strong> 3.77</p>
                    </div>
                    <div>
                        <p><strong class="font-semibold">Email :</strong> raendhana@gmail.com</p>
                        <p><strong class="font-semibold">Phone :</strong> 089665908930</p>
                    </div>
                </div>

                <button
                    class="btn-gradient font-bold py-3 px-8 rounded-full mt-8 shadow-custom-pink hover:opacity-90 transition-opacity duration-300 flex items-center gap-2 mx-auto md:ml-0">
                    Download CV
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <section id="skills" class="container mx-auto px-6 py-24 md:py-16 animate-on-scroll">
        <h2 class="text-center text-3xl sm:text-5xl font-bold text-gray-800 mb-12 animate-on-scroll">Skills</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 text-center">
            <div class="p-6 bg-white rounded-xl shadow-md transform hover:scale-105 transition-transform duration-300 hover:shadow-lg animate-on-scroll">
                <h3 class="font-bold text-lg mb-2 text-pink-custom">Testing</h3>
                <p class="text-gray-600">Functional, Usability, Regression, UAT</p>
            </div>
            <div class="p-6 bg-white rounded-xl shadow-md transform hover:scale-105 transition-transform duration-300 hover:shadow-lg animate-on-scroll">
                <h3 class="font-bold text-lg mb-2 text-pink-custom">Test Documentation</h3>
                <p class="text-gray-600">Test Case, Test Scenario, Bug Report</p>
            </div>
            <div class="p-6 bg-white rounded-xl shadow-md transform hover:scale-105 transition-transform duration-300 hover:shadow-lg animate-on-scroll">
                <h3 class="font-bold text-lg mb-2 text-pink-custom">Tools</h3>
                <p class="text-gray-600">Excel, Trello, Jira, Git</p>
            </div>
            <div class="p-6 bg-white rounded-xl shadow-md transform hover:scale-105 transition-transform duration-300 hover:shadow-lg animate-on-scroll">
                <h3 class="font-bold text-lg mb-2 text-pink-custom">Development</h3>
                <p class="text-gray-600">Laravel, Bootstrap, Tailwind</p>
            </div>
            <div class="p-6 bg-white rounded-xl shadow-md transform hover:scale-105 transition-transform duration-300 hover:shadow-lg animate-on-scroll">
                <h3 class="font-bold text-lg mb-2 text-pink-custom">Design</h3>
                <p class="text-gray-600">Figma (Wireframe, Prototype, Design System)</p>
            </div>
        </div>
    </section>

    <section id="projects" class="container mx-auto px-6 py-24 md:py-16 animate-on-scroll">
        <h2 class="text-center text-3xl sm:text-5xl font-bold text-gray-800 mb-12 animate-on-scroll">PROJECT EXPERIENCE</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 justify-items-center">
            <div class="w-full max-w-xs bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 animate-on-scroll">
                <img src="{{ asset('image/PORTOFOLIO1.png')}}" alt="Aplikasi Web Klinik Lunox"
                    class="rounded-t-xl w-full h-48 object-cover object-top">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Aplikasi Web Klinik Lunox</h3>
                    <p class="text-sm text-gray-600 mb-4">
                        Peran: Menyusun test case, melakukan pengujian CRUD data pasien, validasi form appointment, serta
                        menulis bug report untuk meningkatkan kualitas aplikasi.
                    </p>
                </div>
            </div>

            <div class="w-full max-w-xs bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 animate-on-scroll">
                <img src="{{ asset('image/PORTOFOLIO1.png')}}" alt="Aplikasi Web SMILE"
                    class="rounded-t-xl w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Aplikasi Web SMILE</h3>
                    <p class="text-sm text-gray-600 mb-4">
                        Peran: Menguji fitur autentikasi, validasi input, serta melakukan UAT bersama end-user untuk
                        memastikan kemudahan penggunaan aplikasi.
                    </p>
                </div>
            </div>

            <div class="w-full max-w-xs bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 animate-on-scroll">
                <img src="{{ asset('image/PORTOFOLIO3.png')}}" alt="Dashboard Carbonstock"
                    class="rounded-t-xl w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Dashboard Monitoring Carbonstock</h3>
                    <p class="text-sm text-gray-600 mb-4">
                        Peran: Melakukan pengujian fungsional dan integrasi, validasi data prediksi Machine Learning,
                        serta pelaporan bug selama proses pengembangan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="certificates" class="container mx-auto px-6 py-24 md:py-16 animate-on-scroll">
        <h2 class="text-center text-3xl sm:text-5xl font-bold text-gray-800 mb-12 animate-on-scroll">CERTIFICATES</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 justify-items-center">
            <img src="{{ asset('image/SERTIFIKAT_BOOTCAMP.jpg') }}" alt="Sertifikat UI/UX Bootcamp"
                class="w-full max-w-xs rounded-xl shadow-lg hover:scale-105 transition-transform duration-300 animate-on-scroll">
            <img src="{{ asset('image/sertif_ABGD.jpg') }}" alt="Sertifikat Asisten Praktikum"
                class="w-full max-w-xs rounded-xl shadow-lg hover:scale-105 transition-transform duration-300 animate-on-scroll">
            <img src="{{ asset('image/Sertif_magang.jpg') }}" alt="Sertifikat Magang"
                class="w-full max-w-xs rounded-xl shadow-lg hover:scale-105 transition-transform duration-300 animate-on-scroll">
            <img src="{{ asset('image/sertifikat_HKI.jpg') }}" alt="Sertifikat Hak Cipta"
                class="w-full max-w-xs rounded-xl shadow-lg hover:scale-105 transition-transform duration-300 animate-on-scroll">
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            const elements = document.querySelectorAll('.animate-on-scroll');
            elements.forEach(el => observer.observe(el));
        });
    </script>

</body>

</html>