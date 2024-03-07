<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet"/>
    <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
    <script src="login.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <title>Twitter</title>
</head>

<body>
    <main>
        <div class="fixed inset-0 flex items-center justify-center bg-opacity-50 h-screen w-full"> 
    <div class="bg-white rounded shadow-lg w-64 p-4">
        <form class="w-64" method="">
            <h2 class="text-2xl mb-4 text-center">Login</h2>
            <label for="loginEmail" class="block mb-2">Email</label>
            <input form="loginEmail" type="email" class="w-full mb-4 p-2 border rounded">
            <label for="loginPassword" class="block mb-2">Password</label>
            <input form="loginPassword" type="password" class="w-full mb-4 p-2 border rounded">
            <button type="submit" class="w-full p-2 bg-blue-500 text-white rounded">Login</button>
        </form>
    </div>
    </div>

    </main>
</body>
</html>