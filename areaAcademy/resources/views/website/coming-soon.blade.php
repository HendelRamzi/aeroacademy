<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coming soon</title>
    <style>
        .main {
            width: 100%;
            height: 100vh;
        }
        .container {
            height: 100%;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .container h1 {
            margin-bottom: 1rem;
        }

    </style>
</head>
<body>
    <section class="main">
        <div class="container">
            <h1>La page est en cours de construction</h1>
            <p>Si vous avez besoin d'informations. <a href="{{route('website.contact')}}">Contactez-nous</a></p>
        </div>
    </section>
</body>
</html>