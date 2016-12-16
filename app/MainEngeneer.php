<?php

class  MainEngeneer extends HeadOfDepartment
{
    public function teach($obj, $subject){
        echo '<br>Главный инженер провел обучение ' . $obj->name . " " . $obj->sec_name . " по теме : \" " .$subject ."\"";
    }

    public function exam($obj, $subject){
        echo '<br>Главный инженер провел экзамен для  ' . $obj->name . " " . $obj->sec_name . " по теме : \" " .$subject ."\"";
    }

    public function view_salary($obj)
    {
        if(!($obj instanceof Director)) {
            echo $this->name." ".$this->sec_name." узнал ".' оклад ' . $obj->name . " " . $obj->sec_name . ": " . $obj->salary . " грн";
        }else{
            echo "Попытка ".$this->name." ".$this->sec_name." узнать зп ". $obj->name . " " . $obj->sec_name ." не принесла успеха! РУКОВОДСТВО!";
        }
    }
}
?>