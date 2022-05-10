let num = 11;

let p1 = new Promise(function(resolve, reject)
{
    if(num >= 10)
    {
        resolve(1);
    }
    else
    {
        reject(2);
    }
});

p1.then(function(result)
{
    console.log('then : ' + result);
})
.catch(function(result)
{
    console.log('catch : ' + result);
})
