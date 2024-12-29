@include('layout.navbar')


<body>
    <div id="loading">
        <div class="spinner"></div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <!-- Kolom untuk Data Gempa -->
            <div class="col-md-6" style="text-align: left; padding-left: 10px;">
                <?php
                // Kode Baris PHP untuk Mengolah Data autogempa.xml
                $data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml") or die("Gagal mengakses!");
                echo "<h1>Gempa Bumi Terbaru</h1>";
                echo "<p><strong>Tanggal:</strong> " . $data->gempa->Tanggal . "</p>";
                echo "<p><strong>Jam:</strong> " .  $data->gempa->Jam . "</p>";
                echo "<p><strong>DateTime:</strong> " . $data->gempa->DateTime . "</p>";
                echo "<p><strong>Magnitudo:</strong> " . $data->gempa->Magnitude . "</p>";
                echo "<p><strong>Kedalaman:</strong> " . $data->gempa->Kedalaman . "</p>";
                echo "<p><strong>Koordinat:</strong> " . $data->gempa->point->coordinates . "</p>";
                echo "<p><strong>Lintang:</strong> " . $data->gempa->Lintang . "</p>";
                echo "<p><strong>Bujur:</strong> " . $data->gempa->Bujur . "</p>";
                echo "<p><strong>Lokasi:</strong> " . $data->gempa->Wilayah . "</p>";
                echo "<p><strong>Potensi:</strong> " . $data->gempa->Potensi . "</p>";
                echo "<p><strong>Dirasakan:</strong> " . $data->gempa->Dirasakan . "</p>";
                ?>
            </div>
            <!-- Kolom untuk Shakemaps -->
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <?php
                echo "<img src=\"https://data.bmkg.go.id/DataMKG/TEWS/" . $data->gempa->Shakemap . "\" alt=\"Shakemaps\" class=\"img-fluid rounded shadow\" style=\"width: 100%; height: 100%; object-fit: contain;\">";
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-FsWuFftHB59nnGqwwPfyF2TlA42bRYzKHwoBbEpoXKl0mg44qxRABhvFMqAfhJfD" crossorigin="anonymous"></script>
    <script src="{{ asset('js/loading.js') }}"></script>
    
    <a href="{{ url('form') }}" class="floating-call-btn">
        <i class="fas fa-phone"></i>
        <img src="{{ asset('IMG/massage.png') }}" alt="Chat Icon" style="width: 30px; height: 30px;">
    </a>

    @include('layout.footer')

</body>

    