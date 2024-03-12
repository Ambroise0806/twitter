let newPost_container = document.getElementById('comment')
let newPost_button = document.getElementById('newPost_button')


function CharTweet(){
    let tweetContentLength = newPost_container.textLength
    
    if(tweetContentLength == 0){
        newPost_button.classList.add('disabled')
    }else if(tweetContentLength > 140){
        alert("Votre tweet ne peut pas dépasser 140 charactères !")
        newPost_button.classList.add('disabled')
    }else{
        newPost_button.classList.remove('disabled')
    }
}

function countCharLength(){
    let newPost_length = document.getElementById('newPost_length')
    let newPost_maxLength = document.getElementById('newPost_maxLength')
    let newPost_containerCount = newPost_container.textLength

    newPost_length.innerHTML = ""
    newPost_length.innerHTML = newPost_containerCount 
    if(newPost_containerCount > 140)
    {
        newPost_maxLength.classList.add('error_newPost')
        newPost_length.classList.add('error_newPost')
    }else{
        newPost_maxLength.classList.remove('error_newPost')
        newPost_length.classList.remove('error_newPost')
    }
}

newPost_button.addEventListener('click', CharTweet);
newPost_container.addEventListener('keyup', CharTweet)
newPost_container.addEventListener('keyup', countCharLength)

loadDoc();


let id_tweet = 0;

function loadDoc() {
    const xhttp = new XMLHttpRequest()
    xhttp.open("GET", "tweet.json")
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // console.log(this.responseText)
            let response = JSON.parse(this.responseText);
                for(let i=0; i<10; i++){
                    let username = document.getElementById('username'+ i)
                    username.innerHTML= (response[id_tweet]['username'])
                    let atUsername = document.getElementById('atUsername'+i)
                    atUsername.innerHTML= (response[id_tweet]['at_user_name'])
                    let date = document.getElementById('date'+i)
                    date.innerHTML= (response[id_tweet]['time'])
                    let content = document.getElementById('content'+i)
                    // console.log(response[id_tweet]['content'])
                    let array_content = response[id_tweet]['content'].split(' ')
                    array_content.forEach(word => {
                        content.innerHTML= (response[id_tweet]['content'])   
                        if(word.startsWith('#')){
                            // console.log(word)
                            content.innerHTML = word.anchor("hashtag")
                        }
                    });
                    // console.log(array_content)
                    id_tweet++              
                }
    }
    }

    xhttp.send()
}