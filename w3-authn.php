<!DOCTYPE html>
<html>
<body>
<?php
include_once('w3-functions.php');
$username = $_POST['username'];
$password = $_POST['password'];
if (($username == "admon" && $password = "password" && !isset($_SESSION)) || isset($_SESSION)) {
	session_start();
	session_regenerate_id();
	echo "<h3>Welcome!</h3>";
	counter_session();
	counter_cookies();
	echo "Licznik sesji: " . $_SESSION['scounter'] . "<br>";
	//echo $_COOKIE['ccookie'];
} /*else if {

	echo "<h3>Welcome!</h3>";
	counter_session();
	counter_cookies();
	echo "Licznik sesji: " . $_SESSION['scounter'] . "<br>";
	}*/ else {
	echo "<p>Nieprawidlowy uzytkownik i/lub haslo.</p>";
	counter_cookies();
}
counter_cookies();
echo "Licznik ciastek: " . $_COOKIE['ccounter'];
?>
</form>
</body>
</html>
