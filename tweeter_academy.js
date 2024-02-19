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

}
