<?php

// namespace Infos;

class Teacher{

    public string $lastname;
    public string $firstname;
    public string $schoolname;
    public array $subjects;
    private static string $presentation = "Bonjour, je m'appelle _lastname_ _firstname_ et j'enseigne à l'école _school_ les matières suivantes : _subject_.";

    public function __construct(string $lastname, string $firstname, array $subjects = [], $schoolname = "") {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->subjects = $subjects;
        $this->schoolname = $schoolname;
    }

    public function getLastName():string                { return $this->lastname; }
    public function setLastName(string $lastname)       { $this->lastname = $lastname; }

    public function getFirstName():string               { return $this->firstname; }
    public function setFirstName(string $firstname)     { $this->firstname = $firstname; }

    public function getSchoolName():string              { return $this->schoolname; }
    public function setSchoolName(string $schoolname)   { $this->schoolname = $schoolname; }

    public function getSubjectsToString():string        { return implode(", ", $this->getSubjects()); }
    public function getSubjects():array { return $this->subjects; }
    public function addSubject(string $subject):void    {
        if(in_array($subject, $this->subjects)){ return; }
        $this->subjects[] = $subject;
    }
    public function removeSubject(string $subject):void {
        unset($this->subjects[array_search($subject, $this->subjects)]);
    }

    public function getPresentation():string            { return self::$presentation; }
    public function setPresentation($presentation)      { self::$presentation = $presentation; }

    public function showPresentation():string {
        $search =[
            "_lastname_"  => $this->getLastName(),
            "_firstname_" => $this->getFirstName(),
            "_school_"    => $this->getSchoolName(),
            "_subject_"   => $this->getSubjectsToString()
        ];
        return preg_replace(
            array_map(fn($s)=>"/$s/", array_keys($search)),
            array_values($search),
            self::getPresentation() );
        }
}

?>