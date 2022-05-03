 console.log('arr_algo4_mission');
        var arr = {
            '0': 2,
            '1': 6,
            '2': 10,
            '3': 11,
            '4': 22,
            '5': 1,
            '6': 7,
            'length': 7,
            'reduce': function(fn) {
                var result = this[0];
                for(var i=1; i<this.length; i++) {
                    result = fn(result, this[i], i, this);
                }
                return result;
            }    
        };  
        var sum = arr.reduce(function(pVal, cVal) {
            return pVal + cVal;
        });
        console.log('sum : ' + sum);

        var maxVal = arr.reduce(function(pVal, cVal) {
            return pVal > cVal ? pVal : cVal;
        });
        console.log('maxVal : ' + maxVal);

        var minVal = arr.reduce(function(pVal, cVal, idx) {            
            return pVal < cVal ? pVal : cVal;
        });
        console.log('minVal : ' + minVal);