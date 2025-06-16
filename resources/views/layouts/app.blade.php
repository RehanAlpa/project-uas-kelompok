<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Meleset Fashion</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="{{ asset('js/main.js') }}" defer></script>
</head>
<body>
  <header>
    <h1>Meleset Fashion</h1>
    <nav>
      <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('shop') }}">Shop</a></li>
        @auth
          <li><a href="{{ route('orders.index') }}">My Orders</a></li>
          <li><form action="{{ route('logout') }}" method="POST">@csrf <button type="submit">Logout</button></form></li>
        @else
          <li><a href="{{ route('login') }}">Login</a></li>
        @endauth
      </ul>
    </nav>
  </header>

  <main>
    @yield('content')
  </main>

  <footer>
    <p>&copy; {{ date('Y') }} Meleset Fashion. All rights reserved.</p>
  </footer>
</body>
</html>
