document.addEventListener('DOMContentLoaded', function () {
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
    if(newPost_button != null){
        newPost_button.addEventListener('click', CharTweet);
    }
    if(newPost_container != null){
        newPost_container.addEventListener('keyup', CharTweet)
    }

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
                    content.innerHTML = ""
                    if(array_hashtag !== null){
                        array_hashtag.forEach(hashtag => {
                            const params = new URLSearchParams({
                                hashtag: hashtag,
                            })
                            content_response = content_response.replace(hashtag, '<a href="search.php?'+params+'" id="hashtag_link" style="color: skyblue">'+hashtag+'</a> ');
                        });
                    }
                    let regexAt = /\@(.*?)(\s|$)/g 
                    let array_at = content_response.match(regexAt)
                    if(array_at !== null){
                        array_at.forEach(at => {
                            const params = new URLSearchParams({
                                at: at,
                            })
                            content_response = content_response.replace(at, '<a href="profile.php?'+params+'" id="at_username_link" style="color: skyblue">'+at+'</a> ');
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