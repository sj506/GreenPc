// c는 1초후에
// b는 2초후에
// a는 3초후에

function fn1()
{
    return new Promise(function(resolve)
    {
        setTimeout(function()
            {resolve(10)
            },2000)
    })
}

function fn2(val)
{
    return new Promise(function(resolve)
    {
        setTimeout(function()
        {
            resolve(val + val)
        },1000)
    })
}

let p1 = fn1()
p1.then(function(result)
{
    return fn2(result)
})
.then(function(result)
{
    console.log('result : ' + result)
})
