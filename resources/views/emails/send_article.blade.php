<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('emails.bootstrap_css')
</head>
<body>

    <div class="card">
        <div class="list-group">
            <div class="list-group-item">ID: {{$articles->idarticle}}</div>
            <div class="list-group-item">Titre: {{$articles->titre}}</div>
            <div class="list-group-item">Surtittre: {{$articles->surtitre}}</div>
            <div class="list-group-item">Auteur: {{$articles->auteur}}</div>
            <div class="list-group-item">Chapeau: {{$articles->chapeau}}</div>
            <div class="list-group-item">Reseau: {{$articles->reseau}}</div>
            <div class="list-group-item">Type: {{$articles->type}}</div>
            <div class="list-group-item">Rubrique: {{$articles->rubrique}}</div>
            <div class="list-group-item">Legende: {{$articles->legende}}</div>
            <div class="list-group-item">Etiquette: {{$articles->tag}}</div>
            <div class="list-group-item">Date d'entregistrement: {{$articles->created_at}}</div>
            <div class="list-group-item">Date de mise a jour: {{$articles->updated_at}}</div>
        </div>
        <div class="card-body">
            <p>{!! $articles->texte !!}</p>
        </div>
    </div>

</body>
</html>
