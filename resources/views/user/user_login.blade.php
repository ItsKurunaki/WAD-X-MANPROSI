<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"> <!-- Menambahkan font Poppins -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif; /* Menggunakan font Poppins */
            background-image: url('https://images.pexels.com/photos/2004166/pexels-photo-2004166.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); /* Placeholder background */
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
            margin: 0 auto; /* Memusatkan kotak */
        }
        .login-box h2 {
            margin-bottom: 1rem;
            font-weight: bold;
            text-align: center; /* Memusatkan teks judul */
        }
        .form-control {
            margin-bottom: 1rem;
            display: flex;
            flex-direction: column;
            gap: 0.5rem; /* Menambahkan jarak antara label dan input */
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.7rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Menambahkan box-sizing untuk menghindari overflow */
        }
        .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        .remember-me input {
            margin-right: 0.5rem;
        }
        button {
            background-color: #e91e63;
            color: white;
            border: none;
            padding: 0.7rem;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif; /* Menambahkan font Poppins pada tombol */
            font-weight: 600; /* Menggunakan font weight 600 untuk tombol */
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
        <h2>Selamat Datang!</h2>
        <form action="{{ route('user.login') }}" method="POST">
            @csrf
            <div class="form-control">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="E-mail" required>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <div class="password-container">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <i class="toggle-password fas fa-eye-slash" onclick="togglePassword('password')"></i>
                </div>
                </div>
            <div class="remember-me">
                <input type="checkbox" id="remember_me" name="remember">
                <label for="remember_me">Remember Me</label>
            </div>
            <button type="submit">Masuk</button>
        </form>
        <div style="text-align: center; margin-top: 1rem;">
            <span>Belum punya akun? <a href="{{ route('user.register') }}">Daftar</a></span>
        </div>  
    </div>
    <script>
        function togglePassword(inputId) {
            const passwordInput = document.getElementById(inputId);
            const toggleIcon = document.querySelector('.toggle-password');
            
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
