<?php
// **PREVENTING SESSION HIJACKING**
// Prevents javascript XSS attacks aimed to steal the session ID
ini_set('session.cookie_httponly', 1);
// **PREVENTING SESSION FIXATION**
// Session ID cannot be passed through URLs
ini_set('session.use_only_cookies', 1);
// Uses a secure connection (HTTPS) if possible
ini_set('session.cookie_secure', 1);

error_reporting(E_ERROR | E_PARSE);


$secure = true; // if you only want to receive the cookie over HTTPS
$httponly = true; // prevent JavaScript access to session cookie
$samesite = 'lax';
$arr_cookie_options = array (
		'lifetime' => strtotime('+30 days'),
		'path' => '/',
		'domain' => '.kuehl.local', //.$_SERVER['HTTP_HOST']
		'secure' => $secure,
		'httponly' => $httponly,
		'samesite' => $samesite
);
session_start();
$message = "";

//Get all query params
function preserve_qs() {
    if (empty($_SERVER['QUERY_STRING']) && strpos($_SERVER['REQUEST_URI'], "?") === false) {
        return "";
    }
    return "?" . $_SERVER['QUERY_STRING'];
}

//Check for existing cookies
if(!isset($_COOKIE["PHPSESSID_client"])){
	$message = "<br>new firstsession";
	//setcookie("PHPSESSID_client", $_COOKIE["PHPSESSID"], strtotime('+30 days'), ".kuehl.local");
	setcookie("PHPSESSID_client", $_COOKIE["PHPSESSID"], $arr_cookie_options);
} else {
	if(isset($_COOKIE["PHPSESSID_client"]) && $_COOKIE["PHPSESSID"] != $_COOKIE["PHPSESSID_client"]){
		$message = "<br>different cookies<br>" .$_COOKIE["PHPSESSID"].":PHPSESSID<br>" .$_COOKIE["PHPSESSID_client"].':PHPSESSID_client';
	} else {
		$message = "<br>same cookies<br>" .$_COOKIE["PHPSESSID"].":PHPSESSID<br>" .$_COOKIE["PHPSESSID_client"].':PHPSESSID_client';
	}
}

$ssid_client=hash('md5',$_COOKIE["PHPSESSID_client"]);
$ssid=hash('md5',$_COOKIE["PHPSESSID"]);
if($ssid_client != $ssid_client){
    $message .= "!hash not same!";
}
$message.= '<hr>'. $ssid_client .'<>'. $ssid . '<hr>GET Params:' . preserve_qs();
?>