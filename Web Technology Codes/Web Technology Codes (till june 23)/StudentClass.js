//Write a program which contains the information of three Students
//attributes or properties are
// stname, stroll, stcollege, stcontact, stemail.
//Display the information by using the concept of class, object and constructor

class student{
    constructor(stname, stroll, stcollege, stcontact, stemail){
        this.stname = stname;
        this.stroll = stroll;
        this.stcollege = stcollege;
        this.stcontact = stcontact;
        this.stemail = stemail;
    }
}

const student1 = new student("Deshant", 1, "Vedas", 984515083, "dexant9t@gmail.com");
document.writeln("Student's Name:" + student1.stname);
document.writeln("Student's Roll:" + student1.stroll);
document.writeln("Student's Contact:" + student1.stcollege);
document.writeln("Student's Contact:" + student1.stcontact);
document.writeln("Student's Email:" + student1.stemail);

const student2 = new student("Subash", 2, "Vedas", 984515763, "subash6@gmail.com");
document.write("<br>")
document.writeln("Student's Name:" + student2.stname);
document.writeln("Student's Roll:" + student2.stroll);
document.writeln("Student's Contact:" + student2.stcollege);
document.writeln("Student's Contact:" + student2.stcontact);
document.writeln("Student's Email:" + student2.stemail);
