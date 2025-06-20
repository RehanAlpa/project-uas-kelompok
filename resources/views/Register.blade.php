<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register - Fashion Store</title>
  <link rel="stylesheet" href="{{ asset('css/LoginStyle.css') }}">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      margin: 0;
      padding: 0;
    }
    header, footer {
      text-align: center;
      padding: 1rem;
      background: #333;
      color: white;
    }
    nav ul {
      list-style: none;
      padding: 0;
    }
    nav ul li {
      display: inline;
      margin: 0 10px;
    }
    nav ul li a {
      color: white;
      text-decoration: none;
    }

    main {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 90vh;
    }

    form {
      background: white;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 350px;
    }

    form h2 {
      text-align: center;
      margin-bottom: 1rem;
    }

    label {
      display: block;
      margin-top: 10px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      width: 100%;
      padding: 10px;
      background: #333;
      color: white;
      border: none;
      border-radius: 5px;
      margin-top: 15px;
    }

    .login-link {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
    }

    .login-link a {
      color: #007bff;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <header>
    <h1>Fashion Store</h1>
    <nav>
      <ul>
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About Us</a></li>
        <li><a href="{{ url('/shop') }}">Collection</a></li>
        <li><a href="{{ url('/login') }}">Login</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <form action="{{ route('register.submit') }}" method="POST">
      @csrf
      <h2>Register</h2>

      <label for="name">Nama Lengkap:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="password_confirmation">Konfirmasi Password:</label>
      <input type="password" id="password_confirmation" name="password_confirmation" required>

      <button type="submit">Daftar</button>

      <div class="text-center mt-4">
    <p>Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login di sini</a></p>
    </div>
    </form>
  </main>

  <footer>
    <p>&copy; 2025 Fashion Store. All rights reserved.</p>
  </footer>
</body>
</html>
