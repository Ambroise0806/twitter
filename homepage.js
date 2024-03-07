document.addEventListener('DOMContentLoaded', function () {

    let themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    let themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    let themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function () {

        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }

        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }
    });

    let newPost_container = document.getElementById('newPost_container')
    let newPost_button = document.getElementById('newPost_button')


    function CharTweet() {
        let tweetContentLength = newPost_container.textLength

        if (tweetContentLength == 0) {
            newPost_button.classList.add('disabled')
        } else if (tweetContentLength > 140) {
            alert("Votre tweet ne peut pas dépasser 140 charactères !")
            newPost_button.classList.add('disabled')
        } else {
            newPost_button.classList.remove('disabled')
        }
    }

    // function countCharLength(){
    //     let newPost_length = document.getElementById('newPost_length')
    //     let newPost_maxLength = document.getElementById('newPost_maxLength')
        // let newPost_containerCount = newPost_container.textLength

    //     newPost_length.innerHTML = ""
    //     newPost_length.innerHTML = newPost_containerCount 
    //     if(newPost_containerCount > 140)
    //     {
    //         newPost_maxLength.classList.add('error_newPost')
    //         newPost_length.classList.add('error_newPost')
    //     }else{
    //         newPost_maxLength.classList.remove('error_newPost')
    //         newPost_length.classList.remove('error_newPost')
    //     }
    // }
    

    function load_atUsername (){
        const xhttp = new XMLHttpRequest()
        xhttp.open("GET", "at_username.json")
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let response = JSON.parse(this.responseText);
                response.forEach(element => {
                    console.log(element[0])
                });
            }
        }
        xhttp.send()
    }

    autocompletion();
    function autocompletion(){
        newPost_container.addEventListener('keyup', ()=>{
            load_atUsername()
            
        })
    }
    
    newPost_button.addEventListener('click', CharTweet);
    newPost_container.addEventListener('keyup', CharTweet)
    // newPost_container.addEventListener('keyup', countCharLength)
    
    load_tweet();
    let id_tweet = 0;
    
    function load_tweet() {
        const xhttp = new XMLHttpRequest()
        xhttp.open("GET", "tweet.json")
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let response = JSON.parse(this.responseText);
                for (let i = 0; i < 10; i++) {
                    let username = document.getElementById('username' + i)
                    username.innerHTML = (response[id_tweet]['username'])
                    let atUsername = document.getElementById('atUsername' + i)
                    atUsername.innerHTML = (response[id_tweet]['at_user_name'])
                    let date = document.getElementById('date' + i)
                    date.innerHTML = (response[id_tweet]['time'])
                    let content = document.getElementById('content' + i)
                    let content_response = response[id_tweet]['content']
                    let regexHashtag = /\#(.*?)(\s|$)/g 
                    let array_hashtag = content_response.match(regexHashtag)
                    if(array_hashtag !== null){
                        array_hashtag.forEach(hashtag => {
                            content_response = content_response.replace(hashtag, '<a href="#" style="color: skyblue">'+hashtag+'</a> ');
                        });
                    }
                    let regexAt = /\@(.*?)(\s|$)/g 
                    let array_at = content_response.match(regexAt)
                    if(array_at !== null){
                        array_at.forEach(at => {
                            content_response = content_response.replace(at, '<a href="#" style="color: skyblue">'+at+'</a> ');
                        });
                    }
                    content.innerHTML = content_response
                    id_tweet++
                }
            }
        }
        xhttp.send()
    }
});