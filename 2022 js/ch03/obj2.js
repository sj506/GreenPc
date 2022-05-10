let h1 = {
    'name' : '홍길동',
    'age' : 20,
    'showME' : function()
    {
        console.log(`My name is ${this.name} age is ${this.age}`);
    }
}
let h2 = {
    'name' : '둘리',
    'age' : 120,
    'showME' : function()
    {
        console.log(`My name is ${this.name} age is ${this.age}`);
    }
}

h1.showME();

h2.showME();

//function 이 들어가면 메소드
