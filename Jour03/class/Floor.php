<?php

class Floor {

private int $id;
private string $name;
private int $level;

public function __construct(int $id = 0, string $name = '',int $level = 0) {
    $this->id = $id;
    $this->name = $name;
    $this->level = $level;
}

public function getId() : int {
    return 'L\'id de l\'étage est : ' . $this->id;
}

public function setId(int $id) : int {
    if ($id >= 0) {
        $this->id = $id;
    }
}

public function getName() : string {
    return 'Le nom de l\'étage est : ' . $this->name;
}

public function setName(string $name) : string {
    if ($name != '') {
        $this->name = $name;
    }
}

public function getLevel() : int {
    return 'Le numéro de l\'étage est : ' . $this->level;
}

public function setLevel(int $level) : int {
    if ($level >= 0) {
        $this->level = $level;
    }
}

}