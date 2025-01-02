@include('layout.navbar')

<body>
    <div id="loading">
        <div class="spinner"></div>
    </div>
    <div class="Gempabumiterkini">
        <h1>GEMPA BUMI TERKINI</h1>  
        <select id="sortType" class="form-select" style="width: auto;">
            <option value="default">Default</option>
            <option value="magnitude">Sort by Magnitude</option>
            <option value="depth">Sort by Kedalaman</option>
        </select>
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
    <div class="container-fluid px-4 mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Sebaran Gempa</h5>
                        <select id="chartType" class="form-select" style="width: auto;">
                            <option value="time">Berdasarkan Waktu</option>
                            <option value="region">Berdasarkan Daerah</option>
                        </select>
                    </div>
                    <div class="card-body" style="height: 400px;"> <!-- Added fixed height -->
                        <canvas id="yearlyChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and its dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <!-- Add Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Your chart script -->
    <script>
    document.getElementById('sortType').addEventListener('change', function() {
        const table = document.querySelector('table');
        const tbody = table.querySelector('tbody');
        const rows = Array.from(tbody.querySelectorAll('tr'));
        
        switch(this.value) {
            case 'default':
                // Sort by original order (using the first column - No)
                rows.sort((a, b) => {
                    const noA = parseInt(a.cells[0].textContent);
                    const noB = parseInt(b.cells[0].textContent);
                    return noA - noB;
                });
                break;
            
            case 'magnitude':
                // Sort by magnitude (descending)
                rows.sort((a, b) => {
                    const magnitudeA = parseFloat(a.cells[3].textContent);
                    const magnitudeB = parseFloat(b.cells[3].textContent);
                    return magnitudeB - magnitudeA;
                });
                break;
            
            case 'depth':
                // Sort by depth (ascending)
                rows.sort((a, b) => {
                    // Remove 'km' and convert to number
                    const depthA = parseFloat(a.cells[4].textContent.replace(' km', ''));
                    const depthB = parseFloat(b.cells[4].textContent.replace(' km', ''));
                    return depthA - depthB;
                });
                break;
        }
        
        // Clear and re-append rows
        tbody.innerHTML = '';
        rows.forEach(row => tbody.appendChild(row));
    });

    <?php
    $timeData = [
        '00-03' => 0,
        '04-07' => 0,
        '08-11' => 0,
        '12-15' => 0,
        '16-19' => 0,
        '20-23' => 0
    ];

    $regionData = [];

    foreach($data->gempa as $gempa) {
        // Convert Indonesian date format
        $tanggal = str_replace(
            ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
            ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'],
            $gempa->Tanggal
        );
        
        list($day, $month, $year) = explode(' ', $tanggal);
        
        if ($year == '2024') {
            // Time data processing
            $hour = (int)substr($gempa->Jam, 0, 2);
            if ($hour >= 0 && $hour <= 3) $timeData['00-03']++;
            elseif ($hour >= 4 && $hour <= 7) $timeData['04-07']++;
            elseif ($hour >= 8 && $hour <= 11) $timeData['08-11']++;
            elseif ($hour >= 12 && $hour <= 15) $timeData['12-15']++;
            elseif ($hour >= 16 && $hour <= 19) $timeData['16-19']++;
            else $timeData['20-23']++;

            // Region data processing
            $wilayah = preg_replace('/\s*\([^)]*\)/', '', $gempa->Wilayah);
            if (!isset($regionData[$wilayah])) {
                $regionData[$wilayah] = 0;
            }
            $regionData[$wilayah]++;
        }
    }

    // Sort and limit region data to top 10
    arsort($regionData);
    $regionData = array_slice($regionData, 0, 10, true);
    ?>

    document.addEventListener('DOMContentLoaded', function() {
        const yearlyCtx = document.getElementById('yearlyChart').getContext('2d');
        let currentChart = null;

        const redColors = [
            'rgba(255, 99, 71, 0.8)',    // Tomato Red
            'rgba(255, 0, 0, 0.8)',      // Pure Red
            'rgba(220, 20, 60, 0.8)',    // Crimson
            'rgba(178, 34, 34, 0.8)',    // Fire Brick
            'rgba(139, 0, 0, 0.8)',      // Dark Red
            'rgba(165, 42, 42, 0.8)',    // Brown Red
            'rgba(205, 92, 92, 0.8)',    // Indian Red
            'rgba(240, 128, 128, 0.8)',  // Light Coral
            'rgba(233, 150, 122, 0.8)',  // Dark Salmon
            'rgba(250, 128, 114, 0.8)'   // Salmon
        ];

        const redBorders = redColors.map(color => color.replace('0.8)', '1)'));

        function createTimeChart() {
            return {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode(array_keys($timeData)); ?>,
                    datasets: [{
                        label: 'Jumlah Gempa',
                        data: <?php echo json_encode(array_values($timeData)); ?>,
                        backgroundColor: colors.blue,
                        borderColor: colors.blueBorder,
                        borderWidth: 1,
                        borderRadius: 6,
                        barThickness: 30
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: { 
                                font: { size: 14 },
                                padding: 10
                            }
                        },
                        x: {
                            ticks: { 
                                font: { size: 14 },
                                padding: 10
                            }
                        }
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: 'Distribusi Gempa Berdasarkan Waktu Kejadian Tahun 2024',
                            font: { size: 20, weight: 'bold' },
                            padding: 30
                        },
                        legend: {
                            display: true,
                            labels: {
                                font: { size: 14 }
                            }
                        }
                    }
                }
            };
        }

        function createRegionChart() {
            return {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode(array_keys($regionData)); ?>,
                    datasets: [{
                        label: 'Jumlah Gempa',
                        data: <?php echo json_encode(array_values($regionData)); ?>,
                        backgroundColor: colors.red,
                        borderColor: colors.redBorder,
                        borderWidth: 1,
                        borderRadius: 6,
                        barThickness: 30
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: { 
                                font: { size: 14 },
                                padding: 10
                            }
                        },
                        x: {
                            ticks: { 
                                font: { size: 14 },
                                padding: 10,
                                maxRotation: 45,
                                minRotation: 45
                            }
                        }
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: 'Distribusi Gempa Berdasarkan Wilayah Tahun 2024',
                            font: { size: 20, weight: 'bold' },
                            padding: 30
                        },
                        legend: {
                            display: true,
                            position: 'top',
                            labels: {
                                font: { size: 14 }
                            }
                        }
                    }
                }
            };
        }

        function updateChart(type) {
            if (currentChart) {
                currentChart.destroy();
            }
            currentChart = new Chart(yearlyCtx, type === 'time' ? createTimeChart() : createRegionChart());
        }

        // Initial chart
        updateChart('time');

        // Handle dropdown changes
        document.getElementById('chartType').addEventListener('change', function(e) {
            updateChart(e.target.value);
        });
    });
    </script>

    <!-- Chart Initialization Script -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const yearlyCtx = document.getElementById('yearlyChart').getContext('2d');
        let currentChart = null;

        const colors = {
            red: 'rgba(220, 20, 60, 0.8)',
            redBorder: 'rgba(220, 20, 60, 1)',
            redGradient: yearlyCtx.createLinearGradient(0, 0, 0, 400)
        };

        // Create gradient
        colors.redGradient.addColorStop(0, 'rgba(220, 20, 60, 0.8)');
        colors.redGradient.addColorStop(1, 'rgba(220, 20, 60, 0.2)');

        function createTimeChart() {
            return {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode(array_keys($timeData)); ?>,
                    datasets: [{
                        label: 'Jumlah Gempa',
                        data: <?php echo json_encode(array_values($timeData)); ?>,
                        backgroundColor: colors.redGradient,
                        borderColor: colors.redBorder,
                        borderWidth: 1,
                        borderRadius: 4,
                        barThickness: 35
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: { 
                                stepSize: 1,
                                font: { size: 12 }
                            },
                            title: { 
                                display: true, 
                                text: 'Jumlah Gempa',
                                font: { size: 14, weight: 'bold' }
                            },
                            grid: {
                                color: 'rgba(0, 0, 0, 0.1)'
                            }
                        },
                        x: {
                            title: { 
                                display: true, 
                                text: 'Rentang Waktu (Jam)',
                                font: { size: 14, weight: 'bold' }
                            },
                            ticks: { font: { size: 12 } }
                        }
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: 'Distribusi Gempa Berdasarkan Waktu Kejadian Tahun 2024',
                            font: { size: 16, weight: 'bold' },
                            padding: 20
                        },
                        legend: { display: false }
                    }
                }
            };
        }

        function createRegionChart() {
            return {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode(array_keys($regionData)); ?>,
                    datasets: [{
                        label: 'Jumlah Gempa',
                        data: <?php echo json_encode(array_values($regionData)); ?>,
                        backgroundColor: colors.red,
                        borderColor: colors.redBorder,
                        borderWidth: 1,
                        borderRadius: 4,
                        barThickness: 20
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    indexAxis: 'y',
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true,
                            ticks: { 
                                stepSize: 1,
                                font: { size: 12 }
                            },
                            title: { 
                                display: true, 
                                text: 'Jumlah Gempa',
                                font: { size: 14, weight: 'bold' }
                            },
                            grid: {
                                color: 'rgba(0, 0, 0, 0.1)'
                            }
                        },
                        y: {
                            title: { 
                                display: true, 
                                text: 'Wilayah',
                                font: { size: 14, weight: 'bold' }
                            },
                            ticks: { font: { size: 11 } }
                        }
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: 'Distribusi Gempa Berdasarkan Wilayah Tahun 2024',
                            font: { size: 16, weight: 'bold' },
                            padding: 20
                        },
                        legend: { display: false }
                    }
                }
            };
        }

        function updateChart(type) {
            if (currentChart) {
                currentChart.destroy();
            }
            currentChart = new Chart(yearlyCtx, type === 'time' ? createTimeChart() : createRegionChart());
        }

        // Initial chart
        updateChart('time');

        // Handle dropdown changes
        document.getElementById('chartType').addEventListener('change', function(e) {
            updateChart(e.target.value);
        });
    });
    </script>

    <!-- Add ApexCharts library -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    @include('layout.footer')

</body>
