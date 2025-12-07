<?php
// ===== FICHIER DE TEST POUR LE MINI-COMPILATEUR PHP =====
// Ce fichier contient plusieurs exemples d'opérateurs ternaires

echo "=== Test des opérateurs ternaires PHP ===\n";

// ===== TEST 1 : Ternaire simple =====
$age = 20;
$statut = ($age >= 18) ? "majeur" : "mineur";
echo "Test 1 - Statut : $statut\n";

// ===== TEST 2 : Ternaire avec variables =====
$x = 10;
$y = 5;
$max = ($x > $y) ? $x : $y;
echo "Test 2 - Maximum : $max\n";

// ===== TEST 3 : Ternaire imbriqué =====
$note = 85;
$mention = ($note >= 90) ? "Excellent" : (($note >= 75) ? "Bien" : "Passable");
echo "Test 3 - Mention : $mention\n";

// ===== TEST 4 : Ternaire avec fonctions =====
$valeur = 15;
$resultat = (isset($valeur)) ? $valeur * 2 : 0;
echo "Test 4 - Résultat : $resultat\n";

// ===== TEST 5 : Forme courte (?:) - PHP 5.3+ =====
$username = null;
$display = $username ?: "Invité";
echo "Test 5 - Affichage : $display\n";

// ===== TEST 6 : Ternaire avec opérateurs =====
$a = 5;
$b = 10;
$somme = ($a + $b > 10) ? ($a + $b) : ($a - $b);
echo "Test 6 - Somme : $somme\n";

// ===== TEST 7 : Ternaire dans un tableau =====
$actif = true;
$config = [
    'status' => $actif ? 'actif' : 'inactif',
    'niveau' => ($actif) ? 1 : 0
];
echo "Test 7 - Config : " . $config['status'] . "\n";

// ===== TEST 8 : Ternaire avec chaînes =====
$prenom = "Alice";
$message = ($prenom == "Alice") ? "Bonjour Alice!" : "Bonjour visiteur!";
echo "Test 8 - Message : $message\n";

// ===== TEST 9 : Ternaire avec NULL coalesce combiné =====
$data = null;
$final = ($data != null) ? $data : "valeur par défaut";
echo "Test 9 - Final : $final\n";

// ===== TEST 10 : Ternaire multiple sur une ligne =====
$c = 3;
$d = 7;
$e = 5;
$resultat2 = ($c > $d) ? $c : (($d > $e) ? $d : $e);
echo "Test 10 - Résultat : $resultat2\n";

// ===== TEST AVEC ERREUR (commenté) =====
// $erreur = ($x > 5) ? "grand"  // Manque : expr
// echo "Cette ligne génère une erreur\n";

echo "\n=== Fin des tests ===\n";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Test Mini-Compilateur PHP</title>
</head>
<body>
    <h1>Résultats des tests</h1>
    <?php
    // Ternaire dans du HTML
    $couleur = "bleu";
    echo ($couleur == "bleu") ? "<p style='color:blue'>Texte bleu</p>" : "<p>Texte normal</p>";
    ?>
</body>
</html>