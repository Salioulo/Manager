@extends('home')

@section('title', 'Liste des taches')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>Liste des taches</p>
                </blockquote>
                <div class="table-responsive-sm">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Libelle</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($exercices as $exercice)
                            <tr class="">
                                <td>{{ $exercice->libelle }}</td>
                                <td>{{ $exercice->status?'Actif':'Inactif' }}</td>
                                <td>
                                    <a href="{{ route('exercice.show', compact('exercice')) }}" class="btn btn-primary">Voir</a>
                                    <a href="{{ route('exercice.edit', compact('exercice')) }}" class="btn btn-warning">Editer</a>
                                    <form class="d-inline" action="{{ route('exercice.destroy', compact('exercice')) }}" method="post">
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
                <a href="{{ route('exercice.create') }}" class="btn btn-primary">Nouvel Exercice</a>
              </div>
            </div>
        </div>
    </div>
@endsection
