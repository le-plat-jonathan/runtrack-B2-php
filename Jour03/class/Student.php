<?php

class Student {

private int $id;
private int $grade_id;
private string $email;
private string $fullname;
private DateTime $birthdate;
private string $gender;

public function __construct(int $id = 0, int $grade_id = 0, string $email = '', string $fullname = '', DateTime $birthdate = new DateTime ('1968-01-01'), string $gender= '') {
    $this->id = $id;
    $this->grade_id = $grade_id;
    $this->email = $email;
    $this->fullname = $fullname;
    $this->birthdate = $birthdate;
    $this->gender = $gender;
}

public function getId() : int {
    return 'L\'id de l\'étudiant est : ' . $this->id;
}

public function setId(int $id) : int {
    if ($id >= 0) {
        $this->id = $id;
    }
}

public function getGradeId() : int {
    return 'Le grade_id de l\'étudiant est : ' . $this->grade_id;
}

public function setGradeId(int $grade) : int {
    if ($grade >= 0) {
        $this->grade_id = $grade;
    }
}

public function getEmail() : string {
    return 'L\'email de l\'étudiant est : ' . $this->email;
}

public function setEmail(string $email) : static {
    if ($email != '') {
        $this->email = $email;
    }
}

public function getFullname() : string {
    return 'Les noms et prénom de l\'étudiant sont : ' . $this->fullname;
}

public function setFullname(string $fullname) : string {
    if ($fullname != '') {
        $this->fullname = $fullname;
    }
}

public function getBirthDate() : DateTime {
    return $this->birthdate;
}

public function setBirthDate(string $birthdate) : self {
    if ($birthdate != '') {
        $this->birthdate = new DateTime($birthdate);
    }
}

public function getGender() : string {
    return 'Le genre de l\'étudiant est : ' . $this->gender;
}

public function setGender(string $gender) : string {
    if ($gender != '') {
        $this->gender = $gender;
    }
}

}