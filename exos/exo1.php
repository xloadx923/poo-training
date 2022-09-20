<?php

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

class Student1_3{

    public string $lastname;
    public string $firstname;
    public DateTime $birthday;
    public string $grade;

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
}

class Student1_4{

    public string $lastname;
    public string $firstname;
    public DateTime $birthday;
    public string $grade;
    public int $age;

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
    public function setAge($d1, $d2)                    { $this->age = $d2 - $d1->format('Y'); }

}

class Student1_5{

    public string $schoolname;
    public string $lastname;
    public string $firstname;
    public DateTime $birthday;
    public string $grade;
    public int $age;

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
    public function setAge(DateTime $d1, int $d2):void  { $this->age = $d2 - $d1->format('Y'); }

    public function getSchoolName():string              { return $this->schoolname; }
    public function setSchoolName($schoolname):void     { $this->schoolname = $schoolname; }

}

class Student1_6{

    public string $schoolname;
    public string $lastname;
    public string $firstname;
    public DateTime $birthday;
    public string $grade;
    public int $age;
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
    public function setAge($d1, $d2)                    { $this->age = $d1 - $d2->format('Y'); }

    public function getSchoolName():string              { return $this->schoolname; }
    public function setSchoolName($schoolname)          { $this->schoolname = $schoolname; }

    public function getPresentation():string            { return self::$presentation; }
    public function setPresentation($presentation)      { self::$presentation = $presentation; }

    public function showPresentation():string {
        $search =[
            "_lastname_"  => $this->getLastName(),
            "_firstname_" => $this->getFirstName(),
            "_age_"       => $this->getAge(),
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