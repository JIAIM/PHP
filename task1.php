<?php

$str = 'Hello world!';
echo $str.' ';

class DB{
    private static $isinstance = null;

    protected function __construct(){

    }
    public static function getIstance(){
        if(self::$isinstance===null){
            self::$isinstance = new self();
        }
        return self::$isinstance;
    }
}

class Item{
    protected $name;
    protected $price;
    protected $amount;


    public function __construct($name,  $price, $amount){
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function getData(){
        return $this->name.' '.$this->price.'$';
    }

    public function getAllData(){
        $dict = get_object_vars($this);
        $result = null;
        foreach ($dict as $key => $value){
            $result.= '<br>'.$key.':'.$value;
        }
        return $result;
    }
}

class Sausage extends Item{
    private $num;

    public function __construct($name, $price, $amount, $num)
    {
        parent::__construct($name, $price, $amount);
        $this->num = $num;
    }
}

$object = new Sausage('Servelat', '20', '3', '001');

echo $object->getData();
echo $object->getAllData();

$array = ['I','welcome','you','!'];
$imp_method = implode(' ', $array);
$exp_method = explode(' ', $imp_method);
echo '<br>'.'Implode: '.$imp_method;

$a = 'b';
$$a = '<br>The best sausage!';
echo $b;

?>