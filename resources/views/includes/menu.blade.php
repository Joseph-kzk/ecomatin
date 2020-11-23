@php

    $role = Auth::user()->role;

@endphp

@if ($role == 'Journaliste')

    @include('includes.menujournaliste')

@endif

@if ($role == 'Rédacteur_en_chef')

    @include('includes.menurec')

@endif

@if ($role == 'Coordonnateur Journal en ligne')

    @include('includes.menucordojl')

@endif

@if ($role == 'Coordonnateur Journal tabloïd')

    @include('includes.menucordojt')

@endif

@if ($role == 'Coordonnateur des rédactions')

    @include('includes.menucordored')

@endif
