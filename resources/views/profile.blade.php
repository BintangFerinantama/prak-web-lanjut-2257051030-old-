<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    @vite('resources/css/app.css')
</head>
<body class="">
    <div class="min-h-screen flex place-items-center justify-center bg-gradient-to-r from-red-500 to-blue-500 items-center">
        <div class="flex flex-col items-center bg-gradient-to-r from-gray-50 to-gray-100 w-full max-w-md p-4 rounded-lg">
            <img class="rounded-full w-40 h-40 mt-4" src="https://uxwing.com/wp-content/themes/uxwing/download/peoples-avatars/man-user-circle-icon.png" alt="">
           
                <p class="bg-gray-400 px-4 py-1 rounded-md w-72 mt-2">Nama : <?= $nama ?></p>
                <p class="bg-gray-400 px-4 py-1 rounded-md w-72 mt-2">Kelas : <?= $kelas ?></p>
                <p class="bg-gray-400 px-4 py-1 rounded-md w-72 mt-2">NPM : <?= $npm ?></p>
            
        </div>
    </div>
</body>
</html>