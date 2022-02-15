<?php

    $users = array(
        "Hamza",
        "David",
        "John",
        "Doe",
    );

    echo "<br />";
    if($_COOKIE['role'] == "ADMIN"){

        if(isset($_GET["delete"])) {
            unset($users[$_GET["delete"]]);
            print_r($users);
        }
        
        
    }else {
        header("Refresh:2; url=index.php");
        echo "VOUS N'ETES PAS ADMIN";
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <div style="max-width: 1400px; margin: auto; background-color: grey;">
        <h1>Liste des utilisateurs<h1>
            <ul>
            <?php $i = 0; ?>
            <?php foreach($users as $user) { ?>
                <?php $i++; ?>
                <li><?php echo $user; ?> <a href="http://localhost:8000/dashboard.php?delete=<?= $i-1 ?>">Supprimer</a></li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>