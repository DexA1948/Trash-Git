//1.Ways to print in JavaScript
//document.write("Fuck you");
//console.log("Hello World");
//alert('Im not okay');

//2.JavaScript Console API
console.clear();
console.log("Hello World");
console.warn("This is warning");
console.error("This is an error");
console.log("Hello World", 4 + 6, "Another log");

//3.JavaScript Variables
var number = 34;
var number2 = 56;
console.log(number + number2);

//4.Data Types in JavaScript
//String
var str1 = "This is a string";
var str2 = 'This is a string 2';
console.log(str1, 'okay');
//Numbers
var num1 = 455;
var num2 = 10.10;

//Objects
var marks = {
    ravi: 34,
    shubham: 78,
    harry: 99.97
}
//printing the objects
console.log(marks);

//boolean
var a = true;
var b = false;
console.log('b = ' + b);

//undefined
var und = undefined;
console.log(und);

//Null
var n = null;
console.log(null);

//symbol
// Symbol('hello');
// console.log(Symbol);

// At a very high level there are two types of data types in JavaScript
// 1. Primitive Data Types: undefined, null, number, String, Boolean, Symbol
// 2. Reference Data Types: Array and Object

var arr = [1, 2, "Deshant", 3, 4];
console.log(arr[2]);
console.log(arr.sort());
console.log(arr.pop());
console.log(arr);
arr.push("Prerana");
console.error(arr);

//if you dont use var to declare variable it automatically becomes a global variable.
//eg: carname = 'Volvo'
carname = 'Volvo'

{
    let x = 20;//not accesible outside the block
    var y = 50;//accessible outside block
}

//(class:)local variables and function in javascript
function AddMe(x, y){
    //local variables
    var result = x + y;
    return result;
}

console.clear();

//asar11_continued

//4. Operators in JavaScript

//Arithmetic Operators
// +, -, *, /
console.log(5*8);
console.log(8/2);
console.log(5/2);
console.log(5%2);

//Assignment Operators
var c = y;
console.log(y);

//Comparision Operator
console.log("c == y:", c == y);
console.log("c >= 50:", c >= 50);

//Logical Operator
console.log("True and True:", true && true);
console.log("True or False:", true|| false);

//5. Javascript Function
function avg(a, b){
    return (a+b)/2;
}

console.log(avg(5, 5));

//String in console is printed in black or white, while number in blue
console.log('3');
console.log(3);

//6. Conditionals in JavaScript
var age = 34;
if(age>8){
    console.log("You are not a kid");
}

if (aa[1] == bb[2])
{
    console.log("True");
}
else
{
    console.log("False");
}

//asar14
//7. For loop in JavaScript
for(var i = 0; i<arr.length; i++)
{
    console.error(arr[i]);
}

//a different way to iterate arrays
arr.forEach(function(element)
{
    console.log(element);
})

//trying something new
marks = {
    a: 1,
    b: 2,
    c: 3
};

['a', 'b', 'c'].forEach(function(element)
{
    console.log(marks[element]);
})

//8. While  and do while in JS
while(j<aa.length){
    console.log("While", aa[j]);
    j++;
};

j = 0;

do{
    console.log("Do While", aa[j]);
    j++;
}while(j < aa.length);

//9. Array Methods in JS
let myArr = ["Fan", "Camera", 32, null,true];
console.log(myArr);

console.log("");
myArr.pop();
console.log(myArr);
myArr.push("Push1");
console.log(myArr);
myArr.shift();
console.log(myArr);
// myArr.unshift("notPush");
// console.log(myArr);
console.log(myArr.unshift("notPush"));

myArr.sort();
console.log(myArr);

let str = myArr.toString();
console.log(myArr);
console.log(str);

//10. String Methods in JS
let myLovelyString = "Harry is a good boy";
console.log(myLovelyString.length);
console.log(myLovelyString.indexOf("oy"));

console.log(myLovelyString.slice(10));
console.log(myLovelyString.slice(11));
console.log(myLovelyString.slice(0, 3));

//replace
let str2 = myLovelyString.replace("Harry", "Rohan");
str2 = str2.replace("good", "evil");
console.log(str2);

//11. Date in JavaScript
let myDate = new Date();
console.log(myDate);
document.write(myDate);

//Date Methods
console.log(myDate.getTime());
console.log(myDate.getTimezoneOffset());
console.log(myDate.getUTCMilliseconds());

//Asar 16, 2078BS, Wednesday
//html in asar16

//12. DOM manipulation in JS
//Document Object Model
let elem = document.getElementById("button");
console.log(elem);

let elemClass = document.getElementsByClassName("class1");
console.log(elemClass);

// elemClass[0].style.background="yellow";
elemClass[0].classList.add("bg-primary");
elemClass[1].classList.add("text-success");
elemClass[1].classList.remove("text-success");
console.log(elemClass[0].innerHTML);
console.log(elemClass[0].innerText);

class1 = document.querySelector('.class1');
console.log(class1);

tn = document.getElementsByTagName('div');
console.log(tn);
createdElement = document.createElement('p');
createdElement.innerText = "This is a created paragraph";
tn[0].appendChild(createdElement);
createdElement2 = document.createElement('b');
createdElement2.innerText = "This is a created paragraph";
tn[0].replaceChild(createdElement2, createdElement);
// removeChild(element) --> removes an element

console.log(document.scripts);
console.log(document.forms);
console.log(document.URL);
console.log(document.location);
console.log(document.links);
console.log(document.location.console);

class1 = document.querySelector('.class1');
class1a = document.querySelectorAll('.class1');

console.log(class1);
console.log(class1a);

//To do: Asar 16, 2078BS, Wednesday

//copy code into Asar17 file and practice
//Or see from here and practice
//Write down what you practice in yesterday's calendar