<?php

namespace App\Objects;

class Primary extends School{

    public array $grades;

    public function getGrades() { return implode(", ", $this->grades); }
    public function setGrades(string $grade) { $this->grades [] = $grade; }

}

?>