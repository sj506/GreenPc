<!DOCTYPE html>
<?php

$h1 = "Hello"
?>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>
    <body>
        <script>
            const p1 = new Promise(function (resolve) {
                resolve("안녕", 1, 2, 3);
            });

            // const val = cb("안녕");
            // return new Promise(function (resolve) {
            //     resolve(val);
            // });

            const p2 = p1.then(function (result) {
                console.log(`p1 : ${result}`);
                return "hello";
            });

            p2.then(function (result) {
                console.log(`p2 : ${result}`);
            });
            const h1 = "<?=$h1?>"

            console.log(h1);

            // php 는 서버에서 먼저 뿌리고 거고
            // javascript 는 브라우저 엔진에서 하는 거고
        </script>
    </body>
</html>