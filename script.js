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
        let tweetContent = newPost_container.value
        let tweetContentLength = newPost_container.textLength
        console.log(tweetContentLength)
        
        if(tweetContentLength == 0){
            console.log('toto1')
            errorNewPost.innerHTML= ""
            newPost_button.classList.add('disabled')
        }else if(tweetContentLength > 140){
            console.log('toto2')
            errorNewPost.innerHTML= "Votre tweet ne peut pas dépasser 140 charactères !"
            newPost_button.classList.add('disabled')
        }else if(!tweetContent.match(/^[a-z ,.'-]*$/i)){
            console.log('toto3')
            errorNewPost.innerHTML= "Votre tweet contient des charactères interdit. Charactères autorisés: Lettres de \"a\" à \"z\", la virgule, le point, l\'apostrophe, le tiret !"
            newPost_button.classList.add('disabled')
        }else{
            console.log('toto4')
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
}