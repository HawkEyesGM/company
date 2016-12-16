<?
class Employee extends Human
{
    public $department;
    public $vacation;
    public $salary;
    public $position;

    public function __construct($photo, $name, $sec_name, $age, $department, $vacation, $salary, $position){
        parent:: __construct($photo, $name, $sec_name, $age);
        $this->department = $department;
        $this->vacation = $vacation;
        $this->salary = $salary;
        $this->position = $position;
    }
    public function showInfo(){
        parent::showInfo();
        echo '<br><b>Компания: </b>'.self::$company_name;
        echo '<br><b>Отдел: </b>'.$this->department;
        echo '<br><b>Отпуск: </b>'.$this->vacation." к.д.";
        echo '<br><b>Оклад: </b>'.$this->salary." грн";
        echo '<br><b>Должность: </b>'.$this->position;
    }

    public function view_salary(){
        echo '<br>Оклад '.$this->name." ".$this->sec_name.": ".$this->salary." грн";
    }





}

?>