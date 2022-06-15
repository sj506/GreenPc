<?php

    class Fruit {
        private $name;
        private $color;
        private $price;

        function __construct($name="과일",$color="색깔",$price="가격") {
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;
        }



        
//        __construct : 인스턴스가 생성될 때 자동으로 호출되는 함수
//        private 멤버필드에 값 넣을 수 있는 2가지 방법 : 1) 셋터 , 2) 생성자함수
//        private 멤버필드에 값 뺄 수 있는 1가지 방법 : 1) 겟터

        public function print_fruit() {
            print "Name : {$this->name} <br>";
            print "Color : {$this->color} <br>";
            print "Price : {$this->price} <br>";
        }
        
        
    }

    $apple = new Fruit();
    $banana = new Fruit("Banana","yellow",500);

    $apple->print_fruit();
    $banana->print_fruit();


    