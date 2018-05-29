<?php


    class controller{

            public static function CreateView($viewName)
            {
            require_once ("./Views/$viewName.php");
            }

    }

   ?>