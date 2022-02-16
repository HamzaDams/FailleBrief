<?php
    $db = new SQLite3('base.db');
    //$query = $db->query('CREATE TABLE voitures 
       // (
          //  marque VARCHAR(100),
        //    model VARCHAR(100)
      //  )
    
    //');
    
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

    if(isset($_POST["marque"]) && isset($_POST["model"])){
        $db->query("INSERT INTO voitures (marque, model) VALUES ('" . $_POST['marque'] ."','" . $_POST['model'] ." '); " );
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
    <hr>

    <div>
        <h1>Ajouter un vehicule</h1>
        <?php
        ?>
        <form action="" method="post">
            <label for="marque">Marque</label>
            <input type="text" name="marque" id="marque">
            <label for="model">Model</label>
            <input type="text" name="model" id="model">
            <button type="submit">Ajouter</button>
        </form>
    </div>
</body>
</html>