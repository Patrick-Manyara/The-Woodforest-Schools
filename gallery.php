<?php include_once 'header.php' ?>

<main>
    <!-- campus breadcrumb start -->
    <section class="tp-breadcrumb__area pt-160 pb-120 p-relative z-index-1 fix">
        <div class="tp-breadcrumb__bg " style="background:#ffa700"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="tp-breadcrumb__content">
                        <h3 class="tp-breadcrumb__title color">Media Files</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- campus breadcrumb end -->


    <!-- subject-area-start -->
    <section class="pt-100">
        <div class="container">
            <div id="myBtnContainer" style="display: flex;justify-content: center;">
                <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                <button class="btn" onclick="filterSelection('in')"> Class</button>
                <button class="btn" onclick="filterSelection('out')"> Outdoors</button>
                <button class="btn" onclick="filterSelection('events')"> Events</button>
            </div>

            <!-- Portfolio Gallery Grid -->
            <div class="row pt-20">
                <div class="column in">
                    <div class="content">
                        <img src="assets/img/gallary/gal1.PNG" alt="Mountains">
                    </div>
                </div>

                <div class="column events">
                    <div class="content">
                        <img src="assets/img/gallary/events3.jpg" alt="Mountains">
                    </div>
                </div>


                <div class="column out">
                    <div class="content">
                        <img src="assets/img/gallary/gal2.PNG" alt="Mountains">
                    </div>
                </div>
                <div class="column out">
                    <div class="content">
                        <img src="assets/img/gallary/gal3.PNG" alt="Mountains">
                    </div>
                </div>

                <div class="column out">
                    <div class="content">
                        <img src="assets/img/gallary/gal4.PNG" alt="Mountains">
                    </div>
                </div>

                <div class="column events">
                    <div class="content">
                        <img src="assets/img/about/about3.jpg" alt="Mountains">
                    </div>
                </div>

                <div class="column in">
                    <div class="content">
                        <img src="assets/img/about/about1.PNG" alt="Mountains">
                    </div>
                </div>

                <div class="column out">
                    <div class="content">
                        <img src="assets/img/gallary/out2.PNG" alt="Mountains">
                    </div>
                </div>
                <div class="column in">
                    <div class="content">
                        <img src="assets/img/gallary/in8.PNG" alt="Mountains">
                    </div>
                </div>

                <div class="column events">
                    <div class="content">
                        <img src="assets/img/gallary/events1.jpg" alt="Mountains">
                    </div>
                </div>

                <div class="column in">
                    <div class="content">
                        <img src="assets/img/about/about2.PNG" alt="Mountains">
                    </div>
                </div>


                <div class="column out">
                    <div class="content">
                        <img src="assets/img/gallary/out4.PNG" alt="Mountains">
                    </div>
                </div>

                <div class="column in">
                    <div class="content">
                        <img src="assets/img/gallary/in7.PNG" alt="Mountains">
                    </div>
                </div>

                <div class="column events">
                    <div class="content">
                        <img src="assets/img/gallary/events2.jpg" alt="Mountains">
                    </div>
                </div>


                <div class="column in">
                    <div class="content">
                        <img src="assets/img/gallary/in5.PNG" alt="Mountains">
                    </div>
                </div>


                <div class="column out">
                    <div class="content">
                        <img src="assets/img/gallary/out5.PNG" alt="Mountains">
                    </div>
                </div>

                <div class="column in">
                    <div class="content">
                        <img src="assets/img/gallary/in6.PNG" alt="Mountains">
                    </div>
                </div>

                <div class="column events">
                    <div class="content">
                        <img src="assets/img/gallary/events4.jpg" alt="Mountains">
                    </div>
                </div>

                <div class="column out">
                    <div class="content">
                        <img src="assets/img/gallary/out6.PNG" alt="Mountains">
                    </div>
                </div>

                <div class="column in">
                    <div class="content">
                        <img src="assets/img/gallary/in1.PNG" alt="Mountains">
                    </div>
                </div>

                <div class="column out">
                    <div class="content">
                        <img src="assets/img/gallary/out8.jpg" alt="Mountains">
                    </div>
                </div>

                <div class="column events">
                    <div class="content">
                        <img src="assets/img/gallary/events5.jpg" alt="Mountains">
                    </div>
                </div>

                <div class="column out">
                    <div class="content">
                        <img src="assets/img/gallary/out9.PNG" alt="Mountains">
                    </div>
                </div>

                <div class="column in">
                    <div class="content">
                        <img src="assets/img/gallary/in2.PNG" alt="Mountains">
                    </div>
                </div>

                <div class="column out">
                    <div class="content">
                        <img src="assets/img/gallary/out7.jpg" alt="Mountains">
                    </div>
                </div>

                <div class="column in">
                    <div class="content">
                        <img src="assets/img/gallary/in4.PNG" alt="Mountains">
                    </div>
                </div>

                <div class="column out">
                    <div class="content">
                        <img src="assets/img/gallary/out1.PNG" alt="Mountains">
                    </div>
                </div>

                <div class="column events">
                    <div class="content">
                        <img src="assets/img/gallary/events6.jpg" alt="Mountains">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- subject-area-end -->

    <style>
        .column {
            float: left;
            width: 25%;
            opacity: 0;
            transform: scale(0.9);
            transition: opacity 0.5s ease, transform 0.5s ease;
            display: none;
            /* Hide elements by default */
        }

        .column.show {
            display: block;
            /* Ensure it's part of the layout */
            opacity: 1;
            transform: scale(1);
        }

        .btn {
            border-radius: 6px;
            font-size: 16px;
            padding: 6px 22px;
            color: var(--tp-heading-primary);
            background: transparent;
            border: 1px solid rgba(22, 22, 19, 0.1);
            cursor: pointer;
            margin-right: 10px;
        }

        .btn:hover {
            background-color: #ddd;
        }

        .btn.active {
            box-shadow: 0 10px 15px -5px rgba(21, 36, 34, 0.1);
            background-color: #880824;
            border-color: #880824;
            color: white;
        }



        .content img {
            height: 300px;
            width: 100%;
            object-fit: cover;
            margin: 10px;
            border-radius: 10px;
        }
    </style>

    <script>
        filterSelection("all")

        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("column");
            if (c == "all") c = "";

            for (i = 0; i < x.length; i++) {
                if (x[i].className.indexOf(c) > -1) {
                    w3AddClass(x[i], "show");
                } else {
                    w3RemoveClass(x[i], "show");
                }
            }
        }

        function w3AddClass(element, name) {
            if (!element.classList.contains(name)) {
                element.style.display = "block"; // Add to layout first
                setTimeout(() => element.classList.add(name), 10); // Add animation delay
            }
        }

        function w3RemoveClass(element, name) {
            element.classList.remove(name);
            setTimeout(() => {
                if (!element.classList.contains("show")) {
                    element.style.display = "none"; // Remove from layout after animation
                }
            }, 500); // Delay matches transition duration (0.5s)
        }



        // Add active class to the current button (highlight it)

        document.addEventListener("DOMContentLoaded", function() {
            var btnContainer = document.getElementById("myBtnContainer");
            var btns = btnContainer.getElementsByClassName("btn");

            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function() {
                    // Remove 'active' class from all buttons
                    for (var j = 0; j < btns.length; j++) {
                        btns[j].classList.remove("active");
                    }

                    // Add 'active' class to the clicked button
                    this.classList.add("active");
                });
            }
        });
    </script>

</main>

<?php include_once 'footer.php' ?>