<?php

class Calc
{
    function sum($n1, $n2)
    {
        return $n1 + $n2;
    }
}

// Calc 를 객체화 하고 네이밍은 c
// Sum 메소드를 호출 5와 10을 더한 값을 리턴받고 출력

$c = new Calc();

$val = $c->sum(5, 10);

print $val . "<br>\n ";

class StaticCalc
{
    static function sum($n1, $n2)
    {
        return $n1 + $n2;
    }
}

// static = 메모리에 먼저 올라갔다 = 객체를 만들지 않아도 쓸 수 있음

$result = StaticCalc::sum(3, 5);

print $result . "<br>\n ";
