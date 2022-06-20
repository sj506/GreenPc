let p1 = new Promise(function(resolve)
{
    resolve(1);
})

let p2 = p1.then(function(result)
{
    return result;
})

p2.then(function(result)
{
    console.log(result)
})

//p2도 promise 객체가 됨