$(document).ready(function () {
    let nom = $("#nom")
    let error_nom = $(".error_nom")
    let mail = $("#email")
    let error_email = $(".error_email")
    let jour = $("#jour")
    let mois = $("#mois")
    let annee = $("#annee")
    // error_email.hide()
    // error_nom.hide()

    function name() {
        let lastnameValue = nom.val();
        if (lastnameValue.length == 0) {
            nom.removeClass("blue");
            nom.addClass("error_css_input");
            error_nom.show();
            error_nom.html("Quel est votre nom ?");
            return false;
        } else if (lastnameValue.length > 50) {
            nom.val(lastnameValue.substring(0, 50));
            nom.removeClass("blue");
            nom.addClass("error_css_input");
            error_nom.show();nom
            error_nom.html("Votre nom ne peut pas contenir plus de 50 caractères !");
            return false;
        } else {
            nom.removeClass("error_css_input");
            nom.addClass("blue");
            error_nom.hide();
            return true;
        }         
    }

    function focus(event) {
        event.data.nom.addClass("blue")
    }
        
    function blur(element){
        element.data.nom.removeClass("blue")
        }

        nom.on('focus',{nom: nom}, focus);
        nom.on('blur',{nom: nom}, blur) 
        nom.on('input', name)
    
    function email() {
        let emailValue = mail.val();
        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailValue)) {
            mail.removeClass("blue");
            mail.addClass("error_css_input");
            error_email.show();
            error_email.html("Veuillez saisir une adresse email valide.");
            return false;
        } else {
            mail.removeClass("error_css_input");
            mail.addClass("blue");
            error_email.hide();
            return true;
        }
    }

    mail.on('input',email)
    mail.on('focus',{nom: mail}, focus);
    mail.on('blur',{nom: mail}, blur)
    jour.on('focus',{nom: jour}, focus);
    jour.on('blur',{nom: jour}, blur)
    mois.on('focus',{nom: mois}, focus);
    mois.on('blur',{nom: mois}, blur)
    annee.on('focus',{nom: annee}, focus);
    annee.on('blur',{nom: annee}, blur)
})
    
