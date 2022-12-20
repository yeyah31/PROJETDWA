

@component('mail::message')
@php
    $envois=App\Models\Formulaire::all();
@endphp

# Nouvelle-Demande {{$connexions->name}}

Bonjour {{$connexions->name}},
Une nouvelle demande a été créée, voici les détails :


@foreach ($envois as $envoi )
*Nom:* __{{$envoi->nom}}__
__{{$envoi->prenom}} __<br>
*Description:* __{{$envoi->objet}}__
@break
@endforeach




@component('mail::button', ['url' => route('admin.home',compact('connexions','envoi'))])
Afficher la demande
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent

