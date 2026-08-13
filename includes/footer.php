
<footer class="footer-bg">
   <div class="container p-mo">
    <div class="col">
        <div class="row footer-top">
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="footer-left">
                    <div class="footer-logo">
                        <img src="./img/logos.svg" alt="" class="img-fluid">
                    </div>
                    <p>
                        Web development eBooks, courses, software and 1 on 1 mentoring from 
                        two developers who would rather show you the whole file.
                    </p>
                    <div>
                         <img src="./img/payment-logos.svg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="footer-right">
                    <div class="footer-menu">
                        <h5>INFORMATION</h5>
                        <ul>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">1 on 1</a>
                            </li>
                            <li>
                                <a href="#">Shop</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-menu">
                        <h5>HELPFUL LINKS</h5>
                        <ul>
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                            <li>
                                <a href="#">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">My Account</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-menu">
                        <h5>COMPANY DETAILS</h5>
                        <ul>
                            <li>
                                <a href="#">PixelPixi Ltd</a>
                            </li>
                            <li>
                                <a href="#">128 Fore Street</a>
                            </li>
                            <li>
                                <a href="#">Exeter</a>
                            </li>
                            <li>
                                <a href="#">Devon EX4 3AN</a>
                            </li>
                            <li>
                                <a href="#">United Kingdom</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
   <div class="container p-mo">
    <div class="col">
        <div class="row footer-bottom">
            <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                <p>© 2026 Blueforgebranding.</p>
            </div>
            <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                <ul>
                    <li>
                        <a href="tc.php">Terms & conditions</a>
                    </li>
                    <li>
                        <a href="pp.php">Privacy policy</a>
                    </li>
                    <li>
                        <a href="pp.php">Cookies</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
   </div>
       
</footer>
</div>
    <script src="uiframeworks/js/jquery.min.js"></script>
    <script src="uiframeworks/js/bootstrap.bundle.min.js"></script>
    <script src="uiframeworks/js/popper.min.js"></script>
    <script src="uiframeworks/js/slick.js"></script>
    <script src="uiframeworks/js/owl.carousel.js"></script>
    <script src="uiframeworks/js/swiper-bundle.min.js"></script>
    <script src="uiframeworks/js/flickity.pkgd.min.js"></script>   
    <script src="uiframeworks/js/aos.js"></script>
    <script src="./uiframeworks/js/home-js.js"></script>
    <script>
      $(document).ready(function () {
          $(".navbar-toggler").click(function () {
              $(this).toggleClass("is-active");
              $("header").toggleClass("header-is-active");

              let logo = $("#logo");
              if (logo.attr("src") === "./img/logo.svg") {
                  logo.attr("src", "./img/logo.svg");
              } else {
                  logo.attr("src", "./img/logo.svg");
              }
          });
      });
    </script>
    <script>
        const header = document.querySelector('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
     <script>
        const dropdownBtns = document.querySelectorAll(
            '.dropdown-toggle-cur, .dropdown-toggle-cart'
        );

        function updateOverlay() {
            const anyOpen =
                document.querySelector('.dropdown-menu.show') !== null;

            document.body.classList.toggle('dropdown-open', anyOpen);
        }

        dropdownBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                setTimeout(updateOverlay, 50);
            });
        });

        document.addEventListener('click', () => {
            setTimeout(updateOverlay, 50);
        });
    </script>

    <script>
      AOS.init();
    </script>
</body>
</html>
  