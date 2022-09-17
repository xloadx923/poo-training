<?php

namespace Infos;
use DateTime;

class Student{

    public string $schoolname;
    public string $lastname;
    public string $firstname;
    public DateTime $birthday;
    public string $grade;
    public int $age = 0;
    private static string $presentation = "Bonjour, je m'appelle _lastname_ _firstname_, j'ai _age_ ans et je vais à l'école _school_ en classe de _grade_.<br/>";

    public function __construct(string $lastname, string $firstname, DateTime $birthday, string $grade){
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->birthday = $birthday;
        $this->grade = $grade;
    }

    public function getLastName():string                { return $this->lastname; }
    public function setLastName(string $lastname):void  { $this->lastname = $lastname; }

    public function getFirstName():string               { return $this->firstname; }
    public function setFirstName(string $firstname):void{ $this->firstname = $firstname; }

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

    public function getSchoolName():string      { return $this->schoolname; }
    public function setSchoolName($schoolname)  { $this->schoolname = $schoolname; }

    public function getPresentation():string      { return self::$presentation; }
    public function setPresentation($presentation){ self::$presentation = $presentation; }

    public function showPresentation():string {
        $search =[
            "_lastname_"  => $this->getLastName(),
            "_firstname_" => $this->getFirstName(),
            "_age_"       => $this->getBirthAge(),
            "_school_"    => $this->getSchoolName(),
            "_grade_"     => $this->getGrade()
        ];
        return preg_replace(
            array_map(fn($s)=>"/$s/", array_keys($search)),
            array_values($search),
            self::getPresentation() );
    }
}

?>