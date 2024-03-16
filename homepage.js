document.addEventListener("DOMContentLoaded", function (event) {
  //Light/Dark mode //
  let themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
  let themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");

  function setDefaultTheme() { 
  if (localStorage.getItem("color-theme") === "dark") {
    document.documentElement.classList.add('dark');
    themeToggleLightIcon.classList.remove("hidden");
    themeToggleDarkIcon.classList.add("hidden");
  } else {
    document.documentElement.classList.remove('dark');
      themeToggleDarkIcon.classList.remove("hidden");
      themeToggleLightIcon.classList.add("hidden");
    }
  }

  setDefaultTheme();

  let themeToggleBtn = document.getElementById("theme-toggle");
  themeToggleBtn.addEventListener("click", function () {
    themeToggleDarkIcon.classList.toggle("hidden");
    themeToggleLightIcon.classList.toggle("hidden");

    if (localStorage.getItem("color-theme")) {
      if (localStorage.getItem("color-theme") === "light") {
        document.documentElement.classList.add("dark");
        localStorage.setItem("color-theme", "dark");
      } else {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("color-theme", "light");
      }
    } else {
      if (document.documentElement.classList.contains("dark")) {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("color-theme", "light");
      } else {
        document.documentElement.classList.add("dark");
        localStorage.setItem("color-theme", "dark");
      }
    }
  });

  // Tweet (Ajax request to server) //
  loadDoc();
  let id_tweet = 0;

  function loadDoc() {
    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", "tweet.json");
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        // if (this.responseText != "") {
        let response = JSON.parse(this.responseText);
        for (let i = 0; i < 10; i++) {
          let username = document.getElementById("username" + i);
          let atUsername = document.getElementById("atUsername" + i);
          let date = document.getElementById("date" + i);
          let content = document.getElementById("content" + i);

          if(username && atUsername && date && content) { 
          username.innerHTML = response[id_tweet]["username"];
          atUsername.innerHTML = response[id_tweet]["at_user_name"];
          date.innerHTML = response[id_tweet]["time"];
          let content_response = response[id_tweet]["content"];
          content_response = content_response.replace(/\@(.*?)(\s|$)/g, "@");
          console.log(content_response);
          content.innerHTML = response[id_tweet]["content"];
          id_tweet++;
          }
        }
        // }else{
        // console.error("Empty response from the server");
        // }
      }
    };
    xhttp.send();
  }

  //Post Characters Count //
  let newPost_container = document.getElementById("newPost_container");
  let newPost_length = document.getElementById("newPost_length");
  let newPost_button = document.getElementById("newPost_button");
  let span = document.getElementById("span");
  const maxNumChars = 140;

  function countCharacters(event) {
    let numOfChars = newPost_container.value.length;
    let count = maxNumChars - numOfChars;
    newPost_length.textContent = count + "/140";

    if (count < 0) {
      newPost_length.style.color = "red";
    } else if (count < 20) {
      newPost_length.style.color = "orange";
    } else {
      newPost_length.style.color = "gray";
    }
    if (numOfChars === 0) {
      newPost_button.classList.add("disabled");
    } else if (numOfChars > 140) {
      span.textContent = "Your tweet cannot exceed 140 characters !";
      newPost_button.classList.add("disabled");
    } else {
      newPost_button.classList.remove("disabled");
    }
};

    if(newPost_container) { 
      newPost_container.addEventListener("keyup", countCharacters);
    }

  });