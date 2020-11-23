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
<!--
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
    </div> -->
        <div id="body">
            <div id="logo">
                <img src="{{ asset('assets/img/logo/logo1.png') }}" height="120" style="margin-top: 290px; margin-left:50px;" alt="EcoMatin logo">
            </div>
            <div id="infos">
                <div id="nom">Auteur: {{$articles->auteur}}</div>
                <div id="titres">
                    <div id="titre">Titre: {{$articles->titre}}</div>
                    <div id="titre">Sous-titre: {{$articles->surtitre}}</div>
                </div>
                <div id="chapres">
                    <div id="chapeau">Chapeau: {{$articles->chapeau}}</div>
                    <div id="reseau">Reseau: {{$articles->reseau}}</div>
                </div>
                <div id="typrub">
                    <div id="type">Type: {{$articles->type}}</div>
                    <div id="rubrique">Rubrique: {{$articles->rubrique}}</div>
                </div>
            </div>
            <div id="image">
                <img src="data:image/jpg;base64,{{ $articles->image }}" alt="article image" />
            </div>
            <div id="legs">
                <div id="legende">
                    <p>{{$articles->legende}}</p>
                </div>
                <div id="tags">
                    <p>{{$articles->tag}}</p>
                </div>
                <div id="text">
                    <p>{{$articles->text}}</p>
                </div>
            </div>
            <div id="dates">
                <div id="created">created at: {{$articles->created_at}}</div>
                <div id="updated">updated at: {{$articles->updated_at}}</div>
            </div>
        </div>
</body>
</html>
