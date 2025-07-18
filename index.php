<?php
// Fonction pour lire les fichiers dans le dossier 'uploads'
function lirePhotos() {
    $dossier = 'uploads/'; // Dossier où les photos sont stockées
    $fichiers = [];

    // Ouvre le répertoire et lit son contenu
    if ($handle = opendir($dossier)) {
        while (($file = readdir($handle)) !== false) {
            // On ignore '.' et '..' qui sont des répertoires spéciaux
            if ($file != "." && $file != "..") {
                $fichiers[] = $file;
            }
        }
        closedir($handle);
    }

    return $fichiers;
}

$photos = lirePhotos();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniInsta</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h1>Bienvenue sur MiniInsta</h1>

    <div class="gallery">
        <?php foreach ($photos as $photo): ?>
            <div class="photo">
                <img src="uploads/<?php echo $photo; ?>" alt="photo">
            </div>
        <?php endforeach; ?>
    </div>

    <div class="upload-button">
        <a href="upload.php">Publier une photo</a>
    </div>

</body>
</html>
