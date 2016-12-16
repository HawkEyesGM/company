<link rel="stylesheet" href="css/style.css">
<?
function __autoload($class){
    include "../app/$class.php";
}
?><div class="profile"><?$nicolay = new Human("1.jpg","Николай", "Манжелеевский", 30);
$nicolay->showInfo();
?></div>
<div class="profile"><?$andrey = new Human("8.jpg","Андрей", "Ерохин", 25);
$andrey->showInfo();

?></div>
<div class="profile"><?$natalia = new Human("2.jpg", "Наталья", "Слободян", 28);
$natalia->showInfo();

?></div>
<div class="profile"><?$alex = new Employee("11.jpg","Алексей", "Новиков", 30, "Ремонтно-технологический", 24, 5000, "инженер");
$alex->showInfo();

?></div>
<div class="profile"><?$indira = new Employee("13.jpg","Индира", "Метенова", 22, "Защиты информации", 25, 7500, "инженер");
    $indira->showInfo();
    ?></div>
<div class="profile"><?$tatyana = new HeadOfDepartment("6.jpg","Татьяна", "Павлова", 45, "Ремонтно-технологический", 30, 12000, "Начальник участка");
$tatyana->showInfo();

?></div>
<div class="profile"><?$constantine = new MainEngeneer("3.jpg","Константин", "Мазуров", 38, "Управление", 35, 28500, "Главный инженер");
$constantine->showInfo();

?></div>
<div class="profile"><?$igor = new Director("5.jpg","Игорь", "Ковалюк", 47, "Управление", 45, 90000, "Директор");
    $igor->showInfo();
?></div>


<div class="action">
    <br>
    <center><h1>Деятельность фирмы Entegre Satek за 2016 год</h1></center><br>
<?
$nicolay->send_CV();
$andrey->send_CV();
$natalia->send_CV();
$alex->send_CV();
$nicolay->drawHr();

$igor->recruit($nicolay, "Ремонтно-технологический", 21, 5000, "инженер" );
$igor->recruit($andrey, "Архитектура систем управления", 24, 15000, "инженер" );
$igor->recruit($natalia, "Финансовый", 21, 6000, "экономист" );

$nicolay->drawHr();

echo "<b>Проверка зарплат сотрудников:</b><br>";
$tatyana->view_salary($constantine);
$nicolay->drawBr();
$tatyana->view_salary($igor);
$nicolay->drawBr();
$tatyana->view_salary($nicolay);
$nicolay->drawBr();
$tatyana->view_salary($andrey);
$nicolay->drawBr();
$tatyana->view_salary($natalia);
$nicolay->drawBr();
$constantine->view_salary($tatyana);
$nicolay->drawBr();
$igor->view_salary($constantine);
$nicolay->drawBr();
$igor->view_salary($igor);
$nicolay->drawHr();

$constantine->teach($tatyana, "Системы контроля версий");
$constantine->teach($nicolay, "Система сигнализации SSN7");
$nicolay->drawHr();

$igor->fire($tatyana);
$nicolay->drawHr();

$igor->changeSalary($nicolay, 15000);
$nicolay->drawHr();
$igor->changePosition($nicolay, "Менеджер");
$nicolay->drawHr();



?>
 </div>
