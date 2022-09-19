<?php

namespace App\Objects;

class College extends School{

    public array $grades;

    public function getGrades() { return implode(", ", $this->grades); }
    public function setGrades(string $grade) { $this->grades [] = $grade; }

}

?>