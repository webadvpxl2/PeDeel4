<?php
class route{


    public static $valisRoutes = array();

    public static function set($route,$function){

        self::$valisRoutes[] = $route;



        if($_GET['url'] == $route){
            $function->__invoke();
        }

    }
}
?>