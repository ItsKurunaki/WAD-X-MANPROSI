<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lengkapi Profil</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-image: url('https://images.pexels.com/photos/2004166/pexels-photo-2004166.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .profile-container {
            width: 100%;
            max-width: 800px;
            padding: 2rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .profile-title {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #666;
        }

        .form-group input {
            width: 100%;
            padding: 0.7rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .submit-btn {
            background-color: #e91e63;
            color: white;
            border: none;
            padding: 0.8rem;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            margin-top: 1rem;
        }

        .submit-btn:hover {
            background-color: #d81b60;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h2 class="profile-title">Lengkapi Profil Anda</h2>
        <form action="{{ route('user.profile.update') }}" method="POST">
            @csrf
            <div class="form-grid">
                <div class="form-group">
                    <label for="nama_depan">Nama Depan</label>
                    <input type="text" id="nama_depan" name="nama_depan" required>
                </div>

                <div class="form-group">
                    <label for="nama_belakang">Nama Belakang</label>
                    <input type="text" id="nama_belakang" name="nama_belakang" required>
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="form-group full-width">
                    <label for="no_handphone">No. Handphone</label>
                    <input type="tel" id="no_handphone" name="no_handphone" required>
                </div>

                <div class="form-group full-width">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" required>
                </div>

                <div class="form-group">
                    <label for="provinsi">Provinsi</label>
                    <input type="text" id="provinsi" name="provinsi" required>
                </div>

                <div class="form-group">
                    <label for="kota">Kota/Kabupaten</label>
                    <input type="text" id="kota" name="kota" required>
                </div>
            </div>

            <button type="submit" class="submit-btn">Simpan</button>
        </form>
    </div>
</body>
</html>
