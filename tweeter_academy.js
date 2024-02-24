window.onload = function () { 

    let day_list_start = 1;
    let day_list_end = 31;
    let day_options = "";

    for (let d = day_list_start; d <= day_list_end; d++) {
        day_options += "<option name'" + d + "'>" + d + "</option>"
    }

    document.getElementById("jour_naissance").innerHTML = day_options;

    let year_list_start = 2024; 
    let year_list_end = 1904;
    let year_options = "";

    for (let y = year_list_start; y >= year_list_end; y--) {
        year_options += "<option name'" + y + "'>" + y + "</option>"
    }
    document.getElementById("annee_naissance").innerHTML = year_options;

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
    
        if(localStorage.getItem('iconSearchFontBold') === 'true') { 
            iconSearch.classList.add('font-bold');
        }
        iconSearch.addEventListener('click', function() {
            this.classList.toggle('font-bold');
        
            localStorage.setItem('iconSearchFontBold', this.classList.contains('font-bold'));
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
    }

//     if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
//         document.documentElement.classList.add('dark');
//     } else {
//         document.documentElement.classList.remove('dark');
//     }
// }
// const toggleButton = document.getElementById('theme-toggle');

// // Apply the user's theme preference on load
// if (localStorage.getItem('theme') === 'dark') {
//   document.documentElement.classList.add('dark');
// } else if (localStorage.getItem('theme') === 'light') {
//   document.documentElement.classList.remove('dark');
// }

// toggleButton.addEventListener('click', function() {
//   let htmlClasses = document.documentElement.classList;
//   if(localStorage.getItem('theme') === 'dark') {
//     htmlClasses.remove('dark');
//     localStorage.removeItem('theme');
//   } else {
//     htmlClasses.add('dark');
//     localStorage.setItem('theme', 'dark');
//   }
// });

// let themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
// let themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
//     themeToggleLightIcon.classList.remove('hidden');
// } else {
//     themeToggleDarkIcon.classList.remove('hidden');
// }

// let themeToggleBtn = document.getElementById('theme-toggle');

// themeToggleBtn.addEventListener('click', function() {

//     themeToggleDarkIcon.classList.toggle('hidden');
//     themeToggleLightIcon.classList.toggle('hidden');

//     if (localStorage.getItem('color-theme')) {
//         if (localStorage.getItem('color-theme') === 'light') {
//             document.documentElement.classList.add('dark');
//             localStorage.setItem('color-theme', 'dark');
//         } else {
//             document.documentElement.classList.remove('dark');
//             localStorage.setItem('color-theme', 'light');
//         }

//         } else { if (document.documentElement.classList.contains('dark')) {
//             document.documentElement.classList.remove('dark');
//             localStorage.setItem('color-theme', 'light');
//         } else {
//             document.documentElement.classList.add('dark');
//             localStorage.setItem('color-theme', 'dark');
//         }
//     }
// });

// function switchTheme(e) {
//     if (e.target.checked) {
//         setTimeout(() => {
//             document.documentElement.setAttribute('data-theme', 'dark');
//             localStorage.setItem('class', 'dark');
//         }, 500);
//     }
//     else {        
//         setTimeout(() => {
//             document.documentElement.setAttribute('data-theme', 'light');
//             localStorage.setItem('class', 'light');
//         }, 500);
//     }    
// }

