<?php include '_top.php'; ?>

        <!-- Slider main container -->
<div class="swiper">
    
    <div class="swiper-wrapper">
        
      <div class="swiper-slide">
        <picture>
          <source media="(max-width: 560px)" srcset="images/square-ship.jpg" >
          <source media="(min-width: 561px)" srcset="images/ship.jpg">
          <img src="images/ship1.jpg" alt="Cruise Ship">
        </picture>
        <p><b>Cabot Cruises</b> -  Relax on one of our best ranked cruise ships</p>
      </div>
      <div class="swiper-slide">
        <picture>
          <source media ="(max-width: 560px)" srcset="images/square-beach.jpg">
          <source media ="(min-width: 561px)" srcset="images/beach.jpg">
          <img src="images/beach1.jpg" alt="Beach">
        </picture>
        <p><b>Sandy Beaches</b> - Stop at some of the best beaches in the world</p>
      </div>
      <div class="swiper-slide">
        <picture>
          <source media ="(max-width: 560px)" srcset="images/square-golf.jpg">
          <source media ="(min-width: 561px)" srcset="images/golf.jpg">
          <img src="images/golf1.jpg" alt="Mini Golf">
        </picture>
        <p><b>Activities</b> - Enjoy playing mini golf or other activities with your family</p>
      </div>
      <div class="swiper-slide">
        <picture>
          <source media ="(max-width: 560px)" srcset="images/square-pool.jpg">
          <source media ="(min-width: 561px)" srcset="images/pool.jpg">
          <img src="images/pool1.jpg" alt="Pool">
        </picture>
        <p><b>Deck Pool</b> - Swim anytime at the deck pool</p>
      </div>
      
      <!-- <div class="swiper-slide">
        <img src="images/ship.jpg" alt="Cruise Ship">
        <p><b>Cabot Cruises</b> -  Relax on one of our best ranked cruise ships</p>
    </div>
      <div class="swiper-slide">
        <img src="images/pool.jpg" alt="Swimming Pool">
        <p><b>Deck Pool</b> - Swim anytime at the deck pool</p>
    </div>
      <div class="swiper-slide">
        <img src="images/golf.jpg" alt="Mini Golf">
        <p><b>Activities</b> - Enjoy playing mini golf or other activities with your family</p>
    </div>
      <div class="swiper-slide">
        <img src="images/beach.jpg" alt="Beach">
        <p><b>Sandy Beaches</b> - Stop at some of the best beaches in the world</p>
    </div> -->
   </div>
    </div>
    
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <h2>Recent Blog Activities</h2>
    <div class = "grid flexed">
        
        <div class="card small-6 medium-5 large-3">
            <figure>
                <img class = "blogs" src="images/blog1.jpg" alt="Cruise Slide">
            </figure>
            <h2>Funnest Vacation Ever!</h2>
            <p>January 20. 2022</p>
        </div>
        <div class="card small-6 medium-5 large-3">
            <figure>
                <img class = "blogs" src="images/blog2.jpg" alt="Cruise Clipart">
            </figure>
            <h2>Dreams come true on cruises</h2>
            <p>March 14, 2022</p>
        </div>
        <div class="card small-6 medium-5 large-3">
            <figure>
                <img class = "blogs" src="images/blog3.jpg" alt="Family on Beach">
            </figure>
            <h2>Best family trip</h2>
            <p>September 6, 2022</p>
        </div>
        <div class="card small-6 medium-5 large-3">
            <figure>
                <img class = "blogs" src="images/blog4.jpg" alt="Sunny Beach">
            </figure>
            <h2>The perfect winter get away</h2>
            <p>December 1, 2022</p>
        </div>
    </div>
<br>
<div class="information">
    <div class="contact small-12 medium-6 large-3">
        <h2>Contact Us</h2>
        <h3>CABOT CRUISES</h3>
        <div><a href="https://www.google.com/maps/place/Atlantic+Dunes+Park/@26.4445768,-80.0373794,13.44z/data=!4m6!3m5!1s0x88d8e07bba62f3ef:0x7df6ee2e23e0b08e!8m2!3d26.4420229!4d-80.0608266!16s%2Fg%2F1hf076c5f">
        <h3>1605 S Ocean Blvd,</h3>
        <h3>Delray Beach, FL 33483</h3>
        </a>
        </div>
        <br>
        <h3>Phone:</h3>
        <div id="phone"><a href="tel:18004442343">1-800-444-2343</a></div>
        <br>
        <h3>Hours of Operation:</h3>
        <h3>Monday - Friday 9am - 4pm est</h3>
    </div>
    <div class="news-letter small-12 medium-6 large-4">
        <h2>News Letter</h2>
        <p>Subscribe to our email list and stay up-to-date with our hottest offers and latest specials.</p>
        <input type="email" placeholder="example@gmail.com" required="true">
        <button>Subscribe</button>
    </div>
    <div class="why small-12 medium-12 large-4">
        <h2>Why Cabot Cruises</h2>
        <p>Cabot Cruises is a travel agency providing the best cruise deals on our online travel website. We can help you with all inclusive vacations including discounted cruises</p>
        <p>We do not sell travel to residents of Delaware, Iowa, Florida, Hawaii, and Washington state because those states are just weird.
            If you are a resident of one of these states, call your congressmen and tell them to change the regulations.
        </p>
    </div>
</div>


    <div class="social-wrapper">
        <div class = "flexed social">
            
            
                <a href = "#" class="fa-brands fa-square-facebook"></a>
            
                <a href = "#" class="fa-brands fa-square-youtube"></a>
            
                <a href = "#" class="fa-brands fa-square-instagram"></a>
          
                <a href="#" class="fa-brands fa-square-pinterest"></a>
            
                <a href = "#" class="fa-brands fa-square-twitter"></a>
            
        </div>
    </div>
</div><!-- end main wrapper -->

<?php include '_bot.php'; ?>
   