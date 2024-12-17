<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/contactdarurat.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loading.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Contact Darurat</title>
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
                    <li class="nav-item">
                        <a class="btn btn-danger emergency-btn" href="{{ url('contactdarurat') }}">Contact Darurat</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="Body">
        <div class="header-section">
            <h1>Daftar Nomor Panggilan Darurat Yang Dapat Dihubungi</h1>
            <div class="description-box">
                <p>Nomor ini diperuntukkan hanya untuk situasi darurat yang memerlukan bantuan segera, seperti bencana alam, kebakaran, kecelakaan, atau kejadian lain yang mengancam keselamatan jiwa.
                   Harap gunakan nomor ini dengan bijak. Menelepon tanpa alasan yang mendesak dapat menghambat bantuan kepada mereka yang benar-benar membutuhkan.Panggilan palsu atau penggunaan yang tidak bertanggung jawab dapat dikenakan sanksi sesuai hukum yang berlaku.
                </p>
            </div>
        </div>

        <h2>Nomor Darurat Nasional</h2>
        <div class="table-responsive">
            <table class="table table-bordered emergency-numbers-table">
                <tbody>
                    <tr>
                        <td class="d-flex align-items-center">
                            <img src="{{ asset('IMG/BNPB.png') }}" alt="BNPB" class="emergency-icon">
                            <div class="emergency-info">
                                <strong>Badan Nasional Penanggulangan Bencana</strong>
                                <p class="mb-0">117</p>
                            </div>
                            <a href="tel:117" class="btn btn-success ms-auto">
                                <i class="fas fa-phone"></i> Panggil
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="d-flex align-items-center">
                            <img src="{{ asset('IMG/Basarnas.png') }}" alt="Basarnas" class="emergency-icon">
                            <div class="emergency-info">
                                <strong>Badan Nasional Pencarian dan Pertolongan (Basarnas)</strong>
                                <p class="mb-0">115</p>
                            </div>
                            <a href="tel:115" class="btn btn-success ms-auto">
                                <i class="fas fa-phone"></i> Panggil
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="d-flex align-items-center">
                            <img src="{{ asset('IMG/Ambulans.png') }}" alt="Ambulans" class="emergency-icon">
                            <div class="emergency-info">
                                <strong>Ambulans</strong>
                                <p class="mb-0">118</p>
                            </div>
                            <a href="tel:118" class="btn btn-success ms-auto">
                                <i class="fas fa-phone"></i> Panggil
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Ganti struktur HTML untuk bagian header dan tabel -->
        <div class="table-container">
            <div class="header-container">
                <h2>Nomor Yang Kamu Tambahkan</h2>
                <a href="{{ route('contactdarurat.create') }}" class="add-button">
                    <i class="fas fa-plus"></i> Add Number
                </a>
            </div>
            
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Nomor Telepon</th>
                            <th>Asal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->Nama }}</td>
                            <td>{{ $contact->NomorTelepon }}</td>
                            <td>{{ $contact->Asal }}</td>
                            <td>
                                <a href="tel:{{ $contact->NomorTelepon }}" class="btn btn-sm btn-success">
                                    <i class="fas fa-phone"></i> Telepon
                                </a>
                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $contact->id }}">Edit</button>
                                <form action="{{ route('contactdarurat.destroy', $contact->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal Tambah -->
        <div class="modal fade" id="addModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Kontak Darurat</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form action="{{ route('contactdarurat.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" name="nomor" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Asal</label>
                                <input type="text" class="form-control" name="asal" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Edit untuk setiap kontak -->
        @foreach($contacts as $contact)
        <div class="modal fade" id="editModal{{ $contact->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $contact->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel{{ $contact->id }}">Edit Kontak Darurat</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('contactdarurat.update', $contact->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nama{{ $contact->id }}" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama{{ $contact->id }}" name="nama" value="{{ $contact->Nama }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="nomor{{ $contact->id }}" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="nomor{{ $contact->id }}" name="nomor" value="{{ $contact->NomorTelepon }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="asal{{ $contact->id }}" class="form-label">Asal</label>
                                <input type="text" class="form-control" id="asal{{ $contact->id }}" name="asal" value="{{ $contact->Asal }}" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi semua modal
        var modals = document.querySelectorAll('.modal');
        modals.forEach(function(modal) {
            new bootstrap.Modal(modal);
        });
    });
    </script>
    <script src="{{ asset('js/loading.js') }}"></script>
    <a href="{{ url('form') }}" class="floating-call-btn">
        <img src="{{ asset('IMG/massage.png') }}" alt="Chat Icon" style="width: 30px; height: 30px;">
    </a>
</body>
</html>