// class Student{
//     students = [];

//     constructor(id, name, address, email){
//         this.id = id;
//         this.name = name;
//         this.address = address;
//         this.email = email;
//     }
//     addStudent(){
//         const id = prompt("Enter ID:");
//         const name = prompt("Enter Name");
//         const address = prompt("Enter Address");
//         const email = prompt("Enter Email");
//         const student = new Student(id, name, address, email);
//         this.students.push(student);
//     }
//     displayInfo(){
//         document.write("<h3>Students</h3>");
//         const list = document.createElement("ul");
//         for (const student of this.students){
//             list.innerHTML+=`<li><b>ID: </b>${student.id}</li>`;
//             list.innerHTML+=`<li><b>Name: </b>${student.name}</li>`;
//             list.innerHTML+=`<li><b>Address: </b>${student.address}</li>`;
//             list.innerHTML+=`<li><b>Email: </b>${student.email}</li>`;
//         }
//         document.body.appendChild(list);
//     }
// }

// const stob = new Student(101, "Deshant", "Kshetrapur", "abc@gmail.com");
// document.write(
//     `<ul>
//     <li><b>ID: </b>${stob.id}</li>
//     <li><b>Name: </b>${stob.name}</li>
//     <li><b>Address: </b>${stob.address}</li>
//     <li><b>Email: </b>${stob.email}</li>
//     </ul>`
// )
// stob.addStudent();
// stob.displayInfo();

var arr = ["Deshant", "Anjit", "Bikram", "Dhiraj", "Subash"];
document.getElementById('here').innerHTML = arr.sort();
document.getElementById('here').innerHTML += "<br>" + arr.shift();

let numberid = [1, 0, 3, 50, 6, 91];
document.getElementById("here").innerHTML += numberid.sort(function(a, b) {
    return b - a; // Descending
});