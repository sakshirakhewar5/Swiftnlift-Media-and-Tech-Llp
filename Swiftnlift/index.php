
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    

    <title>Swiftnlift Media And Tech Llp</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <i></i>Swiftlift.
            </a>

            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link">
                            <i class="ri-home-2-line"></i>
                            <span>Home</span>
                        </a>
                    </li>



                    <li class="nav__item">
                        <a href="#new" class="nav__link">
                            <i class="ri-book-read-fill"></i>
                            <span>Blogs</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#featured" class="nav__link">
                            <i class="ri-pages-fill"></i>
                            <span>Magazines</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class="ri-contacts-book-2-line"></i>
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="nav__actions">
                <i class="ri-search-line search-button" id="search-button"></i>
                <i class="ri-login-box-line login-button" id="login-button"></i>
                <!-- <i class="ri-user-3-line profile" id="profile-button"></i> -->
            </div>

                
            </div>
        </nav>
    </header>

    <div id="profile-view" style="display: none;">
    <p>Welcome, <?php session_start(); echo $_SESSION["full_name"]; ?></p>
    <p>Email: <?php echo $_SESSION["email"]; ?></p>
    <form action="logout.php" method="post">
        <button type="submit">Logout</button>
    </form>
</div>
    <!--==================== SEARCH ====================-->
    <div class="search" id="search-content">
        <form action="" class="search__form">
            <i class="ri-search-line search_icon"></i>
            <input type="search" placeholder="What are you looking for?" class="search__input">
        </form>
        <i class="ri-close-line search__close" id="search__close"></i>
    </div>

    <!--==================== LOGIN ====================-->
    
    <div class="login grid" id="login-content">
        <form action="login.php" method="POST" class="login__form grid">
            <h3 class="login__title">Log In</h3>
            <div class="login__group grid">
                <div>
                    <label for="login-email" class="login__label">Email</label>
                    <input type="email"name="email" placeholder="write the email" id="login-email" class="login__input" required>
                </div>
                <div>
                    <label for="login-pass" class="login__label">Password</label>
                    <input type="password" name="password" placeholder="Enter your password" id="login-pass" class="login__input" required>
                </div>
                <div>
                    <span class="login__signup">
                        You do not have an account? <a href="#signup" onclick="showSignup()">Sign Up</a>
                    </span>
                    <a href="index.php#home" ><button type="submit" class="login__button button">Log In</button></a>
                    
                </div>
            </div>
        </form>
        <i class="ri-close-line login__close" id="login-close"></i>
    </div>
<!-- /*===================Sign up========================*/ -->

    <section class="signup section" id="signup">
        <div class="signup__container container">

    <form action="signup.php" method="POST" class="signup__form">
    <h2 class="section__title">Sign Up</h2>
    <div class="signup__group">
        <label for="signup-name" class="signup__label">Full Name</label>
        <input type="text" name="fullname" id="signup-name" class="signup__input" placeholder="Enter your full name" required>
    </div>
    <div class="signup__group">
        <label for="signup-email" class="signup__label">Email</label>
        <input type="email" name="email" id="signup-email" class="signup__input" placeholder="Enter your email" required>
    </div>
    <div class="signup__group">
        <label for="signup-password" class="signup__label">Password</label>
        <input type="password" name="password" id="signup-password" class="signup__input" placeholder="Enter your password" required>
    </div>
    <div class="signup__group">
        <label for="signup-confirm-password" class="signup__label">Confirm Password</label>
        <input type="password" name="confirm_password" id="signup-confirm-password" class="signup__input" placeholder="Confirm your password" required>
    </div>
    <span class="signup__login">
        Already have an account? <a href="#login-content" onclick="showLogin()">Log In</a>
    </span>
    <a href="#login-content" ><button type="submit" class="signup__button button">Sign Up</button></a>
</form>

        </div>
        <i class="signup__close" onclick="hideSignup()">x</i>
    </section>

    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__data">
                    <h1 class="home__title">
                        Empowering Professionals Worldwide With <br>Growth And Transformation

                    </h1>

                    <p class="home__description">
                        We strive to be a source for intelligent and challenging content that empowers readers to meet their goals and continue on to the next level of success in whatever field they find themselves. Our vision for our business publication is to be the driver
                        for growth, learning, and positive transformation within the business sector.
                    </p>
                    <a href="#contact" class="button">Explore Now</a>
                </div>

                <div class="home__images">
                    <div class="home__swiper swiper">

                        <div class="swiper-wrapper">
                            <article class="home__article swiper-slide">
                                <img src="https://www.swiftnlift.com/wp-content/uploads/2023/10/new-magzine-full-232x300.jpg" alt="image" class="home__img">
                            </article>

                            <article class="home__article swiper-slide">
                                <img src="https://www.swiftnlift.com/wp-content/uploads/2023/12/Artboard-21-1-1-1-1-232x300.png" alt="image" class="home__img">
                            </article>

                            <article class="home__article swiper-slide">
                                <img src="https://www.swiftnlift.com/wp-content/uploads/2023/10/IMG-20231020-WA0000-232x300.jpg" alt="image" class="home__img">
                            </article>

                            <article class="home__article swiper-slide">
                                <img src="https://www.swiftnlift.com/wp-content/uploads/2023/09/september-demo-cover-page56-232x300.jpg" alt="image" class="home__img">
                            </article>

                            <article class="home__article swiper-slide">
                                <img src="https://www.swiftnlift.com/wp-content/uploads/2024/02/Artboard-5_1-232x300.jpg" alt="image" class="home__img">
                            </article>

                            <article class="home__article swiper-slide">
                                <img src="https://www.swiftnlift.com/wp-content/uploads/2024/03/Artboard-1@500x-100-232x300.jpg" alt="image" class="home__img">
                            </article>

                            <article class="home__article swiper-slide">
                                <img src="https://www.swiftnlift.com/wp-content/uploads/2023/12/Art-232x300.png" alt="image" class="home__img">
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== NEW BOOKS ====================-->
        <section class="new section" id="new">
            <h2 class="section__title">Blogs & News</h2>
            <div class="magazine-box">
                <div class="magazine-item">
                    <a href="https://www.swiftnlift.com/articles/harmonizing-csr-with-international-business-law/" target="_blank">
                        <img src="https://www.swiftnlift.com/wp-content/uploads/2024/05/flat-illustrated-csr-concept_23-2148935287-1-300x165.jpg" alt="Magazine 1" class="magazine-img">
                    </a>
                    <div class="magazine-content">
                        <h3 class="magazine-title">Harmonizing CSR with International Business Law</h3>
                    </div>
                </div>
                <div class="magazine-item">
                    <a href="https://www.swiftnlift.com/articles/fostering-global-innovation-intellectual-property-rights/" target="_blank">
                        <img src="https://www.swiftnlift.com/wp-content/uploads/2024/05/still-life-world-intellectual-property-day-2-1-1-300x165.jpg" alt="Magazine 2" class="magazine-img"></a>
                    <div class="magazine-content">
                        <h3 class="magazine-title">Fostering Global Innovation: Intellectual Property Rights</h3>
                    </div>
                </div>

                <div class="magazine-item">
                    <a href="https://www.swiftnlift.com/articles/globalization-and-legal-systems-navigating-complexity/" target="_blank">
                        <img src="https://www.swiftnlift.com/wp-content/uploads/2024/05/hand-button-man-multimedia-mail-1-1-768x424.jpg" alt="Magazine 2" class="magazine-img"></a>
                    <div class="magazine-content">
                        <h3 class="magazine-title">Globalization and Legal Systems: Navigating Complexity</h3>
                    </div>
                </div>

                <div class="magazine-item">
                    <a href="https://www.swiftnlift.com/articles/safeguarding-the-digital-frontier-cybersecurity-and-international-law/" target="_blank">

                        <img src="https://www.swiftnlift.com/wp-content/uploads/2024/05/standard-quality-control-collage-concept-1-1-768x424.jpg" alt="Magazine 2" class="magazine-img"></a>
                    <div class="magazine-content">
                        <h3 class="magazine-title">Safeguarding the Digital Frontier: Cybersecurity and International Law</h3>
                    </div>
                </div>

                <div class="magazine-item">
                    <a href="https://www.swiftnlift.com/articles/putins-war-dynamics/" target="_blank">

                        <img src="https://www.swiftnlift.com/wp-content/uploads/2024/05/putin-1-768x424.jpg" alt="Magazine 2" class="magazine-img"></a>
                    <div class="magazine-content">
                        <h3 class="magazine-title">Putin’s War Dynamics</h3>
                    </div>
                </div>

                <div class="magazine-item">
                    <a href="https://www.swiftnlift.com/articles/the-srebrenica-genocide-resolution/" target="_blank">

                        <img src="https://www.swiftnlift.com/wp-content/uploads/2024/05/young-people-taking-part-anti-war-protest-1-1-768x424.jpg" alt="Magazine 2" class="magazine-img"></a>
                    <div class="magazine-content">
                        <h3 class="magazine-title">The Srebrenica Genocide Resolution</h3>
                    </div>
                </div>
            </div>
        </section>


        <!--==================== FEATURED ====================-->
        <section class="featured section" id="featured">
            <h2 class="section__title">
                Magazines
            </h2>

            <div class="featured__container container">
                <div class="featured__swiper swiper">
                    <div class="swiper-wrapper">
                        <article class="featured__card swiper-slide">
                            <img src="https://image.isu.pub/220606123311-289cd5919de9b326226489c3869845d6/jpg/page_1_thumb_large.jpg" alt="" class="featured__img">

                            <h2 class="featured__title">International Schools in Japan</h2>
                            <div class="featured__description">
                                A beautiful island nation, famed for its ground-breaking technology, automotive industry and engineering, Japan has also long been admired for its education system,..... </div>
                            <a href="https://issuu.com/swiftnlift/docs/the_10_best_international_schools_in_japan-_2022_l"><button class="button">Read More</button></a>
                        </article>

                        <article class="featured__card swiper-slide">
                            <img src="https://image.isu.pub/220407104218-2f67e4792672ee3c526f79a77c2a7534/jpg/page_1_thumb_large.jpg" alt="" class="featured__img">

                            <h2 class="featured__title">India’s gaming market</h2>
                            <div class="featured__description">
                                India’s gaming market has shifted from coin-operated arcade games like “Tekken” in the arcade to gadgets like Nintendo, followed worldwide by PlayStation and Xbox...... </div>
                            <a href="https://issuu.com/swiftnlift/docs/the_10_best_leaders_in_ar_and_vr_industry_2022"><button class="button">Read More</button></a>
                        </article>

                        <article class="featured__card swiper-slide">
                            <img src="https://image.isu.pub/221122093007-ae5c2bc133cbed5f1a82b9b500a9a450/jpg/page_1_thumb_large.jpg" alt="" class="featured__img">

                            <h2 class="featured__title">Business Leaders Revamping</h2>
                            <div class="featured__description">
                                In our edition, “The 10 Most Innovative Business Leaders Revamping the Future 2022”, on the cover story, we have VAIRABALA, the Founder of E2W STUDY OVERSEAS PRIVATE....
                            </div>
                            <a href="https://issuu.com/swiftnlift/docs/the_10_most_innovative_business_leaders_revamping_"><button class="button">Read More</button></a>
                        </article>

                        <article class="featured__card swiper-slide">
                            <img src="https://image.isu.pub/220629100106-89f01f0047468b5f5d27116be33c62ef/jpg/page_1_thumb_large.jpg" alt="" class="featured__img">

                            <h2 class="featured__title">Making Their Mark in Industry</h2>
                            <div class="featured__description">
                                MADE Institute's existence brings an end to the mass incarceration and rebuilding of marginalized, and violence-impacted communities........... </div>
                            <a href=""><button class="button">Read More</button></a>
                        </article>


                        <article class="featured__card swiper-slide">
                            <img src="https://image.isu.pub/221122094229-2c3e82bcb3d8ae63c8e132002e8e780e/jpg/page_1_thumb_large.jpg" alt="" class="featured__img">

                            <h2 class="featured__title">Ruling The Elderly Care Services Industry</h2>
                            <div class="featured__description">
                                In our edition of “Five Most Dynamic Business Leaders, Ruling the Elderly Care Services Industry 2022”, on the cover page, we have Mrigna Nagraj the Founder,... </div>
                            <a href="https://issuu.com/swiftnlift/docs/five_most_dynamic_business_leaders_ruling_the_eld"><button class="button">Read More</button></a>
                        </article>

                        <article class="featured__card swiper-slide">
                            <img src="https://image.isu.pub/221122093845-f3fa32e270a2af2c6497e55dcbfaf1ad/jpg/page_1_thumb_large.jpg" alt="" class="featured__img">

                            <h2 class="featured__title">Top 5 Fastest Growing Food Franchise</h2>
                            <div class="featured__description">
                                In our edition of “Top 5 Fastest Growing Food Franchises in 2022”, on the cover page, we have Mr. Dashani, the Founder, Of “Tea Post Private Limited”. Tea Post,.. </div>
                            <a href="https://issuu.com/swiftnlift/docs/top_5_fastest_growing_food_franchise_in_2022_1_"><button class="button">Read More</button></a>
                        </article>

                        <article class="featured__card swiper-slide">
                            <img src="https://image.isu.pub/220505063403-5b5b0ad4dcf5055e2198d64e9415a538/jpg/page_1_thumb_large.jpg" alt="" class="featured__img">

                            <h2 class="featured__title">Top International Schools In Kanpur,</h2>
                            <div class="featured__description">
                                Billabong High International School, Kanpur is an exceptional day school combining the best of educational innovation and excellence. Billabong is a hugely exciting,..... </div>
                            <a href="https://issuu.com/swiftnlift/docs/top_international_schools_in_kanpur_uttar_pradesh"><button class="button">Read More</button></a>
                        </article>

                        <article class="featured__card swiper-slide">
                            <img src="https://image.isu.pub/220420112400-2a55f46e5df76a6e3dc14b71e53c08f2/jpg/page_1_thumb_large.jpg" alt="" class="featured__img">

                            <h2 class="featured__title">The 10 Most Promising Clean Tech Startups</h2>
                            <div class="featured__description">
                                Recycling is one of the best and most effective ways to keep the environment impregnable. Because only reusing can lower the amount of waste and save natural,.. </div>
                            <a href="https://issuu.com/swiftnlift/docs/the_10_most_promising_clean_tech_startups_in_2022_"><button class="button">Read More</button></a>
                        </article>

                    </div>

                    <div class="swiper-button-prev">
                        <i class="ri-arrow-left-s-line"></i>
                    </div>

                    <div class="swiper-button-next">
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                </div>
            </div>
        </section>





        <!--==================== Contact ====================-->

        <section class="contact section" id="contact">
        <div class="popup-message" id="popupMessage">
        <?php
        if (isset($_SESSION['message'])) {
            echo '<span class="' . $_SESSION['message_type'] . '">' . $_SESSION['message'] . '</span>';
            unset($_SESSION['message']); // Clear the message after displaying it
            unset($_SESSION['message_type']); // Clear the message type after displaying it
        }
        ?>
    </div>
<form id="contact-form" action="contact.php" method="POST" onsubmit="handleFormSubmit(event)">

    <h2 class="section__title">
        Contact
        <span>Me!</span>
    </h2>
    <div class="input-box">
        <input type="hidden" name="access_key" value="ed2b14e6-082f-4d18-a094-c19d04cc4bae">
        <input type="text" name="Name" placeholder="Full Name" pattern="[A-Za-z\s]+$" title="Please enter a valid full name" required>
        <input type="email" name="Email" placeholder="Email Address" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" title="Please enter a valid email address" required>
    </div>
    <div class="input-box">
        <input type="tel" name="Number" placeholder="Mobile Number" pattern="[0-9]{10}" title="Please enter a valid 10-digit mobile number" required>
        <input type="text" name="Email_Subject" placeholder="Email Subject" pattern="^[A-Za-z0-9\s]+$" title="Please enter a valid email subject (only letters, numbers, and spaces)" required>
    </div>
    <textarea name="Message" cols="30" rows="10" placeholder="Your Message" required></textarea>
    <button type="submit" value="Send Message" class="btn">Send Message</button>

    
</form>
            <div class="video-section">
                <iframe src="https://www.youtube.com/embed/MNcZ-9UPo0E?si=Uo0fLBEiY2iLHoQh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </section>


    </main>


    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-text">
                <h3>SwiftNLift</h3>
                <p>
                    The heart of entrepreneurship is about telling a story. At SwiftNLift Media Group, we share and distribute the stories of the young and successful entrepreneurs who have overcome early challenges and turned out to be successful. Every podcast and news
                    byte at SwiftNLift Media has possibilities come alive.
                </p>
            </div>
            <div class="footer-address">
                <h3>Office Address</h3>
                <p>7, Tapodham Rd,<br> Tapodham, Warje, Pune,<br> Maharashtra,<br> 411052</p>
            </div>
            <div class="footer-menu">
                <h3>Quick Menu</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#new">Blogs/News</a></li>
                    <li><a href="#featured">Magazines</a></li>

                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <a href="https://www.facebook.com/swiftnliftmagazine" target="_blank"><i class='bx bxl-facebook'></i></a>
                <a href="https://x.com/SwiftnliftM?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><i class='bx bxl-twitter'></i></a>
                <a href="https://www.linkedin.com/company/swiftnlift-media-and-tech-llp/?originalSubdomain=in" target="_blank"><i class='bx bxl-linkedin'></i></a>
                <a href="https://www.instagram.com/swiftnliftmagazine/" target="_blank"><i class='bx bxl-instagram'></i></a>
                <a href="https://www.youtube.com/@swiftnliftofficial" target="_blank"><i class='bx bxl-youtube'></i></a>
            </div>
            <div class="footer-iconTop">
                <a href="#home"><i class='bx bx-chevrons-up'></i></a>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2024 - Developed by Sakshi Rakhewar</p>
        </div>
    </footer>



    <!--========== SCROLL UP ==========-->


    <!--=============== SCROLLREVEAL ===============-->
    <script>
        // Check if the popup message should be shown
        document.addEventListener('DOMContentLoaded', function() {
            var popupMessage = document.getElementById('popupMessage');
            if (popupMessage.innerHTML.trim() !== '') {
                popupMessage.style.display = 'block';
                
                setTimeout(function() {
                    popupMessage.style.display = 'none';
                }, 1000);
            }
        });
    </script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>


</body>

</html>