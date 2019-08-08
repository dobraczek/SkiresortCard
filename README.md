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

// Barcode - kód přečtený čtečkou čárových kódů
echo '<pre>'.print_r($Skiresort->Test('70356477034043557622'), 1).'</pre>';
?>
```

## Ukázka různých výsledků

Záznam nalezen (platnost oprávění a sleva v procentech)
```
Array
(
    [valid] => true
    [sale] => 10
    [date] => 2019-07-29
)
```

Záznam nalezen (platnost oprávění, sleva v procentech a základní informace o uživateli)
```
Array
(
    [valid] => true
    [sale] => 10
    [date] => 2019-07-29
    [name] => Martin
    [surname] => Dobry
    [email] => martin@....
    [phone] => 774800...
    [street] => V Parku
    [city] => Praha 4
    [zip] => 14800
)
```

Pokud nemáte oprávnění načíst detaily o uživateli
```
Array
(
    [valid] => true
    [date] => 2019-07-29
    [sale] => 10
    [error_detail] => You do not have the permission!
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
