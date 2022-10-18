
@extends('home')

@section('title', 'Détails de la tache: '.$exercice->libelle)

@section('body')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $exercice->libelle }}</h4>
            <hr>
            <p class="card-text">{{ $exercice->libelle }}</p>
            <p class="card-text">Status: {{ $exercice->status }}</p>
        </div>
    </div>
@endsection
