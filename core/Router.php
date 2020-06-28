<?php
    namespace core;
    class Router{
        public function run()
        {
            $path=null;
            // проверка на GET часть
            if (strpos($_SERVER['REQUEST_URI'],'?')!=null)
            {
                // позиция '?'
                $pos = strpos($_SERVER['REQUEST_URI'],'?');
                // отбрасывается GET часть и '/' в начале и конце
                $path = trim(substr($_SERVER['REQUEST_URI'],0,$pos),'/');
            }
            else
                $path=trim($_SERVER['REQUEST_URI'],'/');
                
            //проверка если это главная
            if ($path=='')
                $path='home';

            if (file_exists('controllers/'.$path.'Controller.php'))
            {
                if (class_exists('controllers\\'.$path.'Controller'))
                {
                    $p= 'controllers\\'.$path.'Controller';
                    $controller=new $p;
                    $controller->run();
                }
            }
            else
                echo '404';
        }
    }
?>