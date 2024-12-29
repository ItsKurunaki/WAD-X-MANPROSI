<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loading.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contactdarurat.css') }}">
    <link rel="stylesheet" href="{{ asset('css/panduan.css') }}">
    <link rel="stylesheet" href="{{ asset('css/penanggulangan.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
  
    <title>Siaga+</title>
</head>     

<body>
    <div id="loading">
        <div class="spinner"></div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="{{ url('index') }}" class="navbar-brand-logo">
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
                    <li class="nav-item"><a class="nav-link" href="{{ url('contactdarurat') }}">Contact Darurat</a></li>  
                </ul>
            </div>
            
            <div class="navbar">
                <div class="profile-menu">
                  <img src="{{ asset('IMG/blank.png') }}" alt="Profile" class="profile-pic" id="profileToggle">
                  <div class="dropdown" id="dropdownMenu">
                    <div class="user-info">
                      <img src="{{ asset('IMG/blank.png') }}" class="profile-pic-large">
                      <p class="username">User</p>
                    </div>
                    <ul class="menu-list">
                      <li><a href="#">Edit Profile</a></li>
                      <li><a href="#">Setting</a></li>
                      <li><a href="#">Help</a></li>
                      <li><a href="{{ url('login') }}">LogOut</a></li>
                    </ul>
                  </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Scripts -->
    <script src="{{ asset('js/profile.js') }}"></script>
</body>
</html>