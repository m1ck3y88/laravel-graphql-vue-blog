<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BlogQL</title>
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
        <script src="{{mix('js/app.js')}}" defer></script>

    </head>
    <body>
        <div id="app">
            <ul id="users">

            </ul>
        </div>

    <div class="md:flex bg-white rounded-lg p-6">
        <img class="h-16 w-16 md:h-24 md:w-24 rounded-full mx-auto md:mx-0 md:mr-6">
        <div class="text-center md:text-left">
            <h2 class="text-lg">Michael Pollard</h2>
            <div class="text-purple-500">Software Engineer</div>
            <div class="text-gray-600">michaelpollard@example.com</div>
            <div class="text-gray-600">(555) 765-4321</div>
        </div>
    </div>
    </body>
</html>
