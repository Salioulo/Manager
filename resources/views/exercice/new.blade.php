@extends('home')

@section('title', '')

@section('body')
    <div class="container">
        <div class="row g-2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Formulaire d'ajout d'un exercice</h4>
                        <form action="{{ route('exercice.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="libelle" class="form-label">Libelle</label>
                                        <input type="text" class="form-control" name="libelle" id="libelle"
                                            aria-describedby="helpLibelleId" placeholder="libelle de la tache">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-control" name="status" id="status">
                                            <option value=""></option>
                                            <option value="1" selected>Actif</option>
                                            <option value="0">Inactif</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="reset" class="btn btn-secondary">Vider</button>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
