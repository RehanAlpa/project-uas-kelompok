<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Shop - Fashion Store</title>
  <link rel="stylesheet" href="{{ asset('css/ShopStyle.css') }}">
</head>
<body>
  <header>
    <h1>Fashion Store</h1>
    <nav>
      <ul>
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About Us</a></li>
        <li><a href="{{ url('/shop') }}">Shop</a></li>
        @auth
          <li><a href="{{ url('/logout') }}">Logout</a></li>
        @else
          <li><a href="{{ url('/login') }}">Login</a></li>
        @endauth
      </ul>
    </nav>
  </header>

  <main>
    <section class="our-collection">
      <h2>OUR COLLECTION</h2>

      @if(session('success'))
        <div style="color: green; font-weight: bold;">{{ session('success') }}</div>
      @endif

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
          @foreach([
            ['img' => 'Hoodie-Img/Hoodie6.jpg', 'name' => 'Men Solid BLVCK Hoodie', 'price' => 'Rp.175000'],
            ['img' => 'Hoodie-Img/Hoodie1.jpg', 'name' => 'Hip Hop Hoodie', 'price' => 'Rp.200000'],
            ['img' => 'Hoodie-Img/Hooodie4.jpg', 'name' => 'Aeros Prisson Hoodie', 'price' => 'Rp.250000'],
            ['img' => 'Hoodie-Img/Hoodie2.jpg', 'name' => 'Hoodie Zipper', 'price' => 'Rp.230000'],
            ['img' => 'Hoodie-Img/Hoodie3.jpeg', 'name' => 'White Milk Hoodie', 'price' => 'Rp.150000'],
          ] as $product)
          <div class="product">
            <img src="{{ asset('image/' . $product['img']) }}">
            <p>{{ $product['name'] }}</p>
            <p class="price">{{ $product['price'] }}</p>
            <form action="{{ url('/order') }}" method="POST">
              @csrf
              <input type="hidden" name="product_name" value="{{ $product['name'] }}">
              <input type="hidden" name="quantity" value="1">
              <button type="submit">Add to Cart</button>
            </form>
          </div>
          @endforeach
        </div>

        {{-- Long Sleeve --}}
        <div class="product-grid long-sleeve">
          @foreach([
            ['img' => 'LongSleeve-img/LongSleeve1.jpg', 'name' => 'Grey Long Sleeve'],
            ['img' => 'LongSleeve-img/LongSleeve2.jpg', 'name' => 'Blue Navy Long Sleeve'],
            ['img' => 'LongSleeve-img/LongSleeve3.jpg', 'name' => 'Bubble Gum Long Sleeve'],
            ['img' => 'LongSleeve-img/LongSleeve4.jpg', 'name' => 'Solid White Long Sleeve'],
            ['img' => 'LongSleeve-img/Male Model is 180cm 73kg wearing Size XL Male….jpeg', 'name' => 'Black And White Long Sleeve'],
          ] as $product)
          <div class="product">
            <img src="{{ asset('image/' . $product['img']) }}">
            <p>{{ $product['name'] }}</p>
            <p class="price">Rp.175000</p>
            <form action="{{ url('/order') }}" method="POST">
              @csrf
              <input type="hidden" name="product_name" value="{{ $product['name'] }}">
              <input type="hidden" name="quantity" value="1">
              <button type="submit">Add to Cart</button>
            </form>
          </div>
          @endforeach
        </div>

        {{-- T-Shirt --}}
        <div class="product-grid tshirt">
          @foreach([
            ['img' => 'T-Shirt-img/Image2.jpg', 'name' => 'Solid White T-Shirt', 'price' => 'Rp.100000'],
            ['img' => 'T-Shirt-img/Image9.jpg', 'name' => 'Brown Sugar T-Shirt', 'price' => 'Rp.170000'],
            ['img' => 'T-Shirt-img/Ts3.jpeg', 'name' => 'AESTHETIC T-Shirt', 'price' => 'Rp.120000'],
            ['img' => 'T-Shirt-img/Ts4.jpeg', 'name' => 'University T-shirt', 'price' => 'Rp.100000'],
            ['img' => 'T-Shirt-img/Ts5.jpeg', 'name' => 'Blue Ocean T-shirt', 'price' => 'Rp.145000'],
          ] as $product)
          <div class="product">
            <img src="{{ asset('image/' . $product['img']) }}">
            <p>{{ $product['name'] }}</p>
            <p class="price">{{ $product['price'] }}</p>
            <form action="{{ url('/order') }}" method="POST">
              @csrf
              <input type="hidden" name="product_name" value="{{ $product['name'] }}">
              <input type="hidden" name="quantity" value="1">
              <button type="submit">Add to Cart</button>
            </form>
          </div>
          @endforeach
        </div>

        {{-- Out Wear --}}
        <div class="product-grid outwear">
          @foreach([
            ['img' => 'Outer-img/Outer.jpg', 'name' => 'Leather Jacket', 'price' => 'Rp.250000'],
            ['img' => 'Outer-img/Outer1.jpg', 'name' => 'Parachute jacket', 'price' => 'Rp.370000'],
            ['img' => 'Outer-img/Outer2.jpg', 'name' => 'Executive Outer', 'price' => 'Rp.300000'],
            ['img' => 'Outer-img/Outer3.jpg', 'name' => 'Simple Outer Jacket', 'price' => 'Rp.226000'],
            ['img' => 'Outer-img/Outer4.jpg', 'name' => 'Denim Grey Jacket', 'price' => 'Rp.420000'],
          ] as $product)
          <div class="product">
            <img src="{{ asset('image/' . $product['img']) }}">
            <p>{{ $product['name'] }}</p>
            <p class="price">{{ $product['price'] }}</p>
            <form action="{{ url('/order') }}" method="POST">
              @csrf
              <input type="hidden" name="product_name" value="{{ $product['name'] }}">
              <input type="hidden" name="quantity" value="1">
              <button type="submit">Add to Cart</button>
            </form>
          </div>
          @endforeach
        </div>

        {{-- Hat --}}
        <div class="product-grid hat">
          @foreach([
            ['img' => 'Hat-img/Hat1.jpeg', 'name' => 'Dark Grey Denim Cap', 'price' => 'Rp.90000'],
            ['img' => 'Hat-img/Hat2.jpeg', 'name' => 'White polo Cap', 'price' => 'Rp.72000'],
            ['img' => 'Hat-img/Hat3.jpeg', 'name' => 'Cyan Distro Cap', 'price' => 'Rp.50000'],
            ['img' => 'Hat-img/Hat4.jpeg', 'name' => 'Black Bucket Cap', 'price' => 'Rp.35000'],
            ['img' => 'Hat-img/Hat5.jpeg', 'name' => 'headScarf', 'price' => 'Rp.25000'],
          ] as $product)
          <div class="product">
            <img src="{{ asset('image/' . $product['img']) }}">
            <p>{{ $product['name'] }}</p>
            <p class="price">{{ $product['price'] }}</p>
            <form action="{{ url('/order') }}" method="POST">
              @csrf
              <input type="hidden" name="product_name" value="{{ $product['name'] }}">
              <input type="hidden" name="quantity" value="1">
              <button type="submit">Add to Cart</button>
            </form>
          </div>
          @endforeach
        </div>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Fashion Store. All rights reserved.</p>
  </footer>

  <script src="{{ asset('js/shop.js') }}"></script>
</body>
</html>
