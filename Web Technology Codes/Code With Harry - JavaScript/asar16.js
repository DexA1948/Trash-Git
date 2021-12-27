// function change()
// {
//     document.getElementById("id11").innerHTML="This is changed by button";
// }

// let elem = document.getElementById("button");
// console.log(elem);

// let elemClass = document.getElementsByClassName("class1");
// console.log(elemClass);

// // elemClass[0].style.background="yellow";
// elemClass[0].classList.add("bg-primary");
// elemClass[1].classList.add("text-success");
// elemClass[1].classList.remove("text-success");
// console.log(elemClass[0].innerHTML);
// console.log(elemClass[0].innerText);
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