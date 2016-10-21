## CSC4101 : MiniProjet agence de voyage

### Membres du groupe
+ Anatole Lefort
+ Mounir Mechergui

### Details application
##### Comptes utilisateurs
+ anna_admin:kitten (admin)
+ john_user:kitten 

##### Routes disponibles

| Route                                     | Nom                        | Accès  | Visibilité  |
| ------------------------------------------|----------------------------|--------| ------------|
| /home                                     | page_accueil               | tous   | front       |
| /circuit                                  | circuit_index              | tous   | front       |
| /circuit/id                               | circuit_show               | tous   | front       |
| /manage/users                             | admin_users_manage         | admin  | back        |
| /manage/users/new                         | admin_users_new            | admin  | back        |
| /manage/users/id/edit                     | admin_users_edit           | admin  | back        |
| /manage/users/id/remove                   | admin_users_remove         | admin  | back        |       
| /manage/circuit/new                       | admin_circuit_new          | user   | back        |
| /manage/circuit/id/edit                   | admin_circuit_edit         | user   | back        |
| /manage/circuit/id/etape/new              | admin_etape_new            | user   | back        |
| /manage/circuit/id/etape/id/edit          | admin_etape_edit           | user   | back        |       
| /manage/circuit/id/programmation/new      | admin_programmation_new    | user   | back        |
| /manage/circuit/id/programmation/id/edit  | admin_programmation_edit   | user   | back        |
| /manage/circuit/id/remove                 | admin_circuit_remove       | admin  | back        |
| /manage/circuit/id/etape/id/remove        | admin_etape_remove         | admin  | back        |
| /manage/circuit/id/programmation/id/remove| admin_programmation_remove | admin  | back        |

##### Commentaires
+ Il est possible d'ajouter/editer/supprimer des circuits/étapes/programmation/utilisateurs
+ La plupart des pages proposent des affichages différents en fonction des privilèges de l'utilisateur
