<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Meleset Fashion</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <h1>Anomali Meleset</h1>
    <nav>
      <li><a href="{{ url('/home') }}">Home</a></li>
<li><a href="{{ url('/about') }}">About Us</a></li>
<li><a href="{{ url('/shop') }}">Shop</a></li>
<li><a href="{{ url('/login') }}">Login</a></li>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-text">
      <h2>MELESET<br>FASHION</h2>
      <p>Discover a fashion experience that reflects your energy and uniqueness.<br>Stylish, functional and expressive for every season.</p>
      <div class="hero-buttons">
        <button class="btn-fill"><a href="{{ url('/shop') }}" style="color: white;">Buy Product</a></button>
        <button class="btn-outline"><a href="{{ url('/shop') }}" style="color: black;">Explore Product</a></button>
      </div>
    </div>
    <div class="image">
      <img src="{{ asset('image/T-Shirt-img/Image1.jpg') }}" alt="">
    </div>
  </section>

  <div class="marquee">
    <marquee>MELESET FASHION ★ MELESET FASHION ★  MELESET FASHION ★</marquee>
  </div>

  <section class="highlights">
    <div class="highlight-img">
      <img src="{{ asset('image/Model-img/Model1.jpg') }}" alt="Model 1">
      <button class="btn-fill">Explore Now</button>
    </div>
    <div class="highlight-img">
      <img src="{{ asset('image/Model-img/Model2.jpg') }}" alt="Model 2">
      <button class="btn-fill">Explore Now</button>
    </div>
    <div class="highlight-texts">
      <div class="card">
        <p class="label">Women Collection</p>
        <h3>Stylish T-Shirt for Woman</h3>
        <button class="btn-link"><a href="{{ url('/shop') }}" style="color: black;">Shop Now</a></button>
      </div>
      <div class="card">
        <p class="label">Men Collection</p>
        <h3>Stylish Shirt for Man</h3>
        <button class="btn-link"><a href="{{ url('/shop') }}" style="color: black;">Shop Now</a></button>
      </div>
    </div>
  </section>

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
      <!-- Hoodie -->
      <div class="product-grid hoodie active">
        <div class="product"><img src="{{ asset('image/Hoodie-Img/Hoodie6.jpg') }}"><p>Men Solid BLVCK Hoodie</p></div>
        <div class="product"><img src="{{ asset('image/Hoodie-Img/Hoodie1.jpg') }}"><p>Hip Hop Hoodie</p></div>
        <div class="product"><img src="{{ asset('image/Hoodie-Img/Hooodie4.jpg') }}"><p>Aeros Prisson Hoodie</p></div>
        <div class="product"><img src="{{ asset('image/Hoodie-Img/Hoodie2.jpg') }}"><p>Hoodie Zipper</p></div>
        <div class="product"><img src="{{ asset('image/Hoodie-Img/Hoodie3.jpeg') }}"><p>White Milk Hoodie</p></div>
      </div>

      <!-- Long Sleeve -->
      <div class="product-grid long-sleeve">
        <div class="product"><img src="{{ asset('image/LongSleeve-img/LongSleeve1.jpg') }}"><p>Grey Long Sleeve</p></div>
        <div class="product"><img src="{{ asset('image/LongSleeve-img/LongSleeve2.jpg') }}"><p>Blue Navy Long Sleeve</p></div>
        <div class="product"><img src="{{ asset('image/LongSleeve-img/LongSleeve3.jpg') }}"><p>Bubble Gum Long Sleeve</p></div>
        <div class="product"><img src="{{ asset('image/LongSleeve-img/LongSleeve4.jpg') }}"><p>Solid White Long Sleeve</p></div>
        <div class="product"><img src="{{ asset('image/LongSleeve-img/Male Model is 180cm 73kg wearing Size XL Male….jpeg') }}"><p>Black And White Long Sleeve</p></div>
      </div>

      <!-- T-Shirt -->
      <div class="product-grid tshirt">
        <div class="product"><img src="{{ asset('image/T-Shirt-img/Image2.jpg') }}"><p>Solid White T-Shirt</p></div>
        <div class="product"><img src="{{ asset('image/T-Shirt-img/Image9.jpg') }}"><p>Brown Sugar T-Shirt</p></div>
        <div class="product"><img src="{{ asset('image/T-Shirt-img/Ts3.jpeg') }}"><p>AESTHETIC T-Shirt</p></div>
        <div class="product"><img src="{{ asset('image/T-Shirt-img/Ts4.jpeg') }}"><p>University T-shirt</p></div>
        <div class="product"><img src="{{ asset('image/T-Shirt-img/Ts5.jpeg') }}"><p>Blue Ocean T-shirt</p></div>
      </div>

      <!-- Out Wear -->
      <div class="product-grid outwear">
        <div class="product"><img src="{{ asset('image/Outer-img/Outer.jpg') }}"></div>
        <div class="product"><img src="{{ asset('image/Outer-img/Outer1.jpg') }}"></div>
        <div class="product"><img src="{{ asset('image/Outer-img/Outer2.jpg') }}"></div>
        <div class="product"><img src="{{ asset('image/Outer-img/Outer3.jpg') }}"></div>
        <div class="product"><img src="{{ asset('image/Outer-img/Outer4.jpg') }}"></div>
      </div>

      <!-- Hat -->
      <div class="product-grid hat">
        <div class="product"><img src="{{ asset('image/Hat-img/Hat1.jpeg') }}"></div>
        <div class="product"><img src="{{ asset('image/Hat-img/Hat2.jpeg') }}"></div>
        <div class="product"><img src="{{ asset('image/Hat-img/Hat3.jpeg') }}"></div>
        <div class="product"><img src="{{ asset('image/Hat-img/Hat4.jpeg') }}"></div>
        <div class="product"><img src="{{ asset('image/Hat-img/Hat5.jpeg') }}"></div>
      </div>
    </div>
  </section>

  <section class="collection-footer">
    <h2>CLOTH AND FOOTWEAR COLLECTION</h2>
    <p>Reflect is the new trend in fashion clothing and footwear — explore a variety of selections crafted for today's streetwear lovers. Our collection blends function and fashion effortlessly with every step.</p>
  </section>

  <script src="{{ asset('js/shop.js') }}"></script>
</body>
</html>
