<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Create new stagiaire</h1>

    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form action="{{ route('stagiaires.update',['stagiaire'=>$stagiaire]) }}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" value="{{ old('nom',$stagiaire->nom) }}">
            @error('nom')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="prenom">Prenom</label>
            <input type="text" id="prenom" name="prenom" value="{{ old('prenom',$stagiaire->prenom) }}">
            @error('prenom')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="note">Note</label>
            <input type="number" id="note" name="note" value="{{ old('note',$stagiaire->note) }}">
            @error('note')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button>Update</button>
        </div>
    </form>
</body>

</html>
