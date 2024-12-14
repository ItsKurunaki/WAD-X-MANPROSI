<!DOCTYPE html>
<html>
<head>
    <title>Form Laporan Gempa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Form Laporan Gempa</div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success mb-3">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('form.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="Nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="Nama" name="Nama" required>
                            </div>

                            <div class="mb-3">
                                <label for="NomorTelepon" class="form-label">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="NomorTelepon" name="NomorTelepon" required>
                            </div>

                            <div class="mb-3">
                                <label for="Asal" class="form-label">Asal</label>
                                <input type="text" class="form-control" id="Asal" name="Asal" required>
                            </div>

                            <div class="mb-3">
                                <label for="SkalaGempa" class="form-label">Skala Gempa</label>
                                <select class="form-select" id="SkalaGempa" name="SkalaGempa" required>
                                    <option value="">Pilih Skala Gempa</option>
                                    <option value="Tidak dirasakan">Tidak dirasakan</option>
                                    <option value="Dirasakan">Dirasakan</option>
                                    <option value="Kerusakan Ringan">Kerusakan Ringan</option>
                                    <option value="Kerusakan Sedang">Kerusakan Sedang</option>
                                    <option value="Kerusakan Berat">Kerusakan Berat</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="KataKata" class="form-label">Keterangan Tambahan</label>
                                <textarea class="form-control" id="KataKata" name="KataKata" rows="4" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
