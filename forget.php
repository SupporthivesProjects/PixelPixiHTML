<?php include 'includes/header.php'; ?>

<section class="login_section">

  <div class="container px-0">

    <div class="login_wrapper">

      <div class="login_card">

        <!-- Heading -->

        <div class="login_heading">

          <h1 class="login_title">
Reset your password          </h1>

          <p class="login_description">
Give us the email on your account and we will send you a link.          </p>

        </div>


        <!-- Form -->

        <form class="login_form"  style="gap: 32px;">

          <!-- Email -->

          <div class="login_field">

            <input type="email" id="loginEmail" name="email" class="login_input" placeholder="Email address" required>

          </div>

          <!-- Button -->
<button
    type="button"
    class="login_button"
    data-bs-toggle="modal"
    data-bs-target="#loginResetModal">

    <span>
        Send reset link
    </span>

    <span class="login_button_arrow">

        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="14"
            height="12"
            viewBox="0 0 14 12"
            fill="none">

            <path
                d="M0.899994 5.89999H12.9M7.89999 10.9L12.9 5.89999L7.89999 0.899994"
                stroke="currentColor"
                stroke-width="1.8"
                stroke-linecap="round"
                stroke-linejoin="round"/>

        </svg>

    </span>

</button>

        </form>


        <!-- Create account -->

        <div class="login_create">

          <span class="login_create_text">
Remembered it?          </span>

          <a href="#" class="login_create_link">
Back to sign in          </a>

        </div>

      </div>

    </div>

  </div>

</section>


<!-- =====================================================
     RESET PASSWORD MODAL
====================================================== -->

<div
    class="modal fade login_reset_modal"
    id="loginResetModal"
    tabindex="-1"
    aria-labelledby="loginResetModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content login_reset_modal_content">

            <div class="login_reset_modal_body">

                <!-- Check icon -->

                <div class="login_reset_success_icon">

                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M5 12.5L10 17.5L19 7.5" stroke="#EE2A63" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                </div>


                <!-- Heading -->

                <h2
                    class="login_reset_modal_title"
                    id="loginResetModalLabel">

                    Check your email

                </h2>


                <!-- Description -->

                <p class="login_reset_modal_description">

                    We have sent a reset link to
                    <span class="login_reset_email">
                        ada@example.com
                    </span>.
                    It works once and expires in an hour.

                </p>


                <!-- Back to sign in -->

                <button
                    type="button"
                    class="login_reset_back_button"
                    data-bs-dismiss="modal">

                    <span>
                        Back to sign in
                    </span>

                    <span class="login_reset_back_arrow">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="14"
                            height="12"
                            viewBox="0 0 14 12"
                            fill="none">

                            <path
                                d="M0.899994 5.89999H12.9M7.89999 10.9L12.9 5.89999L7.89999 0.899994"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"/>

                        </svg>

                    </span>

                </button>


                <!-- Resend -->

                <div class="login_reset_resend">

                    <span>
                        Nothing arrived?
                    </span>

                    <button
                        type="button"
                        class="login_reset_resend_button">

                        Send it again

                    </button>

                </div>

            </div>

        </div>

    </div>

</div>


<?php include 'includes/footer.php'; ?>