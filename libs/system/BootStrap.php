<?php
namespace libs\system;
use src\controller;
class BootStrap
{
    
    public function __construct()
    {
        if (isset($_GET["url"])) {
           $url = explode("/", $_GET["url"]);

           $controller_file = "src/controller/".$url[0]."Controller.php";
           if (file_exists($controller_file)) {

               require_once $controller_file;
               $file = $url[0]."Controller";

               $controller_object = new $file();
                if (isset($url[2])) {
                    # code...
                    $method = $url[1];
                    if (method_exists($controller_object, $method)) {
                        # code...
                        $controller_object->$method($url[2]);
                    }else{
                        die("La Methode : 🔹 ".$method." 🔹 N'existe pas dans le controller : 🔆 ".$file." 🔆");
                    }
                }elseif (isset($url[1])) {
                    $method = $url[1];
                    if (method_exists($controller_object, $method)) {
                        # code...
                        $controller_object->$method();
                    }else{
                        die("La Methode : 🔹 ".$method." 🔹 N'existe pas dans le controller : 🔆 ".$file." 🔆");
                    }
                }
           }else {
               die("Le Controller ▶ ".$controller_file." ◀ n'existe pas.");
           }
       }else {
           echo "MVC";
       }
    }
    
}
