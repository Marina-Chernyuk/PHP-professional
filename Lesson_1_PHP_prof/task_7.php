<?php
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A; // В случае отсутствия аргументов в методе класса, круглые скобки после названия класса можно опустить.
$b1 = new B; // В случае отсутствия аргументов в методе класса, круглые скобки после названия класса можно опустить.
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();
// Результаты будут такими-же как в task_6.php
?>
<hr>
<a href="index.php"> Задания 1, 2, 3 ,4</a><br>
<a href="task_5.php"> Пятое задание</a>