const words = new Array("Apple", "Banana", "Orange", "Kiwi", "Guava", "Mango");
const wordLen = words.length;

let ranindex = Math.floor(Math.random() * wordLen); //values from 0-5 randomly
let ranword = words[ranindex];

function generateWord() {
    //hides all parts of hang man from foot to neck
    for (var j = 0; j < 7; j++) { document.getElementById("imageid" + j).style.visibility = "hidden"; }
    var s = ranword;
    for (var i = 0; i < s.length; i++) {
        var input = document.createElement("input");
        input.type = "text";
        input.id = "optionid" + i;
        input.className = "test";
        input.value = s.charAt(i);
        inputarea.appendChild(input);
        //making word hidden from users 
        input.style.visibility = 'hidden';
        // input.style.textDecoration = "underline";
    }
}

function guessMe() {

    let guess = document.getElementById("guessid").value;
    if (guess != "") {
        for (var i = 0; i < ranword.length; i++) {
            // var str = ranword[i];
            // var re = new RegExp(guess, "g");
            // var mat = re.exec(str);
            //or if(re.test(str))
            if (guess == ranword[i]) { //guess=B, ranword[0]=B
                document.getElementById("optionid" + i).innerHTML = guess;

                document.getElementById("optionid" + i).style.visibility = 'visible';
            }
        }
        //select visible elements
        var size =
            $('#inputarea > input:not([style*="visibility: hidden"])').length;
        if (size == ranword.length) {
            alert("You won");
            return;
        }
        noMatch(guess);
    } else {
        alert("Enter your Guess");
        document.getElementById("guessid").focus(); //it gives focus on textbox
    }
}

function noMatch(guess) {
    for (i = 0; i < ranword.length; i++) {
        if (guess == ranword[i]) {
            return;
        }
    }
    if (count < 7) {
        document.getElementById("imageid" + count).style.visibility = "visible";
        document.getElementById("incorrectid").innerHTML += guess;
        count++;
    } else {
        alert("Sorry You are hanged!");
    }
}