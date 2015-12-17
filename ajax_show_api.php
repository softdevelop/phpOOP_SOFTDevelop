<?php
include_once('config/main.php');
if(isset($_GET["ctl"])) {
	$cn = $_GET["ctl"];
} else {
	$cn = "save_search";
}
$c = $cn."_controller";
$controller = new $c();
?>