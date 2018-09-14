$(document).ready(function () {
    AOS.init({ duration: 1000 });
    getGithub('headhuntar');
});

// Get Github last commit of input: username
let getGithub = (username) => {
    $.ajax({
        async: false,
        type: "GET",
        url: "https://api.github.com/users/" + username + "/events",
        dataType: "json",
        success: function(data) {
            let lastCommit = new Date(data[0].created_at).toDateString();
            let textElement = document.getElementById("lastCommit");
            textElement.innerText = "Last Commit: " + lastCommit;
        }
    });
}