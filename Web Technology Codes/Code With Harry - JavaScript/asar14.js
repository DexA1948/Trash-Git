// document.write("Hello world");
// document.getElementById('lorem32').innerHTML = 'This is bullshit';
// console.log('Hello');

// var aa = ["a", "b", 'c', 4];
// console.log(aa);

// var bb = ["a", "b", 'c', 4];

// if (aa[1] == bb[2])
// {
//     console.log("True");
// }
// else
// {
//     console.log("False");
// }

// for(var i = 0; i<aa.length; i++)
// {
//     console.error(aa[i]);
// }

// //a different way to iterate arrays
// aa.forEach(function(element)
// {
//     console.log(element);
// })

// //testing forEach on objects
// marks = {
//     'a' : 5,
//     'b' : 6,
//     'c' : 7
// }

// // marks.forEach(function(element){
// //     console.log(element);
// // })
// //shows a error I can't solve rn

// console.log("");
// //testing for loop on marks
// console.log(marks);
// console.log(marks['a']);

// ['a', 'b', 'c'].forEach(function(element){
//     console.log(marks[element]);
// })//proud moment

// // again
// marks = {
//     a: 1,
//     b: 2,
//     c: 3
// };


// ['a', 'b', 'c'].forEach(function(element)
// {
//     console.log(marks[element]);
// });

// //from stack overflow
// var validation_messages = {
//     "key_1": {
//         "your_name": "jimmy",
//         "your_msg": "hello world"
//     },
//     "key_2": {
//         "your_name": "billy",
//         "your_msg": "foo equals bar"
//     },

//     "key_3": {
        
//     }
// }

// for (var key in validation_messages) {
//     // skip loop if the property is from prototype
//     if (!validation_messages.hasOwnProperty(key)) continue;

//     var obj = validation_messages[key];
//     for (var prop in obj) {
//         // skip loop if the property is from prototype
//         if (!obj.hasOwnProperty(prop)) continue;

//         // your code
//         console.log(prop + " = " + obj[prop]);
//     }
// }

// const vary_12 = 12;
// console.log(12); 
// // vary_12++; shows error

// console.clear();

// let j = 0;

// console.log(aa.length);

// while(j<aa.length){
//     console.log("While", aa[j]);
//     j++;
// };

// j = 0;

// do{
//     console.log("Do While", aa[j]);
//     j++;
// }while(j < aa.length);

// console.log("");
// //break and continue
// do{
//     j--;
//     console.log("Do While", aa[j]);
// }while(j > 0);

// //array methods
// let myArr = ["Fan", "Camera", 32, null,true];
// console.log(myArr);

// console.log("");
// myArr.pop();
// console.log(myArr);
// myArr.push("Push1");
// console.log(myArr);
// myArr.shift();
// console.log(myArr);
// // myArr.unshift("notPush");
// // console.log(myArr);
// console.log(myArr.unshift("notPush"));

// myArr.sort();
// console.log(myArr);

// let str = myArr.toString();
// console.log(myArr);
// console.log(str);

//string methods
let myLovelyString = "Harry is a good boy";
console.log(myLovelyString.length);
console.log(myLovelyString.indexOf("oy"));

console.log(myLovelyString.slice(10));
console.log(myLovelyString.slice(11));
console.log(myLovelyString.slice(0, 3));

let str2 = myLovelyString.replace("Harry", "Rohan");
str2 = str2.replace("good", "evil");
console.log(str2);

//Date in JavaScript
let myDate = new Date();
console.log(myDate);
document.write(myDate);

//Date Methods
console.log(myDate.getTime());
console.log(myDate.getTimezoneOffset());
console.log(myDate.getUTCMilliseconds());

//DOM manipulation in JavaScript
document
document.location;
