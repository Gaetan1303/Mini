# MiniMiniInsta

MiniInsta est une simple application PHP qui simule un réseau social de partage de photos. Ce projet permet de visualiser les photos téléchargées dans un dossier spécifique et offre un lien pour publier de nouvelles photos.
Fonctionnalités

    Affichage des photos téléchargées dans un dossier uploads/.
    Interface simple pour visualiser les photos sous forme de galerie.
    Lien vers une page upload.php pour publier de nouvelles photos (fonctionnalité à implémenter).

Prérequis

Avant de commencer, assurez-vous d'avoir un serveur local avec PHP (par exemple XAMPP, WAMP, ou LAMP). Le dossier uploads/ doit être accessible en écriture pour permettre l'upload des fichiers.

    PHP version 7.0 ou supérieure.
    Serveur web (Apache, Nginx, etc.).
    Accès en écriture au dossier uploads/.

Installation

    Clonez le dépôt :

git clone https://votre-lien-de-repository.git

Placez le dossier dans votre serveur web local :

Si vous utilisez XAMPP, placez le projet dans le dossier htdocs :

/xampp/htdocs/miniinsta

Assurez-vous que le dossier uploads/ existe :

Dans le répertoire racine du projet, créez un dossier uploads/ où les photos seront stockées.

mkdir uploads

Vérifiez les permissions du dossier uploads/ :

Le dossier uploads/ doit être accessible en écriture pour que les photos puissent être téléchargées correctement. Sur un serveur Linux, vous pouvez exécuter cette commande :

    chmod 777 uploads/

Structure du projet

/miniinsta
    ├── index.php          # Page principale affichant les photos
    ├── upload.php         # Page pour publier des photos (fonctionnalité à implémenter)
    ├── styles.css         # Feuille de style pour la mise en page
    └── uploads/           # Dossier où les photos sont stockées

Fonctionnement

    Affichage des photos : La fonction lirePhotos() récupère la liste des fichiers dans le dossier uploads/ et affiche les images dans une galerie.
    Ajout de photos : Actuellement, un lien vers upload.php est affiché pour publier une nouvelle photo. Cette page n’est pas encore implémentée dans ce projet, mais elle peut être utilisée pour télécharger des photos.


À faire

    Implémenter la fonctionnalité de téléchargement de photos dans upload.php.
    Ajouter une vérification pour accepter uniquement certains types de fichiers (ex. : .jpg, .png).
    Ajouter une fonction de suppression de photos.

