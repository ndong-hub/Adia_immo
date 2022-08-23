<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('/bootstrap/bootstrap.css')}}">
    <title>Document</title>
</head>
<body>


 
                <table class="table table-striped" >
                <h1>Liste des biens disponibles</h1>
                <H5>Ajouter un nouveau bien ?</H5>

                    <a class="btn btn-primary" href="{{ route('bien.create') }}">Nouveau bien</a>
                    <thead class="thead-dark">
                        <tr>
                        <th class="px-2 py-2 text-xs text-gray-500">ID</th>
                        <th class="px-2 py-2 text-xs text-gray-500">Désignation</th>
                        <th class="px-2 py-2 text-xs text-gray-500">prix</th>
                        <th class="px-2 py-2 text-xs text-gray-500">description</th>
                        <th class="px-2 py-2 text-xs text-gray-500">Modifier</th>
                        <th class="px-2 py-2 text-xs text-gray-500">Supprimer</th>
                        </tr>
                    </thead>
                  <tbody>
                    @foreach($biens as $bien)
                      <tr class="whitespace-nowrap">
                        <td class="px-4 py-4 text-sm text-gray-500">{{ $bien->id }}</td>
                        <td class="px-4 py-4">{{ $bien->designation }}</td>
                        <td class="px-4 py-4">{{ $bien->prix }}</td>
                        <td class="px-4 py-4">{{($bien->description) }}</td>
                        <td class="px-4 py-4">
                           <a class="btn btn-success" href="{{ route('bien.edit', $bien->id) }}">
                              Modifier
                           </a>
                        </td>
                        <td class="px-4 py-4">

                        <form action="{{ route('bien.destroy', $bien->id) }}" method="post">
                        @csrf
                        @method('delete')
                                <button class="btn btn-danger" type="submit">Supprimer!</button>
                        </form>
                        
                        </td>

                      </tr>
                    @endforeach
                  </tbody>
                </table>
          




</body>
</html>

