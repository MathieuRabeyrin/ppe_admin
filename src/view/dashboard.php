<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord</title>
    <link rel="stylesheet" href="./public/css/reset.css">
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/dashboard.css">
    <link rel="icon" type="image/x-icon" href="./public/assets/icon.ico"/>
</head>
<body>
    <?php include_once("./src/view/header.html") ?>
    <main>
        <table>
            <thead>
                <tr>
                    <th>action</th>
                    <th>nom</th>
                    <th>prénom</th>
                    <th>age</th>
                    <th>adresse mail</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    for ($i = 0; $i < sizeof($users); $i++) {
                        echo "<tr>";
                        foreach ($users[$i] as $key => $value ) {
                            if ($key == "id")
                                echo "<td><a href='?action=modifyForm&id=$value' class='modify-icon'> Modifier</a> ou <a href='?action=delete&id=$value'>&#10060; supprimer</a></td>";
                            else
                                echo "<td>$value</td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <a href="?action=addForm" class="add-btn">+ Ajouter un client</a>
    </main>
</body>
</html>