<?php

namespace App\Objects;

class Functions{

    static function filteredBySchool(array $merging, string $search, string $key):array {
        $returnFilter = [];
        foreach ($merging as $school){
            $filter = array_filter(array_values($school['grades']),fn($s)=>$s == $search);
            if(!empty($filter)){
                $returnFilter [] = ["grade" => implode("",$filter), "schoolname" => $school[$key]];
                return $returnFilter;
            }
        }
    }

}


?>