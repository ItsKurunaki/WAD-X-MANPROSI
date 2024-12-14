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

    <a href="{{ url('form') }}" class="floating-call-btn">
        <i class="fas fa-phone"></i>
        <img src="{{ asset('IMG/massage.png') }}" alt="Chat Icon" style="width: 30px; height: 30px;">
    </a>

</body>
</html>
