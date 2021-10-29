<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tastee Fast Food Restaurant</title>
  
  <!-- FONT AWESOME CDN LINK -->
  <link rel="stylesheet" 
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- CUSTOM CSS FILE LINK -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- GOOGLE FONT LINK -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
  
  <!-- HEADER SECTION STARTS -->

  <header>
      <a href="#" class="logo"><i class="fas fa-utensils"></i></a>

      <div id="menu-bar" class="fas fa-hamburger"></div>

      <nav class="navbar">
          <a href="#home">Home</a>
          <a href="#speciality">Speciality</a>
          <a href="#menu">Menu</a>
          <!--<a href="#review">Review</a>-->
          <a href="#order">Order</a>
      </nav>
  </header>

  <!-- HEADER SECTION STARTS -->

  <!-- HOME SECTION STARTS -->

    <section class="home" id="home">

      <div class="content">
        <h3>Tastee Delicacies</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis deleniti magnam adipisci! Aliquid, veritatis! Quas minus necessitatibus, repellat, optio fugiat fugit, deserunt esse quisquam quaerat numquam reprehenderit cum. Culpa.</p>

        <a href="#" class="btn">Order Now</a>
        
      </div>

      <div class="image">
        <img src="{{ asset('images/home-img.png') }}" alt="">
      </div>

    </section>

  <!-- HOME SECTION ENDS -->

  <!-- SPECIALITY SECTION STARTS -->

  <section class="speciality" id="speciality">

      <h1 class="heading"> Our <span>Speciality</span> </h1>

      <div class="box-container">

        <div class="box">
          <img class="image" src="{{ asset('images/s-img-1.jpg') }}" alt="">
          <div class="content">
            <img src="{{ asset('images/s-1.png') }}" alt="">
             <h3>Tastee Burger</h3>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nostrum cum adipisci eos sequi quos maxime tempore? Repellendus veniam temporibus cum ab voluptatem, ex voluptates? Reprehenderit pariatur harum error iure!</p>
          </div>
        </div>

        <div class="box">
          <img class="image" src="{{ asset('images/s-img-2.jpg') }}" alt="">
          <div class="content">
            <img src="{{ asset('images/s-2.png') }}" alt="">
             <h3>Tastee Pizza</h3>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nostrum cum adipisci eos sequi quos maxime tempore? Repellendus veniam temporibus cum ab voluptatem, ex voluptates? Reprehenderit pariatur harum error iure!</p>
          </div>
        </div>

        <div class="box">
          <img class="image" src=" {{ asset('images/s-img-3.jpg') }}" alt="">
          <div class="content">
            <img src=" {{ asset('images/s-3.png') }}" alt="">
             <h3>Ice Cream</h3>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nostrum cum adipisci eos sequi quos maxime tempore? Repellendus veniam temporibus cum ab voluptatem, ex voluptates? Reprehenderit pariatur harum error iure!</p>
          </div>
        </div>

        <div class="box">
          <img class="image" src="" alt="">
          <div class="content">
            <img src="{{ asset('images/s-4.png') }}" alt="">
             <h3>Chilled Drinks</h3>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nostrum cum adipisci eos sequi quos maxime tempore? Repellendus veniam temporibus cum ab voluptatem, ex voluptates? Reprehenderit pariatur harum error iure!</p>
          </div>
        </div>

        <div class="box">
          <img class="image" src="{{ asset('images/s-img-5.jpg') }}" alt="">
          <div class="content">
            <img src="{{ asset('images/s-5.png') }}" alt="">
             <h3>Tastee Pastries</h3>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nostrum cum adipisci eos sequi quos maxime tempore? Repellendus veniam temporibus cum ab voluptatem, ex voluptates? Reprehenderit pariatur harum error iure!</p>
          </div>
        </div>

        <div class="box">
          <img class="image" src="{{ asset('images/s-img-6.jpg') }}" alt="">
          <div class="content">
            <img src="{{ asset('images/s-6.png') }}" alt="">
             <h3>Breakfast</h3>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nostrum cum adipisci eos sequi quos maxime tempore? Repellendus veniam temporibus cum ab voluptatem, ex voluptates? Reprehenderit pariatur harum error iure!</p>
          </div>
        </div>

      </div>
  </section>

  <!-- SPECIALITY SECTION ENDS -->

  <!-- STEPS SECTION STARTS -->

  <section class="steps">

    <div class="box">
      <img src="{{ asset('images/step-1.jpg') }}" alt="">
      <h3>Make Your Choice</h3>
    </div>

    <div class="box">
      <img src="{{ asset('images/step-2.jpg') }}" alt="">
      <h3>Free and Fast Delivery</h3>
    </div>

    <div class="box">
      <img src="{{ asset('images/step-3.jpg') }}" alt="">
      <h3>Easy Payment</h3>
    </div>

    <div class="box">
      <img src="{{ asset('images/step-4.jpg') }}" alt="">
      <h3>Enjoy Your Meal</h3>
    </div>

  </section>

  <!-- STEPS SECTION ENDS -->

  <!-- MENU SECTION STARTS -->

  <section class="menu" id="menu">
    <h1 class="heading">Our <span>Menu</span> </h1>

    <div class="box-container">

      <div class="box">
        <img src="{{ asset('images/g-1.jpg') }}" alt="">
        <div class="content">
          <h3>Tasty Food</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
          <a href="#" class="btn">Order Now</a>
        </div>
      </div>

      <div class="box">
        <img src="{{ asset('images/g-2.jpg') }}" alt="">
        <div class="content">
          <h3>Tasty Food</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
          <a href="#" class="btn">Order Now</a>
        </div>
      </div>

      <div class="box">
        <img src="{{ asset('images/g-3.jpg') }}" alt="">
        <div class="content">
          <h3>Tasty Food</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
          <a href="#" class="btn">Order Now</a>
        </div>
      </div>

      <div class="box">
        <img src="{{ asset('images/g-4.jpg') }}" alt="">
        <div class="content">
          <h3>Tasty Food</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
          <a href="#" class="btn">Order Now</a>
        </div>
      </div>

      <div class="box">
        <img src="{{ asset('images/g-6.jpg') }}" alt="">
        <div class="content">
          <h3>Tasty Food</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
          <a href="#" class="btn">Order Now</a>
        </div>
      </div>

      <div class="box">
        <img src="{{ asset('images/g-7.jpg') }}" alt="">
        <div class="content">
          <h3>Tasty Food</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
          <a href="#" class="btn">Order Now</a>
        </div>
      </div>

    </div>

  </section>

  <!-- MENU SECTION ENDS -->

  <!-- ORDER SECTION STARTS -->

  <section class="order" id="order">
    <h1 class="heading">Order <span>Now</span> </h1>

    <div class="row">

      <div class="image">
        <img src="{{ asset('images/food-delivery.jpg') }}" alt="">
      </div>
      
      <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="inputBox">
          <input type="text" placeholder="Name" name="customer_name">
          <input type="email" placeholder="Email" name="customer_email">
        </div>

        <div class="inputBox">
          <input type="number" placeholder="Number" name="customer_number">
          <input type="text" placeholder="Meal Choice" name="product">
        </div>

        <textarea placeholder="Address" name="customer_address" id="" cols="30" rows="10"></textarea>

        <input type="submit" value="Order Now" class="btn">
        
      </form>

    </div> 

  </section>

  <!-- ORDER SECTION ENDS -->

  <!-- FOOTER SECTION STARTS -->
  <section class="footer">

      <div class="share">
          <a href="#" class="btn">Facebook</a>
          <a href="#" class="btn">Twitter</a>
          <a href="#" class="btn">Instagram</a>
      </div>

      
      <h1 class="credit"><span>Chakes Ezechi</span> &copy; 2021</h1>

  </section>
  <!-- FOOTER SECTION ENDS -->

  <!-- SCROLL TOP BUTTON-->
  <a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

  <!--LOADER-->
  <div class="loader-container">
      <img src="{{ asset('images/loader.gif') }}" alt="">
  </div>

  <!-- CUSTOM JS FILE LINK --> 
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>