function proc(cb, max) {
    for (var i = 0; i < max; i++) {
        cb(i);
    }
}

proc(function (item) {
    console.log(`noName : ${item}`);
}, 5);
