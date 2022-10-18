@extends('home')

@section('title', 'Page de modification de la tache '.$exercice->nom)

@section('body')
    <div class="container">
        <div class="row g-2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Formulaire de modification - {{ $exercice->libelle }}</h4>
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $error }}</strong>
                            </div>
                        @endforeach

                        <form action="{{ route('exercice.update', compact('exercice')) }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="libelle" class="form-label">libelle</label>
                                        <input type="text" value="{{ old('libelle') ?? $exercice->libelle }}" class="form-control"
                                            name="nom" id="libelle" aria-describedby="helplibelleId"
                                            placeholder="libelle de la tache">
                                        @error('libelle')
                                            <small id="helplibelleId" class="form-text text-muted">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-control" name="status" id="status">
                                            <option @if (old('status') == 0 || $exercice->status == 0) selected @endif value="0">Inactif
                                            </option>
                                            <option @if (old('status') == 1 || $exercice->status == 1) selected @endif value="1">Actif
                                            </option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="reset" class="btn btn-secondary">Vider</button>
                                    <button type="submit" class="btn btn-warning">Modifier</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
