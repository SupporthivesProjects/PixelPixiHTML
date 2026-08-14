<?php include 'includes/header.php'; ?>

<section class="login_section">

  <div class="container px-0">

    <div class="login_wrapper">

      <div class="login_card">

        <!-- Heading -->

        <div class="login_heading">

          <h1 class="login_title">
            Sign in
          </h1>

          <p class="login_description">
            Your downloads and invoices live in here.
          </p>

        </div>


        <!-- Form -->

        <form class="login_form">

          <!-- Email -->

          <div class="login_field">

            <input type="email" id="loginEmail" name="email" class="login_input" placeholder="Email address" required>

          </div>


          <!-- Password -->

          <div class="login_field">

            <input type="password" id="loginPassword" name="password" class="login_input" placeholder="Password"
              required>

          </div>


          <!-- Remember / Forgot -->

          <div class="login_options">

            <label class="login_remember">

              <input type="checkbox" class="login_checkbox">

              <span>
                Keep me signed in
              </span>

            </label>


            <a href="#" class="login_forgot">
              Forgot your password?
            </a>

          </div>


          <!-- Button -->

          <button type="submit" class="login_button">

            <span>
              Sign in
            </span>

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
            New here?
          </span>

          <a href="#" class="login_create_link">
            Create an account
          </a>

        </div>

      </div>

    </div>

  </div>

</section>



<?php include 'includes/footer.php'; ?>