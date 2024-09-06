<?php
    function find_one_student($email) : void {
            
            $bdd = new PDO('mysql:host=localhost;dbname=lp_official', "root", "");

            $allStudents = $bdd->prepare("SELECT * FROM student WHERE email = :email");
            $allStudents->bindParam(':email', $email);
            $allStudents->execute();

            $students = $allStudents->fetchAll(PDO::FETCH_ASSOC);

            if ($students) {
                echo "<table border='1'>";
                echo "<thead>";
                echo "<tr>";

                foreach ($students[0] as $key => $value) {
                    echo "<th>" . htmlspecialchars($key) . "</th>";
                }

                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

                foreach ($students as $student) {
                    echo "<tr>";
                    foreach ($student as $value) {
                        echo "<td>" . htmlspecialchars($value) . "</td>";
                    }
                    echo "</tr>";
                }

                echo "</tbody>";
                echo "</table>";
            } else {
                echo "Aucun étudiant dans la base de données ne possède cet email.";
            }
        }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        find_one_student($email);
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche d'Étudiant</title>
</head>
<body>
    <form method='POST'>
        <label for='email'>Votre email :</label>
        <input type='email' name='email' placeholder='email' required/>
        <button type='submit'>Valider</button>
    </form>
</body>
</html>
