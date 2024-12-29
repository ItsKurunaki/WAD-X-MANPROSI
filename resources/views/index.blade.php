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
        @php
        try {
            $data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.xml");
        } catch (\Exception $e) {
            $data = false;
        }
        @endphp

        @if($data)
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
                            @php $i = 1; @endphp
                            @foreach($data->gempa as $gempaM5)
                                @if($i <= 8)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $gempaM5->Tanggal }}</td>
                                        <td>{{ $gempaM5->Jam }}</td>
                                        <td>{{ $gempaM5->Magnitude }}</td>
                                        <td>{{ $gempaM5->Kedalaman }}</td>
                                        <td>{{ $gempaM5->Wilayah }}</td>
                                        <td>{{ $gempaM5->Potensi }}</td>
                                    </tr>
                                    @php $i++; @endphp
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="alert alert-warning">
                Gagal mengambil data gempa. Silakan coba lagi nanti.
            </div>
        @endif
    </div>

    <!-- News Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-5 text-start" style="font-size: 2rem; font-weight: 700;">Berita Terkini</h1>
            </div>
            @if(isset($news) && $news->count() > 0)
                @foreach($news as $item)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            @if($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->title }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{{ Str::limit(strip_tags($item->content), 100) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">{{ $item->published_at->format('d M Y') }}</small>
                                    <a href="#" class="btn btn-danger btn-sm">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $news->links() }}
                </div>
            @else
                <div class="col-12">
                    <div class="alert alert-info">
                        Belum ada berita tersedia.
                    </div>
                </div>
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
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

    @include('layout.footer')

</body>