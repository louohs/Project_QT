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
            color: white;
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

        /* Ceci est la partie du main contenaire */
        main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #ADADC9;
            height: 180vh;
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

        /* Ceci est la partie du formulaire */
        form {
            padding: 20px;
        }

        .questions {
            font-family: 'Nunito', sans-serif;
        }

        .title-questions {
            padding: 10px;
            color: #62796d;
            text-decoration: underline;
        }

        .results {
            padding: 10px;
            color: white;
        }

        .item-main-title {
            color: #62796d;
            font-style: oblique;
        }

        .message-information {
            display: flex;
            flex-direction: column;
            padding: 10px;
        }

        .button {
            padding: 10px;
            cursor: pointer;
        }

        .item-main-button {
            color: #62796d;
        }

        .title {
            padding: 10px;
            color: #62796d;
            border-radius: 10px;
            border: none;
        }

        .alert-danger {
            text-align: center;
        }

        .alert-err {
            list-style: none;
            color: white;
        }

        input {
            outline: none;
            padding: 10px;
            border-radius: 10px;
        }
    </style>





</head>




<body>

    <!-- Header content -->
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

    <!-- Main content -->
    <main>
        <div class="main-container">
            <div class="main-content">
                <h1 class="item-main-title">Commencez vos questions !</h1>
                <!-- Formulaire -->
                <form action="{{route('questions.store')}}" method="post" class="form">
                    @csrf
                    <!-- Question 1 -->
                    <div>
                        <div class="questions">
                            <div class="title-questions">Question n°1 :</div>
                            Quelle est la capitale de Norvège ?
                            <div class="results">
                                A - Madrid
                                B - Paris
                                C - Malaisie
                                D - Olso
                            </div>
                            <input type="text" name="resone" value="{{old('resone')}}" id="resone" placeholder="Votre réponse..." required>
                        </div>
                    </div>
                    <!-- Question 2 -->
                    <div>
                        <div class="questions">
                            <div class="title-questions">Question n°2 :</div>
                            Qui est le dieu du soleil dans l'ancienne égypte ?
                            <div class="results">
                                A - Saturne
                                B - Râ
                                C - Zeus
                                D - Nefertiti
                            </div>
                            <input type="text" name="restwo" value="{{old('restwo')}}" id="restwo" placeholder="Votre réponse..." required>
                        </div>
                    </div>
                    <!-- Question 3 -->
                    <div>
                        <div class="questions">
                            <div class="title-questions">Question n°3 :</div>
                            Quel est le jeu plus joué dans le monde ?
                            <div class="results">
                                A - Fortnite
                                B - Lost Ark
                                C - League of Legends
                                D - Uncharted
                            </div>
                            <input type="text" name="resthree" value="{{old('resthree')}}" id="resthree" placeholder="Votre réponse..." required>
                        </div>
                    </div>
                    <!-- Question 4 -->
                    <div>
                        <div class="questions">
                            <div class="title-questions">Question n°4 :</div>
                            De quoi un panda se nourrit-il ?
                            <div class="results">
                                A - Une salade
                                B - Une carotte
                                C - Des feuilles
                                D - Un bambous
                            </div>
                            <input type="text" name="resfour" value="{{old('resfour')}}" id="resfour" placeholder="Votre réponse..." required>
                        </div>
                    </div>
                    <!-- Question 5 -->
                    <div>
                        <div class="questions">
                            <div class="title-questions">Question n°5 :</div>
                            Quel est le créateur de Spider-Man ?
                            <div class="results">
                                A - Masashi Kishimoto
                                B - Stan Lee
                                C - JK Rowling
                                D - Daniel Auteuil
                            </div>
                            <input type="text" name="resfive" value="{{old('resfive')}}" id="resfive" placeholder="Votre réponse..." required>
                        </div>
                    </div>

                    <div class="container-message">
                        <div class="message-information">
                            <p>Veuillez indiquer votre adresse mail afin de pouvoir accéder à vos résultats :</p>
                            <input type="text" name="email" value="{{old('email')}}" id="email" placeholder="Votre adresse mail..." required>
                            <div class="button" class="item-main">
                                <input type="submit" value="Valider vos questions" class="title">
                            </div>
                            <!-- Les messages d'alert -->
                            @if ($errors->any())
                            <div class="alert-danger">
                                <ul class="alert-err">
                                    @foreach ($errors->all() as $error)
                                    <li class="error">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                    </div>
                </form>

            </div>
    </main>
    </div>

</body>

</html>