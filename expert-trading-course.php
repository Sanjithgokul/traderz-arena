<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/favicon.svg" type="image/svg" sizes="any">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <?php include("common-css.php"); ?>
    <title>Traderz Arena</title>
</head>
<?php include("header.php"); ?>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">
    <!-- Modal -->

    <div class="popup-section">
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-header">
                        <h3 class="modal-title" id="staticBackdropLabel">Quick Contact</h3>
                    </div>
                    <form id="contact-form">
                        <div class="mb-3 mt-3">
                            <label for="fname">Enter Name</label><br>
                            <input type="text" class="form-control required" id="name_Field" name="name" required>
                            <span role="alert" class="error-msg" id="name_Field_err">Please fill your Full Name.</span>
                        </div>
                        <div class="mb-3">
                            <label for="fname">Email Address</label><br>
                            <input type="email" class="form-control required" id="email_Field" name="email" required>
                            <span role="alert" class="error-msg" id="email_Field_err">Please fill your Email id.</span>
                        </div>
                        <div class="mb-3">
                            <label for="fname">Mobile Number</label><br>
                            <input type="number" class="form-control" id="number_Field" name="number" required>
                            <span role="alert" class="error-msg" id="number_Field_err">Please enter a valid
                                number</span>
                        </div>
                        <div class="">
                            <div class="form-control form-control-1">
                                <label for="fname">Courses Type</label><br>
                                <select name="courses" class="custom-select text-clr py-2" id="inputGroupSelect01">
                                    <option selected hidden value="none">Select Courses</option>
                                    <option class="text-clr" value="Expert Trading Course">Expert Trading Course
                                    </option>
                                    <option class="text-clr" value="Options Trading">Options Trading</option>
                                    <option class="text-clr" value="Intex Trading">Intex Trading</option>
                                    <option class="text-clr" value="Mentorship Program">Mentorship Program</option>
                                </select>
                            </div>
                        </div>
                        <div class="contact-btn d-flex mt-2">
                            <button onclick="processquickemail('QUICK_CONTACT_EMAIL',this) " type="button"
                                class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="backround-banner backround-banner-1 d-flex flex-column" id="home">
        <div class="spy-element"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-6 col-xl-6">
                    <div class="banner-content-main">
                        <!-- <span class="text-white mb-3">Track Expert Traders</span> -->
                        <h1 class="heading text-white py-4 lh-5">Put<span class="text-primary"> <b>strategy</b></span>
                            into action</h1>
                        <p class="sub-heading">Expert Trading Course</p>
                        <!-- <div class="form-section mt-5 mb-3">
                            <form id="contact-form" action="#" method="post">
                                <input type="email" class="input-field email required"
                                    placeholder="Enter Your Email Address" id="emailField" name="email" required>
                                <button onclick="processemailform('HOME_EMAIL_FUNCTION',this) " class="sub-btn"
                                    type="button" id="enquiryButton">Submit</button>
                            </form>
                            <span role="alert" class="error-msg" id="emailField_err">Please fill your Email ID.</span>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Master the Expert Trading with us -->
    <section class="master-expert">
        <h3 class="master-expert-heading">Master the Expert Trading with us</h3>
        <div class="underline"></div>
        <div class="master-expert-desc">
            <p class="text-gray lh-2">Welcome to Traderz Arena's Expert Trading Course! This course is designed for traders with a solid
                foundation in trading, who are looking to take their skills to the next level. Our expert instructors
                will guide you through advanced trading strategies and techniques, including technical analysis, risk
                management, and trading psychology. You'll gain a deeper understanding of market dynamics and develop
                the skills to make informed trading decisions. Enroll now and start your journey toward becoming an
                expert trader!
            </p>
        </div>

        </div>
    </section>

    <!-- expert course details  -->
    <section class="expert-course-section">
        <!-- <div class="spy-element"></div> -->
        <div class="container">
            <div class="row justifiy-content-center">
                <div class="col-sm-12 col-md-8 col-lg-8  expert-course-left">
                    <!-- Tabs -->
                    <div class="container expert-course-list text-align-center">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-items"><a class="nav-link active expert-course-title" href="#description"
                                    data-bs-toggle="tab">Description</a></li>
                            <li class="nav-items"><a class="nav-link" href="#wti" data-bs-toggle="tab">What’s
                                    included</a></li>
                            <li class="nav-items"><a class="nav-link" href="#lessons" data-bs-toggle="tab">Lessons</a>
                            </li>
                            <li class="nav-items"><a class="nav-link" href="#review" data-bs-toggle="tab">Reviews</a>
                            </li>
                        </ul>

                        <div class="tab-content expert-course-tab">
                            <!-- Article-one -->
                            <div class="container tab-pane  active article-one mt-5" id="description">
                                <h5>Description</h5>
                                <div class="dashed"></div>
                                <h4 class="mb-3">Course details :</h4>
                                <p class="mb-3">Duration: <span class="sub-details">3 Months (120 Hrs.)</span></p>
                                <p class="mb-3">Fee: <span class="sub-details">100,000 INR + GST</span></p>
                                <p class="mb-3">Eligible People: <span class="sub-details">Working Professional, Full
                                        time/Part Time
                                        trader, 12th and Graduate Students</span></p>
                                <p class="mb-3">What you will learn:</p>
                                <ul class="list-main-course">
                                    <li class="lh-6">Stock market basics, including fundamental and technical analysis
                                    </li>
                                    <li>Options trading and strategies</li>
                                    <li>Advanced techniques and adjustments</li>
                                    <li>Xerox trading (bonus)</li>
                                    <li>3 months of support</li>
                                </ul>
                                <!-- call to action btn -->
                                    <button onclick=" " type="button" class="btn btn-primary mt-3" style="background-color:#52AA32;">Get Started</button>  
                            </div>
                            <!-- Aticle-two -->
                            <div class="container  tab-pane fade article-two mt-5" id="wti">
                                <h5>What's included</h5>
                                <div class="dashed"></div>
                                <ul class="list-main-course">
                                    <li class="lh-6">In-depth understanding of stock market analysis with both
                                        fundamental and technical analysis</li>
                                    <li class="lh-6">Hands-on experience in options trading and strategies, including
                                        advanced techniques and adjustments</li>
                                    <li class="lh-6">Comprehensive knowledge of Xerox trading, allowing you to copy the
                                        experts and achieve optimal results</li>
                                    <li class="lh-6">Personalized support for 3 months, ensuring that you have all the
                                        resources you need to succeed</li>
                                </ul>
                            </div>
                            <!-- Article-three -->
                            <div class="container tab-pane fade article-three mt-5" id="lessons">
                                <h5>Lessons</h5>
                                <div class="dashed"></div>
                                <!-- start  one-->
                                <h5 class="mb-3">I. Stock Market Base Analysis</h5>
                                <h4 class="mt-4 mb-3">Chapter 1: Fundamental Analysis</h4>
                                <ul class="list-main-course">
                                    <li class="lh-6">Understanding Fundamental Analysis </li>
                                    <li class="lh-6">Choosing the Perfect Stock for Investment Returns with Financial Statements</li>
                                </ul>

                                <h4 class="mt-4 mb-3">Chapter 2: Technical Analysis</h4>
                                <ul class="list-main-course">
                                    <li class="lh-6">Understanding Technical Analysis</li>
                                    <li class="lh-6">Finding the Current Status and Future Price Action Movement of Stocks/Indexes</li>
                                </ul>
                               <!-- start  two-->
                                <h5 class="mb-3 mt-5">II. Equity Investment Concepts</h5>
                                <h4 class="mt-4 mb-3">Chapter 1: Value Buying Concept (Fundamentals)</h4>
                                <ul class="list-main-course">
                                    <li class="lh-6">Choosing the Right Sector/Stock for Better Returns</li>
                                    <li class="lh-6">Fair Value Selection of Stocks</li>
                                    <li class="lh-6">Sector Rotation</li>
                                    <li class="lh-6">Passive Income for Investment</li>
                                </ul>
                                <!-- start  three-->
                                <h5 class="mb-3 mt-5">III. Derivatives Trading (Futures & Options Trading)</h5>
                                <h4 class="mt-4 mb-3">Chapter 1: Technical Analysis of Charts</h4>
                                <h4 class="mt-4 mb-3">Understanding Candlestick Patterns</h4>
                                <ul class="list-main-course">
                                    <li class="lh-6">Hekin-Ashi Concepts</li>
                                    <li class="lh-6">Pattern Analysis</li>
                                    <li class="lh-6">Trend Concepts</li>
                                    <li class="lh-6">Moving Average Concepts</li>
                                    <li class="lh-6">Fibonacci Retracement Concept</li>
                                    <li class="lh-6">Divergence Concept</li>
                                </ul>
                                <h4 class="mt-4 mb-3">Chapter 2: Gap Trading Concept</h4>
                                <h4 class="mt-4 mb-3">Chapter 3: Bottom Fishing/Trend Reversal Concepts</h4>
                                <h4 class="mt-4 mb-3">Chapter 4: Positional and Intraday Money-Making Concepts with Option Strategies</h4>
                                <h4 class="mt-4 mb-3">Chapter 5: Trend Following System</h4>
                                <h4 class="mt-4 mb-3">Chapter 6: Earnings Trade</h4>
                                <h4 class="mt-4 mb-3">Chapter 7: Time Frame Analysis and Defining Your Trading Style</h4>
                                <!-- start  four-->
                                <h5 class="mb-3 mt-5">IV. Options Strategies Construction (With Adjustments)</h5>
                                <h4 class="mt-4 mb-3">Chapter 1: Straddle Concept</h4>
                                <h4 class="mt-4 mb-3">Chapter 2: Strangle</h4>
                                <h4 class="mt-4 mb-3">Chapter 3: Ratio Spread</h4>
                                <h4 class="mt-4 mb-3">Chapter 4: Iron Fly</h4>
                                <h4 class="mt-4 mb-3">Chapter 5: Iron Condor</h4>
                                <h4 class="mt-4 mb-3">Chapter 6: Combination of Two or Three Strategies</h4>
                                <!-- start five-->
                                <h5 class="mb-3 mt-5">V. Xerox Trading</h5>
                                <ul class="list-main-course">
                                    <li class="lh-6">Copy Trading of Experts (Position Sizing and RR Depends on Capital and Risk Taking Ability of Individual)</li>
                                </ul>
                                
                            </div>

                            <!-- Review -->
                            <div class="container tab-pane fade review-sec mt-5" id="review">
                                <h5>Reviews</h5>
                                <div class="dashed"></div>
                                <!-- <h4 class="mb-3">Anbarasu</h4> -->
                                <div class="review-box">
                                    <p class="mb-3 reviewer-name">Anbarasu</p>
                                    <div class="ratingstar-list">
                                        <ul>
                                            <li><img class="course-rating-star" loading="lazy"
                                                    src="./images/yellow-star.svg" title="Rating-star-traderz-arena"
                                                    alt="Rating-star-traderz-arena"></li>
                                            <li><img class="course-rating-star" loading="lazy"
                                                    src="./images/yellow-star.svg" title="Rating-star-traderz-arena"
                                                    alt="Rating-star-traderz-arena"></li>
                                            <li><img class="course-rating-star" loading="lazy"
                                                    src="./images/yellow-star.svg" title="Rating-star-traderz-arena"
                                                    alt="Rating-star-traderz-arena"></li>
                                            <li><img class="course-rating-star" loading="lazy"
                                                    src="./images/yellow-star.svg" title="Rating-star-traderz-arena"
                                                    alt="Rating-star-traderz-arena"></li>
                                            <li><img class="course-rating-star" loading="lazy"
                                                    src="./images/yellow-white-star.svg" title="Rating-star-traderz-arena"
                                                    alt="Rating-star-traderz-arena"></li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="mb-3 review-para">Thanks to the excellent coaching and mentoring from Deepak
                                    and kumar Dana Karthikeyan, I am now confident in executing equity trading and option
                                    strategies. I highly recommend Traderz Arena for anyone seeking to learn and succeed
                                    in the stock market.</p>
                                    <div class="review-box">
                                    <p class="mb-3 reviewer-name">Poorani Anbarasu</p>
                                    <div class="ratingstar-list">
                                        <ul>
                                            <li><img class="course-rating-star" loading="lazy"
                                                    src="./images/yellow-star.svg" title="Rating-star-traderz-arena"
                                                    alt="Rating-star-traderz-arena"></li>
                                            <li><img class="course-rating-star" loading="lazy"
                                                    src="./images/yellow-star.svg" title="Rating-star-traderz-arena"
                                                    alt="Rating-star-traderz-arena"></li>
                                            <li><img class="course-rating-star" loading="lazy"
                                                    src="./images/yellow-star.svg" title="Rating-star-traderz-arena"
                                                    alt="Rating-star-traderz-arena"></li>
                                            <li><img class="course-rating-star" loading="lazy"
                                                    src="./images/yellow-star.svg" title="Rating-star-traderz-arena"
                                                    alt="Rating-star-traderz-arena"></li>
                                            <li><img class="course-rating-star" loading="lazy"
                                                    src="./images/yellow-white-star.svg" title="Rating-star-traderz-arena"
                                                    alt="Rating-star-traderz-arena"></li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="mb-3 review-para">Deepak K L's training is a game-changer! My husband now has clarity on result-oriented trading, thanks to his in-depth knowledge and daily trading experience. We are grateful and wish Traderz Arena all the best.</p>
                            </div>
                        </div>
                        <!-- End of row -->
                    </div>
                </div>


                <!-- Form -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="submit-form">
                            <form id="course-contact-form">
                                <div class="mb-3 mt-3">
                                    <label for="fname">Enter Name</label><br>
                                    <input type="text" class="form-control required" id="name_Field" name="name"
                                        required>
                                    <span role="alert" class="error-msg" id="name_Field_err">Please fill your Full
                                        Name.</span>
                                </div>
                                <div class="mb-3">
                                    <label for="fname">Email Address</label><br>
                                    <input type="email" class="form-control required" id="email_Field" name="email"
                                        required>
                                    <span role="alert" class="error-msg" id="email_Field_err">Please fill your Email
                                        id.</span>
                                </div>
                                <div class="mb-3">
                                    <label for="fname">Mobile Number</label><br>
                                    <input type="number" class="form-control" id="number_Field" name="number" required>
                                    <span role="alert" class="error-msg" id="number_Field_err">Please enter a valid
                                        number</span>
                                </div>
                                <div class="">
                                    <div class="form-control form-control-1">
                                        <label for="fname">Courses Type</label><br>
                                        <select name="courses" class="custom-select text-clr py-2"
                                            id="inputGroupSelect01">
                                            <option selected hidden value="none">Select Courses</option>
                                            <option class="text-clr" value="Expert Trading Course">Expert Trading Course
                                            </option>
                                            <option class="text-clr" value="Options Trading">Options Trading</option>
                                            <option class="text-clr" value="Intex Trading">Intex Trading</option>
                                            <option class="text-clr" value="Mentorship Program">Mentorship Program
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="contact-btn d-flex mt-5">
                                    <button onclick="processquickemail('QUICK_CONTACT_EMAIL',this) " type="button"
                                        class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <div class="footer footer-1 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4 social-icon-1">
                    <div class="social-icon">
                        <ul class="foooter-social-icon d-flex">
                            <li> <a href="https://www.facebook.com/traderz.arena/"><img width="100%" height="100%"
                                        loading="lazy" src="./images/facebook-icon.svg" title="traderz-arena-facebook"
                                        alt="traderz-arena"></a></li>
                            <li> <a href="https://twitter.com/ArenaTraderz"><img width="100%" height="100%"
                                        loading="lazy" src="./images/twitter-icon.svg" title="traderz-arena-twitter"
                                        alt="traderz-arena"></a></li>
                            <li> <a href="https://www.youtube.com/channel/UCrN6WFN-pbf8DywBdZsI79g"><img width="100%"
                                        height="100%" loading="lazy" src="./images/youtube-icon.svg"
                                        title="traderz-arena-youtube" alt="traderz-arena"></a></li>
                            <li> <a href="#"><img width="100%" height="100%" loading="lazy"
                                        src="./images/instagram-icon.svg" title="traderz-arena-instagram"
                                        alt="traderz-arena"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 mb-3">
                    <div class="copy-right d-flex text-center">
                        <span class="text-white">Copyright © 2023 All Rights Reserved.</span>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 mb-3">
                    <div class="privacy d-flex">
                        <span class="text-white">Privacy Policy | FAQ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("common-js.php"); ?>
</body>

</html>