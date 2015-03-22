<?php
//Written By Juthawong Naisanguansee
error_reporting(0);
if(session_id() == ''){
     session_start(); 
}
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }

$_SESSION['url'] = $pageURL;


$out2 = ob_get_clean();
if(strpos($out2,"<safe")==false){

if(strpos($out2,"<safe")!==false){
$_SESSION['safe']="SAFE";
}
function getURL($matches) {
	global $window;
  global $rootURL;
if($_SESSION['defat']==""){
$_SESSION['defat'] = 1;
}else{
$_SESSION['defat'] = $_SESSION['defat'] + 1;
}
$_SESSION['x'.$matches['2'].$_SESSION['defat']]=0;
$_SESSION['defa'.$matches['2'].$_SESSION['defat']] = md5(time()."Defa Protector");
$_SESSION['imdefa'.$_SESSION['defat']]=md5('Defa').base64_encode(base64_encode($matches['2']));
$_SESSION['x'.$matches['2']]=0;
$_SESSION['defa'.$matches['2']] = md5(time()."Defa Protector");
$_SESSION['file'.$_SESSION['defat']] = md5('Defa').base64_encode(base64_encode($matches['2']));
  return $matches[1] . $rootURL . "/defahide.php?window=".$window."&defat=".$_SESSION['defat'];
}

$mes = preg_replace_callback("/(<iframe[^>]*src *= *[\"']?)([^\"']*)/i", getURL, $out2);

echo $mes;
//$mes = preg_replace_callback("/(<a[^>]*src *= *[\"']?)([^\"']*)/i", getURL, $mes);
//$mes = preg_replace_callback("/(<img[^>]*src *= *[\"']?)([^\"']*)/i", getURL, $mes);
//$mes = preg_replace_callback("/(<video[^>]*src *= *[\"']?)([^\"']*)/i", getURL, $mes);
//$mes = preg_replace_callback("/(<audio[^>]*src *= *[\"']?)([^\"']*)/i", getURL, $mes);
//$mes = preg_replace_callback("/(<source[^>]*src *= *[\"']?)([^\"']*)/i", getURL, $mes);
//$mes = preg_replace_callback("/(<embed[^>]*src *= *[\"']?)([^\"']*)/i", getURL, $mes);

}else{
echo $out2;
}
?>
