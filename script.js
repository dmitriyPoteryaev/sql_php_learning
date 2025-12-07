

// // показательный код про область видимости в JS. Если мы говорим про область видимости в JS внутри функции, то при определении и var, и let, и const 
// // эти параметры видны только внутри функции

// function log(){

//     var  value = 10;

//    return value;
// }


// log();

// console.log(value);

// const cond = true;


// // с блочной областью видимости всё наоборот. var будет в таком случае видно и в консоли значение переменной отобразиться.
// // а let и const не отобразиться. ReferenceError: value is not defined


// if(cond){

// let  value = 10;
// }

// if(cond){

//     var value1 = 10;
// }

// console.log(value1);
// console.log(value);

'use strict';

let value = 10;

function log(){
    ++value;
}

log();

console.log(value);

