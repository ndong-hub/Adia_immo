

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

<form action="{{ route('bien.store') }}"  method="post">
        @csrf
        
            <label for="#">Nom du bien</label> <br>
            <input type="text" name="nom" class="form-control" placeholder="Veuillez entrer le nom">
       
        <br>
        <label for="prix">Prix</label> <br>
        <input type="text" name="prix" class="form-control" placeholder="rentrer le prix">
        <br>
        <label for="description">Description</label> <br>
        <textarea name="description" name="description" class="form-control" id="" cols="30" rows="10"></textarea>
        <br>

        <button class="btn btn-primary" type="submit" value="envoye">Envoyer</button>
    </form>

    </div>
    


    

</body>
</html>

