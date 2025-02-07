<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
    <header class="bg-red-700 p-4">

        <nav class="flex items-center relative">

            <div class="text-yellow-400">Logo</div>

            <h1 class="text-yellow-200 text-4xl font-bold text-center flex-grow text-center">E-Commerce website</h1>

         <div class="ml-auto space-x-2">

            <button onclick= "window.location.href='{{ route('login') }}'" class="bg-yellow-400 text-black-500 px-5 py-2 m-5 font-bold rounded">Sign in</button>

            <button onclick= "window.location.href='{{ route('signup') }}'" class="bg-yellow-400 text-black-500 px-5 py-2 m-5 font-bold rounded">Sign up</button>

        </div>

        </nav>

    </header>

    </body>
</html>
