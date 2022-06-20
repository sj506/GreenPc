        var arr = [2, 6, 10, 11, 22, 1, 7];
        var sum = 0;
        arr.forEach(function(val) {
            if(!(val % 2)) {
                sum += val;
            }
        });
        console.log('even sum : ' + sum); //짝수값만 더한 결과값을 출력

        var oddSum = 0;
        arr.forEach(function(val) {
            if(val % 2) {
                oddSum += val;
            }
        });
        console.log('odd sum : ' + oddSum); //홀수값만 더한 결과값을 출력

        var sum2 = 0;
        arr.forEach(function(v) {
            if(v <= 10) {
                sum2 += v;
            }
        });
        console.log('sum2 : ' + sum2); // 10이하 값만 더한 결과값을 출력
