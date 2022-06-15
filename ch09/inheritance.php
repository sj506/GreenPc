<?php
class People
{
    protected $name;
    protected $age;

    function __construct()
    {
        print '생성자 호출!'; // 안됨
    }

    function printPeople()
    {
        print "Name : {$this->name}<br>";
        print "Age : {$this->age}<br>";
        print '부모 printPeople';
    }
}

class Student extends People
{
    private $studentId;

    function __construct($name, $age, $studentId)
    {
        print '생성자함수 : 나는 Student요. <br>';
        $this->name = $name;
        $this->age = $age;
        $this->studentId = $studentId;
    }

    function printStudent()
    {
        print '- Student - <br>';
        print "Id : {$this->studentId}<br>";

        // $this->printPeople(); // 나의 PrintPeople()
        // parent::printPeople(); // 부모(People 의 printPeople())
    }

    function printPeople()
    {
        print '자식 printPeople : Student에 있는 print People<br>';
    }
}

$stu1 = new Student('홍길동', 21, 1010);
$stu1->printPeople();
print '-------------<br>';
$stu1->printStudent();
