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

    const lightSwitches = document.querySelectorAll('.light-switch');
    if (lightSwitches.length > 0) {
    lightSwitches.forEach((lightSwitch, i) => {
        if (localStorage.getItem('dark-mode') === 'true') {
        lightSwitch.checked = true;
        }

        lightSwitch.addEventListener('change', () => {
        const { checked } = lightSwitch;
        lightSwitches.forEach((el, n) => {
            if (n !== i) {
            el.checked = checked;
            }
        });
        if (lightSwitch.checked) {
            document.documentElement.classList.add('dark');
            localStorage.setItem('dark-mode', true);
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('dark-mode', false);
        }
        });
    });
} 

    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
}