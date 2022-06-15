<?php

class Animal
{
    public function crying()
    {
        print '동물이 운다. <br>';
    }
}

class Dog extends Animal
{
    public function crying()
    {
        print '강아지가 멍멍. <br>';
    }
}

class Chiwawa extends Dog
{
    public function crying()
    {
        print '치와와가 왕왕. <br>';
    }
}

class Cat extends Animal
{
    public function crying()
    {
        print '고양이가 야옹~ <br>';
    }
}

function doCry($ani)
{
    if (method_exists($ani, 'crying')) {
        //method_exists 메소드가 있으면 true, 아니면 false
        $ani->crying(); // 컨버터
    } else {
        print 'crying 메소드 없음 <br>';
    }
}

doCry(new Animal());
doCry(new Dog());
doCry(new Chiwawa());
doCry(new Cat());
