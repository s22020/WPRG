<!DOCTYPE html>
<html>
<body>
<h3>Zadanie 1</h3>
<form action="#" method="POST">
<label for="liczba1">Liczba 1</label>
<input type="text" name="a"><br>
<label for="liczba2">Liczba 2</label>
<input type="text" name="b"><br>
<select name="operator">
<option value="dodawanie">Dodawanie</option>
<option value="odejmowanie">Odejmowanie</option>
<option value="mnozenie">Mnozenie</option>
<option value="dzielenie">Dzielenie</option>
</select><br>
<input type="submit" value="Oblicz">
</form>
<?php
$a = intval($_POST["a"]);
$b = intval($_POST["b"]);
$operator = $_POST["operator"];
if (isset($a, $b, $operator)) {
  echo "Wynik: ";
  switch ($operator) {
    case "dodawanie":
      echo $a + $b;
      break;
    case "odejmowanie":
      echo $a - $b;
      break;
    case "mnozenie":
      echo $a * $b;
      break;
    case "dzielenie":
      echo $a / $b;
      break;
    default:
      echo "Nieprawidlowa wartosc";
  }
}
?>
<br>
<br>
<h3>Zadanie 2</h3>
<form action="w2-result.php" method="POST">
<label for="name">Imie</label><br>
<input type="text" name="name" required><br>
<label for="surname">Nazwisko</label><br>
<input type="text" name="surname" required><br>
<label for="address1">Adres 1</label><br>
<input type="text" name="address1" required><br>
<label for="address2">Adres 2</label><br>
<input type="text" name="address2" required><br>
<label for="people_no">Liczba osob</label><br>
<select name="people" id="people"><br>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select><br>
<label for="email">E-mail</label><br>
<input type="text" name="email" required><br>
<label for="trip_start">Data przyjazdu</label><br>
<input type="date" name="trip_start" value="" min="" max="" required><br>
<label for="trip_end">Data powrotu</label><br>
<input type="date" name="trip_end" value="" min="" max="" required><br>
<label for="credit_card_no">Nr karty kredytowej</label><br>
<input type="text" name="credit_card_no"><br>
  <label for="amenities">Udogodnienia</label><br>
  <select name="amenities">
  <option value="" default></option>
  <option value="cradle">Lozeczko dla dziecka</option>
  <option value="ac">Klimatyzacja</option>
  <option value="parking">Parking</option>
  <!-- <option value="">4</option> -->
</select><br>
  <input type="submit" value="Wyslij"><br>
</form>
<?php

?>
<?php
$form = htmlspecialchars($_POST["form"]);
function generate_table($form) {
  echo '<table border="1px solid black"><tr><th>Imie</th><th>Nazwisko</th><th>Email</th>' .
  '<th>Adres 1</th><th>Adres 2</th><th>Poczatek pobytu</th>' .
  '<th>Koniec pobytu</th><th>Nr karty kredytowej</th><th>Liczba osob</th>' .
  '<th>Udogodnienia</th></tr><tr>';
  foreach ($form as $item) {
    // if $item
    echo '<td>' . $item . '</td>';
  }
  echo '</tr></table>';
}
if (isset($form)) {
  generate_table($form);
}
?>
</body>
</html>
