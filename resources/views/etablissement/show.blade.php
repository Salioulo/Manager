
@extends('home')

@section('title', 'Détails de la etablissement: '.$etablissement->nom)

@section('body')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Nom: {{ $etablissement->nom }}</h4>
            <hr>
            <p class="card-text">Parent: {{ $etablissement->parent }}</p>
            <p class="card-text">Code: {{ $etablissement->code }}</p>
        </div>
    </div>
    <a href="{{ route('etablissement.index') }}" class="btn btn-primary">Retour liste etablissement</a>

@endsection
