<?php

class Fruit
{
    private $name;
    private $color;
    private $price;

    public const DDD = 'ddd';
    // 멤버필드 : 클래스 안에서 메소드가 아닌 애들(변수,상수) , 멤버변수, 필드 같은 말임

    public function setFruitName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function setFruitColor($color)
    {
        $this->color = $color;
        return $this;
    }
    public function setFruitPrice($price)
    {
        $this->price = $price;
        return $this;
    }
    //멤버 메소드 : 함수

    //        __construct : 인스턴스가 생성될 때 자동으로 호출되는 함수
    //private 멤버필드에 값 넣을 수 있는 2가지 방법 : 1) 셋터 , 2) 생성자함수
    //private 멤버필드에 값 뺄 수 있는 1가지 방법 : 1) 겟터

    public function print_fruit()
    {
        print "Name : {$this->name} <br>";
        print "Color : {$this->color} <br>";
        print "Price : {$this->price} <br>";
    }
}

// 멤버 필드 + 멤버 메소드로 구성된 것 = 클래스
// 클래스 = 설계도, 실체가 있는 건 아님
// 객체(인스턴스) = 설계도대로 만든 실체
// 프로퍼티 = 속성 = 멤버필드라고 보자

$apple = new Fruit();
$banana = new Fruit();

$apple->setFruitName('Apple');
$apple->setFruitColor('red');
$apple->setFruitPrice(1000);

$banana->setFruitName('Banana');
$banana->setFruitColor('yellow');
$banana->setFruitPrice(500);

// 생성자함수를 쓸 땐 값을 다 줘야함 빈칸이라도 줘야함
// 셋터 쓸 때는 안 줘도 됨

$apple->print_fruit();
$banana->print_fruit();

$apple1 = (new Fruit())->setFruitName('새과일');
$apple1->print_fruit();

$apple1 = (new Fruit())
    ->setFruitName('새과일')
    ->setFruitColor('파란')
    ->setFruitPrice(7000);

$apple1->print_fruit();
