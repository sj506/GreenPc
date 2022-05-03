function print(p1, p2, cb) {
   return cb(p1, p2);
}

function hello(nm) {
    console.log('Hi~~~ ' + nm);
}

function sayGoodbye(nm) {
    console.log('Bye~~~~' + nm);
}

print('H', 'D', hello);