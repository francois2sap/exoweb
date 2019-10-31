<?php 
require('config.php');
?>

<!doctype html>

<html lang="fr">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <title><?php echo TITLE ?></title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <form action="participer.php" method="post" class="form-example">
    <div class="form-example">
        <label for="lastname">Entre ton nom: </label>
        <input type="text" name="lastname" id="lastname" required>
    </div>
    <div class="form-example">
        <label for="name">Entre ton prénom: </label>
        <input type="name" name="name" id="name" required>
    </div>
    <div class="form-example">
        <label for="email">Entre ton email: </label>
        <input type="email" name="email" id="email" required>
    </div>
    <div class="form-example">
    <input type="submit" value="Envoyer!">
  </div>
    </form>
</body>
</html>