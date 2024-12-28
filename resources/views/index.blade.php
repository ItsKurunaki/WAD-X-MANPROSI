@include('layout.navbar')
 
 <body>
    <div id="loading">
        <div class="spinner"></div>
    </div>
    <div id="map" style="width: 100%; height: 500px;"></div>

    <div class="Gempabumiterkini">
        <h1>GEMPA BUMI TERKINI</h1>  
        <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ url('lengkap')}}'">Selengkapnya</button>
    </div>
    <div class="earthquake-container">
        <?php
        $data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.xml") or die ("Gagal ambil!");
        ?>
        <div class="container-fluid px-4">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-sm" style="font-size: 1.1em;">
                    <thead>
                        <tr>
                            <th style="width: 5%; padding: 15px;">No</th>
                            <th style="width: 10%; padding: 15px;">Tanggal</th>
                            <th style="width: 10%; padding: 15px;">Waktu</th>
                            <th style="width: 10%; padding: 15px;">Magnitudo</th>
                            <th style="width: 15%; padding: 15px;">Kedalaman</th>
                            <th style="width: 35%; padding: 15px;">Lokasi</th>
                            <th style="width: 15%; padding: 15px;">Potensi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach($data->gempa as $gempaM5) {
                            if ($i <= 8) {
                                echo "<tr>";
                                echo "<td>" . $i . "</td>";
                                echo "<td>" . $gempaM5->Tanggal . "</td>";
                                echo "<td>" . $gempaM5->Jam . "</td>";
                                echo "<td>" . $gempaM5->Magnitude . "</td>";
                                echo "<td>" . $gempaM5->Kedalaman . "</td>";
                                echo "<td>" . $gempaM5->Wilayah . "</td>";
                                echo "<td>" . $gempaM5->Potensi . "</td>";
                                echo "</tr>";
                                $i++;
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-FsWuFftHB59nnGqwwPfyF2TlA42bRYzKHwoBbEpoXKl0mg44qxRABhvFMqAfhJfD" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        const map = L.map('map').setView([-2.5489, 118.0149], 5);
        
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        fetch('https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.json')
            .then(response => response.json())
            .then(data => {
                const earthquakes = data.Infogempa.gempa;
                
                earthquakes.forEach(quake => {
                    const coords = quake.Coordinates.split(',');
                    const lat = parseFloat(coords[0]);
                    const lng = parseFloat(coords[1]);
                    
                    L.marker([lat, lng])
                        .bindPopup(`
                            <strong>Magnitude: ${quake.Magnitude}</strong><br>
                            Kedalaman: ${quake.Kedalaman}<br>
                            Wilayah: ${quake.Wilayah}<br>
                            Waktu: ${quake.DateTime}<br>
                            Tanggal: ${quake.Tanggal}<br>
                            Potensi: ${quake.Potensi}
                        `)
                        .addTo(map);
                });
            })
            .catch(error => console.error('Error fetching earthquake data:', error));
    </script>
    <script src="{{ asset('js/loading.js') }}"></script>
    <a href="{{ url('form') }}" class="floating-call-btn">
        <i class="fas fa-phone"></i>
        <img src="{{ asset('IMG/massage.png') }}" alt="Chat Icon" style="width: 30px; height: 30px;">
    </a>
</body>

