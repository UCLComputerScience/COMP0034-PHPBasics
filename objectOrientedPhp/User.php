<?php
class User implements UserInterface {

    public $name;

    public function speak($message){
        print $this->name . " says '" . $message . "'";
    }

    public function getAllDetails(){
        //Not implemented
    }
}