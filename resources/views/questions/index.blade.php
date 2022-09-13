<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenue sur Quizz'Time | Plateforme de questionnaire en ligne</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <style>
        * {
            margin: 0;
            padding: 0;
        }

        html,
        body {
            font-family: 'Nunito', sans-serif;
        }

        /* Ceci est la partie de nav-bar de l'index */
        .nav-container {
            padding: 3rem;
            border-bottom: 9px solid #ccc;
            background-color: #62796d;
        }

        .item-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        a {
            color: white;
            text-transform: uppercase;
            text-decoration: none;
        }

        .title {
            font-family: 'Nunito', sans-serif;
            font-size: 20px;
            text-transform: none;
        }

        .title-nav {
            color: white;
            font-size: 20px;
        }

        /* Ceci est la partie du main de l'index */
        main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #ADADC9;
            height: 100vh;
        }

        .main-container {
            display: flex;
            justify-content: center;
            text-align: center;
            padding: 15rem;
        }

        .item-main {
            padding: 20px;
            color: #62796d;
        }

        .item-main-title {
            color: #62796d;
            font-size: 40px;
        }

        /* Ceci est la partie du design du button. */
        .button {
            padding: 10px;
        }

        button {
            padding: 10px;
            border: none;
            border-radius: 10px;
        }

        .item-main-button {
            color: #62796d;
        }

        .title {
            color: #62796d;
        }

    </style>

</head>

<body>

    <div class="nav-container">
        @if (Route::has('login'))
        <div class="item-nav">
            <!-- Title -->
            <a href="{{ url('/') }}" class="title-nav">Quizz'Time</a>
            <!-- Lien menant vers la home -->
            <a href="{{ url('/') }}">Accueil</a>
            @auth
            <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div>


    <main>
        <div class="main-container">
            <div class="main-content">
                <h1 class="item-main-title">Bienvenue sur Quizz'Time</h1>
                <p class="item-main">Une plateforme dédiée au questionnaire en ligne !</p>
                <div class="button" class="item-main">
                    <button><a href="{{ url('/questions/create') }}" class="title">Commencer le questionnaire</a></button>
                </div>
            </div>
        </div>
    </main>


</body>

</html>