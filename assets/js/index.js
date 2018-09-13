$(document).ready(function () {
    AOS.init({ duration: 1000 });
    getGithub('headhuntar');
});

let getGithub = (username) => {
    $.ajax({
        async: false,
        type: "GET",
        url: "https://api.github.com/users/" + username + "/events",
        dataType: "json",
        success: function(data) {
            console.log(data);
        }
    });
}

// var xmlhttp = new XMLHttpRequest();
// xmlhttp.onreadystatechange = function() {
//   if (this.readyState == 4 && this.status == 200) {
//     displayProjects(JSON.parse(this.responseText));
//   }
// };
// xmlhttp.open('GET', 'api/projects');
// xmlhttp.send();

// https://api.github.com/users/headhuntar/events
// git hub api to get user event

