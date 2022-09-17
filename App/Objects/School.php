<?php

namespace Infos;

class School extends Student{

    public string $city;
    public string $schoolname;

    public function __construct(string $city = "", string $schoolname = "") {
        $this->city = $city;
        $this->schoolname = $schoolname;
    }

    public function getCity():string { return $this->city;}
    public function setCity(string $city) { $this->city = $city;}

}

?>