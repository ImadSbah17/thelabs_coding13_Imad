@extends('adminlte::page')

@section('content')
    <h1 class="text-center">Modification du Home</h1>

    <div class="container  text-center pt-2">
        <div class="container w-50">
        <form action="/home_Labs/{{$datas->id}}" method="post">
                @method('PUT')
                @csrf
                <input type="text" class="mt-3 text-center "  name="liens1" placeholder="{{$datas->liens1}}">
                <br>

                <input type="text" class="mt-3 text-center "  name="liens2" placeholder="{{$datas->liens2}}">
                <br>

                <input type="text" class="mt-3 text-center "  name="liens3" placeholder="{{$datas->liens3}}">
                <br>


                <input type="text" class="mt-3 text-center " name="liens4" placeholder="{{$datas->liens4}}">
                <br>
                

                <button type="submit" class="btn btn-success mt-3">Modifier</button>

            </form>
        </div>
    </div>  
@endsection
