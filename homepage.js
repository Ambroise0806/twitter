document.addEventListener('DOMContentLoaded', function () {

let themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
let themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

let themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

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

        } else { if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }
});

    let iconHome = document.getElementById('iconHome');

    if(localStorage.getItem('iconHomeActive') === 'true') { 
        iconHome.classList.add('fill-current','active');
    }
    iconHome.addEventListener('click', function() {
        this.classList.toggle('fill-current');
        this.classList.toggle('active');
    
        localStorage.setItem('iconHomeActive', this.classList.contains('active'));
    });

    let iconSearch = document.getElementById('iconSearch');

    if(localStorage.getItem('iconSearchStrong') === 'true') { 
        iconSearch.classList.add('strong');
    }
    iconSearch.addEventListener('click', function() {
        this.classList.toggle('strong');
    
        localStorage.setItem('iconSearchStrong', this.classList.contains('strong'));
    });

    let iconMP = document.getElementById('iconMP');

    if(localStorage.getItem('iconMPActive') === 'true') { 
        iconMP.classList.add('fill-current','active');
    }
    iconMP.addEventListener('click', function() {
        this.classList.toggle('fill-current');
        this.classList.toggle('active');
    
        localStorage.setItem('iconMPActive', this.classList.contains('active'));
    });

});