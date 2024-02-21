window.onload = function() {

    let editBtn = document.getElementById("open-btn")
    let editForm = document.getElementById("popupForm")

    editBtn.addEventListener("click", ()=>{
        editForm.style.display = "block";
    })
}