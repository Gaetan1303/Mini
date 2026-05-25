# MiniMiniInsta — Projet DWWM

MiniMiniInsta est une petite application PHP pédagogique qui simule un mini réseau social de partage de photos. Ce dépôt sert de support pour les activités de formation DWWM (Développeur Web & Web Mobile) : implémentation d'un upload sécurisé, affichage en galerie et bonnes pratiques serveur.



- Concevoir et développer une fonctionnalité d'upload sécurisé d'images.
- Valider et filtrer les fichiers côté serveur.
- Gérer les permissions et la persistance (dossier `uploads/`).
- Packager l'application avec Docker Compose pour faciliter le déploiement.



- Une application fonctionnelle affichant une galerie (`index.php`).
- Une page d'upload opérationnelle et sécurisée (`upload.php`).
- Un `README.md` clair, instructions d'installation et consignes de sécurité.

## Fonctionnalités

- Affichage des images présentes dans le dossier `uploads/`.
- Formulaire d'upload (à implémenter ou améliorer dans `upload.php`).
- Stockage des images dans le dossier `uploads/`.

## Prérequis

- PHP 7.0+ (ou PHP 8 recommandé).
- Docker & Docker Compose (optionnel mais recommandé pour l'environnement reproductible).
- Accès en écriture au dossier `uploads/`.

## Installation

1. Cloner le dépôt :

```bash
git clone https://votre-lien-de-repository.git
cd Mini
```

2. Créer et donner les permissions au dossier `uploads/` (en local) :

```bash
mkdir -p uploads
chmod 775 uploads
# Pour tests locaux seulement (pas recommandé en production)
# chmod 777 uploads
```

3. Lancer avec Docker Compose (recommandé) :

Le fichier de composition s'appelle [compose.yaml](compose.yaml).

```bash
docker compose up -d
```

L'application sera accessible sur : http://localhost:8080

Pour arrêter et supprimer les containers :

```bash
docker compose down
```

## Utilisation

- Ouvrir la page d'accueil : http://localhost:8080/ (`index.php`) — la galerie liste les images du dossier `uploads/`.
- Pour tester l'upload, ouvrir `upload.php` et soumettre une image (si la page est implémentée).

## Structure du projet

- [index.php](index.php) — affichage de la galerie.
- [upload.php](upload.php) — page d'upload (à implémenter/renforcer).
- [styles.css](styles.css) — styles de la galerie.
- [uploads/](uploads/) — dossier de stockage des images.
- [compose.yaml](compose.yaml) — configuration Docker Compose pour exécution locale.

## Bonnes pratiques / Sécurité

- Restreindre les types acceptés (jpg, png, gif) et vérifier le type MIME côté serveur.
- Limiter la taille des fichiers uploadés (ex. 2–5 MB).
- Renommer les fichiers uploadés pour éviter les collisions et les injections (`uniqid()` ou hashing).
- Ne pas stocker `uploads/` dans le VCS ; ajouter `uploads/` à `.gitignore`.
- Éviter `chmod 777` en production ; préférer des permissions minimales.




