<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-image: url('https://images.pexels.com/photos/2004166/pexels-photo-2004166.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-box {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 350px;
            margin: 0 auto;
        }
        .login-box h2 {
            margin-bottom: 1rem;
            font-weight: bold;
            text-align: center;
        }
        .form-control {
            margin-bottom: 1rem;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.7rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #e91e63;
            color: white;
            border: none;
            padding: 0.7rem;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }
        button:hover {
            background-color: #d81b60;
        }
        .password-container {
            position: relative;
        }
        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Daftar Akun</h2>
        <form action="{{ route('user.register.submit') }}" method="POST">
            @csrf
            <div class="form-control">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username" required>
            </div>
            <div class="form-control">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email" required>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <div class="password-container">
                    <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                    <i class="toggle-password fas fa-eye-slash" onclick="togglePassword('password')"></i>
                </div>
            </div>
            <div class="form-control">
                <label for="password_confirmation">Konfirmasi Password</label>
                <div class="password-container">
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi password" required>
                    <i class="toggle-password fas fa-eye-slash" onclick="togglePassword('password_confirmation')"></i>
                </div>
            </div>
            <button type="submit">Daftar</button>
        </form>
        <div style="text-align: center; margin-top: 1rem;">
            <span>Sudah punya akun? <a href="{{ route('user.login') }}">Masuk</a></span>
        </div>  
    </div>
    <script>
        function togglePassword(inputId) {
            const passwordInput = document.getElementById(inputId);
            const toggleIcon = passwordInput.nextElementSibling;
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            }
        }
    </script>
</body>
</html>
