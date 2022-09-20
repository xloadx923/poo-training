<?php

namespace App\Objects;
use DateTime;

class Student extends Person{

    public DateTime $birthday;
    public string $grade;
    public int $age = 0;
    protected static string $introduction = "Bonjour, je m'appelle ##firstname## ##lastname##, j'ai ##age## ans et je vais à l'école ##school## en class de ##grade##.";

    public function __construct(string $lastname, string $firstname, DateTime $birthday, string $grade){
        parent::__construct($lastname, $firstname, "");
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->birthday = $birthday;
        $this->grade = $grade;
    }


    public function getBirthday():DateTime              { return $this->birthday; }
    public function setBirthday(DateTime $birthday)     { $this->birthday = $birthday; }

    public function getGrade():string                   { return $this->grade; }
    public function setGrade(string $grade):void        { $this->grade = $grade; }

    public function getAge():int                        { return $this->age; }
    public function setAge($age)                        { $this->age = $age; }

    public function getBirthAge():int { return $this->birthAge; }
    public function setBirthAge(DateTime $d1, DateTime $d2){
        $this->birthAge =  date_diff($d2,$d1)->y;
    }

    public function showPresentation():string {
        return self::buildIntroduction([
            "lastname"  => $this->getLastName(),
            "firstname" => $this->getFirstName(),
            "age"       => $this->getBirthAge(),
            "school"    => $this->getSchool(),
            "grade"     => $this->getGrade()
        ]);
    }
}

?>