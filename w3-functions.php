<?php
function counter_cookies() {
	if (isset($_COOKIE['ccounter'])) {
        	$ccounter = $_COOKIE['ccounter'];
        	$ccounter++;
	} else {
		$ccounter = 2;
	}
	setCookie("ccounter", $ccounter);
}

function counter_session() {
	if (isset($_SESSION['scounter'])) {
		$scounter = $_SESSION['scounter'];
		$scounter++;
	} else {
		$scounter = 1;
	}
	$_SESSION['scounter'] = $scounter;
}
?>
