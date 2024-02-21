<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" /> -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet"> -->
    <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
    <script src="tweeter_academy.js"></script>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script> -->
    <title>Page de connexion</title>
</head>


<body>
    <main>

    <form action="" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom"><br>

        <div class="grid grid-cols-4 gap-4"></div>
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

                    <button type="button" id="triggerEl" aria-expanded="false" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Trigger collapse</button>

                </div>
            </div>
        </div>
        <div class="flex flex-col justify-center ml-3">
    <input type="checkbox" name="light-switch" class="light-switch sr-only" />
    <label class="relative cursor-pointer p-2" for="light-switch">
        <svg class="dark:hidden" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
            <path class="fill-slate-300" d="M7 0h2v2H7zM12.88 1.637l1.414 1.415-1.415 1.413-1.413-1.414zM14 7h2v2h-2zM12.95 14.433l-1.414-1.413 1.413-1.415 1.415 1.414zM7 14h2v2H7zM2.98 14.364l-1.413-1.415 1.414-1.414 1.414 1.415zM0 7h2v2H0zM3.05 1.706 4.463 3.12 3.05 4.535 1.636 3.12z" />
            <path class="fill-slate-400" d="M8 4C5.8 4 4 5.8 4 8s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4Z" />
        </svg>
        <svg class="hidden dark:block" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
            <path class="fill-slate-400" d="M6.2 1C3.2 1.8 1 4.6 1 7.9 1 11.8 4.2 15 8.1 15c3.3 0 6-2.2 6.9-5.2C9.7 11.2 4.8 6.3 6.2 1Z" />
            <path class="fill-slate-500" d="M12.5 5a.625.625 0 0 1-.625-.625 1.252 1.252 0 0 0-1.25-1.25.625.625 0 1 1 0-1.25 1.252 1.252 0 0 0 1.25-1.25.625.625 0 1 1 1.25 0c.001.69.56 1.249 1.25 1.25a.625.625 0 1 1 0 1.25c-.69.001-1.249.56-1.25 1.25A.625.625 0 0 1 12.5 5Z" />
        </svg>
        <span class="sr-only">Switch to light / dark version</span>
    </label>
</div>
</form>
</body>

</html>