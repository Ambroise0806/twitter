<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tweeter_academy.css">
    <script src="tweeter_academy.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Page de connexion</title>
</head>

<body>

    <form action="" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom"><br>

    <div class="container">
            <div class="row">
            <label for="date_naissance">Date de naissance</label>
                <span id="confirmAge">Cette information ne sera pas affichée publiquement. Confirmez votre âge, même si ce compte est pour une entreprise, un animal de compagnie ou autre chose.</span>
               
        </div>
    </div>
        <div class="container">
            <div class="row">
                <label for="mois_naissance">Mois</label>
                    <select name="mois_naissance" id="mois_naissance">
                        <option value="mois" name="mois_naissance" id="mois_naissance">Janvier</option>
                        <option value="mois" name="mois_naissance" id="mois_naissance">Février</option>
                        <option value="mois" name="mois_naissance" id="mois_naissance">Mars</option>
                        <option value="mois" name="mois_naissance" id="mois_naissance">Avril</option>
                        <option value="mois" name="mois_naissance" id="mois_naissance">Mai</option>
                        <option value="mois" name="mois_naissance" id="mois_naissance">Juin</option>
                        <option value="mois" name="mois_naissance" id="mois_naissance">Juillet</option>
                        <option value="mois" name="mois_naissance" id="mois_naissance">Août</option>
                        <option value="mois" name="mois_naissance" id="mois_naissance">Septembre</option>
                        <option value="mois" name="mois_naissance" id="mois_naissance">Octobre</option>
                        <option value="mois" name="mois_naissance" id="mois_naissance">Novembre</option>
                        <option value="mois" name="mois_naissance" id="mois_naissance">Décembre</option>
                    </select>
                </label>
                <!-- </div> -->
                <label for="jour_naissance">Jour</label>
                    <select name="jour_naissance" id="jour_naissance">
                    </select>
                </label>
                <!-- </div> -->
                <!-- <div> -->
                <label for="annee_naissance">Année</label>
                    <select name="annee_naissance" id="annee_naissance">
                    </select>

                <button class="bg-sky-500 hover:bg-sky-700">Save changes</button>

            </div>
        </div>
    </div>