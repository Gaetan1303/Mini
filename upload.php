<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérification de l'existence du fichier
    if (isset($_FILES['photo']) && isset($_POST['auteur'])) {
        $photo = $_FILES['photo'];
        $auteur = htmlspecialchars($_POST['auteur']);
        $extension = pathinfo($photo['name'], PATHINFO_EXTENSION);

        // Récupérer la date actuelle au format souhaité
        $date = date('YmdHis');
        $nom_fichier = $date . '-' . $auteur . '-' . basename($photo['name']);

        // Chemin du dossier de destination
        $dossier = 'uploads/';
        $chemin_complet = $dossier . $nom_fichier;

        // Déplacer le fichier téléchargé
        if (move_uploaded_file($photo['tmp_name'], $chemin_complet)) {
            echo "<p>La photo a bien été téléchargée !</p>";
            echo "<p><a href='index.php'>Retour à l'accueil</a></p>";
        } else {
            echo "<p>Erreur lors du téléchargement de la photo.</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publier une photo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h1>Publier une photo</h1>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="auteur">Votre nom : </label>
        <input type="text" id="auteur" name="auteur" required><br><br>

        <label for="photo">Sélectionner une photo : </label>
        <input type="file" id="photo" name="photo" accept="image/*" required><br><br>

        <button type="submit">Publier</button>
    </form>

    <p><a href="index.php">Retour à l'accueil</a></p>

</body>
</html>
