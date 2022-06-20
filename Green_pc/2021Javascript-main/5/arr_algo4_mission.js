
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
            'filter': function(fn) {
                var temparr = [];
                for(var i=0; i<this.length; i++) {
                var val = this[i];
                if(cd(val, i)){
                    tempArr.push(val);
                    }    
                }
                return tempArr;
                }
               
            }
var resultArr = arr.filter(function(item, idx)
{
    console.log(`${idx}: ${item}`);
    if(item <= 8)
    {
        return true;
    }
});