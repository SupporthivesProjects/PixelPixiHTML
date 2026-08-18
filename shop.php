<?php include 'includes/header.php'; ?>





        <section style="padding: 0px;">
            <div class="top_shop_div">
                <div class="container p-0">
                    <h1>Everything we make, in one place.</h1>
                    <h2>Filter by what you want to learn and how you want to learn it. Every product is a one off
                        purchase, downloaded the moment you pay, yours to keep.</h2>

                    <div class="upper_search_div">
                        <input type="text" placeholder="Search the shop" class="search_input_t">
                        <div class="only_twobutton_flip">
                            <button class="btn fliter_button_t" id="filterButton_t">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                    fill="none">
                                    <path d="M2.5 4.5H15.5M5 9H13M7.5 13.5H10.5" stroke="#141222" stroke-width="1.6"
                                        stroke-linecap="round" />
                                </svg>
                                Filters
                                <div class="circle_filter">
                                    2
                                </div>

                            </button>


                            <div class="custom-dropdown_t custom_width_t_with_color">

                                <button type="button" class="dropdown-toggle-custom_t custom_color_t">
                                    <span class="dropdown-selected_t">Sort by: Best sellers</span>

                                    <svg class="dropdown-arrow_t" xmlns="http://www.w3.org/2000/svg" width="12"
                                        height="7" viewBox="0 0 12 7" fill="none">
                                        <path d="M0.900391 0.900024L5.90039 5.90002L10.9004 0.900024" stroke="#141222"
                                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>

                                <div class="dropdown-menu-custom_t">
                                    <div class="dropdown-option_t">Option 1</div>
                                    <div class="dropdown-option_t">Option 2</div>
                                    <div class="dropdown-option_t">Option 3</div>
                                    <div class="dropdown-option_t">Option 4</div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="new_drop_down_wala_div" id="filterDropdown_t">

                        <div class="top_drop_div">
                            <div class="left_top_drop_div">
                                <div class="price-label_t">PRODUCT TYPE</div>
                                <div class="below_everythignt">
                                    <div class="uske_andar_single">
                                        <div class="singluar_t">
                                            <input class="form-check-input t_wala" type="checkbox" value="" id="checkDefault">
                                            <h4>All types</h4>
                                            <p>47</p>
                                        </div>
                                        <div class="singluar_t">
                                            <input class="form-check-input t_wala" type="checkbox" value="" id="checkDefault">
                                            <h4>E-Book</h4>
                                            <p>47</p>
                                        </div>
                                    </div>
                                    <div class="uske_andar_single">
                                        <div class="singluar_t">
                                            <input class="form-check-input t_wala" type="checkbox" value="" id="checkDefault">
                                            <h4>Software</h4>
                                            <p>47</p>
                                        </div>
                                        <div class="singluar_t">
                                            <input class="form-check-input t_wala" type="checkbox" value="" id="checkDefault">
                                            <h4>Templates</h4>
                                            <p>47</p>
                                        </div>
                                    </div>
                                    <div class="uske_andar_single">
                                        <div class="singluar_t">
                                            <input class="form-check-input t_wala" type="checkbox" value="" id="checkDefault">
                                            <h4>Video</h4>
                                            <p>47</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right_top_drop_div">
                                <div class="price-filter_t">

                                    <div class="price-label_t">PRICE</div>

                                    <div class="slider_t">
                                        <div class="slider-track_t"></div>
                                        <div class="slider-range_t" id="sliderRange_t"></div>

                                        <input type="range" id="minRange_t" min="1" max="100" value="10">

                                        <input type="range" id="maxRange_t" min="1" max="100" value="50">
                                    </div>

                                    <div class="price-inputs_t">

                                        <div class="input-wrapper_t">
                                            <span>$</span>
                                            <input type="number" id="minPrice_t" value="10" min="1" max="100">
                                        </div>

                                        <span class="to_t">to</span>

                                        <div class="input-wrapper_t">
                                            <span>$</span>
                                            <input type="number" id="maxPrice_t" value="50" min="1" max="100">
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="divider_t">

                        </div>
                        <div class="bottom_drop_div">
                            <p>Clear all filters</p>
                            <div class="one_more_div">
                                <h6>
                                    12 products match
                                </h6>
                                <button class="btn red_cart_buttont">
                                    Apply filters
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                        fill="none">
                                        <path d="M4 10H16M11 15L16 10L11 5" stroke="white" stroke-width="1.8"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="bottom_search_div">
                        <div class="left_bottom_search_div">
                            <div class="capcsule_t">
                                E-Book
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                    <path d="M3.5 3.5L10.5 10.5M10.5 3.5L3.5 10.5" stroke="#EE2A63" stroke-width="1.8" stroke-linecap="round"/>
                                  </svg>
                            </div>
                            <div class="capcsule_t">
                                $10 to $50
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                    <path d="M3.5 3.5L10.5 10.5M10.5 3.5L3.5 10.5" stroke="#EE2A63" stroke-width="1.8" stroke-linecap="round"/>
                                  </svg>
                            </div>
                            <div class="capcsule_t">
                                Software
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                    <path d="M3.5 3.5L10.5 10.5M10.5 3.5L3.5 10.5" stroke="#EE2A63" stroke-width="1.8" stroke-linecap="round"/>
                                  </svg>
                            </div>
                            <h3>Clear all</h3>
                        </div>
                        <p>Showing 12 of 47 products</p>
                    </div>
                </div>
            </div>
            <div class="middle_shop_div">
                <div class="container p-0">
                    <div class="top_card_main_div">
                        <div class="eachbox_si3">
                            <div class="top_eachbox_si3">

                            </div>
                            <div class="bottom_eachbox_si3">
                                <h1>E-BOOK</h1>
                                <h2>Your First Website</h2>
                                <p>A five day crash course that takes you from nothing to a live site, with every step
                                    written out.</p>
                                <div class="very_bttombox_si3">
                                    <h3>$16.44</h3>
                                    <button class="btn second_red_buttont">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="eachbox_si3">
                            <div class="top_eachbox_si3">

                            </div>
                            <div class="bottom_eachbox_si3">
                                <h1>E-BOOK</h1>
                                <h2>Your First Website</h2>
                                <p>A five day crash course that takes you from nothing to a live site, with every step
                                    written out.</p>
                                <div class="very_bttombox_si3">
                                    <h3>$16.44</h3>
                                    <button class="btn second_red_buttont">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="eachbox_si3">
                            <div class="top_eachbox_si3">

                            </div>
                            <div class="bottom_eachbox_si3">
                                <h1>E-BOOK</h1>
                                <h2>Your First Website</h2>
                                <p>A five day crash course that takes you from nothing to a live site, with every step
                                    written out.</p>
                                <div class="very_bttombox_si3">
                                    <h3>$16.44</h3>
                                    <button class="btn second_red_buttont">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="eachbox_si3">
                            <div class="top_eachbox_si3">

                            </div>
                            <div class="bottom_eachbox_si3">
                                <h1>E-BOOK</h1>
                                <h2>Your First Website</h2>
                                <p>A five day crash course that takes you from nothing to a live site, with every step
                                    written out.</p>
                                <div class="very_bttombox_si3">
                                    <h3>$16.44</h3>
                                    <button class="btn second_red_buttont">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="eachbox_si3">
                            <div class="top_eachbox_si3">

                            </div>
                            <div class="bottom_eachbox_si3">
                                <h1>E-BOOK</h1>
                                <h2>Your First Website</h2>
                                <p>A five day crash course that takes you from nothing to a live site, with every step
                                    written out.</p>
                                <div class="very_bttombox_si3">
                                    <h3>$16.44</h3>
                                    <button class="btn second_red_buttont">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="eachbox_si3">
                            <div class="top_eachbox_si3">

                            </div>
                            <div class="bottom_eachbox_si3">
                                <h1>E-BOOK</h1>
                                <h2>Your First Website 43dew 43dew 43dew </h2>
                                <p>A five day crash course that takes you from nothing to a live site, with every step
                                    written out.</p>
                                <div class="very_bttombox_si3">
                                    <h3>$16.44</h3>
                                    <button class="btn second_red_buttont">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="eachbox_si3">
                            <div class="top_eachbox_si3">

                            </div>
                            <div class="bottom_eachbox_si3">
                                <h1>E-BOOK</h1>
                                <h2>Your First Website</h2>
                                <p>A five day crash course that takes you from nothing to a live site, with every step
                                    written out.</p>
                                <div class="very_bttombox_si3">
                                    <h3>$16.44</h3>
                                    <button class="btn second_red_buttont">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="eachbox_si3">
                            <div class="top_eachbox_si3">

                            </div>
                            <div class="bottom_eachbox_si3">
                                <h1>E-BOOK</h1>
                                <h2>Your First Website 43ewd 3ew 3dew e3w</h2>
                                <p>A five day crash course that takes you from nothing to a live site, with every step
                                    written out.</p>
                                <div class="very_bttombox_si3">
                                    <h3>$16.44</h3>
                                    <button class="btn second_red_buttont">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="eachbox_si3">
                            <div class="top_eachbox_si3">

                            </div>
                            <div class="bottom_eachbox_si3">
                                <h1>E-BOOK</h1>
                                <h2>Your First Website</h2>
                                <p>A five day crash course that takes you from nothing to a live site, with every step
                                    written out.</p>
                                <div class="very_bttombox_si3">
                                    <h3>$16.44</h3>
                                    <button class="btn second_red_buttont">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="eachbox_si3">
                            <div class="top_eachbox_si3">

                            </div>
                            <div class="bottom_eachbox_si3">
                                <h1>E-BOOK</h1>
                                <h2>Your First Websitered erfds red </h2>
                                <p>A five day crash course that takes you from nothing to a live site, with every step
                                    written out.</p>
                                <div class="very_bttombox_si3">
                                    <h3>$16.44</h3>
                                    <button class="btn second_red_buttont">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container p-0">
                    <div class="pagination_divt">
                        <div class="pag_btn_t">
                            Previous
                        </div>
                        <div class="pag_btn_t higlighted_t">
                            1
                        </div>
                        <div class="pag_btn_t">
                            2
                        </div>
                        <div class="pag_btn_t">
                            3
                        </div>
                        <div class="pag_btn_t">
                            Next
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom_shop_div">
                <div class="container p-0">
                    <div class="inner_shop_last">
                        <div class="left_inner_shop_last">
                            <h1>CANNOT FIND IT</h1>
                            <h2>Tell us what you are trying to build.</h2>
                            <h3>If nothing here fits, say so. We will point you at the right product, or tell you
                                honestly that we do not have one yet.</h3>
                        </div>
                        <button class="btn white_btn_t">
                            Get in touch
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path d="M4 10H16M11 15L16 10L11 5" stroke="#EE2A63" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </section>

<?php include 'includes/footer.php'; ?>









<script>
    document.querySelectorAll('.custom-dropdown_t').forEach(dropdown => {

        const toggle = dropdown.querySelector('.dropdown-toggle-custom_t');
        const selected = dropdown.querySelector('.dropdown-selected_t');
        const options = dropdown.querySelectorAll('.dropdown-option_t');

        toggle.addEventListener('click', function (e) {
            e.stopPropagation();

            document.querySelectorAll('.custom-dropdown_t').forEach(other => {
                if (other !== dropdown) {
                    other.classList.remove('active');
                }
            });

            dropdown.classList.toggle('active');
        });

        options.forEach(option => {
            option.addEventListener('click', function (e) {
                e.stopPropagation();

                selected.textContent = this.textContent;

                options.forEach(item => {
                    item.classList.remove('selected');
                });

                this.classList.add('selected');

                dropdown.classList.remove('active');
            });
        });
    });

    document.addEventListener('click', function () {
        document.querySelectorAll('.custom-dropdown_t').forEach(dropdown => {
            dropdown.classList.remove('active');
        });
    });
</script>
<script>
    const filterButton_t = document.getElementById('filterButton_t');
    const filterDropdown_t = document.getElementById('filterDropdown_t');

    filterButton_t.addEventListener('click', function () {
        filterDropdown_t.classList.toggle('active');
    });
</script>
<script>
    const minRange_t = document.getElementById("minRange_t");
    const maxRange_t = document.getElementById("maxRange_t");

    const minPrice_t = document.getElementById("minPrice_t");
    const maxPrice_t = document.getElementById("maxPrice_t");

    const sliderRange_t = document.getElementById("sliderRange_t");

    const MIN_VALUE_t = 1;
    const MAX_VALUE_t = 100;



    function updateSlider_t(updateInputs = true) {

        const min = Number(minRange_t.value);
        const max = Number(maxRange_t.value);

        const minPercent =
            ((min - MIN_VALUE_t) /
                (MAX_VALUE_t - MIN_VALUE_t)) * 100;

        const maxPercent =
            ((max - MIN_VALUE_t) /
                (MAX_VALUE_t - MIN_VALUE_t)) * 100;

        sliderRange_t.style.left =
            `calc(${minPercent}% + 8px)`;

        sliderRange_t.style.width =
            `calc(${maxPercent - minPercent}% - 8px)`;


        if (updateInputs) {
            minPrice_t.value = min;
            maxPrice_t.value = max;
        }
    }


    minRange_t.addEventListener("input", () => {

        let value = Number(minRange_t.value);
        const max = Number(maxRange_t.value);

        if (value >= max) {
            value = max - 1;
            minRange_t.value = value;
        }

        minPrice_t.value = value;

        updateSlider_t(false);
    });


    maxRange_t.addEventListener("input", () => {

        let value = Number(maxRange_t.value);
        const min = Number(minRange_t.value);

        if (value <= min) {
            value = min + 1;
            maxRange_t.value = value;
        }

        maxPrice_t.value = value;

        updateSlider_t(false);
    });




    minPrice_t.addEventListener("input", () => {

        if (minPrice_t.value === "") {
            return;
        }

        let value = Number(minPrice_t.value);
        const max = Number(maxRange_t.value);

        value = Math.max(
            MIN_VALUE_t,
            Math.min(MAX_VALUE_t, value)
        );

        if (value >= max) {
            value = max - 1;
        }

        minPrice_t.value = value;
        minRange_t.value = value;

        updateSlider_t(false);
    });



    maxPrice_t.addEventListener("input", () => {

        if (maxPrice_t.value === "") {
            return;
        }

        let value = Number(maxPrice_t.value);
        const min = Number(minRange_t.value);

        // Limit 1 → 100
        value = Math.max(
            MIN_VALUE_t,
            Math.min(MAX_VALUE_t, value)
        );

        // Max must be greater than Min
        if (value <= min) {
            value = min + 1;
        }

        maxPrice_t.value = value;
        maxRange_t.value = value;

        updateSlider_t(false);
    });



    minPrice_t.addEventListener("blur", () => {

        if (minPrice_t.value === "") {
            minPrice_t.value = minRange_t.value;
            return;
        }

        let value = Number(minPrice_t.value);
        const max = Number(maxRange_t.value);

        value = Math.max(
            MIN_VALUE_t,
            Math.min(max - 1, value)
        );

        minPrice_t.value = value;
        minRange_t.value = value;

        updateSlider_t(false);
    });

    maxPrice_t.addEventListener("blur", () => {

        if (maxPrice_t.value === "") {
            maxPrice_t.value = maxRange_t.value;
            return;
        }

        let value = Number(maxPrice_t.value);
        const min = Number(minRange_t.value);

        value = Math.max(
            min + 1,
            Math.min(MAX_VALUE_t, value)
        );

        maxPrice_t.value = value;
        maxRange_t.value = value;

        updateSlider_t(false);
    });

    updateSlider_t();
</script>