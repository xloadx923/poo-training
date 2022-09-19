<?php

namespace App\Objects;

class School{

    public string $school;
    public string $city;
    public array $grades;

    static function filteredBySchool(array $merging, string $search, string $key):array {
        foreach ($merging as $key=>$school){
            $filter = array_filter(array_values($school['grades']),fn($s)=>$s == $search);
            if(!empty($filter)){
                return ["grade" => implode("",$filter), "school" => $key];
            }
        }
    }

    public function __construct(string $city = "", string $school = "") {
        $this->city = $city;
        $this->school = $school;
    }

    public function getCity():string { return $this->city;}
    public function setCity(string $city) { $this->city = $city;}

    public function getGrades() { return implode(", ", $this->grades); }
    public function setGrades(string $grade) { $this->grades [] = $grade; }

    public function getSchool():string { return $this->school; }
    public function setSchool(string $school):void { $this->school = $school; }
}

?>