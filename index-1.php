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
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            <span role="alert" class="error-msg" id="number_Field_err">Please enter a valid number</span>
                        </div>
                        <div class="">
                            <div class="form-control form-control-1">
                            <label for="fname">Courses Type</label><br>
                                <select name="courses" class="custom-select text-clr py-2" id="inputGroupSelect01">
                                  <option selected hidden value="none">Select Courses</option>
                                  <option class="text-clr" value="Expert Trading Course">Expert Trading Course</option>
                                  <option class="text-clr" value="Options Trading">Options Trading</option>
                                  <option class="text-clr" value="Intex Trading">Index Trading</option>
                                  <option class="text-clr" value="Mentorship Program">Mentorship Program</option>
                                </select>
                            </div>
                        </div>
                        <div class="contact-btn d-flex mt-2">
                            <button onclick="processquickemail('QUICK_CONTACT_EMAIL',this) " type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="backround-banner backround-banner-1 d-flex">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-6 col-xl-6">
                    <div class="banner-content">
                        <span class="text-white mb-3">Track Expert Traders</span>
                        <h1 class="heading text-white py-4 lh-5">We Train You How to Make <b> Consistent Money!</b></h1>
                        <span class="text-white">Learn from market experts & invest your course fee in live trading.</span>
                        <div class="form-section mt-5 mb-3">
                            <form  id="contact-form"  action="#" method="post">
                                <input type="email" class="input-field email required" placeholder="Enter Your Email Address" id="emailField" name="email" required>
                                <button onclick="processemailform('HOME_EMAIL_FUNCTION',this) " class="sub-btn" type="button" id="enquiryButton">Submit</button>
                            </form>
                            <span role="alert" class="error-msg" id="emailField_err">Please fill your Email ID.</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-6 d-flex">
                    <img width="100%" height="100%" loading="lazy" src="./images/section-1234.svg" title="traderz-arena" alt="traderz-arena">
                </div>
            </div>
        </div>
    </div>

    <section id="about-sec" class="section-2 section-2-1">
        <div class="about-us">
            <div class="container">
                <div class="row justify-content-center align-items-center reverse" >
                    <div class="col-sm-12 col-md-12 col-lg-6 small-d">
                        <img width="100%" height="100%" loading="lazy" src="./images/sec-2-new.svg" title="traderz-arena" alt="traderz-arena">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <h2 class="heading text-bold text-gray">About Us</h2>
                        <p class="text-gray lh-2 text-justify">At Traderz Arena, We take pride in delivering exceptional training that empowers individuals to thrive and generate profits in all market conditions (bear or bull market). Our technically sound experts train you to create your trading protocol and achieve wealth creation through value investment.</p>
                        <p class="text-gray lh-2 text-justify"> We prioritize transparency and trust in all interactions with clients. Invest with confidence with less risk assured. Say goodbye to fake calls and financial losses. Our expert trading knowledge guarantees that you'll not only recover your investment but also reap the rewards of successful trading. Join us now for a hassle-free investment experience.</p>
                        <div class="row year">
                            <div class="col-6 col-md-6 col-lg-6 mb-4">
                                <div class="back-clr  back-clr-1 d-flex" style="justify-content:flex-start;">
                                    <div class="cele-img">
                                        <img width="100%" height="100%" loading="lazy" src="./images/year-123.svg" title="traderz-arena" alt="traderz-arena">
                                    </div>
                                    <div class="year-content ps-3">
                                        <h4>10+ Years</h4>
                                        <span>Market Experiencece</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 mb-4">
                                <div class="back-clr back-clr-1  d-flex" style="justify-content:flex-start;gap:10px;">
                                    <div class="cele-img">
                                        <img width="100%" height="100%" loading="lazy" src="./images/mentor-1.svg" title="traderz-arena" alt="traderz-arena">
                                    </div>
                                    <div class="year-content ps-3">
                                        <h4>15+ Mentorship</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 mb-4">
                                <div class="back-clr back-clr-1  d-flex" style="justify-content:flex-start;gap:17px;">
                                    <div class="cele-img">
                                        <img width="100%" height="100%" loading="lazy" src="./images/persentage-new-123.svg" title="traderz-arena" alt="traderz-arena">
                                    </div>
                                    <div class="year-content ps-3">
                                        <h4>20-25% Returns per Annum</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 mb-4" >
                                <div class="back-clr back-clr-1  d-flex" style="justify-content:flex-start;">
                                    <div class="cele-img">
                                        <img width="100%" height="100%" loading="lazy" src="./images/community-12.svg" title="traderz-arena" alt="traderz-arena">
                                    </div>
                                    <div class="year-content ps-3">
                                        <h4>Community Trading</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="banner-btn b-clr mb-3">
                            <button>View More</button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="course-sec" class="section-3 box-backround-1">
        <div class="course-details">
            <div class="container mb-4">
               <h2 class="heading text-bold text-gray text-center">Main Courses </h2>
                <p class="sub-head  text-center">View our exclusive courses and packages that are suited to the learning model you prefer. </p>
            </div>
            <div class=" mt-5">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-12 col-md-6 col-lg-4 box-1 d-flex mb-5">
                            <div class="box-inner">
                                <div class="box-heading clr-2 mb-3">
                                    <h3 class="top-heading text-center text-white d-flex">Expert Trading Course </h3>
                                    <div class="span-sec">
                                        <h4 class="m d-flex mb-2 text-white"><b class="px-2">Duration:</b> 3 Months </h4>
                                        <h4 class="r d-flex text-white"> <b class="px-2">Fee: </b> 100,000 INR + GST</h4>
                                    </div>
                                </div>
                                <div class="ul-section d-flex">
                                    <div class="course-details-inner d-flex text-center">
                                        <ul class="course-list">
                                            <li>Stock Market Basics</li>
                                            <li>Options Trading and Strategies</li>
                                            <li>Advance Techniques & Adjustments</li>
                                            <li>Mirror Trading</li>
                                            <li>3 Months Support</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="course-btn course-btn-2 d-flex">
                                    <a data-bs-toggle="modal" data-bs-target="#staticBackdrop"  href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 box-1 d-flex mb-5">
                            <div class="box-inner">
                                <div class="box-heading  clr-3 mb-3">
                                    <h3 class="top-heading text-center text-white d-flex">Options Trading </h3>
                                    <div class="span-sec">
                                        <h4 class="m d-flex mb-2 text-white"><b class="px-2">Duration:</b> 1 Month </h4>
                                        <h4 class="r d-flex text-white"> <b class="px-2">Fee:</b>  50,000 INR + GST</h4>
                                    </div>
                                </div>
                                <div class="ul-section d-flex">
                                    <div class="course-details-inner d-flex text-center">
                                        <ul class="course-list">
                                            <li>Candle Stick Patterns</li>
                                            <li>Chart Patterns</li>
                                            <li>Time Frame Analysis</li>
                                            <li>Gap up & Gap Down Trading</li>
                                            <li>Trade Setup</li>
                                            <li>Monthly Income Generation</li>
                                            <li>1 Month Support</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="course-btn course-btn-3 d-flex">
                                    <a data-bs-toggle="modal" data-bs-target="#staticBackdrop"  href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 box-1 d-flex mb-5">
                            <div class="box-inner">
                                <div class="box-heading  clr-4 mb-3">
                                    <h3 class="top-heading text-center text-white  d-flex"> Index Trading</h3>
                                    <div class="span-sec">
                                        <h4 class="m d-flex mb-2 text-white"><b class="px-2">Duration:</b> 2 Weeks</h4>
                                        <h4 class="r d-flex text-white"> <b class="px-2">Fee:</b> 25,000 INR + GST</h4>
                                    </div>
                                </div>
                                <div class="ul-section d-flex">
                                    <div class="course-details-inner d-flex text-center">
                                        <ul class="course-list">
                                            <li>Positional Expiry Trading Concepts</li>
                                            <li>Weekly Expiry Trading Techniques</li>
                                            <li>Intraday/Positional OI analysis</li>
                                            <li>Index Intraday Trading</li>
                                            <li>Intraday Adjustment Concepts</li>
                                            <!-- <li>Intraday PalysisCR An</li> -->
                                            <li>1 Month Support</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="course-btn course-btn-4 d-flex">
                                    <a data-bs-toggle="modal" data-bs-target="#staticBackdrop"  href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 box-1 d-flex mb-5">
                            <div class="box-inner">
                                <div class="box-heading mb-3">
                                    <h3 class="top-heading  text-center text-white d-flex">Mentorship Program</h3>
                                    <div class="span-sec">
                                        <h4 class="m d-flex mb-2 text-white"><b class="px-2">Duration:</b>  6 Months </h4>
                                        <h4 class="r d-flex text-white"> <b class="px-2">Fee:</b> 500,000 INR</h4>
                                    </div>
                                </div>
                                <div class="ul-section d-flex">
                                    <div class="course-details-inner d-flex text-center">
                                        <ul class="course-list">
                                            <li>Complete A 2 Z Trading Concepts</li>
                                            <li>How to Build a portfolio</li>
                                            <li>Passive Income Creation</li>
                                            <li>Wealth Creation </li>
                                            <li>Taxation</li>
                                            <li>Mirror Trading</li>
                                            <li>6 Months Support</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="course-btn d-flex">
                                    <a  data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <span class="course-span text-center"> <b>Note:</b> For all courses we guarantee you the payback policy of training fee. <span class="condition"> **</span> Conditions Apply</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="#" class="section-4 section-4-1 mt-5">
        <div class="container">
            <div class="profile-section profile-section-1">
                <div class="row justify-content-center align-items-center reverse">
                    <div class="col-12 col-md-12 col-lg-7">
                        <h2 class="heading text-bold text-gray mb-4">Deepak K L</h2>
                        <p class="text-gray lh-2 text-justify">A trailblazing entrepreneur who has unlocked the secrets of financial investment and trading with over a decade of experience.His unique investing model and exceptional money management skills have made him a successful investor and trader. He doubles investments in 3-4 years, surpassing market expectations. As a trader cum trainer, Deepak is a beacon of knowledge, empowering aspiring traders with his insights and expertise.  In 2021, he founded Traderz Arena LLP, a platform where he continues to inspire and educate, reshaping financial markets.</p>
                        <p class="text-gray lh-2 text-justify">Get ready to unlock the path to financial success with Deepak K L - a true maverick in the world of trading and investment.</p>
                        <div class="know-more know-more-1 pt-2">
                            <a type="button" class="btn btn-primary">Know More</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-5 d-flex">
                        <div class="deepak-profile">
                            <img loading="lazy"  width="100%" height="100%" src="./images/deepak-traderz-arena.svg" alt="traderz-arena-deepak" title="traderz-arena-deepak">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-5 section-5-1">
        <div class="container">
            <div class="testimonial-sec">
                <div class="row justify-content-center align-items-center reverse">
                    <div class="col-12 col-md-12 col-lg-6 test-clint-img small-d">
                       <img loading="lazy" width="100%" height="100%" src="./images/test-speack.webp" title="Testimonial-Clients" alt="Testimonial-Clients">
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 mob-bottom">
                        <span class="tesimonial-right-span mb-3">Our Testimonials</span>
                        <h2 class="heading text-bold text-gray mb-4">What They’re Talking About Us</h2>
                        <div class="testimonial-right testimonial-right-1">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <p class="text-justify">Thanks to the excellent coaching and mentoring from Deepak and Dana Karthikeyan, I am now confident in executing equity trading and option strategies. I highly recommend Traderz Arena for anyone seeking to learn and succeed in the stock market.</p>
                                        <h3 class="testi-name new-clr">V. Anbarasu</h3>
                                        <div class="testi-des">
                                            <div class="testides-name">
                                                <h5 class="text-white new-clr">Adetprite</h5> 
                                            </div>          
                                            <div class="testi-img">
                                                <img  width="100%" height="100%" loading="lazy" src="./images/quotes-new-1.svg"  title="traderz-arena" alt="traderz-arena">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item" >
                                        <p class="text-justify">Deepak K L's stock trading training sessions have been a game-changer for my husband. His in-depth knowledge and daily trading experience have provided valuable insights into result-oriented trading. We are grateful for his wonderful training and personal support and wish Traderz Arena all the best.</p>
                                        <h3 class="testi-name new-clr">Poorani Anbarasu</h3>
                                        <div class="testi-des">
                                            <div class="testides-name">
                                            <h5 class="new-clr">Adetprite Solutions</h5> 
                                            </div>
                                            <div class="testi-img">
                                                <img width="100%" height="100%"  loading="lazy" src="./images/quotes-new-1.svg" title="traderz-arena"  alt="traderz-arena">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="testi-star">
                                <ul class="Rating-star">
                                    <li><img width="100%" height="100%" loading="lazy" src="./images/testimonial-star.svg" title="Rating-star-traderz-arena" alt="Rating-star-traderz-arena"></li>
                                    <li><img width="100%" height="100%" loading="lazy" src="./images/testimonial-star.svg" title="Rating-star-traderz-arena" alt="Rating-star-traderz-arena"></li>
                                    <li><img width="100%" height="100%" loading="lazy" src="./images/testimonial-star.svg" title="Rating-star-traderz-arena" alt="Rating-star-traderz-arena"></li>
                                    <li><img width="100%" height="100%" loading="lazy" src="./images/testimonial-star.svg" title="Rating-star-traderz-arena" alt="Rating-star-traderz-arena"></li>
                                    <li><img width="100%" height="100%" loading="lazy" src="./images/testimonial-star.svg" title="Rating-star-traderz-arena" alt="Rating-star-traderz-arena"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-sec py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="title_block text-center">
                        <h2 class="title fw-bold text-dark">FAQ</h2>
                        <p class="sub-title text-gray text-center pt-3">Know more about our processes and how we work, with the help of the following FAQs.</p>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="accordion accordion-flush pt-5" id="faqAccordion">
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingOne">
                                <button class="accordion-button accordion-button-1 smooth-trans lh-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How to make a consistent profit in the Stock market?
                                    <span class="accordion_icon"></span>
                                </button>
                            </h4>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="text-justify lh-2 mb-3">Making consistent profits in the stock market requires a solid understanding of market dynamics and the ability to accurately analyze and interpret market trends. It's important to conduct thorough research on the companies you're interested in investing in, including their financial health, competitive landscape, and industry trends. Additionally, it's important to have a clear investment strategy and risk management plan in place to help minimize losses.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- <div class="accordion-item">
                            <h4 class="accordion-header" id="headingTwo">
                                <button class="accordion-button accordion-button-1 collapsed smooth-trans lh-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How to pick the right stock?
                                    <span class="accordion_icon"></span>
                                </button>
                            </h4>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="text-justify lh-2">There are many factors to consider when selecting the right stocks to invest in, including a company's financial health, growth potential, competitive advantages, and industry trends. It's important to conduct thorough research and analysis to identify companies that are well-positioned to succeed in the long term.</p>
                                </div>
                            </div>
                        </div> -->
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingThree">
                                <button class="accordion-button accordion-button-1 collapsed smooth-trans lh-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How to analyze the stock trend?
                                    <span class="accordion_icon"></span>
                                </button>
                            </h4>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="text-justify lh-2">There are many tools and techniques available for analyzing stock trends, including technical analysis and fundamental analysis. Technical analysis involves analyzing charts and technical indicators to identify patterns and trends, while fundamental analysis involves analyzing a company's financial health and industry trends to identify long-term growth potential.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingFour">
                                <button class="accordion-button accordion-button-1 collapsed smooth-trans lh-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Is there a way to earn rental income for our investment in the stock market?
                                    <span class="accordion_icon"></span>
                                </button>
                            </h4>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="text-justify lh-2">While there is no direct way to earn rental income from the stock market, there are some investment strategies that can provide regular income streams, such as dividend-paying stocks and bonds. It's important to research and select investments that align with your financial goals and risk tolerance.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingFive">
                                <button class="accordion-button accordion-button-1 collapsed smooth-trans lh-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How to arrive at the right value/price of a stock?
                                    <span class="accordion_icon"></span>
                                </button>
                            </h4>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="text-justify lh-2 mb-3">Determining the right value or price of a stock involves analyzing a range of factors, including a company's financial health, growth potential, and industry trends. This can be done through fundamental analysis, which involves analyzing financial statements and industry trends to estimate a company's intrinsic value.</p>  
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingSix">
                                <button class="accordion-button accordion-button-1 collapsed smooth-trans lh-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseFive">
                                    Are there any fundamental rules I can follow to navigate safely in the stock market?
                                    <span class="accordion_icon"></span>
                                </button>
                            </h4>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="text-justify lh-2 mb-3">Some fundamental rules can help investors navigate the stock market safely, such as diversifying their portfolio, investing for the long term, and avoiding emotional decision-making. It's also important to have a clear investment strategy and risk management plan in place to help minimize losses. Additionally, conducting thorough research and analysis before making investment decisions can help reduce risk and increase the chances of long-term success.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer footer-1 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4 social-icon-1">
                    <div class="social-icon">
                        <ul class="foooter-social-icon d-flex">
                            <li> <a href="https://www.facebook.com/traderz.arena/"><img width="100%" height="100%" loading="lazy" src="./images/facebook-icon.svg"  title="traderz-arena-facebook" alt="traderz-arena"></a></li>
                            <li> <a href="https://twitter.com/ArenaTraderz"><img width="100%" height="100%" loading="lazy" src="./images/twitter-icon.svg"  title="traderz-arena-twitter" alt="traderz-arena"></a></li>
                            <li> <a href="https://www.youtube.com/channel/UCrN6WFN-pbf8DywBdZsI79g"><img width="100%" height="100%" loading="lazy" src="./images/youtube-icon.svg" title="traderz-arena-youtube"  alt="traderz-arena"></a></li>
                            <li> <a href="#"><img width="100%" height="100%" loading="lazy" src="./images/instagram-icon.svg"  title="traderz-arena-instagram" alt="traderz-arena"></a></li>
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