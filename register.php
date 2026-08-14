<?php include 'includes/header.php'; ?>

<section class="regi_section">

  <div class="container px-0">

    <div class="login_wrapper">

      <div class="login_card">

        <!-- Heading -->

        <div class="login_heading">

          <h1 class="login_title">
            Create an account </h1>

          <p class="login_description">
            One account holds every product you buy and every invoice. </p>

        </div>


        <!-- Form -->

        <form class="login_form">

          <!-- Full name -->

          <div class="login_field">

            <input type="email" id="loginEmail" name="email" class="login_input" placeholder="Full name address"
              required>

          </div>

          <div class="login_field">

            <input type="email" id="loginEmail" name="email" class="login_input" placeholder="Email address" required>

          </div>

          <div class="login_field">

            <input type="email" id="loginEmail" name="email" class="login_input" placeholder="Password address"
              required>

          </div>


          <!-- Password -->

          <div class="login_field">

            <input type="password" id="loginPassword" name="password" class="login_input" placeholder="Confirm password"
              required>

          </div>


          <!-- Remember / Forgot -->

          <div class="login_terms">

            <input type="checkbox" id="loginTerms" class="login_terms_checkbox">

            <label for="loginTerms" class="login_terms_label">

              I agree to the
              <a href="#" class="login_terms_link">
                Terms &amp; Conditions
              </a>
              and the
              <a href="#" class="login_terms_link">
                Privacy Policy
              </a>.

            </label>

          </div>
          
          <div class="recpatcha">
          <img src="./img/recaptacha.png" alt="" class="img-fluid d-lg-none d-md-none d-block">

          </div>

          <!-- Button -->

          <button type="submit" class="login_button">

            <span>
Create account            </span>

            <span class="login_button_arrow">

              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none">

                <path d="M0.899994 5.89999H12.9M7.89999 10.9L12.9 5.89999L7.89999 0.899994" stroke="currentColor"
                  stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />

              </svg>

            </span>

          </button>

        </form>


        <!-- Create account -->

        <div class="login_create">

          <span class="login_create_text">
Already have an account?          </span>

          <a href="#" class="login_create_link">
Sign in          </a>

        </div>

      </div>

    </div>

  </div>

</section>



<?php include 'includes/footer.php'; ?>