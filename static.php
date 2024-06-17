<?php
/*
    class Hello {
        public static function greetings() {
            echo "Hello World!";
        }
    }

//    ( new Hello() )->greetings();

// without objects
Hello::greetings();



*/


// print without creating methods
/*
class Hello {
    public static function greetings() {
        echo "Hello OOP!";
    }

    public function __construct() {
        // $this->greetings();
        self::greetings();
    }
}

new Hello();

*/

class AAA{
    function test() {
        echo "method call from CCC in AAA class ";
    }
}

class BBB extends AAA{

}

class CCC extends BBB{

}

(new CCC() )->test();


?>