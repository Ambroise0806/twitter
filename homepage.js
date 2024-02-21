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


    if (localStorage.getItem('dark-mode') === 'true' || (!('dark-mode' in localStorage) && window.matchMedia('(prefers-colors-scheme: dark)').matches)) {
        docuement.querySelector('html').classList.add('dark');
    } else {
        docuement.querySelector('html').classList.remove('dark');
    }
}