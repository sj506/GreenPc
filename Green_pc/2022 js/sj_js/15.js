let arr = {
    '0': 2,
    '1': 6,
    '2': 10,
    '3': 11,
    '4': 22,
    '5': 1,
    '6': 7,
    'length': 7,
    'forEach' : function(cb)
    {
        for(let i=0; i<this.length; i++)
        {
            cb(this[i],i);
        }
    }
}

var sum2 = 0;
arr.forEach(function(item)
{
    console.log(item);
}
);

