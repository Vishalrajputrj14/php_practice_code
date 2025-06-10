<?php

trait message{
    public function msg (){
         echo __TRAIT__ . "<br>";
    }
}
class Welcome {
    use message;
}
$welcome = new Welcome();
$welcome->msg(); // message
?>