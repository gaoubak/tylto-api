# Mini projet API Laravel

### Description
Dans le cadre d'un test technique pour la société Tylto, j'ai travaillé sur une petite API avec le framework Laravel version 9.19.0. 

### Le sujet
Fan de manga j'ai donc crée une  API où vous pouvez ajouter vos mangas préférés . Cet API permet ainsi  d'ajouter, chercher, mettre à jour et enfin supprimer un manga.

### Prérequis

1. Avoir le logiciel MAMP d'installer sur votre ordinateur.
2. Avoir la dernière version de PHP (8.1.0)
3. Telecharger et installer 'Composer'
4. Telecharger et installer NodeJs

### Lancer le projet

1. Lancer le serveur MAMP.
2. Ouvrir un terminal, utiliser 'cd' pour vous rendre dans MAMP\htdocs\example-app.
3. Copier/Coller tout les fichiers de mon projet dans ce fichier.
5. Dans le terminal, taper 'php artisan serve' pour lancer l'application.

# Résumé du projet

| Fonctionnalité             | Disponibilité | Commentaire                                   | 
| ------------------- | -- | ---------------------------------------- | 
| La dernière version du framework Laravel doit être utilisée        | ✅ | Laravel 9.18.0 |
| Les réponses de l’API doivent être renvoyées en JSON                | ✅             | |
| Les quatre verbes GET, POST, PATCH et DELETE doivent être utilisées | ✅             | |
| ------------------- | -- | ---------------------------------------- |            
| L’application contient au moins :       |              | |                 
| Un modèle | ✅             | Post.php |
| Une migration                | ✅             | 2022_06_24_124606_create_posts_table.php |               
| Un contrôleur                  | ✅             | PostsApiController.php |
| Une ressource API                | ✅             | UserResource.php |
| Un Form Request                | ✅             |  StorePostRequest.php |               
| Un test                  | ✅             | UserTest.php |
| ------------------- | -- | ---------------------------------------- | 
| Une commande Artisan        | ✅ | uploadApiCommand.php |  
 
### Détails sur la commande Artisan 
| Fonctionnalité              | Commentaire                                   | 
| ------------------- | ---------------------------------------- | 
| Une commande Artisan         |  La commande : php artisan manga:show {id}.<br>{id} représente l'id d'un manga .<br>Cette commande récupère,  depuis l'API, et stock les données du pokémon dans un fichier .txt au niveau de storage\app\public. |
