<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Laravel</title>
    <link
        rel="stylesheet"
        href="{{ asset('css/bootstrap.css') }}"
    />
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Modification de l'information</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('update.etudiant', $etudiant->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom" value="{{ $etudiant->nom }}">
                </div>

                <div class="form-group">
                    <label for="prenoms">Prenoms</label>
                    <input type="text" class="form-control" name="prenoms" value="{{ $etudiant->prenoms }}">
                </div>

                <div class="form-group">
                    <label for="date_naiss">Date</label>
                    <input type="date" class="form-control" name="date_naiss" value="{{ $etudiant->date_naiss }}">
                </div>

                <button type="submit" class="btn btn-primary mt-2">Mettre à jour</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
