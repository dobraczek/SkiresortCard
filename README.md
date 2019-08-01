# SkiresortCard
API na prověření zda-li zákazník může získat slevu.

## Ukázka použití

```
<?php
require './SkiresordCard.php';
$Skiresort = new SkiresordCard\Eshop();

// povoluje zobrazeni ostatnich informaci (jmeno, prijmeni, email)
$Skiresort->detail = true;

// cislo karty SKIDATA
echo '<pre>'.print_r($Skiresort->Test('01-1614 7133 5350 0317 7726-2'), 1).'</pre>';

// cislo karty pro registraci
echo '<pre>'.print_r($Skiresort->Test('44911286'), 1).'</pre>';
?>
```

## Ukázka výsledků

Záznam nalezen (platnost oprávění)
```
Array
(
    [valid] => true
    [date] => 2019-07-29
)
```

Záznam nalezen (platnost oprávění + základní informace o uživateli)
```
Array
(
    [valid] => true
    [date] => 2019-07-29
    [name] => Martin
    [surname] => Dobry
    [email] => martin@....
)
```

Záznam nenalezen
```
Array
(
    [valid] => false
)
```

Chyba při připojení k API
```
Array
(
    [error] => 'Login incorrect!'
)
```
