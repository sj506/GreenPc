        var arr = [2, 6, 10, 11, 22, 1, 7];
        var result = 0;
        
        function val(){
        for(var i=0; i<arr.length; i++)
        {
            result += arr[i];
        }
        return result;}
        console.log('result : ' + val());

        console.log('---------------------');

        var sum = 0;
        function aa(val) {
            sum = sum + val;
        }
        arr.forEach(aa);
        console.log('sum : ' + sum);

