<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    @vite('resources/css/app.css')
</head>
<body class="">
    <div class="min-h-screen flex place-items-center justify-center bg-yellow-200 items-center">
        <div class="flex flex-col items-center bg-gradient-to-r from-red-500 to-blue-500 w-full max-w-md p-4 rounded-lg">
            <img class="rounded-full w-40 h-40 mt-4" src="https://placehold.co/300x300" alt="">
           
                <p>Nama : <?= $nama ?></p>
                <p>Kelas : <?= $kelas ?></p>
                <p>NPM : <?= $npm ?></p>
            
        </div>
    </div>
</body>
</html>