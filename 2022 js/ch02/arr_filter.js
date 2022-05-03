var arr = [2, 6, 10, 11, 22, 1, 7];

// 새로운 배열을 추가해준다
// forEach는 리턴값이 없고 filter는 리턴값이 있다
var resultArr = arr.filter(function (item,idx) 
{
    console.log(`${idx}: ${item}`);
    if (item <= 8) 
    {
        return true;
    }
});
var newArr = [];
console.log(resultArr);
newArr.push(10);
newArr.push(12);
console.log(newArr);

// newArr[0] = 10;
// newArr[1] = 12;
// newArr[4] = 12;
// console.log(newArr);
// newArr.length = 1;
// console.log(newArr);

