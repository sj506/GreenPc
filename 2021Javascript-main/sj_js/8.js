
function calc(cb,n1,n2)
{
    return cb(n1,n2);
}

function fusum(n1,n2) {return n1+n2}
function fumulti(n1,n2) {return n1*n2}

let result;
result = calc(fusum,10,20);
console.log('result : ' + result);
result = calc(fumulti,10,20);
console.log('result : ' + result);