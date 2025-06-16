<!-- Tambahkan layout navbar di resources/views/layouts/navbar.blade.php -->
<nav>
  <ul>
    <li><a href="{{ url('/home') }}">Home</a></li>
    <li><a href="{{ url('/shop') }}">Shop</a></li>
    <li><a href="{{ url('/about') }}">About</a></li>
    @auth
      <li><a href="{{ route('orders.index') }}">Pesanan</a></li>
      <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    @else
      <li><a href="{{ route('login') }}">Login</a></li>
    @endauth
  </ul>
</nav>