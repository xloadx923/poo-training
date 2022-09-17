<?php

namespace Infos;

class Student1_1{

    public string $lastname;
    public string $firstname;
    public int $age;
    public string $grade;

    public function __construct(string $lastname, string $firstname, int $age, string $grade){
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->age = $age;
        $this->grade = $grade;
    }
}

?>