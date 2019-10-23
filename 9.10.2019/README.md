#9.10.2019 Päeva kokkuvõte

##Põhilised aritmeetilised operaatorid:

*liitmine

```
<?php
$x = 2;
$y = 3;
$summa = $x + $y;
?>
```

*lahutamine
```
<?php
$x = 2;
$y = 3;
$vahe = $x - $y;
?>
```

*korrutamine
```
<?php
$x = 2;
$y = 3;
$korrutis = $x * $y;
?>
```

*jagamine
```
<?php
$x = 2;
$y = 3;
$jagatis = $x / $y;
?>
```

##Suurendamine ja vähendamine 1 võrra
```
<?php
$x = 2;
$x++;
echo $x;
?>
```
```
<?php
$x = 2;
++$x;
echo $x;
?>
```

##Suurendamine ja vähendamine 2 võrra
```
<?php
$x = 2;
$x += 2; // $x = $x + 2;
echo $x;
?>
```

```
<?php
$x = 2;
$x -= 2; // $x = $x - 2;
echo $x;
?>
```

```
<?php
$x = 2;
$x *= 2; // $x = $x * 2;
echo $x;
?>
```

```
<?php
$x = 2;
$x /= 2; // $x = $x / 2;
echo $x;
?>
```
*j@@gi leidmine
```
<?php
$x = 2;
$x %= 2; // $x = $x % 2;
echo $x;
?>
```

##Vormindatud v@ljundid
*printf
```
<?php
printf('formaadisõne koos lisatekstiga', $muutuja1, $muutuja2, ..., $muutujaN);
?>
```
*formaadid
```
%s    - string sõne
%d    - decimal täisarv
%f    - float komaga arv
%c    - char sümbol
%3.2f - komaarv
```

*html tabeli tegemine

*php, html, css ühes failis

###Kodus

*[Metshein.com](https://www.metshein.com/course/php-alused/) - PHP – Matemaatilised tehted - Ülesanne 2 ->

*Koosta kood, mis teisendab Celsius-kraadid Fahrenheiti. Kasuta valemit: F=(9/5)*C+32. Vastus vormindatakse 2 kohta pärast koma.

