# Faille
## XSS
### Etape pour la faille XSS
 - Dans l'input on peut envoyer un script js pour effectuer une action 
 - Ex : <script>alert("message")</script>
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


