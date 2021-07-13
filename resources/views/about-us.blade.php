<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/app.css" rel="stylesheet">
        <title>About Us | Hello City</title>
    </head>
    <body >
        <p>Built with &hearts; by Mame Sandeck NIANG</p>
        <p><a href="/"><button class="btn info">Retour à la page d'accueil</button></a></p>
        <footer>
            <p>&copy; Copyright {{ date('Y') }} &middot; <a href="/about-us">About Us</a></p>
        </footer>
    </body>
</html>
