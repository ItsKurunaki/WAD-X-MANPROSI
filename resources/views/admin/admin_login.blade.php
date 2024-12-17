<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"> <!-- Menambahkan font Poppins -->
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
            font-weight: 600; /* Menggunakan font weight 600 untuk judul */
            text-align: center; /* Memusatkan teks judul */
        }
        .form-control {
            margin-bottom: 1rem;
        }
        input[type="text"],
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
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Selamat Datang!</h2>
        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <div class="form-control">
                <label for="company_id">Company ID</label>
                <input type="text" id="company_id" name="company_id" placeholder="Company ID" required>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="remember-me">
                <input type="checkbox" id="remember_me" name="remember">
                <label for="remember_me">Remember Me</label>
            </div>
            <button type="submit">Masuk</button>
        </form>
    </div>
</body>
</html>