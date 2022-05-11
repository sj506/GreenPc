let num = 8

// 10이상이면 then : num 이 뜨게
// 10이하면 catch : num이 뜨게


let p1 = new Promise(function(resolve,reject)
{
    if(num > 10)
    {
        resolve(num)
    }
    else
    {
        reject(num)
    }
})

p1.then(function(result)
{
    console.log('then :' + result);
})
.catch(function(result)
{
    console.log('catch :' + result);
})

