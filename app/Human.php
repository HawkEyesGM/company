<?
class Human
{
    public $photo;
    public $name;
    public $sec_name;
    public $age;
    public static $company_name = "Entegre Satek";


    public function __construct($photo, $name, $sec_name, $age){
        $this->photo = "img/".$photo;
        ?><p><img src="<?=$this->photo?>" width="90px"></p><?
        $this->name = $name;
        $this->sec_name = $sec_name;
        $this->age = $age;
    }
    public function send_CV(){
        echo $this->name." ".$this->sec_name." отправил резюме в компанию ".self::$company_name;
        $this->drawBr();
        $this->drawBr();
    }
    public function showInfo(){
        echo '<p><b>Name: </b>'.$this->name;
        echo '<br><b>Second Name: </b>'.$this->sec_name;
        echo '<br><b>Age: </b>'.$this->age;
    }
    function drawHr(){
        echo "<hr>";
    }
    function drawBr(){
        echo "<br>";
    }
}

?>