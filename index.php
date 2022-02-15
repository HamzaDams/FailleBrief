<?php

    $nom = "xxxxx";
    if(isset($_POST["nom"])) {
        $nom = $_POST["nom"];

    }

    echo 'Bonjour Mr.' . $nom;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faille PHP</title>
</head>
<body>
    <h1>Faille 1 XSS:<h1>
    <form action="" method="post">
        <label for="nom">Votre nom</label>
        <input type="text" name="nom">
        <button type="submit">Envoyer</button>
    </form>
    <h2>Faille 2 : Se connecter</h2>
    <form action="/dashboard.php" method="post" id="form">
        <label for="id">id</label>
        <input type="text" name="id" required>

        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" required>

        <button type="submit" id="envoyer">Se connecter</button>
    </form>
    <script>
        const form = document.querySelector("#form");
        const btn = document.querySelector("#envoyer")

        form.addEventListener("click", function(event) {
            event.preventDefault();
            let id = event.currentTarget.id.value;
            if(id === "admin"){
                document.cookie = "role=ADMIN";
                document.location.href="http://localhost:8000/dashboard.php"; 
            }
        });
    </script>
</body>

</html>