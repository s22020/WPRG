<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$email = $_POST['email'];
$trip_start = $_POST['trip_start'];
$trip_end = $_POST['trip_end'];
$credit_card_no = $_POST['credit_card_no'];
$people = $_POST['people'];
$amenities = $_POST['amenities'];
?>
<table border="1px solid black"><tr><th>Imie</th><th>Nazwisko</th><th>Email</th>' .
<th>Adres 1</th><th>Adres 2</th><th>Poczatek pobytu</th>' .
<th>Koniec pobytu</th><th>Nr karty kredytowej</th><th>Liczba osob</th>' .
<th>Udogodnienia</th>
<tr>
<?php
echo '<td>' . $name . '</td>';
echo '<td>' . $surname . '</td>';
echo '<td>' . $address1 . '</td>';
echo '<td>' . $address2 . '</td>';
echo '<td>' . $email . '</td>';
echo '<td>' . $trip_start . '</td>';
echo '<td>' . $trip_end . '</td>';
echo '<td>' . $credit_card_no . '</td>';
echo '<td>' . $people . '</td>';
echo '<td>' . $amenities . '</td>';
?>
</tr>
</table>

</body>
</html>
