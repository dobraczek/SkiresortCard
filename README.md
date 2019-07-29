# SkiresortCard
API na prověření zda-li zákazník může získat slevu.

## Ukázka použití

```
<?php
require './SkiresordCard.php';
$Skiresort = new SkiresordCard\Eshop();
$Skiresort->detail = true;
echo '<pre>'.print_r($Skiresort->Test('01161471335348894296743'), 1).'</pre>';
?>
```

## Ukázka výsledků

```
Array
(
    [valid] => true
    [date] => 2019-07-29
)
```

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

```
Array
(
    [valid] => false
)
```

```
Array
(
    [error] => 'Login incorrect!'
)
```
