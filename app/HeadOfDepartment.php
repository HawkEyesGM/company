<?

class HeadOfDepartment  extends Employee
{
    public function make_schedule(){
        echo $this->name." ".$this->sec_name." составил график работы для своего отдела ";
    }
    public function view_salary($obj)
    {
        if(!($obj instanceof MainEngeneer)&&!($obj instanceof Director)) {
            echo $this->name." ".$this->sec_name." узнал ".' оклад ' . $obj->name . " " . $obj->sec_name . ": " . $obj->salary . " грн";
        }else{
            echo "Попытка ".$this->name." ".$this->sec_name." узнать зп ". $obj->name . " " . $obj->sec_name ." не принесла успеха! РУКОВОДСТВО!";
        }
    }
}
?>