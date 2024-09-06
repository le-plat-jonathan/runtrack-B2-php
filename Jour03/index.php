<?php

require_once 'class/Student.php';
require_once 'class/Grade.php';
require_once 'class/Room.php';
require_once 'class/Floor.php';
require_once 'functions.php';

$student = new Student (1,1,'email@email.com', 'Terry Cristinelli', new DateTime('1990-01-18'), 'male');
$student2 = new Student();
var_dump ($student);
var_dump ($student2);

$grade = new Grade (1,1,'gradeName', new DateTime('1990-01-18'));
$grade2 = new Grade();
var_dump ($grade);
var_dump ($grade2);

$floor = new Floor (1,'floorName', 1);
$floor2 = new Floor();
var_dump ($floor);
var_dump ($floor2);

$room = new Room (1, 1,'roomName', 20);
$room2 = new Room();
var_dump ($room);
var_dump ($room2);

$studentBirthday = new Student ();

var_dump($studentBirthday->getBirthDate());

$student = findOneStudent(12);
$grade = findOneGrade(2);
$room = findOneRoom(4);
$floor = findOneFloor(3);
