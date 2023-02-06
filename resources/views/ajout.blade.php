<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

        <link rel="stylesheet" href="">
    </head>
    <body  style="background:#F0F8FF";>
    <div class="container">
        <div class="card-header">
            <div style="background:#B0C4DE; border-radius:10px;padding:5px">
                <h1 style="font-size:50px; color:white" class="text-center"> <marquee>Formulaire Ajout Etudiant</marquee> </h1>
            </div>
            <br>
            <fieldset>
            <form method="POST" action="{{route('store.etudiant')}}" class="text-center">
            <div style="background:#B0C4DE;">
                @csrf
                <label for="">NOM</label>
                <br>
                <input type="text" required name="nom" placeholder="Nom">
                <br>
                <br>
                <label for="">PRENOM</label>
                <br>
                <input type="text" required name="prenom" placeholder="prenom">
                <br>
                <br>
                <label for="">Matieres</label>
                <br>
                
                <select name="matieres" id="">
                    @foreach($matieres as $mat)

                        <option value="{{$mat->id}}">{{$mat->nom}}</option>
                    @endforeach
                </select>
                    <br>
                    <br>

                    <label for="">Semestres</label>
                <br>
                <select name="semestres" id="">
                    @foreach($semestres as $sem)

                        <option value="{{$sem->id}}">{{$sem->nom}}</option>
                    @endforeach
                </select>
                <br>
                <br>
                <label for="">NOTE1</label>
                <br>
                <input type="text" required name="note1" placeholder="note1">
                <br>
                <br>
                <label for="">EXAMEN</label>
                <br>
                <input type="text" required name="examen" placeholder="examen">
                <br>
                <br>
                <input type="submit" name="" value="Enregistrer">
             </div>
             </form>
      </div>
</div>

           
            </fieldset>
        
        
       
    </body>
</html>