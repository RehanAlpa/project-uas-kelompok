<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - Fashion Store</title>
  <link rel="stylesheet" href="{{ asset('css/LoginStyle.css') }}">
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
    <form action="{{ route('login') }}" method="POST">
      @csrf
      <h2>Login</h2>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Login</button>
        <div class="text-center mt-4">
    <p>Belum punya akun? <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Daftar di sini</a></p>
</div>
    </form>
  
  </main>

  <footer>
    <p>&copy; 2025 Fashion Store. All rights reserved.</p>
  </footer>
</body>
</html>
