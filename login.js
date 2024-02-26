document.addEventListener('DOMContentLoaded', function () {
    let loginModal = document.getElementById('loginModal');
    let myLoginModal = document.getElementById('myLoginModal');
    let closeLoginModal = document.getElementById('closeLoginModal');

    loginModal.addEventListener('click', function() {
        myLoginModal.classList.remove('hidden');
    });

    closeLoginModal.addEventListener('click', function() {
        myLoginModal.classList.add('hidden');
    });
});