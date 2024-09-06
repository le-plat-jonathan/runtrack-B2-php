<?php

class Room {

private int $id;
private int $floor_id;
private string $name;
private int $capacity;

public function __construct(int $id = 0, int $floor_id = 0, string $name = '',int $capacity = 0) {
    $this->id = $id;
    $this->floor_id = $floor_id;
    $this->name = $name;
    $this->capacity = $capacity;
}

public function getId() : string {
    return 'L\'id de la salle est : ' . $this->id;
}

public function setId(int $id) : int {
    if ($id >= 0) {
        $this->id = $id;
    }
}

public function getFloorId() : int {
    return 'L\'id de la salle est : ' . $this->floor_id;
}

public function setFloorId(int $floor_id) : int {
    if ($floor_id >= 0) {
        $this->floor_id = $floor_id;
    }
}

public function getName() : string {
    return 'Le nom de la salle est : ' . $this->name;
}

public function setName(string $name) : string {
    if ($name >= 0) {
        $this->name = $name;
    }
}

public function getCapacity() : int {
    return 'La capacité de la salle est : ' . $this->capacity;
}

public function setCapacity(int $capacity) : int {
    if ($capacity >= 0) {
        $this->capacity = $capacity;
    }
}
}