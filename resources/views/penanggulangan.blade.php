<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/panduan.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loading.css') }}">
    <link rel="stylesheet" href="{{ asset('css/penanggulangan.css') }}">
    <title>Gempa</title>
</head>
<body>
    <div id="loading">
        <div class="spinner"></div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand-logo" href="{{ url('index') }}">
                <img src="/IMG/SIAGA PLUS.png" alt="SIAGA PLUS" width="118" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ url('gempa') }}">Gempa</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('panduan') }}">Panduan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('penanggulangan') }}">Penanggulangan</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="Body">
        <div class="header-container">
            <h1>Penanggulangan Gempabumi</h1>
        </div>
        <p class="description-box">
            Gempabumi merupakan fenomena alam yang terjadi akibat pelepasan energi secara tiba-tiba di dalam bumi yang menyebabkan getaran 
            atau guncangan di permukaan tanah. Gempabumi bisa terjadi kapan saja tanpa peringatan, sehingga memiliki potensi menimbulkan 
            kerugian material, kerusakan infrastruktur, hingga korban jiwa. Karena sifatnya yang tidak dapat diprediksi, penting bagi 
            masyarakat untuk memahami dan mempersiapkan diri dalam menghadapi kemungkinan terjadinya gempabumi. 
            Persiapan yang baik tidak hanya membantu meminimalkan dampak kerugian, tetapi juga meningkatkan kemampuan masyarakat untuk merespons situasi dengan cepat dan tepat. 
            Antisipasi gempabumi melibatkan berbagai langkah yang dapat dilakukan sebelum, saat, dan setelah kejadian untuk melindungi keselamatan diri, keluarga, dan komunitas. 
            Berikut adalah informasi rinci mengenai antisipasi gempabumi:
        </p>

        <!-- Add the new dropdown sections -->
        <div class="accordion" id="penanggulanganAccordion">
            <!-- Sebelum Gempa Section -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="sebelumGempaHeading">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#sebelumGempaCollapse" aria-expanded="true" aria-controls="sebelumGempaCollapse">
                        Penanggulangan Sebelum Terjadi Gempa
                    </button>
                </h2>
                <div id="sebelumGempaCollapse" class="accordion-collapse collapse show" aria-labelledby="sebelumGempaHeading">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <h4>Menganali apa itu gempa bumi</h4>
                                <p>Mengenali apa yang disebut gempabumi;Pastikan bahwa struktur dan letak rumah Anda dapat terhindar dari bahaya yang disebabkan oleh gempabumi (longsor, liquefaction dll);Mengevaluasi dan merenovasi ulang struktur bangunan Anda agar terhindar dari bahaya gempabumi.</p>
                            </div>
                            <div class="col-12 mb-4">
                                <h4>Kenali lingkungan tempat anda bekerja</h4>
                                <p>Perhatikan letak pintu, lift serta tangga darurat, apabila terjadi gempabumi, sudah mengetahui tempat paling aman untuk berlindung;
                                    Belajar melakukan P3K;
                                    Belajar menggunakan alat pemadam kebakaran;
                                    Catat nomor telepon penting yang dapat dihubungi pada saat terjadi gempabumi.</p>
                            </div>
                            <div class="col-12 mb-4">
                                <h4>Persiapan Rutin pada tempat Anda bekerja dan tinggal</h4>
                                <p>Perabotan (lemari, cabinet, dll) diatur menempel pada dinding (dipaku, diikat, dll) untuk menghindari jatuh, roboh, bergeser pada saat terjadi gempabumi.
                                    Simpan bahan yang mudah terbakar pada tempat yang tidak mudah pecah agar terhindar dari kebakaran.
                                    Selalu mematikan air, gas dan listrik apabila tidak sedang digunakan.</p>
                            </div>
                            <div class="col-12 mb-4">
                                <h4>Penyebab celaka yang paling banyak pada saat gempabumi adalah akibat kejatuhan material</h4>
                                <p>Atur benda yang berat sedapat mungkin berada pada bagian bawah Cek kestabilan benda yang tergantung yang dapat jatuh pada saat gempabumi terjadi (misalnya lampu dll).</p>
                            </div>
                            <div class="col-12 mb-4">
                                <h4>Alat yang harus ada di setiap tempat</h4>
                                <p>Kotak P3K;Senter/lampu baterai;Radio;Makanan suplemen dan air.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Saat Gempa Section -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="saatGempaHeading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#saatGempaCollapse" aria-expanded="false" aria-controls="saatGempaCollapse">
                       Penanggulangan Saat Terjadi Gempa
                    </button>
                </h2>
                <div id="saatGempaCollapse" class="accordion-collapse collapse" aria-labelledby="saatGempaHeading">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <h4>Jika Anda berada di dalam bangunan</h4>
                                <p>Lindungi badan dan kepala Anda dari reruntuhan bangunan dengan bersembunyi di bawah meja dll;Cari tempat yang paling aman dari reruntuhan dan goncangan;Lari ke luar apabila masih dapat dilakukan</p>
                            </div>
                            <div class="col-12 mb-4">
                                <h4>Jika berada di luar bangunan atau area terbuka</h4>
                                <p>Menghindari dari bangunan yang ada di sekitar Anda seperti gedung, tiang listrik, pohon, dll Perhatikan tempat Anda berpijak, hindari apabila terjadi rekahan tanah</p>
                            </div>
                            <div class="col-12 mb-4">
                                <h4>Jika Anda sedang mengendarai mobil</h4>
                                <p>Keluar, turun dan menjauh dari mobil hindari jika terjadi pergeseran atau kebakaran;Lakukan point Sebelumnya.</p>
                            </div>
                            <div class="col-12 mb-4">
                                <h4>Jika Anda tinggal atau berada di pantai</h4>
                                <p>Jauhi pantai untuk menghindari bahaya tsunami.</p>
                            </div>
                            <div class="col-12 mb-4">
                                <h4>Jika Anda tinggal di daerah pegunungan</h4>
                                <p>Apabila terjadi gempabumi hindari daerah yang mungkin terjadi longsoran.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Setelah Gempa Section -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="setelahGempaHeading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#setelahGempaCollapse" aria-expanded="false" aria-controls="setelahGempaCollapse">
                        Penanggulangan Setelah Terjadi Gempa
                    </button>
                </h2>
                <div id="setelahGempaCollapse" class="accordion-collapse collapse" aria-labelledby="setelahGempaHeading">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <h4>Jika Anda berada di dalam bangunan</h4>
                                <p>Periksa kondisi diri dan sekitar, waspadai gempa susulan, periksa kebocoran gas dan listrik.</p>
                            </div>
                            <div class="col-12 mb-4">
                                <h4>Periksa lingkungan sekitar Anda</h4>
                                <p>Periksa apabila terjadi kebakaran.Periksa apabila terjadi kebocoran gas.Periksa apabila terjadi hubungan arus pendek listrik.Periksa aliran dan pipa air.Periksa apabila ada hal-hal yang membahayakan (mematikan listrik, tidak menyalakan api dll)</p>
                            </div>
                            <div class="col-12 mb-4">
                                <h4>Jangan mamasuki bangunan yang sudah terkena gempa</h4>
                                <p>Karena kemungkinan masih terdapat reruntuhan.</p>
                            </div>
                            <div class="col-12 mb-4">
                                <h4>Jangan berjalan di daerah sekitar gempa</h4>
                                <p>Kemungkinan terjadi bahaya susulan masih ada.</p>
                            </div>
                            <div class="col-12 mb-4">
                                <h4>Mendengarkan informasi</h4>
                                <p>Dengarkan informasi mengenai gempabumi dari radio (apabila terjadi gempa susulan).Jangan mudah terpancing oleh isu atau berita yang tidak jelas sumbernya.</p>
                            </div>
                            <div class="col-12 mb-4">
                                <h4>Mengisi angket yang diberikan oleh instansi terkait untuk mengetahui seberapa besar kerusakan yang terjadi</h4>
                                <p>Melakukan pengisian</p>
                            </div>
                            <div class="col-12 mb-4">
                                <h4>Jangan panik dan jangan lupa selalu berdo'a kepada Tuhan YME demi keamanan dan keselamatan kita semuanya.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="{{ url('form') }}" class="floating-call-btn">
        <i class="fas fa-phone"></i>
        <img src="{{ asset('IMG/massage.png') }}" alt="Chat Icon" style="width: 30px; height: 30px;">
    </a>
    <!-- Add Bootstrap JS and dependencies before closing body tag -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
