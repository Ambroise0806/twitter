document.addEventListener('DOMContentLoaded', function () {
    let array_response = []
    function load_atUsername() {
        const xhttp = new XMLHttpRequest()
        xhttp.open("GET", "at_username.json")
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                response = JSON.parse(this.responseText);
                response.forEach(element => {
                    array_response.push(element[0])
                });
            }
        }
        xhttp.send()
        // console.log(array_response)
    }
    load_atUsername();

    function autocompletion(field, values) {
        let a_exist = false
        field.addEventListener('input', (e) => {
            let val = field.value
            if(a_exist === false){
                let a = document.createElement("DIV")
                a.setAttribute("id", field.id + "autocomplete-list")
                a.setAttribute("class", "autocomplete-items")
                field.parentNode.appendChild(a)
                for (i = 0; i < values.length; i++) {
                    if (values[i].substr(0, val.length).toLowerCase() == val.toLowerCase()) {
                        let b = document.createElement("DIV")
                        b.innerHTML = "<strong>" + values[i].substr(0, val.length) + "</strong>"
                        b.innerHTML += values[i].substr(val.length)
                        b.innerHTML += "<input type='hidden' value='" + values[i] + "'>"
                        b.addEventListener("click", function (e) {
                            field.value = this.getElementsByTagName("input")[0].value
                            closeAllLists()
                        });
                        a.appendChild(b)
                    }
                }
                a_exist = true
                return a_exist;
            }else{
                document.getElementById('newPost_containerautocomplete-list').remove()
                let a = document.createElement("DIV")
                a.setAttribute("id", field.id + "autocomplete-list")
                a.setAttribute("class", "autocomplete-items")
                field.parentNode.appendChild(a)
                for (i = 0; i < values.length; i++) {
                    if (values[i].substr(0, val.length).toLowerCase() == val.toLowerCase()) {
                        let b = document.createElement("DIV")
                        b.innerHTML = "<strong>" + values[i].substr(0, val.length) + "</strong>"
                        b.innerHTML += values[i].substr(val.length)
                        b.innerHTML += "<input type='hidden' value='" + values[i] + "'>"
                        b.addEventListener("click", function (e) {
                            field.value = this.getElementsByTagName("input")[0].value
                            closeAllLists()
                        });
                        a.appendChild(b)
                    }
                }
            }
        });
        function closeAllLists() {
            let x = document.querySelectorAll(".autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                x[i].parentNode.removeChild(x[i]);
            }
        }
    }

    let newPost_container = this.getElementById('newPost_container')
    autocompletion(newPost_container, array_response);
});