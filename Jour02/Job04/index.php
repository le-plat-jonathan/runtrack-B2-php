<?php

function find_all_students_grades(): array {

    $bdd = new PDO('mysql:host=localhost;dbname=lp_official', "root", "");

    $allStudents = $bdd->prepare('SELECT student.*, grade.name AS grade_name FROM student JOIN grade ON student.grade_id = grade.id');

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
        echo "Aucun étudiant trouvé.";
    }

    return $students;
}

$students = find_all_students_grades();
