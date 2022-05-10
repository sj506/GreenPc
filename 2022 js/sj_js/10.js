function calc(cb, n1, n2) {
    return cb(n1, n2);
}
function multi(num1, num2) {
    return num1 * num2;
}
var result = calc(multi,10, 20);
console.log('result : ' + result);