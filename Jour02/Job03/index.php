<?php

    function insert_student(string $email, string $fullname, string $gender, DateTime $birthdate, int $grade_id) : void {

        $bdd = new PDO ('mysql:host=localhost;dbname=lp_official',"root", "");

        $stmt = $bdd->prepare('INSERT INTO student (email, fullname, gender, birthdate, grade_id) VALUES (:email, :fullname, :gender, :birthdate, :grade_id)');
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':fullname', $fullname, PDO::PARAM_STR);
        $stmt->bindValue(':gender', $gender, PDO::PARAM_STR);
        $stmt->bindValue(':birthdate', $birthdate->format('Y-m-d'), PDO::PARAM_STR);
        $stmt->bindValue(':grade_id', $grade_id, PDO::PARAM_STR);
        
        $stmt->execute();
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $fullname = $_POST['fullname'];
        $gender = $_POST['gender'];
        $birthdate = new DateTime($_POST['birthdate']) ?? '';
        $grade_id = $_POST['grade_id'];
        insert_student($email, $fullname, $gender, $birthdate, $grade_id);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='POST'>
        <label for name='email'>Email:</label><br>
        <input type='email' name='email' placeholder='email'/>
        <br><br>
        <label for name='fullname'>Nom complet:</label><br>
        <input type='text' name='fullname' placeholder='fullname'/>
        <br><br>
        <label for name='gender'>Genre:</label><br>
        <select name='gender'>
            <option value='male'>Male</option>
            <option value='female'>Female</option>
        </select>
        <br><br>
        <label for name='birthdate'>Date de naissance:</label><br>
        <input type='date' name='birthdate' placeholder=''/>
        <br><br>
        <label for name='grade_id'>Grade Id:</label><br>
        <input type='number' name='grade_id' placeholder=''/>
        <br><br>
        <button type='submit'>Envoyer</button>
    </form>
</body>
</html>