<?php

class  Director extends HeadOfDepartment
{
    public function fire($obj){
        echo "Директор ".$this->name." ".$this->sec_name." уволил ". $obj->name . " " . $obj->sec_name;
        unset($obj);
    }

    public function getInfo($obj){
        echo '<p>Name: '.$obj->name;
        echo '<br>Second Name: '.$obj->sec_name;
        echo '<br>Age: '.$obj->age;
        echo '<br>Компания: '.self::$company_name;
        echo '<br>Отдел: '.$obj->department;
        echo '<br>Отпуск: '.$obj->vacation." к.д.";
        echo '<br>Оклад: '.$obj->salary." грн";
        echo '<br>Должность: '.$obj->position;
    }


    public function recruit($obj, $dep, $vac, $sal, $pos ){
        echo "Директор ".$this->name." ".$this->sec_name." принял на работу ". $obj->name . " " . $obj->sec_name;
        $obj->department = $dep;
        $obj->vacation = $vac;
        $obj->salary = $sal;
        $obj->position = $pos;
        $this->getInfo($obj);
        $this->drawHr();
    }

    public function changeSalary($obj, $new_sal){
        $obj->salary = $new_sal;
        echo "Новая зарплата ".$obj->name . " " . $obj->sec_name." составляет ".$new_sal." грн ";
        $this->getInfo($obj);
    }

    public function changePosition($obj, $new_pos){
        $obj->position = $new_pos;
        echo "Новая должность ".$obj->name . " " . $obj->sec_name." - ".$new_pos;
        $this->getInfo($obj);
    }

    public function view_salary($obj)
    {
            echo $this->name." ".$this->sec_name." узнал ".' оклад ' . $obj->name . " " . $obj->sec_name . ": " . $obj->salary . " грн";
    }

}
?>