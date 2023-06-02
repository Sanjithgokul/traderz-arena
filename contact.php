<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("common-css.php"); ?>
    <title>Traderz Arena</title>
</head>
<body>
<?php include("header.php"); ?>

    <div class="contact-backround-banner py-5 d-flex">
    </div>

    <div class="contact-form-section">
        <div class="container">
            <div class="row contact-align">
                <div class="col-sm-12 col-md-10 col-lg-6">
                    <div class="contact-left">
                        <div class="contact-heading">
                            <h2 class="heading text-bold text-white py-5">Contact Callie</h2>
                        </div>
                        <div class="contact-email">
                            <h4 class="m text-white"><b>BY MAIL</b></h4>
                            <p class="text-justify text-white">contact@traderzarena.com</p>
                        </div>
                        <div class="contact-email">
                            <h4 class="m text-white"><b>ON SOCIAL</b> </h4>
                            <div class="social-icon mt-3">
                            <ul class="foooter-social-icon">
                                <li> <a href="https://www.facebook.com/traderz.arena/"><img width="40" height="40" loading="lazy" src="./images/facebook-contact.svg"  title="traderz-arena-facebook" alt="traderz-arena"></a></li>
                                <li> <a href="https://twitter.com/ArenaTraderz"><img width="40" height="40" loading="lazy" src="./images/twitter-contact.svg"  title="traderz-arena-twitter" alt="traderz-arena"></a></li>
                                <li> <a href="https://www.youtube.com/channel/UCrN6WFN-pbf8DywBdZsI79g"><img width="40" height="40" loading="lazy" src="./images/youtube-contact.svg" title="traderz-arena-youtube"  alt="traderz-arena"></a></li>
                                <li> <a href="#"><img width="40" height="40" loading="lazy" src="./images/instagram-contact.svg"  title="traderz-arena-instagram" alt="traderz-arena"></a></li>
                            </ul>
                            </div>
                        </div>
                        <!-- <div class="contact-email">
                            <h4 class="m text-white"><b>BY FORM</b></h4>
                            <p class="text-justify text-white lh-2">Use the contact form to send a message. I’ll get back to you within 24 business hours</p>
                        </div> -->
                        <div class="contact-email">
                            <h4 class="m text-white"><b>HOURS</b></h4>
                            <span class="tesimonial-right-span text-white">MON - FRI, 9am - 8pm EST</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-10 col-lg-6 d-flex-contact">
                    <div class="contact-form">
                        <form  id="contact-form" action="/action_page.php">
                            <h3 class="form-heading text-gray d-flex">Quick Contact</h3>
                            <div class="mb-3 mt-3">
                                <input type="text" class="form-control name required" required='' id="nameField"  placeholder="Your Name" name="name">
                                <span role="alert" class="error-msg" id="nameField_err">Please fill your Full Name.</span>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control email required"  required='' id="emailField"  placeholder="Email Address" name="email">
                                <span role="alert" class="error-msg" id="emailField_err">Please fill your Email ID.</span>
                            </div>
                            <div class="mb-3">
                            <input type="number" class="form-control number required" required='' id="number_Field"  placeholder="Mobile Number" name="number" required>
                            <span role="alert" class="error-msg" id="number_Field_err">Please enter a valid number</span>
                        </div>
                            <div class="mb-3">
                                <textarea class="form-control message" rows="5" required='' id="messageField"  placeholder="Your Message" name="message"></textarea>
                            </div>
                            <div class="contact-btn d-flex">
                                <button onclick="processcontactemailform('CONTACT_EMAIL_FORM',this) " class="sub-btn" type="button" id="conatctpagebtn">Submit</button>
                            </div>
                            <div class="alart-msg">
                                <div class="alart-message text-red mt-2" style="display:none" id="Success_mail_message">Thank you for applying...</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="map-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-12 col-md-12 col-lg-9">
                    <h2 class="heading text-bold text-gray text-center">Find Us on Google Maps</h2>
                    <p class="sub-title text-gray text-center pt-3">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.296065117775!2d80.17474387591723!3d13.016808813883795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52616eb0f20bc3%3A0xf88a89dd560efaf5!2sTraderz%20Arena!5e0!3m2!1sen!2sin!4v1681731234250!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <?php include("footer.php"); ?>
    <?php include("common-js.php"); ?>

</body>
</html>