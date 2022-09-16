<?php


class Teacher2_1{

    public string $lastname = "";
    public string $firstname = "";
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

    public string $lastname = "";
    public string $firstname = "";
    public string $schoolname;
    public array $subject;

    public function __construct(string $lastname, string $firstname, string $schoolname = null, array $subject = null) {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        if(!is_null($schoolname)){ $this->schoolname = $schoolname; }
        if(!is_null($subject))   { $this->suject = $subject; }
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


?>