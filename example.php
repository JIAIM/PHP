<?php

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
        protected $code;
        protected $price;

        public function __construct($name, $code, $price){
            $this->name = $name;
            $this->code = $code;
            $this->price = $price;
        }

        public function get(){
            return $this->name.' '.$this->price.'UAH';
        }

        public function getAll(){
            $dict = get_object_vars($this);
            $result = null;
            foreach ($dict as $key => $value){
                $result.= '<br>'.$key.':'.$value;
            }
            return $result;
        }
    }

    class Sausage extends Item{
        private $weight;

        public function __construct($name, $code, $price, $weight)
        {
            parent::__construct($name, $code, $price);
            $this->weight = $weight;
        }
    }

    $object = new Sausage('Servelat', '2', '170', '0.3');

    echo $object->get();
    echo $object->getAll();

    $array = ['I','welcome','you','!'];
    $show_implode = implode(' ', $array);
    $show_explode = explode(' ', $show_implode);
    echo '<br>'.'Implode: '.$show_implode;

    $Var = 'Variable';
    $$Var = '<br>Hello World!';
    echo $Variable;

?>