const myobject = {
    name : 'bigtop',
    age : 345,
    phoneNumber : '010-1234-5678',
    address : 'somewhere in KOERA',
};
console.log(myobject);

myobject.gender = 'male';
console.log(myobject);

myobject.name = 'smalltop';
console.log(myobject);

myobject['gender'] = undefined;
console.log(myobject);

delete myobject['gender'];
console.log(myobject);