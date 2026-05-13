# PremiersPasNumériques

Une application Web d'initiation et de découverte du Système d'Information du lycée pour les nouveaux élèves en début d'année scolaire.

**Interlocuteur organisation :** Julien SIMON (j.simon@ndlpavranches.fr)

## Objectifs

**PremiersPasNumériques** permet d'initier les nouveaux élèves au fonctionnement des équipements informatiques du lycée :

- Apprendre les fondamentaux de sécurité informatique
- Apprendre à créer un ticket de demande de support
- Rappeler la législation et la charte informatique

## Étapes de développement

1. Identifier des thèmes pour découper le projet en séquences "diaporama + QCM"
2. Créer une interface engageante et ludique (considérer que l'apprenant est un joueur)
3. Utiliser une base de données MariaDB pour stocker :
   - Les données des diaporamas
   - Les quiz
   - Le classement des joueurs

## Thèmes d'apprentissage

### Thème n°1 - Utilisation des ordinateurs du lycée

**Diaporama :**
- Connexion au domaine avec login/mot de passe
- Changement du mot de passe par défaut
- Utilisation d'un gestionnaire de mots de passe (Bitwarden)
- Déconnexion systématique en fin de session
- Navigation dans les dossiers réseau (personnel, classe, copie partagée)

**Quiz :** Questions sur la connexion et la sécurité des mots de passe

### Thème n°2 - Conseils sécurité

**Diaporama :**
- **Espaces recommandés :** Dossier réseau du lycée, Drive Infomaniak
- **Espaces déconseillés :** Clés USB (risques de perte/infection)
- **Sauvegardes cloud :** Utilisation de Drive Infomaniak

**Quiz :** Questions sur les bonnes pratiques de stockage et sauvegarde

### Thème n°3 - Interdictions

**Diaporama :**
- Sites non pédagogiques interdits (réseaux sociaux, jeux)
- Interdiction de téléchargements non autorisés
- Stricte interdiction du piratage
- Filtrage Squid pour bloquer les contenus inappropriés
- Traçabilité complète des activités

**Quiz :** Questions sur la charte informatique et ses conséquences

### Thème n°4 - Matériels

**Diaporama :**
- Procédure de signalement via GLPI (création de tickets)
- Respect et soin du matériel informatique
- Fermeture correcte des sessions et extinction
- Remise en place du poste de travail
- Interdiction de branchement sur les prises réseau

**Quiz :** Questions sur la maintenance et le respect du matériel

## Stack technique

### Backend
- **PHP** - Langage principal
- **MariaDB** - Base de données

### Frontend
- **Pico.css** - Framework CSS léger
- **Splide.js** - Gestion des diaporamas
- **Quiz.js** - Système de QCM interactifs

## Équipe de développement

| Étudiant | Dépôt GitHub |
|----------|--------------|
| Elliot | [https://github.com/ElliotJoker](https://github.com/ElliotJoker) |
| Maxence | [https://github.com/CharlesMaxence](https://github.com/CharlesMaxence) |
| Théo | [https://github.com/Marie-Theo](https://github.com/Marie-Theo) |

## Installation et démarrage

```bash
# Cloner le projet
git clone [URL_DU_DEPOT]

# Configuration de la base de données
# 1. Créer une base MariaDB
# 2. Importer le schéma SQL
# 3. Configurer les paramètres de connexion

# Lancement du serveur de développement
php -S localhost:8000
```

## Contribution

1. Forker le projet
2. Créer une branche pour votre fonctionnalité (`git checkout -b feature/AmazingFeature`)
3. Commiter vos changements (`git commit -m 'Add AmazingFeature'`)
4. Pousser vers la branche (`git push origin feature/AmazingFeature`)
5. Ouvrir une Pull Request

---

**Contact :** Julien SIMON - j.simon@ndlpavranches.fr
