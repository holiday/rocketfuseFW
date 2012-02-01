<?php



class Controller {

    private static $instance;

    /**
    *   Initializes a new Singleton Controller
    */
    private function __construct() {
    }

    /**
    *   Get the instance of the Controller
    */
    public static function getInstance(){
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

$a = "Controller";
print_r($a::getInstance());
?>
