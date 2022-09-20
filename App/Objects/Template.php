<?php

namespace App\Objects;

class Template{

    public string $content;

    public function setContentFile(string $pathFile):string{
        $content = file_get_contents($pathFile);
        return $content;
    }
}

?>