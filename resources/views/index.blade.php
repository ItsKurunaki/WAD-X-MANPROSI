<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loading.css') }}">
    <title>Siaga+</title>
    <style>
 
    </style>
</head>
<body>
    <div id="loading">
        <div class="spinner"></div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand-logo" href="{{ url('index') }}">
                <img src="{{ asset('IMG/SIAGA PLUS.png') }}" alt="SIAGA PLUS" width="118" height="60">
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

    <div id="map" style="width: 100%; height: 500px;"></div>

    <div class="Gempabumiterkini">
        <h1>GEMPA BUMI TERKINI</h1>  
        <button type="button" class="btn btn-secondary">Selengkapnya</button>
    </div>
    <div class="earthquake-container">
        <?php
        $data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.xml") or die ("Gagal ambil!");
        ?>
        <div class="container-fluid px-4">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-sm">
                    <thead>
                        <tr>
                            <th style="width: 5%">No</th>
                            <th style="width: 10%">Tanggal</th>
                            <th style="width: 10%">Waktu</th>
                            <th style="width: 10%">Magnitudo</th>
                            <th style="width: 15%">Kedalaman</th>
                            <th style="width: 35%">Lokasi</th>
                            <th style="width: 15%">Potensi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach($data->gempa as $gempaM5) {
                            if ($i <= 15) {
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

        fetch('https://data.bmkg.go.id/DataMKG/TEWS/gempadirasakan.json')
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
                            Waktu: ${quake.Waktu}
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
</html>
