window.onload = function () {
    let button_pp = document.getElementById('button_pp')
    let nav_section = document.getElementById('nav_section')
    let hide = true

    button_pp.addEventListener('click', ()=>{
        if(hide){
            nav_section.style.display="block"
            hide = false
        }else{
            nav_section.style.display="none"
            hide = true
        }
    })

    let newPost_container = document.getElementById('newPost_container')
    let newPost_button = document.getElementById('newPost_button')
    
    
    function CharTweet(){
        let errorNewPost = document.getElementById('error_newPost')    
        let tweetContentLength = newPost_container.textLength
        
        if(tweetContentLength == 0){
            errorNewPost.innerHTML= ""
            newPost_button.classList.add('disabled')
        }else if(tweetContentLength > 140){
            errorNewPost.innerHTML= "Votre tweet ne peut pas dépasser 140 charactères !"
            newPost_button.classList.add('disabled')
        }else{
            errorNewPost.innerHTML= ""
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
    
//     let loading_gif = document.getElementById('loading_gif')

//     document.addEventListener('scrolldown', (e)=>{
//         console.log(e)
//             setTimeout(()=>{
//                 loading_gif.classList.add('visible') 
//             }, 30000) 
//         }
// )
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
    let button_like_container = document.getElementById('button_like_container')
    let button_like = document.getElementById('button_like')
    let liked = false
    button_like_container.addEventListener('click', ()=>{
        if(liked === false){
            button_like.setAttribute('src', "assets/icon_like.png")
            liked = true
        }else{
            button_like.setAttribute('src', "assets/icon_noLike.png")
            liked = false
        }
    })
}