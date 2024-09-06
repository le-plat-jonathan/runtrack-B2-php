<?php

class Grade {

private int $id;
private int $room_id;
private string $name;
private DateTime $year;

public function __construct(int $id = 0, int $room_id = 0, string $name = '', DateTime $year = new DateTime ('1968-01-01')) {
    $this->id = $id;
    $this->room_id = $room_id;
    $this->name = $name;
    $this->year = $year;
}

public function getId() : int {
    return 'L\'id du grade est : ' . $this->id;
}

public function setId(int $id) : int {
    if ($id >= 0) {
        $this->id = $id;
    }
}

public function getRoomId() : int {
    return 'L\'id de la salle est : ' . $this->room_id;
}

public function setRoomId(int $room_id) : int {
    if ($room_id >= 0) {
        $this->room_id = $room_id;
    }
}

public function getName() : string {
    return 'Le nom du grade est : ' . $this->name;
}

public function setName(string $name) : string {
    if ($name >= 0) {
        $this->name = $name;
    }
}

}