<?php

function find_full_rooms() : void {

    $bdd = new PDO('mysql:host=localhost;dbname=lp_official', "root", "");

    $sql = 'SELECT r.name, r.capacity, (SELECT COUNT(s.id) FROM student s INNER JOIN grade g ON s.grade_id = g.id WHERE g.room_id = r.id) AS student_count FROM room r';

    $allRooms = $bdd->prepare($sql);
    $allRooms->execute();
    $rooms = $allRooms->fetchAll(PDO::FETCH_ASSOC);

    if ($rooms) {

        echo "<table border='1'>";
        echo "<thead>";
        echo "<tr>";
        
        echo "<th>Nom de la salle</th>";
        echo "<th>Capacité</th>";
        echo "<th>Est pleine ?</th>";

        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        
        foreach ($rooms as $room) {
            $is_full = $room['student_count'] >= $room['capacity'];
            echo "<tr>";
            echo "<td>" . htmlspecialchars($room['name']) . "</td>";
            echo "<td>" . htmlspecialchars($room['capacity']) . "</td>";
            echo "<td>" . ($is_full ? 'Yes' : 'No') . "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        echo "Aucune salle trouvée.";
    }
}

find_full_rooms();

?>
