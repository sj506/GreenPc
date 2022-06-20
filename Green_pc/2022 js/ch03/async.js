console.log('A');
setTimeout(function()
{
    console.log('B');

    setTimeout(function()
    {
       
        setTimeout(function()
        {
            console.log('D');
        },500);
     
        console.log('C');
    },1000);
    
   
},2000);
//1초 후에 콘솔 B가 보내짐 자바였으면 B를 기다렸다가 B 호출 후에 C,D가 호출됨
//하지만 자바스크립트에서는 C,D 먼저 띄우고 B는 나중에 뒤에 띄워짐
// 해결방법 : PROMISE

//자바슼은 싱글쓰레드에 비동기방식




