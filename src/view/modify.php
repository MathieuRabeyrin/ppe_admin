<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Client</title>
    <link rel="stylesheet" href="./public/css/reset.css">
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/form.css">
    <link rel="stylesheet" href="./public/css/form-delete.css">
    <link rel="icon" type="image/x-icon" href="./public/assets/icon.ico"/>
</head>
<body>
    <?php include_once("./src/view/header.html") ?>
    <main>
        <form action="./?action=update&id=<?php echo $user["id"] ?>" method="POST">
            <a href="./">voir la liste des utilisateurs &#8250;</a>
            <?php
                if (!empty($_SESSION["error"]))
                    echo "<p class='warning'>".$_SESSION['error']."</p>";
            ?>
            <label for="lastname">Nom:</label>
            <input type="text" id="lastname" name="lastname" value="<?php echo $user["lastname"] ?>" autofocus>
            <label for="firstname">Prénom:</label>
            <input type="text" id="firstname" name="firstname" value="<?php echo $user["firstname"] ?>">
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" value="<?php echo $user["age"] ?>">
            <label for="email">Adresse mail:</label>
            <input type="email" id="email" name="email" value="<?php echo $user["email"] ?>">
            <button type="submit">Mettre à jour </button>
        </form>
        <p class="delete-btn"><a href="?action=delete&id=<?php echo $user["id"] ?>">Supprimer &#10005;</a></p>
    </main>
</body>
</html>