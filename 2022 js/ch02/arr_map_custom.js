var arr = {
    0: 2,
    1: 6,
    2: 10,
    3: 11,
    4: 22,
    5: 1,
    6: 7,
    length: 7,
    forEach: function (cb) {
        for (var i = 0; i < this.length; i++) {
            cb(this[i], i);
        }
    },
    filter: function (cb) {
        var newArr = [];
        for (var i = 0; i < this.length; i++) {
            if (cb(this[i])) {
                newArr.push(this[i]);
            }
        }
        console.log(cb(this.fi));
        return newArr;
    },
    'map': function (cb) {
        var tempArr = [];
        for(var i=0; i<this.length; i++) 
        {
            // var val =this[i];
            // var result = cb(val,i);
            // tempArr.push(result);
            tempArr.push(cb(this[i], i));
        }
        return tempArr; 
    }
}

var result2Arr = arr.map(function (item) {
    if(item < 10) {
        return item * 2;
    }
    return item;
    }
);
console.log(result2Arr);


//????