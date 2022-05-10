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
        newArr = console.log(cb(this.i));
        return newArr;
    },
};

console.log(newArr);