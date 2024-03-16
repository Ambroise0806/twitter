document.addEventListener('DOMContentLoaded', function () {
    let editProfile = document.getElementById("editProfile");
    let closeEdit = document.getElementById("closeEdit");

    editProfile.addEventListener("click", function openEdit() {
        document.getElementById("editMyProfile").style.display = "flex";
    })

    closeEdit.addEventListener("click", function closeEdit() {
        document.getElementById("editMyProfile").style.display = "none";
    })
})