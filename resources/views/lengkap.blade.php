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

    <div class="Gempabumiterkini">
        <h1>GEMPA BUMI TERKINI</h1>  
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