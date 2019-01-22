<?php
include('Person.php');
include('Employee.php');
include('UserInterface.php');
include('User.php');

$p = new Person('Fred', 'Bloggs');
print $p->firstName;
print PHP_EOL;
print $p->getFullName();
print PHP_EOL;

$e = new Employee('Claire','Jones', 1238102938);
print $e->getAllDetails();
print PHP_EOL;

$u = new User;
$u->name = "John";
print $u->speak("Hello");