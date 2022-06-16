<?php

class Computer
{
    public static $brand;
    //객체마다 같은 값을 썼으면 하는 경우에 쓰자
    public $price;

    function __construct()
    {
        self::$brand = 'SAMSUNG';
    }

    function myPrint()
    {
        print '컴퓨터 브랜드는 ' .
            self::$brand .
            " 가격은 {$this->price} 입니다. <br> \n";

        // self는 객체화 되지 않아도 쓸 수 있고 , this는 객체화 되었을 때 사용가능
    }

    static function setBrand($brand)
    {
        self::$brand = $brand;
    }

    static function myStaticPrint()
    {
        print '컴퓨터 브랜드는 ' .
            self::$brand .
            " 가격은 {$this->price} 입니다. <br> \n";

        //static 함수에는 static 멤버필드만 쓸 수 있음
        //왜? 먼저 메모리를 주었는데 this는 객체가 되었을 때 사용 가능하니깐!
        //발목을 잡음
        //파라미터로 들어오는 것 만으로도 함수가 사용가능하면 쓰는 것을 권장!
    }
}

$c = new Computer();
$c->price = 10000;
$c->myPrint();

// Computer::$brand = '삼성'; // 저장할 수 있는 값은 하나 , 이걸 모든 객체가 참고함

$c2 = new Computer();
Computer::setBrand('LG');
$c2->price = 5000;
$c2->myPrint();
// $c2->myStaticPrint(); // 에러뜸
