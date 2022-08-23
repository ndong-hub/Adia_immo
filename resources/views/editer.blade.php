
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

<div class="container">
    
<h1>Modifier un bien</h1>
      

        <form action="{{ route('bien.update', $bien->id) }}" method="post">
            @csrf
            @method('post')

            <!-- Titre -->
            <div>
                <label name="id">
            
                <input class="form-control" type="text" name="id" disabled value="{{$bien->id}}"  />
            </div>
 <br>
            <!-- Détail -->
            <div class="mt-4">
                <label name="designation" >

                <input class="form-control" type="text" name="designation" value="{{$bien->designation}}" />
            </div>
<br>

            <div class="mt-4">
                 <label name="prix" :value="__('prix')">

                 <input class="form-control" type="text" name="prix" value="{{$bien->prix}}" />
            </div>

<br>
            <div class="mt-4">
                <label name="description" >

                <textarea  class="form-control" id="detail" name="detail">{{ old('descrition', $bien->description) }}</textarea>
            </div>
           <br>
            <button type="submit" class="btn btn-primary" value="envoye">Envoyer</button>
            <a class="btn btn-danger" href="{{ route('bien.index') }}" >Annuler</a>
        </form>
</div>
    
</body>
</html>
  