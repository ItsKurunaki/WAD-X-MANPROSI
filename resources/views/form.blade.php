<!DOCTYPE html>
<html>
<head>
    <title>Form Laporan Gempa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container min-vh-100 d-flex align-items-center">
        <div class="row justify-content-center w-100">
            <div class="col-md-8">

                <div class="card w-100">
                    <div class="card-header fs-4">Form Laporan Gempa</div>

                    <div class="card-body p-4">
                        @if(session('success'))
                            <div class="alert alert-success mb-4">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('form.store') }}" class="mx-auto" style="max-width: 800px;">
                            @csrf

                            <div class="mb-4">
                                <label for="Nama" class="form-label fs-5">Nama</label>
                                <input type="text" class="form-control form-control-lg" id="Nama" name="Nama" required>
                            </div>

                            <div class="mb-4">
                                <label for="NomorTelepon" class="form-label fs-5">Nomor Telepon</label>
                                <input type="tel" class="form-control form-control-lg" id="NomorTelepon" name="NomorTelepon" required>
                            </div>

                            <div class="mb-4">
                                <label for="Asal" class="form-label fs-5">Asal</label>
                                <input type="text" class="form-control form-control-lg" id="Asal" name="Asal" required>
                            </div>

                            <div class="mb-4">
                                <label for="SkalaGempa" class="form-label fs-5">Skala Gempa</label>
                                <select class="form-select form-select-lg" id="SkalaGempa" name="SkalaGempa" required>
                                    <option value="">Pilih Skala Gempa</option>
                                    <option value="Tidak dirasakan">Tidak dirasakan</option>
                                    <option value="Dirasakan">Dirasakan</option>
                                    <option value="Kerusakan Ringan">Kerusakan Ringan</option>
                                    <option value="Kerusakan Sedang">Kerusakan Sedang</option>
                                    <option value="Kerusakan Berat">Kerusakan Berat</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="KataKata" class="form-label fs-5">Keterangan Tambahan</label>
                                <textarea class="form-control form-control-lg" id="KataKata" name="KataKata" rows="6" required></textarea>
                            </div>

                            <div class="d-flex gap-3">
                                <button type="submit" class="btn btn-primary btn-lg px-4">Submit</button>
                                <a href="{{ url('index') }}" class="btn btn-secondary btn-lg px-4">
                                    <i class="fas fa-arrow-left"></i> Kembali
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
