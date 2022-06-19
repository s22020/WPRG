<!DOCTYPE html>
<html>
<body>
<h3>Login</h3>
<?php
include_once('w3-functions.php');
if (isset($_SESSION['scounter'])) {
    unset($_SESSION['scounter']);
}
counter_cookies();
$a = isset($_COOKIE['ccounter']) ? $_COOKIE['ccounter'] : 1;
echo "Licznik ciastek: " . $a;//$_COOKIE['ccounter'];
?>
<form action="w3-authn.php" method="POST">
<label for="username">Username</label>
<input type="text" name="username"><br>
<label for="password">Password</label>
<input type="password" name="password"><br>
<input type="submit" value="Login">
</form>
</body>
</html>
