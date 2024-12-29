<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- css link -->
    <link rel="stylesheet" href="../main/header/header.css" />

    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
  </head>
  <body>
    <!-- header section start -->
    <div class="header" id="header">
      <!-- <div class="logo">
        <i class="fas fa-shopping-basket"></i>
        <h3>MG<span>MART</span></h3>
      </div> -->
      <a href="" class="logo"><i class="fas fa-shopping-basket"></i>groco</a>
      <div class="search-box">
        <input
          type="text"
          class="search-input"
          placeholder="Search for products..."
        />
        <div class="search-icon">
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
      </div>
    </div>
    <!-- header section end -->

    <!-- header-2 section start -->
    <div class="header-2">
      <div id="menu-bar" class="fas fa-bars"></div>

      <div class="menu">
        <ul>
          <li><a href="#home" class="nav-item">home</a></li>
          <li><a href="#category" class="nav-item">category</a></li>
          <li><a href="#deal" class="nav-item">deal</a></li>
          <li><a href="#products" class="nav-item">products</a></li>
          <li><a href="#contact" class="nav-item">contact</a></li>
        </ul>
      </div>

      <div class="icons">
        <div class="btn cart" id="cart">
          <i class="fa-solid fa-cart-shopping"></i>
        </div>

        <!-- <a href="/project/signIn-LogIn/signUp.html"> -->
        <div class="btn signUp" id="signUp">
          <i class="fas fa-user"></i>
        </div>
        <!-- </a> -->

        <div class="btn whistle" id="whistle">
          <i class="fas fa-heart"></i>
        </div>
      </div>
    </div>
    <!-- header-2 section end -->
  </body>
</html>