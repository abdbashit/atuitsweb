<footer>
      <div class="container footer__container">
        <div class="footer__1">
          <a href="index.php" class="footer__logo"><h4>ATUITS</h4></a>
          <p>
            Technology for development
          </p>
        </div>

        <div class="footer__2">
          <h4>Permalinks</h4>
          <ul class="Permalinks">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php"></a>About</li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>

        <div class="footer__3">
          <h4>Primary</h4>
          <ul class="privacy">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms and Conditions</a></li>
            <li><a href="#">Refund Policy</a></li>
          </ul>
        </div>

        <div class="footer__4">
          <h4>Contact Us</h4>
          <div>
            <p>+233 506678606</p>
            <p>abashitm@gmail.com</p>
          </div>

          <ul class="footer__socials">
            <li>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
            </li>
            <li>
              <a href="#"><i class="uil uil-instagram-alt"></i></a>
            </li>
            <li>
              <a href="#"><i class="uil uil-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="uil uil-linkedin-alt"></i></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="footer__copyright">
        <small>Copyright &copy; ATUITS Website 2024</small>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./main.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        //When windows width is >= 600px
        breakpoints: {
          600: {
            slidesPerView: 2,
          },
        },
      });
    </script>
  </body>
</html>
