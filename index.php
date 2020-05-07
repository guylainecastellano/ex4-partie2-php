<?php
$age = 121;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>ex4 partie2 php</title>
</head>
<body>
  <p>
    <?php
    if ($age >=18 && $age <120){
      echo 'tu es majeur';
    }  elseif ($age <=18 && $age >=0){
      echo 'tu es mineur';
    }else {
      echo 'vous avez fait une erreur';
    }
    ?>
  </p>
</body>
</html>
