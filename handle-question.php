<link rel="stylesheet" href="style.css">

<?php
include_once 'config.php'; // connexion à la base

// Activer l'affichage des erreurs pour debug
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Vérifier que le formulaire a été envoyé
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Récupérer les données du formulaire
    $prenom = !empty($_POST['prenom']) ? trim($_POST['prenom']) : null;
    $nom = !empty($_POST['nom']) ? trim($_POST['nom']) : null;
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;

    // Récupérer les réponses
    $reponses = [];
    for ($i = 1; $i <= 10; $i++) {
        $key = "question_$i";
        if (isset($_POST[$key]) && is_numeric($_POST[$key])) {
            $reponses[$i] = (int)$_POST[$key];
        } else {
            $reponses[$i] = null; // réponse manquante
        }
    }

    // Vérifier les champs obligatoires
    if (empty($email)) {
        die("L'email est obligatoire.");
    }

    // Vérifier que toutes les réponses sont présentes
    foreach ($reponses as $num => $val) {
        if ($val === null) {
            die("Toutes les questions doivent être répondues. Question $num manquante.");
        }
    }

    try {
        // Commencer une transaction
        $pdo->beginTransaction();

        // Insérer la personne (prenom et nom facultatifs)
        $stmt = $pdo->prepare("INSERT INTO personne (prenom, nom, email) VALUES (:prenom, :nom, :email)");
        $stmt->execute([
            ':prenom' => $prenom,
            ':nom' => $nom,
            ':email' => $email
        ]);

        // Récupérer l'id de la personne
        $personne_id = $pdo->lastInsertId();

        // Insérer les réponses
        $stmt2 = $pdo->prepare("
            INSERT INTO reponse 
            (personne_id, reponse_1, reponse_2, reponse_3, reponse_4, reponse_5, reponse_6, reponse_7, reponse_8, reponse_9, reponse_10)
            VALUES
            (:personne_id, :r1, :r2, :r3, :r4, :r5, :r6, :r7, :r8, :r9, :r10)
        ");

        $stmt2->execute([
            ':personne_id' => $personne_id,
            ':r1' => $reponses[1],
            ':r2' => $reponses[2],
            ':r3' => $reponses[3],
            ':r4' => $reponses[4],
            ':r5' => $reponses[5],
            ':r6' => $reponses[6],
            ':r7' => $reponses[7],
            ':r8' => $reponses[8],
            ':r9' => $reponses[9],
            ':r10' => $reponses[10]
        ]);

        // Valider la transaction
        $pdo->commit();

        echo '<div class="confirmation">';
        echo '<p>Merci ! Vos réponses ont été enregistrées avec succès.</p>';
        echo '<a href="index.php">Retour</a>';
        echo '</div>';


    } catch (PDOException $e) {
        $pdo->rollBack();
        die("Erreur lors de l'enregistrement : " . $e->getMessage());
    }

} else {
    die("Accès interdit.");
}
