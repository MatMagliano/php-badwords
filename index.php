<?php
  $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  $cambio = $_GET['word'];


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>


</head>
<body>
  <p><?php echo $text; ?></p>

  <p>lunghezza paragrafo: <?php echo  strlen($text) ?> caretteri</p>

  <p><?php echo str_replace($cambio, '***', $text) ; ?></p>

  <p>lunghezza paragrafo: <?php echo  strlen(str_replace($cambio, '***', $text)) ?> caretteri</p>

</body>
</html>
