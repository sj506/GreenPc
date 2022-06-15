<?php

//접근 지시어
//접근 제어자 / 접근 제어 지시자
//Access Modifier

//1.public
//2.protected
//3.private

class Student
{
    private $studentId;
    private $studentName;
    //  private 는 은닉화 캡슐화 / 밖에서 변경 못함
    //  $obj->studentId = 20171234; 불가능

    public function getStudentId()
    {
        return $this->studentId;
    }
    public function setStudentId($studentId)
    {
        $this->studentId = $studentId;
    }
    public function setStudentName($studentName)
    {
        $this->studentName = $studentName;
    }

    public function printStudent()
    {
        print "ID : {$this->studentId} <br>";
        print "Name : {$this->studentName} <br>";
    }
}

// 상수만 public 가능

$obj = new Student(); // 객체 생성
//즉, 객체를 소프트웨어에 실체화 하면 그것을 ‘인스턴스’라고 부른다.

// $obj->printStudent(54864, "홍길동");

$obj->setStudentId(5646);
$obj->setStudentName('승재리');
$obj->printStudent();

$a = $obj->getStudentId();
print $a . '<br>'; // 5646

$obj->setStudentId(8888);
$a = $obj->getStudentId();
print $a . '<br>'; // 8888
$obj->printStudent();

//   ID : 20171234
//   Name : Alice
