<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Bienvenue sur Quizz'Time | Plateforme de questionnaire en ligne</title>

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

        /* Ceci est la partie du main */
        main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #ADADC9;
            height: 90vh;
        }

        .main-container {
            display: flex;
            justify-content: center;
            text-align: center;
            padding: 10rem;
        }

        .item-main {
            padding: 20px;
            color: #62796d;
        }

        .item-main-title {
            padding: 20px;
            color: #62796d;
            text-decoration: underline;
        }

        /* Ceci est la partie des liens */
        .item-link {
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-size: 20px;
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
                <h1 class="item-main-title">Félicitations, vous avez terminé votre questionnaire !</h1>
                <div class="item-link">
                <a href="{{ url('/') }}">➜ Retournez à la page d'accueil.</a>
                <a href="{{ url('/questions/create') }}">➜ Recommencer le questionnaire.</a>
                <a href="{{ url('/questions/{id}') }}">➜ Votre questionnaire.</a>
                </div>
            </div>
        </div>
    </main>

</body>
</html>