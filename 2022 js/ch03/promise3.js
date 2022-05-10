function fn1()
{
    // setTimeout(function()
    // {
    //  return 10
    // }, 2000)

    return new Promise(function(resolve)
    {
        setTimeout(function()
        {
            resolve(10)
        }, 2000)
    })
}

function fn2(val)
{
    return new Promise(function(resolve)
    {
        setTimeout(function()
        {
            resolve(val + val)
        }, 1000)
    })
}

let p1 = fn1();
p1.then(function(result)
{   
    return fn2(result)
})
.then(function(result)
{
    console.log('result : ' + result)
})
