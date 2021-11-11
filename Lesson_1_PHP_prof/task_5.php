<?php
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A(); //Создаем экземпляр класса А
$a2 = new A(); //Создаем второй экземпляр класса А
$a1->foo(); // $a1 вызывает функцию foo(). $x = 0. Префиксный инкремент ++$x увеличит $x на единицу, затем вернёт значение $x равное 1
$a2->foo(); // $a2 вызывает функцию foo(). $x = 1. Префиксный инкремент ++$x увеличит $x на единицу, затем вернёт значение $x равное 2
$a1->foo(); // $a1 вызывает функцию foo(). $x = 2. Префиксный инкремент ++$x увеличит $x на единицу, затем вернёт значение $x равное 3
$a2->foo(); // $a1 вызывает функцию foo(). $x = 3. Префиксный инкремент ++$x увеличит $x на единицу, затем вернёт значение $x равное 4
// Переменная $x в функции foo() - статическая, поэтому принадлежит классу
?>
<hr>
<a href="index.php"> Задания 1, 2, 3 ,4</a><br>
<a href="task_6.php"> Шестое задание</a>