<!DOCTYPE html>
<link rel="shortcut icon" href="images/atuitslogo.png" type="image/x-icon" />
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ATUITS RESPONSIVE WEBSITE</title>

    <!-- Iconscout CDN -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css"
    />

    <!-- Google Fonts (MONTSERRAT) -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />

    <!-- CSS LINK -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/contact.css" />
  </head>
  <body>
   <-- <nav>
      <div class="container nav__container">
        <a href="index.php"><h4>
        <img
            src="images/atuits_new_logo.PNG"
            class="logo"
            alt="atuits_logo"
          />
        </h4></a>
        <ul class="nav__menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
        <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
      </div>
    </nav>
    <!-- END OF NAVBAR -->

    <section class="contact">
      <div class="container contact__container">
        <aside class="contact__aside">
          <div class="aside_image">
            <img src="./images/contact.svg" />
          </div>
          <h2>Contact Us</h2>
          <p>
            Asperiores veniam vel doloribus assumenda soluta blanditiis dolores
            qui voluptates, consequatur vitae.
          </p>
          <ul class="contact__details">
            <li>
              <i class="uil uil-phone-times"></i>
              <h5>+2335523456789</h5>
            </li>
            <li>
              <i class="uil uil-envelope"></i>
              <h5>suppor@egattor.com</h5>
            </li>
            <li>
              <i class="uil uil-location-point"></i>
              <h5>Accra, Ghana</h5>
            </li>
          </ul>
          <ul class="contact__socials">
            <li>
              <a href="https://facebook.com"
                ><i class="uil uil-facebook-f"></i
              ></a>
            </li>
            <li>
              <a href="https://instagram.com"
                ><i class="uil uil-instagram"></i
              ></a>
            </li>
            <li>
              <a href="https://twitter.com"><i class="uil uil-twitter"></i></a>
            </li>
            <li>
              <a href="https://linkedin.com"
                ><i class="uil uil-linkedin-alt"></i
              ></a>
            </li>
          </ul>
        </aside>


        <form class="contact__form">
            <div class="form__name">
                <input type="text" name="First Name" placeholder="First Name" required>
                <input type="text" name="Last Name" placeholder="Last Name" required>
                <input type="email" name="Email Address" placeholder="Your Email Address" required>
                <textarea name="Message" rows="7" placeholder="Message" required></textarea>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
        </form>

      </div>
    </section>


    
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

    <script src="./main.js"></script>
  </body>
</html>
