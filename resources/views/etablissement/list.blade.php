@extends('home')

@section('title', 'Liste des taches')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>Liste des établissements</p>
                </blockquote>
                <div class="table-responsive-sm">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Parent</th>
                                <th scope="col">Code</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($etablissements as $etablissement)
                            <tr class="">
                                <td>{{ $etablissement->nom }}</td>
                                <td>{{ $etablissement->parent}}</td>
                                <td>{{ $etablissement->code}}</td>
                                <td>
                                    <a href="{{ route('etablissement.show', compact('etablissement')) }}" class="btn btn-primary">Voir</a>
                                    <a href="{{ route('etablissement.edit', compact('etablissement')) }}" class="btn btn-warning">Editer</a>
                                    <form class="d-inline" action="{{ route('etablissement.destroy', compact('etablissement')) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <a href="{{ route('etablissement.create') }}" class="btn btn-primary">Nouvel Exercice</a>
              </div>
            </div>
        </div>
    </div>
@endsection
