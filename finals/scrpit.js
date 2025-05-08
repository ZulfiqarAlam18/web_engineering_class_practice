// external js => most perfered way of using js

function showData(){

    alert('NamE: Zulfiqar Ali ');




};


function basics(){

    let n1  =  10;
    let n2 = 20;
    let sum = n1 + n2;

    let temp = Infinity;

    let s1 = 'Zulfiqar Alam';
    let s2 = "Zulfiqar Alam";

    let t = null;
    let b = true;
    let u = undefined;

    //js object also known as dictoionaries

    let obj = {
        name: 'Zulfiqar Alam',
        age: 20,
        city: 'Lahore',
        country: 'Pakistan',
        phone: '0300-1234567',
        email: 'zulfiqaralam@gmail.com',
        address: 'Lahore',
        gender: 'Male',
        isMarried: false,
        isStudent: true, };
    

    //console.log(obj.name);
    //console.log(obj);

    //arrays
    let arr = [1,2,3,4,5,6,7,8,9,10];
    let arr2 = ['Zulfiqar alam',18,  {name: 'Zulfiqar Alam', age: 20} ,'male'];
   // console.log(arr2);

    // using below defined methods/functions


    // printName('Zulfiqar Alam');
    // demo();
    // console.log(name('Zulfiqar Alam'));

    
    console.log('2'>1); //true
    console.log(true==1);
    console.log((2*4)===8); //false



};

// js functions

function demo (){

    console.log('demo function');

};
function printName(name) {

    console.log('Name: ' + name);
};

function name (name) {

    return name;

};

// js comment through farward slashes and second using /* */ .