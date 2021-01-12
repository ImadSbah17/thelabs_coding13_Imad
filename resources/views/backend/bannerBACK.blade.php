@extends('adminlte::page')

@section('content')

    <div class="container  text-center pt-2">
        <div class="container w-50">
        <h1 class="text-center">Modification du logo de la bannière et de la carousssel</h1>
        <br>

        <form action="/banner/{{$datas->id}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <input type="file"  name="updateImageLogo" id="">
                <br>
                <br>
                <input type="text" name="texte" placeholder="{{$datas->texte}}">
                <br>
                <button type="submit" class="btn btn-success mt-3">Modifier</button>
            </form>
        </div>
    </div>  

    
@endsection