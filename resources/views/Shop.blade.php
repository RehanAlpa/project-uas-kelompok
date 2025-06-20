<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Shop - Meleset Fashion</title>
  <link rel="stylesheet" href="{{ asset('css/ShopStyle.css') }}">
</head>
<body>
  <header>
    <h1>Meleset Fashion</h1>
    <nav>
      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About Us</a></li>
        <li><a href="{{ url('/shop') }}">Shop</a></li>
        <li><a href="{{ route('login') }}">Login</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="our-collection">
      <h2>OUR COLLECTION</h2>
      <div class="filters">
        <button class="btn-outline active" data-category="hoodie">Hoodie</button>
        <button class="btn-outline" data-category="long-sleeve">Long Sleeve</button>
        <button class="btn-outline" data-category="tshirt">T-Shirt</button>
        <button class="btn-outline" data-category="outwear">Out Wear</button>
        <button class="btn-outline" data-category="hat">Hat</button>
      </div>

      <div class="products">

        {{-- Hoodie --}}
        <div class="product-grid hoodie active">
          <div class="product"><img src="{{ asset('image/Hoodie-Img/Hoodie6.jpg') }}"><p>Men Solid BLVCK Hoodie</p></div>
          <div class="product"><img src="{{ asset('image/Hoodie-Img/Hoodie1.jpg') }}"><p>Hip Hop Hoodie</p></div>
          <div class="product"><img src="{{ asset('image/Hoodie-Img/Hooodie4.jpg') }}"><p>Aeros Prisson Hoodie</p></div>
          <div class="product"><img src="{{ asset('image/Hoodie-Img/Hoodie2.jpg') }}"><p>Hoodie Zipper</p></div>
          <div class="product"><img src="{{ asset('image/Hoodie-Img/Hoodie3.jpeg') }}"><p>White Milk Hoodie</p></div>
        </div>

        {{-- Long Sleeve --}}
        <div class="product-grid long-sleeve">
          <div class="product"><img src="{{ asset('image/LongSleeve-img/LongSleeve1.jpg') }}"><p>Grey Long Sleeve</p></div>
          <div class="product"><img src="{{ asset('image/LongSleeve-img/LongSleeve2.jpg') }}"><p>Blue Navy Long Sleeve</p></div>
          <div class="product"><img src="{{ asset('image/LongSleeve-img/LongSleeve3.jpg') }}"><p>Bubble Gum Long Sleeve</p></div>
          <div class="product"><img src="{{ asset('image/LongSleeve-img/LongSleeve4.jpg') }}"><p>Solid White Long Sleeve</p></div>
          <div class="product"><img src="{{ asset('image/LongSleeve-img/Male Model is 180cm 73kg wearing Size XL Male….jpeg') }}"><p>Black And White Long Sleeve</p></div>
        </div>

        {{-- T-Shirt --}}
        <div class="product-grid tshirt">
          <div class="product"><img src="{{ asset('image/T-Shirt-img/Image2.jpg') }}"><p>Solid White T-Shirt</p></div>
          <div class="product"><img src="{{ asset('image/T-Shirt-img/Image9.jpg') }}"><p>Brown Sugar T-Shirt</p></div>
          <div class="product"><img src="{{ asset('image/T-Shirt-img/Ts3.jpeg') }}"><p>AESTHETIC T-Shirt</p></div>
          <div class="product"><img src="{{ asset('image/T-Shirt-img/Ts4.jpeg') }}"><p>University T-shirt</p></div>
          <div class="product"><img src="{{ asset('image/T-Shirt-img/Ts5.jpeg') }}"><p>Blue Ocean T-shirt</p></div>
        </div>

        {{-- Out Wear --}}
        <div class="product-grid outwear">
          <div class="product"><img src="{{ asset('image/Outer-img/Outer.jpg') }}"><p>Leather Jacket</p></div>
          <div class="product"><img src="{{ asset('image/Outer-img/Outer1.jpg') }}"><p>Parachute Jacket</p></div>
          <div class="product"><img src="{{ asset('image/Outer-img/Outer2.jpg') }}"><p>Executive Outer</p></div>
          <div class="product"><img src="{{ asset('image/Outer-img/Outer3.jpg') }}"><p>Simple Outer Jacket</p></div>
          <div class="product"><img src="{{ asset('image/Outer-img/Outer4.jpg') }}"><p>Denim Grey Jacket</p></div>
        </div>

        {{-- Hat --}}
        <div class="product-grid hat">
          <div class="product"><img src="{{ asset('image/Hat-img/Hat1.jpeg') }}"><p>Dark Grey Denim Cap</p></div>
          <div class="product"><img src="{{ asset('image/Hat-img/Hat2.jpeg') }}"><p>White Polo Cap</p></div>
          <div class="product"><img src="{{ asset('image/Hat-img/Hat3.jpeg') }}"><p>Cyan Distro Cap</p></div>
          <div class="product"><img src="{{ asset('image/Hat-img/Hat4.jpeg') }}"><p>Black Bucket Cap</p></div>
          <div class="product"><img src="{{ asset('image/Hat-img/Hat5.jpeg') }}"><p>Head Scarf</p></div>
        </div>

      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Meleset Fashion. All rights reserved.</p>
  </footer>

  <script src="{{ asset('js/shop.js') }}"></script>
</body>
</html>
