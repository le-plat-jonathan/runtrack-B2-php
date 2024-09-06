<?php

function find_ordered_students() : array {

    $bdd = new PDO('mysql:host=localhost;dbname=lp_official', "root", "");

    $sql = "SELECT g.name AS grade_name, s.fullname, s.birthdate, s.email FROM grade g INNER JOIN student s ON g.id = s.grade_id ORDER BY g.id";

    $stmt = $bdd->prepare($sql);
    $stmt->execute();

    $grades = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $grade_name = $row['grade_name'];

        if (!isset($grades[$grade_name])) {
            $grades[$grade_name] = [];
        }

        $grades[$grade_name][] = [
            'fullname' => $row['fullname'],
            'birthdate' => $row['birthdate'],
            'email' => $row['email']
        ];
    }

    uasort($grades, function($a, $b) {
        return count($b) - count($a);
    });

    foreach ($grades as $grade_name => $students) {
        echo "<h2>" . htmlspecialchars($grade_name) . " (" . count($students) . " étudiants)</h2>";
        echo "<table border='1'>";
        echo "<thead><tr><th>Nom Complet</th><th>Date de Naissance</th><th>Email</th></tr></thead>";
        echo "<tbody>";
        foreach ($students as $student) {
            echo "<tr><td>" . htmlspecialchars($student['fullname']) . "</td>";
            echo "<td>" . htmlspecialchars($student['birthdate']) . "</td>";
            echo "<td>" . htmlspecialchars($student['email']) . "</td></tr>";
        }
        echo "</tbody></table>";
    }
    return $grades;
}

find_ordered_students();

?>
