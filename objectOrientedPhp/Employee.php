<?php
class Employee extends Person {

    public $employeeNumber;

    function __construct($firstName, $familyName, $employeeNumber) {
        parent::__construct($firstName, $familyName);
        $this->employeeNumber = $employeeNumber;
    }

    public function getAllDetails(){
        return  "Name: " . $this->firstName . " " . $this->familyName . ", Employee number: " . $this->employeeNumber;
    }

}