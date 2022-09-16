<?php


class Teacher2_1{

    public string $lastname;
    public string $firstname;
    public string $schoolname;
    public array $subject;

    public function __construct(string $lastname, string $firstname, string $schoolname = null, array $subject = null) {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        if($schoolname != null){ $this->schoolname = $schoolname; }
        if($subject != null)   { $this->suject = $subject; }
    }

    public function getLastName():string    { return $this->lastname; }
    public function getFirstName():string   { return $this->firstname; }
    public function getSchoolName():string  { return $this->schoolname; }
    public function getSubject():array      { return $this->subject; }

    public function setLastName(string $lastname)       { $this->lastname = $lastname; }
    public function setFirstName(string $firstname)     { $this->firstname = $firstname; }
    public function setSchoolName(string $schoolname)   { $this->schoolname = $schoolname; }
    public function setSubject(array $subject)          { $this->subject = $subject; }

}

class Teacher2_2{

    public string $lastname;
    public string $firstname;
    public string $schoolname;
    public array $subject;

    public function __construct(string $lastname, string $firstname) {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
    }

    public function getLastName():string    { return $this->lastname; }
    public function getFirstName():string   { return $this->firstname; }
    public function getSchoolName():string  { return $this->schoolname; }
    public function getSubject():array      { return $this->subject; }

    public function setLastName(string $lastname)       { $this->lastname = $lastname; }
    public function setFirstName(string $firstname)     { $this->firstname = $firstname; }
    public function setSchoolName(string $schoolname)   { $this->schoolname = $schoolname; }
    public function setSubject(array $subject)          { $this->$subject[] = $subject; }

}
class Teacher2_3{

    public string $lastname;
    public string $firstname;
    public string $schoolname;
    public array $subjects;
    private string $presentation = "Monsieur _lastname_ _firstname_ enseigne les matières _subject_ à l'école _school_.";

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

    public function getSubjects():string                  { return implode(" et ", $this->subjects); }
    public function setSubjects(array $subjects)          { $this->subjects[] = $subjects; }

    public function getPresentation():string            { return self::$presentation; }
    public function setPresentation($presentation)      { self::$presentation = $presentation; }

    public function showPresentation():string {
        $search =[
            "_lastname_"  => $this->getLastName(),
            "_firstname_" => $this->getFirstName(),
            "_school_"    => $this->getSchoolName(),
            "_subject_"   => $this->getSubjects().join(",")
        ];
        return preg_replace(
            array_map(fn($s)=>"/$s/", array_keys($search)),
            array_values($search),
            self::getPresentation() );
        }
}

?>