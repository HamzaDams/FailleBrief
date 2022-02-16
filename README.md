# Faille
## XSS
### Etape pour la faille XSS
 - Dans l'input on peut envoyer un script js pour effectuer une action 
 - Ex : <script>alert("message")</script>
### Solution pour eviter la faille
 Pour résoudre cette faille il faut tout simplement convertir les caractères spéciaux en entités HTML avec une fonction htmlentities()
## CSRF
### Etape pour la faille CSRF
 - Pour effectuer la suppression d'un utilisateur il faut avoir le role ADMIN qui et stocker dans le cookie lors de la connection avec le compte admin (id: admin mdp: admin)
 - Il faudra ajouter le cookie manuellement pour effectuer l'action de suppression 
 - Aller dans le navigateur
 - Inspecter l'élément 
 - Onglet Application
 - Sur la bar de gauchet il y a un onglet Cookie ou vous pourrez inserez des cookie manuellement
 - On ajoute la clé: role et la valeur: ADMIN
 - On pourra maintenant pouvoir aller dans le lien qui lance l'action de suppression (ex: http://localhost:8000/dashboard.php?delete=0)
### Solution pour eviter la faille
Il existe plusieurs maniere pour regler cette faille toujour selon le besoin et le code mis en place liste des solutions possible :
 - Ajouter un token
 - Demander une confirmation 
 - Limiter les actions par IP
 - Mettre les actions en POST
## Injection SQL
### Etape pour la faille SQL
 - Une fois connecter dans le dashboard on peut ajouter un vehicule a la base de donnée via le formulaire
 - Dans les inputs du formulaires on peut y injecter une requete sql 
### Solution pour eviter la faille 
Pour eviter une **injection sql** il faut tout simplement faire des requetes préparer selon le driver que vous utilisé (MYSql, MariaDB, PGSQl...) 
 - Exemple pour SQLite (https://www.php.net/manual/fr/sqlite3.prepare.php)


