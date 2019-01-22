<?php

class Person
{
    public $firstName;
    protected $familyName;

    public function __construct($aFirstName, $aFamilyName)
    {
        $this->firstName = $aFirstName;
        $this->familyName = $aFamilyName;
    }

    public function getFullName()
    {
        return $this->firstName . " " . $this->familyName;
    }

    public function setFirstName($newFirstName)
    {
        $this->firstName = $newFirstName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFamilyName($newFamilyName)
    {
        $this->familyName = $newFamilyName;
    }

    public function getFamilyName()
    {
        return $this->familyName;
    }
}