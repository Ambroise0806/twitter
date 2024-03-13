document.addEventListener("DOMContentLoaded", function (event) {
  //Light/Dark mode //
  let themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
  let themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");

  if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
      window.matchMedia("(prefers-color-scheme: dark)").matches)
  ) {
    themeToggleLightIcon.classList.remove("hidden");
  } else {
    themeToggleDarkIcon.classList.remove("hidden");
  }

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
          username.innerHTML = response[id_tweet]["username"];
          let atUsername = document.getElementById("atUsername" + i);
          atUsername.innerHTML = response[id_tweet]["at_user_name"];
          let date = document.getElementById("date" + i);
          date.innerHTML = response[id_tweet]["time"];
          let content = document.getElementById("content" + i);
          let content_response = response[id_tweet]["content"];
          content_response = content_response.replace(/\@(.*?)(\s|$)/g, "@");
          console.log(content_response);
          content.innerHTML = response[id_tweet]["content"];
          id_tweet++;
        }
        // }else{
        // console.error("Empty response from the server");
        // }
      }
    };
    xhttp.send();
  }

  // Characters Count //
  let newPost_container = document.getElementById("newPost_container");
  let newPost_length = document.getElementById("newPost_length");
  let newPost_button = document.getElementById("newPost_button");
  let span = document.getElementById("span");
  const maxNumChars = 140;

  const countCharacters = () => {
    let numOfChars = newPost_container.value.length;
    let count = maxNumChars - numOfChars;
    newPost_length.textContent = count + "/140";

    if (count < 0) {
      newPost_length.style.color = "red";
    } else if (count < 20) {
      newPost_length.style.color = "orange";
    } else {
      newPost_length.style.color = "darkgray";
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

  newPost_container.addEventListener("keyup", countCharacters);


  const imageInput = document.querySelector('#newPost_button');
  let uploadedImage = "";

  imageInput.addEventListener('change', function() {
      const reader = new FileReader();
      reader.addEventListener('load', () => {
          uploadedImage = reader.result;
          document.querySelector('#newPost_container').style.backgroundImage = `url(${uploadedImage})`;
      });
      reader.readAsDataURL(this.files[0]);
  })
});


// if(newPost_button) {
// newPost_button.addEventListener('click', CharTweet)
// }

// function CharTweet() {
//     let tweetContentLength = newPost_container.value.length

//     if (tweetContentLength == 0) {
//         newPost_button.classList.add('disabled')
//     } else if (tweetContentLength > 140) {
//         alert("Votre tweet ne peut pas dépasser 140 charactères !")
//         newPost_button.classList.add('disabled')
//     } else {
//         newPost_button.classList.remove('disabled')
//     }
// }
