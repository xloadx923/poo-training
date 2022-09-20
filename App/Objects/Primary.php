<?php

namespace App\Objects;

class Primary{

    private string $city;
    private array $grades;
    private string $school;

    static function filteredBySchool(array $grades, string $search):array {
            $filter = array_filter($grades, fn($f)=>$f == $search);
            return $filter;
    }

    public function __construct(string $city = "", string $school = "") {
        $this->city = $city;
        $this->school = $school;
    }

    public function getCity():string { return $this->city;}
    public function setCity(string $city) { $this->city = $city;}

    public function getGrades() { return $this->grades; }
    public function setGrades(string $grade) { $this->grades [] = $grade; }

    public function getSchool():string { return $this->school; }
    public function setSchool(string $school):void { $this->school = $school; }

}

?>