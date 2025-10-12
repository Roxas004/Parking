# 🌐 Plan des routes - Parkslot

## URLS du Site
`https://www.parkslot.fr/`

## 1. Pages publiques
- `/` → Accueil
- `/register` → Création de compte                                              `Resource Controllers`
- `/login` → Connexion utilisateur                                              `Resource Controllers`
- `/forgot-password` → Demande réinitialisation du mot de passe                 `Resource Controllers`
- `/reset-password` → Réinitialisation du mot de passe                          `Resource Controllers`

## 2. Espace utilisateur (après connexion)
- `/utilisateur/reservations` → Faire une demande de réservation                `Resource Controllers`
- `/utilisateur/vos-reservations` → Liste des réservations de l’utilisateur
- `/utilisateur/paramètre` → Informations personnelles / modification du compte `Resource Controllers`

## 3. Espace administrateur
- `/admin/dashboard` → Tableau de bord général
- `/admin/utilisateurs` → Liste des utilisateurs                                `Resource Controllers`
- `/admin/places` → Liste des places                                            `Resource Controllers`
- `/admin/file-attente` → Liste d’attente (modification possible de l’ordre)    `Resource Controllers`
- `/admin/historique` → Historique des attributions
- `/admin/paramètre` → Informations personnelles / modification du compte       `Resource Controllers`

## 4. Documentation

- `/documentation/utilisateur` → Documentation utilisateur 
- `/documentation/developpeur` → Documentation developpeur  