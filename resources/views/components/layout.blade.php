<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/filter.css">
        @vite("resources/css/app.css")
        <title>Laravel</title>
    </head>

    <body>
        <x-nav-bar></x-nav-bar>

        {{ $slot }}

        <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/mixitup.min.js"></script>
        <script src="js/slider.js"></script>
        <script src="js/filter.js"></script>

        <x-footer></x-footer>
    </body>

</html>
