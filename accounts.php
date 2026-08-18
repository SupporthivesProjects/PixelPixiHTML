<?php include 'includes/header.php'; ?>

  <section class="account-dashboard">
    <div class="account-inner container">
        <div class="accounts-text">
            <h1 class="a-txtb" id="accountTitle">
                
            </h1>
            <p class="a-txtn" id="accountDescription">
                
            </p>
        </div>
        <div class="acc-dashboard">
            <div class="acc-side-tabs nav flex-column nav-pills">
                <button class="acc-buttons active" data-bs-toggle="pill" data-bs-target="#students" data-title="Your downloads" data-description="Nothing in here yet.">Downloads</button>
                <button class="acc-buttons" data-bs-toggle="pill" data-bs-target="#Invoices" data-title="Your invoices" data-description="One invoice per order, downloadable whenever your accountant asks.">Invoices</button>
                <button class="acc-buttons" data-bs-toggle="pill" data-bs-target="#Your-details" data-title="Your details" data-description="Access to all your details, ready to be updated whenever needed.">Your details</button>
                <button class="acc-buttons" data-bs-toggle="pill" data-bs-target="#Sign-out" data-title="Sign out" data-description="Sign out securely from your account.">Sign out</button>
            </div>
            <div class="panel-content tab-content w-100">
            <div class="tab-pane fade show active" id="students">
                <div class="empty-invoices">
                    <img src="img/empty-downloads.png" alt="">
                    <h1 class="ydt-txt">No invoices yet</h1>
                    <p class="emp-inv">Anything you buy shows up here straight away, and stays <br>
                        here. Nothing expires.
                    </p>
                    <a class="btn btn-login" href="signup.php">Browse the shop <img src="img/arrow-right.svg" alt="" class="img-fluid"></a>
                </div>
            </div>
            <div class="tab-pane w-100 fade" id="Invoices">
                    <div class="invoice-table">
                        <div class="black-line d-none d-md-flex">
                            <p>REFERENCE</p>
                            <p>DATE</p>
                            <p>ITEMS</p>
                            <p>TOTAL</p>
                            <p>INVOICE</p>
                        </div>
                        <div class="white-line">
                            <p>PX-2026-0148</p>
                            <p>14 Jul 2026</p>
                            <p>HTML 101 Kickstart</p>
                            <p>$95.83</p>
                            <button class="invoice-btn">invoice <span style="height:20px;width:20px;">&#x2192;</span></button>
                        </div>
                        <div class="white-line">
                            <p>PX-2026-0112</p>
                            <p>2 Jun 2026</p>
                            <p>Your First Website, WP <br>
                                Video Focus</p>
                            <p>$47.61</p>
                            <button class="invoice-btn">invoice <span style="height:20px;width:20px;">&#x2192;</span></button>
                        </div>
                    </div>
            </div>
            <div class="tab-pane fade" id="Your-details">
                <form action="" class="your-detail">
                    <h1 class="ydt-txt">Your details</h1>
                    <div class="y-inp-box">
                        <div class="y-inp-line">
                            <input type="text" name="" value="" placeholder="First name" class="ydet-inp">
                            <input type="text" name="" value="" placeholder="Second name" class="ydet-inp">
                        </div>
                        <div class="y-inp-line">
                            <input type="text" name="" value="" placeholder="Email address" class="ydet-inp">
                            <input type="phone" name="" value="" placeholder="Phone number" class="ydet-inp">
                        </div>
                        <div class="y-inp-line">
                            <input type="password" name="" value="" placeholder="Current password" class="ydet-inp">
                            <input type="password" name="" value="" placeholder="New password" class="ydet-inp">
                        </div>
                    </div>
                    <h1 class="ydt-txt">Your billing address</h1>
                    <div class="y-inp-box">
                        <div class="y-inp-line">
                            <input type="text" name="" value="" placeholder="Address line 1" class="ydet-inp">
                            <input type="text" name="" value="" placeholder="Address line 2" class="ydet-inp">
                        </div>
                        <div class="y-inp-line">
                            <input type="text" name="" value="" placeholder="City" class="ydet-inp">
                            <input type="phone" name="" value="" placeholder="Postcode" class="ydet-inp">
                        </div>
                        <div class="y-inp-line">
                            <select name="" id="" class="ydet-inp form-select">
                                <option value="" selected disabled>Country</option>
                                <option value="">United Kingdom</option>
                                <option value="">india</option>
                                <option value="">australia</option>
                            </select>
                        </div>
                    </div>
                    <div class="ydet-buttons">
                        <button class="ydet-btn">
                            Save changes
                        </button>
                    </div>
                </form>
            </div> 
            <div class="tab-pane w-100 fade" id="Sign-out">
                sign out
            </div>
            </div>
        </div>
  </section>




<script>

document.addEventListener("DOMContentLoaded", function () {

    const title = document.getElementById("accountTitle");
    const description = document.getElementById("accountDescription");

    const tabs = document.querySelectorAll(".acc-buttons");


    function updateAccountHeader(tab) {

        title.textContent = tab.dataset.title;
        description.textContent = tab.dataset.description;

    }


    /*
    Find whichever tab is ACTUALLY active
    when the page loads.
    */

    const activeTab = document.querySelector(
        ".acc-buttons.active"
    );

    if (activeTab) {
        updateAccountHeader(activeTab);
    }


    /*
    Update when Bootstrap switches tabs.
    */

    tabs.forEach(function (tab) {

        tab.addEventListener("shown.bs.tab", function (event) {

            updateAccountHeader(event.target);

        });

    });

});

</script>
<?php include 'includes/footer.php'; ?>