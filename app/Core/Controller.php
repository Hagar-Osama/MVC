<?php

class Controller 
{
    public function view($name)
    {
        $fileName = "../app/Views/". $name. ".php";
        if(file_exists($fileName)) {
            require $fileName;
        }else {
            $fileName = "../app/Views/404.php";
            require $fileName;
        }
    }
}