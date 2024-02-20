<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CFPM</title>
</head>
<body>
    <h1>Liste des stagiaires</h1>
    <?php
       /*   foreach ($stagiaires as $stagiaire) {
            echo '<p>'.$stagiaire->nom.'</p>';
        } */
    ?>

    <a href="{{route('stagiaires.create')}}">Create</a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Note</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stagiaires as $stagiaire)
                <tr>
                    <td>{{ $stagiaire->id }}</td>
                    <td>{{ $stagiaire->nom }}</td>
                    <td>{{ $stagiaire->prenom }}</td>
                    <td>{{ $stagiaire->note }}</td>
                    <td>
                        {{-- <a href="/stagiaires/{{ $stagiaire->id }}">Show</a> --}}
                        <a href="{{ route('stagiaires.show',[ 'stagiaire' => $stagiaire ])}}">Show</a>
                        <a href="{{ route('stagiaires.edit',[ 'stagiaire' => $stagiaire ])}}">Edit</a>
                        <form action="{{ route('stagiaires.destroy',[ 'stagiaire' => $stagiaire ]) }}" method="post" >
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $stagiaires->links() }}


</body>
</html>
