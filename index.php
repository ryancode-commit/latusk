<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./public/assets/style.css">

</head>

<body class="bg-gray-100">
    <div class="bg-white p-20 w-fit mx-auto my-10">
        <div class="flex flex-col gap-2 items-center">
            <h1 class="text-5xl font-semibold text-center">Selamat Datang</h1>
            <p class="text-xl text-center">masukan email dan password anda</p>
            <div class="flex flex-col mt-6 gap-y-3">
                <div class="flex flex-col">
                    <label class="text-xl" for="email">Email Address</label>
                    <input class=" p-2 text-xl border-b border-gray-200 
                     bg-gray-100 rounded-tl-md rounded-tr-md" type="email" name="email" id="email">
                </div>
                <div class="flex flex-col">
                    <label class="text-xl" for="password">Password</label>
                    <input class="p-2 text-xl border-b border-gray-200 
                     bg-gray-100 rounded-tl-md rounded-tr-md" type="password" name="password" id="password">
                </div>
                <p class="text-base text-gray-500">gunakan password dengan kombinasi huruf angka dan simbol</p>
            </div>
            <div class="flex justify-center">
                <!-- <button class="px-20 py-4 bg-blue-600 text-white rounded-full " name="login">Login</button> -->
                <a href="public/dashboard.php" class="px-20 py-4 bg-blue-600 text-white rounded-full " name="login">Login</a>

            </div>
        </div>
    </div>
</body>

</html>