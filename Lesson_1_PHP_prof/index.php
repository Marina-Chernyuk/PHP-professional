<?php
/*
 1. Придумать класс, который описывает любую сущность из предметной области интернет-магазинов: продукт, ценник, посылка и т.п.
 2. Описать свойства класса из п.1 (состояние).
 3. Описать поведение класса из п.1 (методы).
 4. Придумать наследников класса из п.1. Чем они будут отличаться?
*/
class Product {
    private $name = "";          // название товара
    private $description = "";   // описание товара
    private $price = 0;           // цена
    private $condition = "";       // состояние
    private $inPrice = false;     // наличие товара в прайсе

    public function __construct($name, $description, $price, $condition) {
        $this->name = $name;
        $this->description = $description;
        $this->setPrice($price);
        $this->condition = $condition;
    }
    public function getName() { // получаем имя товара
        return $this->name;
    }
    public function getDescription() { // получаем описание товара
        return $this->description;
    }
    public function setPrice($price) // устанавливаем стоимость товара
    {
        if($price >=0) $this ->price = $price;
    }
    public function getMPrice($price) // получаем стоимость товара
    {
        return $this ->$price;
    }

    public function AddToPrice() // добавляем товар в прайс
    {
        $this ->inPrice = true;
    }

    public function DelFromPrice() // удаляем товар из прайса
    {
        $this ->inPrice = false;
    }

    public function getCondition() {
        return $this->condition;
    }
    protected function PrintInfo() { // получаем всю информацию о товаре
        $info = 'Наименование: ' . $this->name . '<br>' . //PHP_EOL .
            'Описание: ' . $this->description . '<br>' . //PHP_EOL .
            'Состояние: ' . $this->condition . '<br>' . //PHP_EOL .
            'Цена: ' . $this->price . '<br>' . //PHP_EOL .
            'Товар ' . ($this->inPrice ? "" : ' не ') . ' входит в прайс лист' . '<br>'; //PHP_EOL;
        return $info;
    }
}

class PhoneProduct extends Product {

    private $simCardCount; // свойство, относящееся только к этому дочернему классу
    public function __construct($name, $description, $price, $condition, $simCardCount) {
        parent::__construct($name, $description, $price, $condition); // эти свойства берем у родителя
        $this->simCardCount = $simCardCount;
    }
    public function getSimCardCount() {
        return $this->simCardCount;
    }
    public function PrintInfo() {
        $info = parent::PrintInfo() . 'Количество SIM-карт: ' . $this->simCardCount;
        return $info;
    }
}

class ClothesProduct extends Product {
    private $typeMaterial; // свойство, относящееся только к этому дочернему классу
    public function __construct($name, $description, $price, $condition, $typeMaterial) {
        parent::__construct($name, $description, $price, $condition); // эти свойства берем у родителя
        $this->typeMaterial = $typeMaterial;
    }
    public function gettypeMaterial() {
        return $this->typeMaterial;
    }
    public function PrintInfo() {
        $info = parent::PrintInfo() . 'Вид материала: ' . $this->typeMaterial;
        return $info;
    }
}

// вывод в браузер
/*$phone = new PhoneProduct('iPhone 12 Pro', 'Описание, характеристики', 98600, 'Новый', 2);
echo $phone->PrintInfo();*/

// вывод в браузер
$clothes = new ClothesProduct('Платье', 'Описание, характеристики', 10500, 'Новый', 'Шелк');
echo $clothes->PrintInfo();
?>

<hr>
<a href="task_5.php"> Пятое задание</a><br>
<a href="task_6.php"> Шестое задание</a><br>
<a href="task_7.php"> Седьмое задание</a>
