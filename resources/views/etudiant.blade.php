<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Laravel</title>
    <link
        rel="stylesheet"
        href="{{ asset('css/bootstrap.css') }}"
    />
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            @if(Session::has('success'))
                <div class="alert alert-success mb-2">{{ Session::get('success') }}</div>
            @endif

            <form action="/etudiant" method="post">
                @csrf
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom">
                </div>

                <div class="form-group">
                    <label for="prenoms">Prenoms</label>
                    <input type="text" class="form-control" name="prenoms">
                </div>

                <div class="form-group">
                    <label for="date_naiss">Date</label>
                    <input type="date" class="form-control" name="date_naiss">
                </div>

                <button type="submit" class="btn btn-primary mt-2">Enregistrer</button>
            </form>
        </div>
        <div class="col-md-6">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenoms</th>
                    <th scope="col">Date de naissance</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($etudiants as $etudiant)
                    <tr>
                        <td>{{ $etudiant->nom }}</td>
                        <td>{{ $etudiant->prenoms }}</td>
                        <td>{{ $etudiant->date_naiss }}</td>
                        <td>
                            <a href="{{ route('edit.etudiant', $etudiant->id) }}" class="btn btn-sm btn-info">Editer</a>
                            <a href="{{ route('delete.etudiant', $etudiant->id) }}" class="btn btn-sm btn-danger btn-del-edudiant">Effacer</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="{{ asset('js/monscript.js') }}"></script>
</body>
</html>
