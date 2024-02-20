<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detail stagiaire </h1>
    <ul>
        <li> Id : {{$stagiaire->id}}</li>
        <li> Nom : {{$stagiaire->nom}}</li>
        <li> Prenom : {{$stagiaire->preom}}</li>
        <li> Note : {{$stagiaire->note}}</li>
        <li> Created_at : {{$stagiaire->created_at}}</li>
        <li> Updated_at : {{$stagiaire->updated_at}}</li>
    </ul>
</body>
</html>
