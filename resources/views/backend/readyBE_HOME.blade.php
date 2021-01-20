@extends('adminlte::page')

@section('content')
    <h1 class="text-center">Modification du Home</h1>

    <div class="container  text-center pt-2">
        <div class="container w-50">
        <form action="/ready/{{$ready->id}}" method="post">
                @method('PUT')
                @csrf
                <input type="text" class="mt-3 text-center "  name="titre" placeholder="titre">
                <br>

                <input type="text" class="mt-3 text-center "  name="bouton" placeholder="bouton">
                <br>
                <br>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="texte" placeholder="texte"></textarea>
                
                <br>

                

                <button type="submit" class="btn btn-success mt-3">Modifier</button>

            </form>
        </div>
    </div>  
@endsection
