<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page - Traderz Arena</title>
    <link rel="preload stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <?php include("common-css.php"); ?>
    <?php include("tracking-codes.php"); ?>

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">
    <?php include("header.php"); ?>
    <section class="new-404-page-1">
        <div class="img-container">
            <img width="100%" height="100%" class="page-404-header-img" src="../images/page-not-found-1.svg"
                alt="Page dosen't exit">
        </div>
        <div class="text-content">
            <span class="new-404-page-subtitle">Page Could Not Be Found</span>
        </div>
        <div class="header-btn page-404-header-btn">
            <a href="/" class="button"><i class="bi bi-house-door-fill p-2"></i>Go Back to Home</a>
        </div>
        <div class="footer-container">
            <?php include("footer.php"); ?>
        </div>
    </section>

    <?php include("common-js.php"); ?>
</body>
<script async>
$(".cont_form_active").on('click', function() {
    $('html, body').animate({
        scrollTop: $(".get-in-touch").offset().top
    }, 200);
    $('.form_contact #name_Field').focus();
});
</script>

</html>