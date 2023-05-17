<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <section id="Home">
       @yield('content')

        <div class="main">

            <div class="men_text">
                <h1>Découvrez et reserver le meilleur restaurant</h1>
                <div class="searchform">
                    <form method="GET" action="#">
                        @csrf
  <div class="row">
    <div class="col-sm-6 col-md-4">
      <input type="text" id="searchbar" name="searchbar" placeholder="Rechercher un restaurant" required style="margin-left: 50px; padding: 17px 90px;font-size:17px;background: #fff;overflow: hidden;box-shadow: none !important;; border: 1px rgba(141, 136, 136, 0.247) solid;border-radius: 10px; display: flex; align-items: center;">
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12" style="margin-left: 50px; margin-top:15px;">
      <button type="submit" class="button-primary" style=" padding: 15px 145px; background-color:#fac031; border:none;box-shadow: none !important; border-radius:10px;color:white;font-size:17px;">Rechercher  <i class="fa-solid fa-magnifying-glass"></i></button>
    </div>
  </div>
</form>

                </div>
            </div>
            

            <div class="main_image">
                <img src="image/cote.webp">
            </div>
            

        </div>
       

    </section>



   


    <!--Menu-->

    <div class="menu" id="Menu">
        <h1>Our<span>Menu</span></h1>

        <div class="menu_box">
            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/buger.jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>Buger</h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum assumenda voluptates
                    </p>
                    <h3>Prix moyen$20.00</h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="menu_btn">Order Now</a>
                </div>

            </div> 
            
            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/pasta.jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>pasta</h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum assumenda voluptates
                    </p>
                    <h3>$20.00</h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="menu_btn">Order Now</a>
                </div>

            </div> 

            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/lasagna.webp">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>lasagna</h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum assumenda voluptates
                    </p>
                    <h3>$20.00</h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="menu_btn">Order Now</a>
                </div>

            </div> 

            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/chocolate_Drink.jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>Drink</h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum assumenda voluptates
                    </p>
                    <h3>$20.00</h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="menu_btn">Order Now</a>
                </div>

            </div> 

            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/pizza.jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>pizza</h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum assumenda voluptates
                    </p>
                    <h3>$20.00</h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="menu_btn">Order Now</a>
                </div>

            </div> 

     

            

            

            

           

            
            
        </div>

    </div>


    <!--Order-->

    <div class="order" id="Order">
        <h1><span>Order</span>Now</h1>

        <div class="order_main">

            <div class="order_image">
                <img src="image/order_image.png">
            </div>

            <form method="POST" action="#">
                @csrf

                <div class="input">
                    <p>Name</p>
                    <input type="text" placeholder="you name">
                </div>

                <div class="input">
                    <p>Email</p>
                    <input type="email" placeholder="you email">
                </div>

                <div class="input">
                    <p>Number</p>
                    <input placeholder="you number">
                </div>

                <div class="input">
                    <p>How Much</p>
                    <input type="number" placeholder="how many order">
                </div>

                <div class="input">
                    <p>You Order</p>
                    <input placeholder="food name">
                </div>

                <div class="input">
                    <p>Address</p>
                    <input placeholder="you Address">
                </div>

                <a href="#" class="order_btn">Order Now</a>

            </form>

        </div>

    </div>



  


    <!--Footer-->

    <footer>
        <div class="footer_main">

            <div class="footer_tag">
                <h2>Location</h2>
                <p>Sri Lanka</p>
                <p>USA</p>
                <p>India</p>
                <p>Japan</p>
                <p>Italy</p>
            </div>

            <div class="footer_tag">
                <h2>Quick Link</h2>
                <p>Home</p>
                <p>About</p>
                <p>Menu</p>
                <p>Gallary</p>
                <p>Order</p>
            </div>

            <div class="footer_tag">
                <h2>Contact</h2>
                <p>+94 12 3456 789</p>
                <p>+94 25 5568456</p>
                <p>johndeo123@gmail.com</p>
                <p>foodshop123@gmail.com</p>
            </div>

            <div class="footer_tag">
                <h2>Our Service</h2>
                <p>Fast Delivery</p>
                <p>Easy Payments</p>
                <p>24 x 7 Service</p>
            </div>

            <div class="footer_tag">
                <h2>Follows</h2>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>

        </div>

        <p class="end">Design by<span><i class="fa-solid fa-face-grin"></i> WT Master Code</span></p>

    </footer>



    
</body>
</html>