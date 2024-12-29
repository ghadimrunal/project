<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Grocery</title>
    <!-- css links -->
    <link rel="stylesheet" href="index.css" />

    <!-- media queries -->
    <link rel="stylesheet" href="media.css" />

    <!-- font awesome -->
     <!-- font awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <!-- lightslider -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css"
      integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=support_agent" />

  </head>
  <body>

    <?php
       include '../main/header/header.php';
    ?>


    <!-- ========== home start ==========-->
    <section class="home" id="home">
      <div class="left">
        <img src="../images/hero.jpg" alt="vegtable bucket" />
      </div>
      <div class="right">
        <span>fresh and organic</span>
        <h3>your daily need products</h3>
        <a href="#" class="butn">get started</a>
      </div>
    </section>
    <!-- home end -->

    <!--========== category start ==========-->
    <section class="category" id="category">
      <h1 class="heading">Shop By <span>Category</span></h1>
      <div class="category_content_wrapper">
        <div class="category_content">
          <ul id="autoWidth" class="cs-hidden">
            <!-- <li class="item-a">
                <div class="box box1">
                  <img src="/project/images/c1.png" alt="" />
                  <p>Vegetables and Fruits</p>
                </div>
              </li> -->

            <li class="item-a">
              <div class="box box2">
                <img src="../images/c2.png" alt="" />
                <p>Snacks & Beverages</p>
              </div>
            </li>

            <li class="item-a">
              <div class="box box3">
                <img src="../images/c3.png" alt="" />
                <p>Packaged Food</p>
              </div>
            </li>

            <li class="item-a">
              <div class="box box4">
                <img src="../images/c4.png" alt="" />
                <p>Personal & Baby Care</p>
              </div>
            </li>

            <li class="item-a">
              <div class="box box5">
                <img src="../images/c5.png" alt="" />
                <p>Staples</p>
              </div>
            </li>

            <li class="item-a">
              <div class="box box6">
                <img src="../images/c6.png" alt="" />
                <p>Dairy Products</p>
              </div>
            </li>

            <li class="item-a">
              <div class="box box7">
                <img src="../images/c7.png" alt="" />
                <p>Home & Kitchen</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- ==========category end ==========-->

    <!-- ========== deal section start ========= -->
    <section class="deal" id="deal">
      <div class="deal-content">
        <h3 class="title">deal of the day</h3>
        <!-- <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis laudantium nam suscipit nihil temporibus dolorem?
          </p> -->

        <div class="count-down">
          <div class="box">
            <h3 id="days">00</h3>
            <span>days</span>
          </div>
          <div class="box">
            <h3 id="hour">00</h3>
            <span>hrs</span>
          </div>
          <div class="box">
            <h3 id="minute">00</h3>
            <span>mins</span>
          </div>
          <div class="box">
            <h3 id="second">00</h3>
            <span>sec</span>
          </div>
        </div>
        <!-- <a href="#" class="butn">check the deal</a> -->
      </div>

      <div class="deal-banner">
         <div class="deal-item">

          <div class="img">
            <img src="../images/latestProduct-1.webp" alt="">
          </div>

          <div class="daily-content">
            <span class="categoryName">packaged food</span>
            <h4 class="productName">Maggi 2-Minute Masala, Easy to Make Instant Noodles Vegetarian  (70 g)</h4>
            <p class="productPrice">Rs.8 <span>Rs.14</span></p>
            <span class="discount">-42%</span>
          </div>

         </div>
      </div>

    </section>
    <!-- ========== deal section end ========= -->

    <!-- ========== product section start ========= -->
    <section class="products" id="products">
      <h1 class="heading">Latest <span>Products</span></h1>

      <div class="products-container">
        <!-- Template for individual product -->
        <div class="item">
          <!-- <div class="icons">

          </div> -->
          <span class="categoryName"></span>
          <div class="image">
            <img src="" alt="" />
          </div>
          <p class="productPrice"></p>
          <h4 class="productName"></h4>
          <button class="cartButn">
            <i class="fa fa-basket-shopping"></i>
            <span>Add to cart</span>
          </button>
        </div>
      </div>
    </section>

    <!-- ========== product section end ========= -->

    <!-- ========== contact section start ========= -->
    <section class="contact" id="contact">
      <h1 class="heading">contact <span>us</span></h1>
      <div class="contact_content">
      <div class="contact-info">
        <h3 class="title">how can we help you ?</h3>

        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nemo
          repellendus dicta velit temporibus corporis odit esse est, eos
          impedit?
        </p>

        <div class="contact-data">
          <i class="fa-solid fa-phone"></i>
          <div class="text">
            <strong> Phone</strong>
            <p>+1 238 333 44 55</p>
          </div>
        </div>

        <div class="contact-data">
          <i class="fa-solid fa-location-dot"></i>
          <div class="text">
            <strong>Location</strong>
            <!-- <p>55 Main Street, The grand avenue 2nd block, new york city</p> -->
             <p>Lorem, ipsum dolor.</p>
          </div>
        </div>

        <div class="contact-data">
          <i class="fa-solid fa-envelope"></i>
          <div class="text">
            <strong>Email</strong>
            <p>sample@123gmail.com</p>
          </div>
        </div>
      </div>

      <div class="contact-form">
        <h4 class="form-title">fill up the form if you have any question</h4>
        <form action="">
          <div class="input-field">
            <div class="name">
              <input type="text" id="fname" placeholder="First Name" />
              <input type="text" id="lname" placeholder="Last Name" />
            </div>
          </div>

          <div class="input-field">
            <input
              type="email"
              name="C-email"
              id="C-email"
              placeholder="Enter a valid email address"
            />
          </div>

          <div class="input-field">
            <textarea
              name="message"
              id="message"
              cols="80"
              rows="5"
              placeholder="Enter your message"
            ></textarea>
          </div>
        </form>
        <a href="#" class="butn mButtn">submit</a>
      </div>

    </div>
    </section>
    <!-- ========== contact section end ========= -->

    <!-- </div> container-end -->

    <!--========== popUp Start ==========-->
    <div class="popup signUpForm" id="popup">
      <div class="popup-content">
        <div class="title">
          <div class="close-btn signUp-close-btn">
            <i class="fa-regular fa-circle-xmark"></i>
          </div>
          <h2>Sign Up</h2>
          <span>please sign up to continue</span>
        </div>

        <form onsubmit="return validateForm()">
          <div class="data-field">
            <div class="name">
              <input type="text" placeholder="First Name" required />
              <input type="text" placeholder="Last Name" required />
            </div>
          </div>

          <div class="data-field">
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Enter your email"
              required
            />
          </div>

          <!-- <div class="data-field">
            <input
              type="tel"
              id="phone"
              name="phone"
              placeholder="Enter phone number"
              required
            />
          </div> -->

          <div class="data-field">
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Enter your password"
              required
            />
          </div>

          <!-- <div class="personal-info">
              <div class="data-field">
                <h5>Date of Birth</h5>
                <div class="dob">
                  <select name="day" id="day"></select>
                  <select name="month" id="month"></select>
                  <select name="year" id="year"></select>
                </div>
              </div>
  
              <div class="data-field">
                <h5>Gender</h5>
                <div class="gender">
                  <div class="genders">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="male" />
                  </div>
  
                  <div class="genders m1">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="female" />
                  </div>
  
                  <div class="genders m1">
                    <label for="other">Other</label>
                    <input type="radio" name="gender" id="other" />
                  </div>
                </div>
              </div>
            </div> -->

          <button type="submit" class="sign-btn butn m-t">Sign up</button>

          <div class="sign-up-with">
            <h2><span>Or Sign up with</span></h2>
            <div class="signUp-links">
              <div class="link-1">
                <img src="../images/google-logo.png" alt="" />
              </div>
            </div>
          </div>

          <div class="log-in-link form-link" id="log-in-link">
            <p>
              Already have an account?
              <a href="#" id="go-to-login">Log in here</a>
            </p>
          </div>
        </form>
      </div>
    </div>

    <div class="popup logInForm">
      <div class="popup-content">
        <div class="title">
          <div class="close-btn logIn-close-btn">
            <i class="fa-regular fa-circle-xmark"></i>
          </div>
          <h2>log in</h2>
          <span>please log in to continue</span>
        </div>

        <form>
          <div class="data-field">
            <input type="text" placeholder="Enter your email or mob. number" />
            <input type="text" placeholder="Enter your password" />
          </div>

          <div class="f-pass">forgot password?</div>

          <div class="login-btn butn">Login</div>

          <div class="sign-up-link form-link" id="sign-up-link">
            <p>Not a member? <a href="#" id="go-to-signUp">Sign up here</a></p>
          </div>
        </form>
      </div>
    </div>

    <!--========== popUp end ==========-->

    <?php
      include '../main/footer/footer.php';
    ?>

    <!-- ========== JavaScript ========== -->

    <!-- ==========   JQUERY JS ========== -->
    <script
      src="https://code.jquery.com/jquery-3.7.1.js"
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"
    ></script>

    <!-- ==========   LIGHTSLIDER JS ========== -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"
      integrity="sha512-Gfrxsz93rxFuB7KSYlln3wFqBaXUc1jtt3dGCp+2jTb563qYvnUBM/GP2ZUtRC27STN/zUamFtVFAIsRFoT6/w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <script src="index.js"></script>
    <!-- <script src="/project/main/product.js"></script> -->

    <script>
      // document.getElementById("signUp").onclick = function () {
      //   window.location.href = "/project/signIn-LogIn/signUp.html";
      // };

      $(document).ready(function () {
        $("#autoWidth").lightSlider({
          autoWidth: true,
          loop: true,
          onSliderLoad: function () {
            $("#autoWidth").removeClass("cS-hidden");
          },
        });
      });
    </script>
  </body>
</html>
