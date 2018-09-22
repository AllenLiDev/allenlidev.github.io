$(document).ready(() => {
    AOS.init({ duration: 1000 });
    getGithub(githubUsername);
    setTimeout(() => {clearText(19)}, 5000);
});

var githubUsername = "headhuntar";

// scroll to element input: element id, preset smooth and go to top of element
let smoothScroll = (id) => {
    console.log(id);
    document.getElementById(id).scrollIntoView({behavior: "smooth", block: "center"});
    return false;
}

// Get Github last commit of input: username
let getGithub = (username) => {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let lastCommit = new Date(JSON.parse(this.responseText)[0].created_at).toDateString();
            let textElement = document.getElementById("lastCommit");
            textElement.innerText = "Last Commit: " + lastCommit;
        }
    };
    xhttp.open("GET", "https://api.github.com/users/" + username + "/events", true);
    xhttp.send();
}

// manip text on set interval takes input: none
let writeText = (textToWrite) => {
    let textElement = document.getElementById("changingText");
    let count = 0;
    let length = textToWrite.length;
    let writingInterval = setInterval(() => {
        count++;
        if (count > length) {
            clearInterval(writingInterval);
            setTimeout(() => {clearText(length)}, 3500);
        } else {
            textElement.innerText = textToWrite.substring(0, count);
        }
    }, 150);
}

// namip text on set interval to blank then call next text to write input: current string length
let clearText = (curLength) => {
    let textElement = document.getElementById("changingText");
    let clearingInterval = setInterval(() => {
        curLength--;
        if(curLength == 0){
            clearInterval(clearingInterval);
            writeText(changeText());
        } else {
            textElement.innerText = textElement.innerText.substring(0, curLength);
        }
    }, 100);
}

// gets the next index to run input: none
let changeText = () => {
    switch (Math.floor((Math.random() * 5) + 1)) {
        case 1:
            return "Front-End Developer";
        case 2:
            return "MEAN Stack User";
        case 3:
            return "Lifeguard, Baller, Gamer";
        case 4:
            return "Problem Solver, Critical Thinker";
        case 5:
            return "Swift & React Learner";
    }
}