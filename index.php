<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title>Skiresort Card API v 1.0</title>
	
	<meta content="" name="keywords">
	<meta content="" name="author">
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./style.css"/>
</head>
<body>

<div class="container">

  <h1>Skiresort Card API</h1>

  <?php
  require './SkiresordCard.php';
  $Skiresort = new SkiresordCard\Eshop();
    
  // vraci informace o zakazníkovi
  $Skiresort->detail = true;
    
  /**
  * Funkci test lze odeslat cislo cipu ve formatu napr.:
  * 01161471335348894296743
  * 01-1614 7133 5348 8942 9674-3
  * 01-16147133534889429674-3
  * nebo cislo caroveho kodu
  */
    
  echo '<pre>'.print_r($Skiresort->Test('01161471335348894296743'), 1).'</pre>';  
  ?>
    
</div>

</body>
</html>
