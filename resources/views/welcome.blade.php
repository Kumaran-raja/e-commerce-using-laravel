<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
    <button onclick="window.location.href='{{route('login')}}'" class="bg-green-500 p-3 text-white m-5">Signin</button>

    <button onclick="window.location.href='{{route('signup')}}'" class="bg-blue-500 p-3 m-5">Signup</button>

    </body>
</html>
