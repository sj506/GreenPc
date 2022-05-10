function isBigEnough(value) {
    return value >= 10;
  }
  
  let filtered = [12, 5, 8, 130, 44].filter(isBigEnough);
  // filtered 는 [12, 130, 44]

  console.log(filtered);


  var arr = [2, 6, 10, 11, 22, 1, 7];

  var resultarr = arr.filter(function (item,idx)
  {
      console.log(`${idx} : ${item}`);
      if(item < 10 )
      {
          return true;
      }
  });

  console.log(resultarr);