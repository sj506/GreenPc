function Human(name,age)
{
    this.name = name;
    this.age = age;

    this.showMe = function() // 메소드
    {
        console.log(`My name is ${this.name}, age is ${this.age}.`);
    }
}
// 객체를 만들 수 있는 함수, 대부분 첫 알파벳이 대문자 like 설계도

var h1 = new Human ('홍길동', 20);
var h2 = new Human ('둘리', 120);


h1.showMe();
h2.showMe();
//showMe() 메소드 실행
Human.prototype.hello = function()
{
    console.log(`Hello ${this.name}`);
}

//속성은 h1 하나에만 줄 수 있지만 메소드(프로토타입)는 객체 하나에 다 적용됨
h1.hello();
h2.hello();


//객체 생성 3가지 있음 위 방법 생성자 함수
// var arr {} -> 1회성임 잠깐 쓸 때 / 개인적으로 이걸 많이 씀
// 클래스로도 객체 생성 할 수 있음