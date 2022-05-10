function Human(name,age)
{
    this.name = name;
    this.age = age;

    this.showMe = function()
    {
        console.log(`My name is ${this.name}, age is ${this.age}.`);
    }
}
// 객체를 만들 수 있는 함수, 대부분 첫 알파벳이 대문자 like 설계도

var h1 = new Human ('홍길동', 20);
var h2 = new Human ('둘리', 120);


h1.showMe();
h2.showMe();