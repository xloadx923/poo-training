<?php

namespace App\Objects;

class School{

    static function filteredBySchool(array $merging, string $search, string $key):array {
        foreach ($merging as $school){
            $filter = array_filter(array_values($school['grades']),fn($s)=>$s == $search);
            if(!empty($filter)){
                return [implode("",$filter), $school[$key]];
            }
        }
    }

}

?>