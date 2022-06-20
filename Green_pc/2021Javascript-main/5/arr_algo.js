
        var arr = [2, 6, 10, 11, 22, 1, 7];
        var sum2 = 0;
        for(var i=0; i<arr.length; i++) {
            sum2 += arr[i];
        }
        console.log('sum2 : ' + sum2);

        console.log('---------------------');

        var sum = 0;
        function aa(val) {
            sum = sum + val;
        }
        arr.forEach(aa);
        console.log('sum : ' + sum);
    