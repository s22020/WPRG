<!DOCTYPE html>
<html>
<body>
<?php
echo "Zadanie 1.1";
nl2br();
echo "Witaj w swiecie PHP!!!\n";

echo "Zadanie 1.2\n";
$a = 5;
$b = 4;
$pole = $a * $b;
echo $pole;

echo "Zadanie 1.3";
$a = 12;
echo number_format((float)pi()*sqrt($a), 2, '.','');

echo "Zadanie 1.4";
$c = 10;
$d = 14;
echo "Dodawanie: " . $c + $d;
echo "Odejmowanie: " . $c - $d;
echo "Mnozenie: " . $c * $d;
echo "Dzielenie: " . $c / $d;
echo "Modulo : " . $c % $d;

echo "Zadanie 1.5";
$napis1 = "Napis 1";
$napis2 = "Napis 2";
echo "%" . $napis2 . " " . $napis1 . "%$#";


echo "Zadanie 1.6";
$h = 4;
$i = 5;
$j = 7;

function checkTriangle($e, $f, $g) {
    if ($e + $f > $g && $e + $g > $f && $f + $g > $e) {
	echo "Da sie zbudowac trojkat";
    } else {
	echo "BLAD";
    }
}
checkTriangle($h, $i, $j);

echo "Zadanie 1.7";
function checkMonth($number) {
	$month = "";
	switch($number) {
		case 1:
			$month ="Styczen, 31 dni";
			break;
		case 2:
			$month = "Luty, 28 dni";
			break;
		case 3:
			$month = "Marzec, 31 dni";
			break;
		case 4:
			$month = "Kwiecien, 30 dni";
			break;
		case 5:
			$month = "Maj, 31 dni";
			break;
		case 6:
			$month = "Czerwiec, 30 dni";
			break;
		case 7:
			$month = "Lipiec, 31 dni";
			break;
		case 8:
			$month = "Sierpien, 31 dni";
			break;
		case 9:
			$month = "Wrzesien, 30 dni";
			break;
		case 10:
			$month = "Pazdziernik, 31 dni";
			break;
		case 11:
			$month = "Listopad, 30 dni";
			break;
		case 12:
			$month = "Grudzien, 31 dni";
			break;
		default:
			$month = "BLAD";
	}
	echo $month;
}
checkMonth(2);
?>
</body>
</html>
