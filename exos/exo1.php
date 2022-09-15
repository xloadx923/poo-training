<?php

class Student1_1{

    public string $lastname = "";
    public string $firstname = "";
    public int $age = 0;
    public string $level = "";

    public function __construct(string $lastname, string $firstname, int $age, string $level){
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->age = $age;
        $this->level = $level;
    }
}

class Student1_2{

    public string $lastname = "";
    public string $firstname = "";
    public int $age = 0;
    public string $level = "";

    public function __construct(string $lastname, string $firstname, int $age, string $level){
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->age = $age;
        $this->level = $level;
    }

    public function getLastName():string   { return $this->lastname; }
    public function setLastName($lastname)   { $this->lastname = $lastname; }

    public function getFirstName():string  { return $this->firstname; }
    public function setFirstName($firstname) { $this->firstname = $firstname; }

    public function getAge():int    { return $this->age; }
    public function setAge($age)        { $this->age = $age; }

    public function getLevel():string  { return $this->level; }
    public function setLevel($level)    { $this->level = $level; }
}

class Student1_3{

    public string $lastname = "";
    public string $firstname = "";
    public DateTime $birthday;
    public string $level = "";

    public function __construct(string $lastname, string $firstname, DateTime $birthday, string $level){
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->birthday = $birthday;
        $this->level = $level;
    }

    public function getLastName():string    { return $this->lastname; }
    public function setLastName($lastname)  { $this->lastname = $lastname; }

    public function getFirstName():string   { return $this->firstname; }
    public function setFirstName($firstname){ $this->firstname = $firstname; }

    public function getBirthday():DateTime  { return $this->birthday; }
    public function setBirthday(DateTime $birthday)  { $this->birthday = $birthday; }

    public function getLevel():string          { return $this->level; }
    public function setLevel($level)        { $this->level = $level; }
}

class Student1_4{

    public string $lastname = "";
    public string $firstname = "";
    public DateTime $birthday;
    public string $level = "";
    public int $age = 0;

    public function __construct(string $lastname, string $firstname, DateTime $birthday, string $level){
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->birthday = $birthday;
        $this->level = $level;
    }

    public function getLastName():string    { return $this->lastname; }
    public function setLastName($lastname)  { $this->lastname = $lastname; }

    public function getFirstName():string   { return $this->firstname; }
    public function setFirstName($firstname){ $this->firstname = $firstname; }

    public function getBirthday():DateTime  { return $this->birthday; }
    public function setBirthday(DateTime $birthday)  { $this->birthday = $birthday; }

    public function getLevel():string          { return $this->level; }
    public function setLevel($level)        { $this->level = $level; }

    public function getAge():int            { return $this->age; }
    public function setAge($d1, $d2)        { $this->age = $d2 - $d1->format('Y'); }

}

class Student1_5{

    public string $schoolname = "";
    public string $lastname = "";
    public string $firstname = "";
    public DateTime $birthday;
    public string $level = "";
    public int $age = 0;

    public function __construct(string $lastname, string $firstname, DateTime $birthday, string $level){
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->birthday = $birthday;
        $this->level = $level;
    }

    public function getLastName():string    { return $this->lastname; }
    public function setLastName($lastname)  { $this->lastname = $lastname; }

    public function getFirstName():string   { return $this->firstname; }
    public function setFirstName($firstname){ $this->firstname = $firstname; }

    public function getBirthday():DateTime  { return $this->birthday; }
    public function setBirthday(DateTime $birthday)  { $this->birthday = $birthday; }

    public function getLevel():string          { return $this->level; }
    public function setLevel($level)        { $this->level = $level; }

    public function getAge():int            { return $this->age; }
    public function setAge($d1, $d2)        { $this->age = $d2 - $d1->format('Y'); }

    public function getSchoolName():string      { return $this->schoolname; }
    public function setSchoolName($schoolname)  { $this->schoolname = $schoolname; }

}

class Student1_6{

    public string $schoolname = "";
    public string $lastname = "";
    public string $firstname = "";
    public DateTime $birthday;
    public string $level = "";
    public int $age = 0;
    private static string $paragraph = "";

    public function __construct(string $lastname, string $firstname, DateTime $birthday, string $level){
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->birthday = $birthday;
        $this->level = $level;
    }

    public function getLastName():string    { return $this->lastname; }
    public function setLastName($lastname)  { $this->lastname = $lastname; }

    public function getFirstName():string   { return $this->firstname; }
    public function setFirstName($firstname){ $this->firstname = $firstname; }

    public function getBirthday():DateTime  { return $this->birthday; }
    public function setBirthday(DateTime $birthday)  { $this->birthday = $birthday; }

    public function getLevel():string          { return $this->level; }
    public function setLevel($level)        { $this->level = $level; }

    public function getAge():int            { return $this->age; }
    public function setAge($d1, $d2)        { $this->age = $d1 - $d2->format('Y'); }

    public function getSchoolName():string      { return $this->schoolname; }
    public function setSchoolName($schoolname)  { $this->schoolname = $schoolname; }

    public function setPresentation():string {
        return self::$paragraph = "Bonjour, je m'appelle ".$this->getLastName()." ".$this->getFirstName().", j'ai ".$this->getAge()." ans et je vais à l'école ".$this->getSchoolName()." en classe de ".$this->getLevel().".<br/>";
    }
}

?>