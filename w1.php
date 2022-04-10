<!DOCTYPE html>
<html>
<body>
<?php

echo "Zadanie 1.1";
echo nl2br("\n");
echo "Witaj w swiecie PHP!!!\n";
echo nl2br("\n\n");


echo "Zadanie 1.2";
echo nl2br("\n");
$a = 5;
$b = 4;
$pole = $a * $b;
echo $pole;
echo nl2br("\n");

echo nl2br("\n");
echo "Zadanie 1.3";
echo nl2br("\n");
$a = 12;
echo number_format((float)pi()*sqrt($a), 2, '.','');

echo nl2br("\n\n");
echo "Zadanie 1.4";
$c = 10;
$d = 14;
echo "Dodawanie: " . $c + $d;
echo nl2br("\n");
echo "Odejmowanie: " . $c - $d;
echo nl2br("\n");
echo "Mnozenie: " . $c * $d;
echo nl2br("\n");
echo "Dzielenie: " . $c / $d;
echo nl2br("\n");
echo "Modulo : " . $c % $d;

echo nl2br("\n\n");
echo "Zadanie 1.5";
$napis1 = "Napis 1";
echo nl2br("\n");
$napis2 = "Napis 2";
echo nl2br("\n");
echo "%" . $napis2 . " " . $napis1 . "%$#";

echo nl2br("\n\n");
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
echo nl2br("\n");
checkTriangle($h, $i, $j);

echo nl2br("\n\n");
echo "Zadanie 1.7";
echo nl2br("\n");
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

echo nl2br("\n\n");
echo "<br>Zad 1.8<br>";
function sortBub($a,$b,$c) {
  if ($a > $c) {
		$tmp = $a;
		$a = $c;
    $c = $tmp;
  }

  if ($a > $b) {
	   $tmp = $a;
     $a = $b;
     $b = $tmp;
  }

	if ($b > $c) {
    $tmp = $b;
		$b = $c;
		$c = $tmp;
  }
	echo $a . " " . $b . " " . $c;
	echo $c . " " . $b . " " . $a;
}
sortBub(8,4,5);

echo nl2br("\n\n");
echo "Zad 1.9";
echo nl2br("\n");
function dot_product($a,$b) {
  	$a_int = $a == array_filter($a, 'is_numeric');
  	$b_int = $b == array_filter($b, 'is_numeric');
    if ((!is_array($a) && !is_array($b)) && (count($a) != count($b)) && (!$a_int && !$b_int)) {
      echo "BLAD";
      return;
    }
    for ($i=0;$i<count($a);$i++) {
    		$c[$i] = $a[$i] + $b[$i];
      }
      echo "Iloczyn skalarny tablic: " . json_encode($c);
}


dot_product([3,4,5],[1,2,3]);


echo nl2br("\n\n");
echo "Zad 1.10";
echo nl2br("\n");
function stars($a) {
	for ($i=1;$i<=$a;$i++) {
		echo str_repeat("*", $i);
    echo nl2br("\n");
    }

	for ($i=$a;$i>0;$i--) {
		echo str_repeat('*', $i);
		echo nl2br("\n");
	}

	for ($i=$a;$i>0;$i--) {
		echo str_repeat('&nbsp;', $a - $i) . str_repeat('*', $i);
		echo nl2br("\n");
	}

	for ($i = 1; $i <= $a; $i++) {
		echo str_repeat('&nbsp;', $a - $i) . str_repeat('*', $i);
		echo nl2br("\n");
	}

}

stars(5);

echo nl2br("\n\n");
echo "Zad 1.11";
echo nl2br("\n");
function pangram($input) {
  $chars = range("a","z");
  $sentence = strtolower(trim($input));
  $result = true;
  foreach ($chars as $char) {
    if (!strstr($sentence, $char)) {
      echo "Zdanie nie jest pangramem";
      return;
    }
  }
  echo "Zdanie jest pangramem";
}
pangram("The quick brown fox jumps over the lazy dog");

echo nl2br("\n\n");
echo "Zad 1.12";
echo nl2br("\n");
function transposition() {

  $arr = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
    [1, 2, 3]
  ];

  foreach ($arr as $el) {
    foreach ($el as $i) {
      echo $i . "&nbsp";
    }
      echo nl2br("\n");
  }
  echo nl2br("\n");

  for ($i = 0; $i < count($arr[0]); $i++) {
    for ($j = 0; $j < count($arr); $j++) {
      echo $arr[$j][$i] . "&nbsp;";
    }
    echo nl2br("\n");
  }
}
transposition();
?>
</body>
</html>
