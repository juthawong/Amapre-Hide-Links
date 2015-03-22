<?php
error_reporting(0);
if(session_id() == ''){
     session_start(); 
}
$window = addslashes(strip_tags($_GET['window']));
if($_SESSION['jsenable'.$window]){
$md5defa = md5('Defa');
$t = (int)$_GET['defat'];
$filedefa = str_replace($md5defa,'',$_SESSION['file'.$t]);
$file = base64_decode(base64_decode($filedefa));
$defa = base64_decode(base64_decode($filedefa));
unset($_SESSION['file'.$t]);
header("Location:".$file);
}else{
unset($_SESSION['file'.$t]);


}
?>
