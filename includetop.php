<?php
if(session_id() == ''){
     session_start(); 
}
ob_start();
$window = md5(time());
$_SESSION['window'] = $window;
?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
<script>
$.ajax({
  type: "POST",
  url: "/enable.php",
});
</script>
