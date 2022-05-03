
        console.log('arr_algo_mission');
        var arr = {
            '0': 2,
            '1': 6,
            '2': 10,
            '3': 11,
            '4': 22,
            '5': 1,
            '6': 7,
            'length': 7,
            'forEach': function(fn) {
               for(var i=0; i<this.length; i++) {
                   fn(this[i]);
               }
            }
        };      
        console.log('---------------------');
        var sum = 0;
        /*
        function aa(val) {
            sum = sum + val;
        }
        arr.forEach(aa);
        */
        arr.forEach(function(val) {
            sum = sum + val;
        });
        console.log('sum : ' + sum);
