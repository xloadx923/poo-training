<?php

namespace App\Objects;

class Teacher extends Person{

    public string $lastname;
    public string $firstname;
    public string $school;
    public array $subjects;
    protected static string $presentation = "Bonjour, je m'appelle ##lastname## ##firstname## et j'enseigne à l'école ##school## les matières suivantes : ##subject##.";

    public function __construct(string $lastname, string $firstname, array $subjects = [], $school = "") {
        parent::__construct($lastname, $firstname, $school);
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->subjects = $subjects;
        $this->school = $school;
    }

    public function getLastName():string                { return $this->lastname; }
    public function getFirstName():string               { return $this->firstname; }

    public function getSubjectsToString():string        { return implode(", ", $this->getSubjects()); }
    public function getSubjects():array { return $this->subjects; }
    public function addSubject(string $subject):void    {
        if(in_array($subject, $this->subjects)){ return; }
        $this->subjects[] = $subject;
    }
    public function removeSubject(string $subject):void {
        unset($this->subjects[array_search($subject, $this->subjects)]);
    }

    public function showPresentation():string {
        return self::buildIntroduction([
            "lastname"  => $this->getLastName(),
            "firstname" => $this->getFirstName(),
            "school"    => $this->getSchool(),
            "subject"   => $this->getSubjectsToString()
        ]);
    }
}

?>