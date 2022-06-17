<?php

//접근 지시어
//접근 제어자 / 접근 제어 지시자
//Access Modifier

//1.public
//2.protected
//3.private

class Student
{
    public $studentId;
    public $studentName;

    public function printStudent($id, $name)
    {
        print "ID : {$id} <br>";
        print "Name : {$name} <br>";
    }
}

// 클래스 = 설계도, 틀
// 프로퍼티 = 클래스 안에서 사용하는 변수

// 쌤이라면 ~ -----------------------------------------
// class Student {
//     public $studentId;
//     public $studentName;

//     public function printStudent()
//     {
//         print "ID : {$this->studentId} <br>";
//         print "Name : {$this->studentName} <br>";
//         // 뒷쪽은 $ 안 붙이는 걸로~
//     }
// }
// $obj->studentId = 20171234;
// $obj->studentName = "Alice";
// $obj->printStudent();
// ----------------------------------------------------

$obj = new Student(); // 객체 생성
//즉, 객체를 소프트웨어에 실체화 하면 그것을 ‘인스턴스’라고 부른다.

$obj->studentId = 20171234;
$obj->studentName = 'Alice';

// obj.~~ 과 같은 기능

$obj->printStudent($obj->studentId, $obj->studentName);

//   ID : 20171234
//   Name : Alice
