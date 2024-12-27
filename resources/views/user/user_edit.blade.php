<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

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

        .button-group {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .submit-btn, .cancel-btn {
            padding: 0.8rem;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            flex: 1;
        }

        .submit-btn {
            background-color: #e91e63;
            color: white;
            border: none;
        }

        .cancel-btn {
            background-color: #fff;
            color: #e91e63;
            border: 1px solid #e91e63;
        }

        .submit-btn:hover {
            background-color: #d81b60;
        }

        .cancel-btn:hover {
            background-color: #fce4ec;
        }

        .btn {
            padding: 0.8rem;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            width: 100%;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h2 class="profile-title">Edit Profil</h2>
        <form action="{{ route('user.profile.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-grid">
                <div class="form-group">
                    <label for="nama_depan">Nama Depan</label>
                    <input type="text" id="nama_depan" name="nama_depan" value="{{ $user->nama_depan }}" required>
                </div>

                <div class="form-group">
                    <label for="nama_belakang">Nama Belakang</label>
                    <input type="text" id="nama_belakang" name="nama_belakang" value="{{ $user->nama_belakang }}" required>
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" value="{{ $user->email }}" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Biarkan kosong jika tidak ingin mengubah">
                </div>

                <div class="form-group full-width">
                    <label for="no_handphone">No. Handphone</label>
                    <input type="tel" id="no_handphone" name="no_handphone" value="{{ $user->no_handphone }}" required>
                </div>

                <div class="form-group full-width">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" value="{{ $user->alamat }}" required>
                </div>

                <div class="form-group">
                    <label for="provinsi">Provinsi</label>
                    <input type="text" id="provinsi" name="provinsi" value="{{ $user->provinsi }}" required>
                </div>

                <div class="form-group">
                    <label for="kota">Kota/Kabupaten</label>
                    <input type="text" id="kota" name="kota" value="{{ $user->kota }}" required>
                </div>
            </div>

            <div class="button-group">
                <a href="{{ route('user.profile') }}" class="cancel-btn" style="text-decoration: none; text-align: center;">Batal</a>
                <button type="submit" class="submit-btn">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</body>
</html>
