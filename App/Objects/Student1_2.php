<?php

namespace Infos;

class Student1_2{

    public string $lastname = "";
    public string $firstname = "";
    public int $age = 0;
    public string $grade = "";

    public function __construct(string $lastname, string $firstname, int $age, string $grade){
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->age = $age;
        $this->grade = $grade;
    }

    public function getLastName():string                { return $this->lastname; }
    public function setLastName(string $lastname):void  { $this->lastname = $lastname; }

    public function getFirstName():string               { return $this->firstname; }
    public function setFirstName(string $firstname):void{ $this->firstname = $firstname; }

    public function getAge():int                        { return $this->age; }
    public function setAge(int $age):void               { $this->age = $age; }

    public function getGrade():string                   { return $this->grade; }
    public function setGrade(string $grade):void        { $this->grade = $grade; }
}

?>