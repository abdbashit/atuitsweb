<!DOCTYPE html>
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
    <link rel="stylesheet" href="css/about.css" />
  </head>
  <body>
    <nav>
      <div class="container nav__container">
        <a href="index.php"><h4>ATUITS</h4></a>
        <ul class="nav__menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
        <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
      </div>
    </nav>
    <!-- END OF NAVBAR -->

    <section class="about__achievements">
      <div class="container about__achievements-container">
        <div class="about__achievements-left">
          <img src="./images/Wini Macdan Award.jpg" alt="" />
        </div>

        <div class="about__achievements-right">
          <h1>Achievements</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam
            quisquam minima reiciendis provident fuga magnam. Magni earum
            expedita ratione ut amet ipsam voluptatem voluptate explicabo
            exercitationem. Perspiciatis maiores quasi adipisci.
          </p>

            <div class="achievements__cards">
              <article class="achievements__card">
                <span class="achievements__icon">
                  <i class="uil uil-video"></i>
                </span>
                <h3>450+</h3>
                <p>Courses</p>
              </article>

              <article class="achievements__card">
                <span class="achievements__icon">
                  <i class="uil uil-users-alt"></i>
                </span>
                <h3>79,000+</h3>
                <p>Students</p>
              </article>

              <article class="achievements__card">
                <span class="achievements__icon">
                  <i class="uil uil-trophy"></i>
                </span>
                <h3>26+</h3>
                <p>Awards</p>
              </article>

            </div>
        </div>
      </div>
    </section>
    <!---------- END OF ACHIEVEMENTS ----- -->



    <section class="team">
      <h2>Meet Our Team</h2>
      <div class="container team__container">
        <article class="team__member">
          <div class="team__member-image">
            <img src="./images/Dr. Ernest Ganaa.PNG" alt="">
          </div>
          <div class="team__member-info">
            <h4>Dr. ERNEST D GANAA</h4>
            <p>Dean, FAST</p>
          </div>
          <div class="team__member-socials">
            <a href="eganaa@dhltu.edu.gh" target="_blank"><i class="uil uil-instagram"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
            <a href="https://www.linkedin.com/in/ernest-d-ganaa-phd-msc-bsc-232b896b/" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
          </div>
        </article>

        <article class="team__member">
          <div class="team__member-image">
            <img src="./images/Mr. Alhaj ZAKARIA ISMAIL MAHAMUD.PNG" alt="">
          </div>
          <div class="team__member-info">
            <h4>Mr. Alhaj ZAKARIA ISMAIL MAHAMUD</h4>
            <p>H.O.D</p>
          </div>
          <div class="team__member-socials">
            <a href="zimahamud@dhltu.edu.gh" target="_blank"><i class="uil uil-instagram"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
            <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
          </div>
        </article>

        <article class="team__member">
          <div class="team__member-image">
            <img src="./images/Mr. RICHARD OSEI SAKYI.PNG" alt="">
          </div>
          <div class="team__member-info">
            <h4>Mr. RICHARD OSEI SAKYI</h4>
            <p>Snr. Lecturer</p>
          </div>
          <div class="team__member-socials">
            <a href="rosaki@dhltu.edu.gh" target="_blank"><i class="uil uil-instagram"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
            <a href="https://www.linkedin.com/in/richard-osei-54a608b1/?originalSubdomain=gh" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
          </div>
        </article>

        <article class="team__member">
          <div class="team__member-image">
            <img src="./images/Mr. AFRIYEI ROCKSON.PNG" alt="">
          </div>
          <div class="team__member-info">
            <h4>Mr. ROCKSON KWASI AFRIYIE</h4>
            <p>Snr. Lecturer</p>
          </div>
          <div class="team__member-socials">
            <a href="arockson@dhltu.edu.gh" target="_blank"><i class="uil uil-instagram"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
            <a href="https://www.linkedin.com/in/rockson-kwasi-afriyie-a90700263/?originalSubdomain=gh" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
          </div>
        </article>

        <article class="team__member">
          <div class="team__member-image">
            <img src="./images/tm8.jpg" alt="">
          </div>
          <div class="team__member-info">
            <h4>Mr. IDDRISU BAMIE MUBASHIR-AHMED</h4>
            <p>Researcher</p>
          </div>
          <div class="team__member-socials">
            <a href="ibmahmed@dhltu.edu.gh" target="_blank"><i class="uil uil-instagram"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
            <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
          </div>
        </article>

        <article class="team__member">
          <div class="team__member-image">
            <img src="./images/tm6.jpg" alt="">
          </div>
          <div class="team__member-info">
            <h4>Mr. FORDJOUR ANDREWS KWADWO</h4>
            <p>Expert Tutor</p>
          </div>
          <div class="team__member-socials">
            <a href="fakwadwo@dhltu.edu.gh" target="_blank"><i class="uil uil-instagram"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
            <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
          </div>
        </article>

        <article class="team__member">
          <div class="team__member-image">
            <img src="./images/Alhassan Seiba.PNG" alt="">
          </div>
          <div class="team__member-info">
            <h4>Mr. ALHASSAN SEIBA</h4>
            <p>AI & Cyber Security</p>
          </div>
          <div class="team__member-socials">
            <a href="aseiba@dhltu.edu.gh" target="_blank"><i class="uil uil-instagram"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
            <a href="https://www.linkedin.com/in/alhassan-seiba-5447751a7/?original_referer=https%3A%2F%2Fwww%2Egoogle%2Ecom%2F&originalSubdomain=gh" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
          </div>
        </article>

        <article class="team__member">
          <div class="team__member-image">
            <img src="./images/Mr. KWASI DANSO.PNG" alt="">
          </div>
          <div class="team__member-info">
            <h4>Mr. KWASI ANTWI DANSO</h4>
            <p>System Administrator</p>
          </div>
          <div class="team__member-socials">
            <a href="kadanso@dhltu.edu.gh" target="_blank"><i class="uil uil-instagram"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
            <a href="https://www.linkedin.com/in/kwasi-owusu-danso-9b2362100/" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
          </div>
        </article>

      </div>
    </section>
    <!---------- END OF TEAM ----- -->


    <footer>
      <div class="container footer__container">
        <div class="footer__1">
          <a href="index.php" class="footer__logo"><h4>ATUITS</h4></a>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt,
            ad?
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
