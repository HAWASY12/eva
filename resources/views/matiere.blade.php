<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">


        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>

    <body  style="background:#F0F8FF";> 
    <div class="container mt-6" >
        <div class="card-header">
        <div style="background:#B0C4DE; border-radius:5px;padding:5px">
                <h1 style="background:#B0C4DE"; class="text-center mt-0"><marquee> Liste des produits</marquee></h1>
            </div>
            <br>
            <br>
            <br>
            <br>
            <a style="border:1px solid; background:#B0C4DE; border-radius:10px; padding:10px;
             font-size:20px;marging-bottom:10px; color:white" href="{{route('ajouter.matiere')}}">
             Ajouter un categorie</a>
            <br>
            <br>
            <div class="card-body">
            <div width="50%">
            <table class="table table-bordered bg-white" style="background-color:#ADD8E6";>
            <tr class="bg-secondary text-white text-center text-ittalic" > 
                    <td>NOM</td>
                   
                    
                </tr>

                
            @if ($matieres->count() > 0)
                        @foreach ($matieres as $p) 
                            <tr>
                                <td>{{ $p->nom }}</td>
                                
                               
                               
                               
                            </tr>
                        @endforeach
                  @else 
                        <span>Aucun matiere  dans la base</span>
            @endif 
                
            </table>
</div>
        
    </body>