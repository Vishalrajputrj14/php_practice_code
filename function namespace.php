<?php
CLASS MyClass {
    public function myMethod() {
        return __METHOD__;
    }
}
$myClass = new MyClass();
echo $myClass->myMethod(); // MyClass::myMethod
echo "<br>";

namespace MyNamespace;
class MyClass {
    public function myMethod() {
        return __METHOD__;
    }
}
$myClass = new MyClass();
echo $myClass->myMethod(); // MyNamespace\MyClass::myMethod

?>