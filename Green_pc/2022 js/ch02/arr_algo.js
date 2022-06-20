var arr = [2, 6, 10, 11, 22, 1, 7];
var sum = 0;
for (var i = 0; i < arr.length; i++) {
    sum += arr[i];
}

console.log(`sum : ${sum}`);

var sum2 = 0;

// forEach 라는 함수에 인자를 1개(함수) 넣어줌
arr.forEach(function (item) {
    sum2 += item;
});
console.log(`sum2 : ${sum2}`);


var evenSum = 0;
arr.forEach(function (item) {
    if (item % 2 === 0) {
        evenSum += item;
    }
});
console.log(`evenSum : ${evenSum}`);

arr.forEach(function (item, index) {
    if (index < 2) {
        console.log(`item : ${item}`);
    }
});


