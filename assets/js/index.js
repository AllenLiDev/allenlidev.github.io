$(document).ready(function () {
    AOS.init({ duration: 1000 });
    getGithub('headhuntar');
    setInterval(changeText, 200);
});
// record current text index
var currentTextIndex = 0;

// Get Github last commit of input: username
let getGithub = (username) => {
    // depreciated
    // $.ajax({
    //     async: false,
    //     type: "GET",
    //     url: "https://api.github.com/users/" + username + "/events",
    //     dataType: "json",
    //     success: function (data) {
    //         let lastCommit = new Date(data[0].created_at).toDateString();
    //         let textElement = document.getElementById("lastCommit");
    //         textElement.innerText = "Last Commit: " + lastCommit;
    //     }
    // });
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
let changeText = () => {
    let textElement = document.getElementById("changingText");

    if (++currentTextIndex === 6) {
        currentTextIndex = 1;
    }

    switch (currentTextIndex) {
        case 1:
            textElement.innerText = "cha";
            return;
        case 2:
            textElement.innerText = "chan";
            return;
        case 3:
            textElement.innerText = "chang";
            return;
        case 4:
            textElement.innerText = "change";
            return;
        case 5:
            textElement.innerText = "changed";
            return;
    }
}